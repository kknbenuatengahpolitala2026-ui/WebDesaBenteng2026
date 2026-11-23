<?php
get_header();

// Ambil seluruh data Anggaran Desa dari database, diurutkan dari tahun terbaru
$anggaran_query = new WP_Query( array(
    'post_type'      => 'anggaran_desa',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => '_dbt_tahun_anggaran',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
) );

$daftar_anggaran = array();
if ( $anggaran_query->have_posts() ) {
    while ( $anggaran_query->have_posts() ) {
        $anggaran_query->the_post();
        $pid = get_the_ID();
        $daftar_anggaran[] = array(
            'id'         => $pid,
            'judul'      => get_the_title(),
            'tahun'      => get_post_meta( $pid, '_dbt_tahun_anggaran', true ) ?: date( 'Y' ),
            'status'     => get_post_meta( $pid, '_dbt_status_anggaran', true ) ?: 'APBDes Awal',
            'foto'       => get_post_meta( $pid, '_dbt_foto_infografis', true ),
            'pdf'        => get_post_meta( $pid, '_dbt_file_pdf', true ),
            'keterangan' => get_post_meta( $pid, '_dbt_keterangan_anggaran', true ),
            'pendapatan' => get_post_meta( $pid, '_dbt_total_pendapatan', true ),
            'belanja'    => get_post_meta( $pid, '_dbt_total_belanja', true ),
            'pembiayaan' => get_post_meta( $pid, '_dbt_total_pembiayaan', true ),
            'tanggal'    => get_the_date( 'd F Y' ),
        );
    }
    wp_reset_postdata();
}
?>

    <style>
        .apbdes-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1),
                        transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .apbdes-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .btn-apbdes {
            transition: background-color 0.25s ease,
                        color 0.25s ease,
                        transform 0.2s cubic-bezier(0.22, 1, 0.36, 1),
                        box-shadow 0.25s ease,
                        border-color 0.25s ease;
        }
        .btn-apbdes:hover {
            transform: translateY(-2px);
        }
        .btn-apbdes:active {
            transform: translateY(0) scale(0.98);
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Lightbox Zoom Foto Infografis */
        #apbdesLightbox {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease;
        }
        #apbdesLightbox.open {
            opacity: 1;
            pointer-events: auto;
        }
        #apbdesLightboxImg {
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            cursor: zoom-in;
        }
        #apbdesLightboxImg.zoomed {
            transform: scale(1.65);
            cursor: zoom-out;
        }
    </style>

    <!-- Header Halaman Transparansi Anggaran -->
    <header class="bg-[#1a0d3d] text-white py-16 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-5 md:px-8 max-w-6xl relative z-10">
            <span class="inline-block bg-white/10 border border-white/15 text-amber-400 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Akuntabilitas &amp; Keterbukaan Publik</span>
            <h1 class="text-3xl md:text-5xl font-extrabold uppercase tracking-tight mb-2">Transparansi Anggaran Desa</h1>
            <p class="text-slate-300 text-sm md:text-base max-w-2xl">Publikasi resmi infografis dan dokumen Anggaran Pendapatan dan Belanja Desa (APBDes) Benua Tengah per tahun anggaran</p>

            <?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
                <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=anggaran_desa' ) ); ?>"
                   class="mt-5 inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-[#1a0d3d] text-xs font-extrabold px-5 py-3 rounded-xl shadow-lg transition-all">
                    Kelola Anggaran Desa
                </a>
            <?php endif; ?>
        </div>
    </header>

    <main class="py-12 md:py-16 bg-slate-50">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl space-y-8">

            <?php if ( ! empty( $daftar_anggaran ) ) : ?>

                <!-- BAR PILIHAN TAHUN ANGGARAN (STICKY) -->
                <div class="apbdes-reveal bg-white/95 backdrop-blur-md rounded-3xl border border-slate-200/80 shadow-md p-4 sm:p-5 sticky top-3 z-30">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block">Arsip Tahunan APBDes</span>
                            <p class="text-xs sm:text-sm font-bold text-slate-800">Pilih Tahun Anggaran untuk Melihat Dokumen</p>
                        </div>

                        <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-1 sm:pb-0" role="tablist">
                            <?php foreach ( $daftar_anggaran as $idx => $item ) :
                                $is_first = ( 0 === $idx );
                            ?>
                                <button type="button"
                                        data-target="panel-anggaran-<?php echo esc_attr( $item['id'] ); ?>"
                                        class="year-tab-btn btn-apbdes shrink-0 text-xs sm:text-sm font-extrabold px-4 py-2.5 rounded-2xl border <?php echo $is_first ? 'active bg-[#1a0d3d] text-white border-[#1a0d3d] shadow-sm' : 'bg-slate-50 hover:bg-purple-50 text-slate-700 hover:text-[#1a0d3d] border-slate-200/80'; ?>">
                                    Tahun <?php echo esc_html( $item['tahun'] ); ?>
                                    <?php if ( count( $daftar_anggaran ) > 1 && 'APBDes Perubahan' === $item['status'] ) : ?>
                                        <span class="ml-1 text-[10px] opacity-80">(Perubahan)</span>
                                    <?php endif; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- KONTEN PER TAHUN ANGGARAN -->
                <?php foreach ( $daftar_anggaran as $idx => $item ) :
                    $is_first    = ( 0 === $idx );
                    $has_summary = ( ! empty( $item['pendapatan'] ) || ! empty( $item['belanja'] ) || ! empty( $item['pembiayaan'] ) );
                ?>
                    <section id="panel-anggaran-<?php echo esc_attr( $item['id'] ); ?>"
                             class="anggaran-year-panel space-y-8 <?php echo $is_first ? '' : 'hidden'; ?>">

                        <!-- Kartu Identitas Tahun & Keterangan -->
                        <div class="apbdes-reveal bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 sm:p-8 md:p-10">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-100 pb-6">
                                <div class="space-y-2">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="bg-[#1a0d3d] text-amber-400 text-xs font-extrabold uppercase tracking-wider px-3.5 py-1.5 rounded-xl">
                                            Tahun Anggaran <?php echo esc_html( $item['tahun'] ); ?>
                                        </span>
                                        <span class="bg-amber-50 text-amber-800 border border-amber-200/80 text-xs font-bold px-3 py-1.5 rounded-xl">
                                            <?php echo esc_html( $item['status'] ); ?>
                                        </span>
                                    </div>
                                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">
                                        <?php echo esc_html( $item['judul'] ); ?>
                                    </h2>
                                </div>

                                <div class="text-left md:text-right shrink-0">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Dipublikasikan</span>
                                    <span class="text-xs sm:text-sm font-semibold text-slate-700"><?php echo esc_html( $item['tanggal'] ); ?></span>
                                </div>
                            </div>

                            <?php if ( ! empty( $item['keterangan'] ) ) : ?>
                                <p class="mt-5 text-slate-600 text-sm md:text-base leading-relaxed">
                                    <?php echo esc_html( $item['keterangan'] ); ?>
                                </p>
                            <?php endif; ?>

                            <!-- Kartu Ringkasan Angka Utama (Muncul otomatis jika diisi oleh Admin) -->
                            <?php if ( $has_summary ) : ?>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-7 pt-6 border-t border-slate-100">
                                    <?php if ( ! empty( $item['pendapatan'] ) ) : ?>
                                        <div class="bg-slate-50 border border-slate-200/70 border-l-4 border-l-emerald-600 rounded-2xl p-4 sm:p-5">
                                            <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-500 block mb-1">Total Pendapatan Desa</span>
                                            <p class="text-lg sm:text-xl font-extrabold text-slate-900"><?php echo esc_html( $item['pendapatan'] ); ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['belanja'] ) ) : ?>
                                        <div class="bg-slate-50 border border-slate-200/70 border-l-4 border-l-[#1a0d3d] rounded-2xl p-4 sm:p-5">
                                            <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-500 block mb-1">Total Belanja Desa</span>
                                            <p class="text-lg sm:text-xl font-extrabold text-slate-900"><?php echo esc_html( $item['belanja'] ); ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['pembiayaan'] ) ) : ?>
                                        <div class="bg-slate-50 border border-slate-200/70 border-l-4 border-l-amber-500 rounded-2xl p-4 sm:p-5">
                                            <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-500 block mb-1">Pembiayaan / SiLPA</span>
                                            <p class="text-lg sm:text-xl font-extrabold text-slate-900"><?php echo esc_html( $item['pembiayaan'] ); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- BAGIAN 1: FOTO INFOGRAFIS / BALIHO APBDes -->
                        <?php if ( ! empty( $item['foto'] ) ) : ?>
                            <div class="apbdes-reveal bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 sm:p-8 md:p-10">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5 mb-6">
                                    <div>
                                        <span class="inline-block bg-purple-100 text-[#1a0d3d] text-[11px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full mb-1.5">Infografis Visual</span>
                                        <h3 class="text-xl md:text-2xl font-extrabold text-slate-900">Ringkasan Grafis APBDes <?php echo esc_html( $item['tahun'] ); ?></h3>
                                    </div>
                                    <button type="button"
                                            data-zoom-src="<?php echo esc_url( $item['foto'] ); ?>"
                                            data-zoom-title="Infografis APBDes Tahun <?php echo esc_attr( $item['tahun'] ); ?> — <?php echo esc_attr( $item['status'] ); ?>"
                                            class="open-zoom-btn btn-apbdes self-start sm:self-auto inline-flex items-center gap-2 bg-[#1a0d3d] hover:bg-[#2a1563] text-white text-xs font-bold px-4 py-2.5 rounded-2xl shadow-sm">
                                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35zM10.5 7.5v6m-3-3h6"></path>
                                        </svg>
                                        <span>Perbesar Foto (Zoom)</span>
                                    </button>
                                </div>

                                <div class="open-zoom-btn group relative bg-slate-100 rounded-2xl overflow-hidden border border-slate-200/80 cursor-zoom-in"
                                     data-zoom-src="<?php echo esc_url( $item['foto'] ); ?>"
                                     data-zoom-title="Infografis APBDes Tahun <?php echo esc_attr( $item['tahun'] ); ?> — <?php echo esc_attr( $item['status'] ); ?>">
                                    <img src="<?php echo esc_url( $item['foto'] ); ?>"
                                         alt="Infografis APBDes Desa Benua Tengah Tahun <?php echo esc_attr( $item['tahun'] ); ?>"
                                         class="w-full h-auto max-h-[820px] object-contain mx-auto transition-transform duration-500 group-hover:scale-[1.01]">
                                </div>
                                <p class="text-xs text-slate-400 mt-3 text-center">Klik pada gambar di atas untuk memperbesar tampilan rincian angka anggaran.</p>
                            </div>
                        <?php endif; ?>

                        <!-- BAGIAN 2: DOKUMEN RESMI PDF (READER + DOWNLOAD) -->
                        <?php if ( ! empty( $item['pdf'] ) ) : ?>
                            <div class="apbdes-reveal bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 sm:p-8 md:p-10">
                                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 border-b border-slate-100 pb-5 mb-6">
                                    <div>
                                        <span class="inline-block bg-amber-100 text-amber-800 text-[11px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full mb-1.5">Dokumen Resmi PDF</span>
                                        <h3 class="text-xl md:text-2xl font-extrabold text-slate-900">Berkas Peraturan &amp; Rincian Anggaran <?php echo esc_html( $item['tahun'] ); ?></h3>
                                        <p class="text-xs text-slate-500 mt-1 font-mono"><?php echo esc_html( basename( $item['pdf'] ) ); ?></p>
                                    </div>

                                    <div class="flex flex-wrap items-center gap-2.5 shrink-0">
                                        <a href="<?php echo esc_url( $item['pdf'] ); ?>"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="btn-apbdes inline-flex items-center gap-2 bg-slate-100 hover:bg-slate-200/80 text-slate-800 text-xs font-bold px-4 py-2.5 rounded-2xl">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7v7m0-7L10 14M5 5h5M5 5v14h14v-5"></path>
                                            </svg>
                                            <span>Buka Tab Baru</span>
                                        </a>

                                        <a href="<?php echo esc_url( $item['pdf'] ); ?>"
                                           download
                                           class="btn-apbdes inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-slate-950 text-xs font-extrabold px-5 py-2.5 rounded-2xl shadow-sm">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0l-4-4m4 4l4-4M4 17v2a2 2 0 002 2h12a2 2 0 002-2v-2"></path>
                                            </svg>
                                            <span>Unduh Dokumen PDF</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Pratinjau PDF Langsung di Halaman -->
                                <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-100">
                                    <iframe src="<?php echo esc_url( $item['pdf'] ); ?>#toolbar=1&navpanes=0"
                                            title="Dokumen PDF APBDes <?php echo esc_attr( $item['tahun'] ); ?>"
                                            class="w-full h-[540px] sm:h-[680px] md:h-[820px] border-0">
                                    </iframe>
                                </div>
                                <p class="text-xs text-slate-500 mt-3 text-center">
                                    Jika pratinjau dokumen tidak tampil pada peramban seluler Anda, silakan gunakan tombol <strong>Unduh Dokumen PDF</strong> di atas.
                                </p>
                            </div>
                        <?php endif; ?>

                    </section>
                <?php endforeach; ?>

            <?php else : ?>

                <!-- TAMPILAN JIKA BELUM ADA DATA DIUNGGAH -->
                <div class="apbdes-reveal bg-white rounded-3xl border border-slate-100 shadow-lg p-10 md:p-16 text-center max-w-2xl mx-auto">
                    <div class="w-16 h-16 rounded-2xl bg-purple-100 text-[#1a0d3d] flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2">Dokumen Anggaran Belum Dipublikasikan</h2>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Arsip infografis dan dokumen PDF Anggaran Pendapatan dan Belanja Desa (APBDes) Benua Tengah akan ditampilkan di halaman ini setelah diunggah melalui panel administrasi desa.
                    </p>
                </div>

            <?php endif; ?>

        </div>
    </main>

    <!-- MODAL LIGHTBOX ZOOM INFOGRAFIS APBDes -->
    <div id="apbdesLightbox" class="fixed inset-0 z-50 bg-slate-950/85 backdrop-blur-sm flex flex-col p-4">
        <div class="flex items-center justify-between gap-4 max-w-6xl w-full mx-auto pb-3 text-white">
            <p id="apbdesLightboxTitle" class="text-xs sm:text-sm font-bold text-amber-300 truncate"></p>
            <div class="flex items-center gap-2 shrink-0">
                <button type="button" id="toggleZoomScaleBtn" class="btn-apbdes bg-white/15 hover:bg-white/25 text-white text-xs font-bold px-3.5 py-2 rounded-xl">
                    Perbesar / Normal
                </button>
                <button type="button" id="closeApbdesLightbox" class="btn-apbdes w-9 h-9 rounded-xl bg-white/15 hover:bg-red-500 text-white font-bold flex items-center justify-center">
                    ✕
                </button>
            </div>
        </div>
        <div id="apbdesLightboxStage" class="flex-1 overflow-auto flex items-center justify-center rounded-2xl">
            <img id="apbdesLightboxImg" src="" alt="Zoom Infografis APBDes" class="max-w-full max-h-[82vh] rounded-xl shadow-2xl">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Scroll Reveal Animation
            const revealEls = document.querySelectorAll('.apbdes-reveal');
            const observer = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.06 });
            revealEls.forEach(function (el) { observer.observe(el); });

            // 2. Tab Perpindahan Tahun Anggaran
            const yearBtns = document.querySelectorAll('.year-tab-btn');
            const yearPanels = document.querySelectorAll('.anggaran-year-panel');

            yearBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const targetId = btn.getAttribute('data-target');

                    yearBtns.forEach(function (b) {
                        b.classList.remove('active', 'bg-[#1a0d3d]', 'text-white', 'border-[#1a0d3d]', 'shadow-sm');
                        b.classList.add('bg-slate-50', 'text-slate-700', 'border-slate-200/80');
                    });
                    btn.classList.add('active', 'bg-[#1a0d3d]', 'text-white', 'border-[#1a0d3d]', 'shadow-sm');
                    btn.classList.remove('bg-slate-50', 'text-slate-700', 'border-slate-200/80');

                    yearPanels.forEach(function (panel) {
                        if (panel.id === targetId) {
                            panel.classList.remove('hidden');
                            panel.querySelectorAll('.apbdes-reveal').forEach(function (el) {
                                el.classList.add('is-visible');
                            });
                        } else {
                            panel.classList.add('hidden');
                        }
                    });
                });
            });

            // 3. Lightbox & Zoom Infografis APBDes
            const lightbox = document.getElementById('apbdesLightbox');
            const lightboxImg = document.getElementById('apbdesLightboxImg');
            const lightboxTitle = document.getElementById('apbdesLightboxTitle');
            const zoomBtns = document.querySelectorAll('.open-zoom-btn');

            zoomBtns.forEach(function (el) {
                el.addEventListener('click', function () {
                    const src = el.getAttribute('data-zoom-src');
                    const title = el.getAttribute('data-zoom-title');
                    if (!src) return;

                    lightboxImg.src = src;
                    lightboxImg.classList.remove('zoomed');
                    lightboxTitle.textContent = title || 'Infografis APBDes';
                    lightbox.classList.add('open');
                });
            });

            lightboxImg.addEventListener('click', function () {
                lightboxImg.classList.toggle('zoomed');
            });

            document.getElementById('toggleZoomScaleBtn').addEventListener('click', function () {
                lightboxImg.classList.toggle('zoomed');
            });

            function closeLightbox() {
                lightbox.classList.remove('open');
                lightboxImg.classList.remove('zoomed');
            }

            document.getElementById('closeApbdesLightbox').addEventListener('click', closeLightbox);
            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox || e.target.id === 'apbdesLightboxStage') {
                    closeLightbox();
                }
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && lightbox.classList.contains('open')) {
                    closeLightbox();
                }
            });
        });
    </script>

<?php get_footer(); ?>