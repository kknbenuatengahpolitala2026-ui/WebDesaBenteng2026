<?php
get_header();

$linktree_desa  = 'https://linktr.ee/pemdesbenuatengah';
$total_penduduk = '3.767';
$penduduk_laki  = '1.911';
$penduduk_pr    = '1.201';
$jumlah_dusun   = '6 Dusun';
$jumlah_rt      = '20 RT';
$luas_wilayah   = '11,88 km²';
?>

    <!-- Hero Utama: Latar Ungu Gelap #1a0d3d, Rata Kiri Tanpa Logo Besar -->
    <header class="bg-[#1a0d3d] text-white relative overflow-hidden pt-14 pb-24 md:pt-20 md:pb-28">
        <!-- Efek Cahaya Latar -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-5 md:px-8 max-w-6xl relative z-10">
            <div class="max-w-3xl text-left">
                <div class="hero-anim-1 inline-flex items-center gap-2 bg-white/10 border border-white/15 px-4 py-1.5 rounded-full text-amber-400 text-xs font-bold uppercase tracking-widest mb-5">
                    <span>Selamat Datang di Website Resmi</span>
                </div>

                <h1 class="hero-anim-2 text-4xl sm:text-5xl md:text-6xl font-extrabold text-white uppercase tracking-tight leading-[1.08]">
                    Benua Tengah
                </h1>

                <p class="hero-anim-2 mt-4 text-base md:text-lg text-slate-200 font-medium leading-relaxed max-w-xl">
                    Kecamatan Takisung, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan
                </p>

                <div class="hero-anim-3 mt-8 flex flex-col sm:flex-row items-stretch sm:items-center justify-start gap-3.5">
                    <a href="#sambutan-desa" class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-6 py-3.5 rounded-2xl text-sm shadow-lg shadow-amber-500/25 hover:-translate-y-0.5 transition-all">
                        <span>Jelajahi Profil Desa</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url( $linktree_desa ); ?>" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/15 text-white border border-white/20 font-semibold px-6 py-3.5 rounded-2xl text-sm hover:-translate-y-0.5 transition-all">
                        <span>Portal Layanan Surat</span>
                        <span class="transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Kartu Putih Melayang Layanan Surat -->
    <section class="container mx-auto px-5 md:px-8 max-w-6xl -mt-12 relative z-20">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-900/5 border border-slate-100 p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-5">
            <div class="flex items-start sm:items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-50 text-[#1a0d3d] flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-amber-600 block mb-0.5">Pelayanan Administrasi</span>
                    <h2 class="text-base md:text-lg font-extrabold text-slate-900">Pengurusan Surat Keterangan &amp; Administrasi Kependudukan</h2>
                    <p class="text-xs md:text-sm text-slate-500 mt-0.5">Ajukan permohonan surat domisili, SKTM, dan layanan administrasi warga secara daring.</p>
                </div>
            </div>
            <a href="<?php echo esc_url( $linktree_desa ); ?>" target="_blank" rel="noopener noreferrer" class="w-full md:w-auto text-center bg-[#1a0d3d] hover:bg-[#261456] text-white text-xs md:text-sm font-bold px-6 py-3.5 rounded-2xl shadow-md shadow-[#1a0d3d]/20 shrink-0 hover:-translate-y-0.5 transition-all">
                Akses Layanan Surat &rarr;
            </a>
        </div>
    </section>

    <!-- Sambutan Resmi & Banner Besar Aparatur Pemerintah Desa -->
    <section id="sambutan-desa" class="py-16 md:py-24 scroll-mt-16">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl space-y-8 md:space-y-10">
            
            <!-- Foto Jajaran Perangkat Desa (Ukuran Besar Full-Width) -->
            <figure class="reveal-up group bg-white p-2.5 sm:p-4 rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/60">
                <div class="rounded-2xl overflow-hidden bg-slate-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jajaran.jpeg" alt="Jajaran Perangkat Desa Benua Tengah" class="w-full h-auto object-cover block transition-transform duration-700 group-hover:scale-[1.02]">
                </div>
                <figcaption class="pt-4 px-2 sm:px-3 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs sm:text-sm text-slate-500">
                    <span class="font-bold text-slate-800">Jajaran Aparatur Pemerintah Desa Benua Tengah</span>
                    <span class="self-start sm:self-auto bg-purple-50 text-[#1a0d3d] text-xs font-bold px-3 py-1 rounded-full">Kecamatan Takisung &bull; Kabupaten Tanah Laut</span>
                </figcaption>
            </figure>

            <!-- Kartu Sambutan Dual-Logo -->
            <div class="reveal-up bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/60 p-7 sm:p-10 md:p-12">
                <div class="flex items-center justify-center gap-6 pb-6 border-b border-slate-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotanahlaut.png" alt="Logo Kabupaten Tanah Laut" onerror="this.style.display='none'" class="h-16 md:h-20 w-auto object-contain">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logokemendesa.png" alt="Logo Kementerian Desa PDTT" onerror="this.style.display='none'" class="h-16 md:h-20 w-auto object-contain">
                </div>

                <div class="bg-slate-50 rounded-xl py-2.5 px-4 text-center mt-4">
                    <p class="text-xs font-bold text-slate-600">
                        Kecamatan Takisung, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan
                    </p>
                </div>

                <h2 class="text-xl md:text-3xl font-extrabold text-center text-[#1a0d3d] leading-snug mt-6 mb-5">
                    Selamat Datang di Website Resmi Pemerintah Desa Benua Tengah
                </h2>

                <div class="space-y-4 text-slate-600 leading-relaxed text-sm md:text-base text-justify max-w-4xl mx-auto">
                    <p class="indent-8">
                        Website ini merupakan media informasi dan komunikasi antara Pemerintah Desa Benua Tengah dengan masyarakat. Melalui website ini, masyarakat dapat mengenal lebih dekat profil desa, mengetahui informasi pemerintahan, perkembangan pembangunan, potensi desa, serta berbagai kegiatan kemasyarakatan.
                    </p>
                    <p class="indent-8">
                        Pemerintah Desa Benua Tengah berkomitmen untuk terus meningkatkan kualitas pelayanan publik, transparansi informasi, dan penyelenggaraan pemerintahan desa melalui pemanfaatan teknologi informasi.
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-4xl mx-auto">
                    <div>
                        <p class="font-extrabold text-slate-900 text-base md:text-lg">Ismanu</p>
                        <p class="text-slate-500 text-xs md:text-sm font-medium">Kepala Desa Benua Tengah beserta Perangkat Desa &amp; BPD</p>
                    </div>
                    <a href="<?php echo esc_url( home_url('/profil-desa') ); ?>" class="inline-flex items-center justify-center gap-2 bg-purple-50 hover:bg-[#1a0d3d] text-[#1a0d3d] hover:text-white text-xs md:text-sm font-bold px-5 py-3 rounded-2xl transition-all shrink-0">
                        <span>Sejarah &amp; Profil Lengkap</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Potensi Utama Desa (Kartu 01 - 06 termasuk Wisata Waduk & Bukit Shangyang) -->
    <section id="potensi" class="py-16 md:py-24 bg-white border-t border-slate-100">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl">
            <div class="reveal-up flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="inline-block bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Etalase Desa</span>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Potensi Utama Desa Benua Tengah</h2>
                </div>
                <a href="<?php echo esc_url( home_url('/potensi') ); ?>" class="text-sm font-bold text-[#1a0d3d] hover:underline">
                    Lihat Rincian Potensi &rarr;
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="<?php echo esc_url( home_url('/potensi#wisata') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-amber-500 text-slate-950 text-xs font-extrabold flex items-center justify-center">01</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Wisata Alam</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">Waduk &amp; Bukit Shangyang</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Destinasi wisata alam perairan <strong>Waduk Desa</strong> serta panorama hijau perbukitan <strong>Bukit Shangyang</strong>.</p>
                </a>

                <a href="<?php echo esc_url( home_url('/potensi#budaya') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80" style="transition-delay: 60ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-[#1a0d3d] text-white text-xs font-extrabold flex items-center justify-center">02</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Sosial &amp; Budaya</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">Kesenian &amp; Kebudayaan</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Pelestarian seni tradisional masyarakat melalui kelompok kesenian <strong>L-BABA (Lestari Budaya Bangsa)</strong>.</p>
                </a>

                <a href="<?php echo esc_url( home_url('/potensi#umkm') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80" style="transition-delay: 120ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-[#1a0d3d] text-white text-xs font-extrabold flex items-center justify-center">03</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Ekonomi Kreatif</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">91 Pelaku UMKM Lokal</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Pengembangan usaha mikro warga termasuk kuliner kue kering lokal unggulan Desa Benua Tengah.</p>
                </a>

                <a href="<?php echo esc_url( home_url('/potensi#pertanian') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80" style="transition-delay: 180ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-[#1a0d3d] text-white text-xs font-extrabold flex items-center justify-center">04</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Ketahanan Pangan</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">Pertanian &amp; Peternakan</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Penguatan kelompok tani, perkebunan produktif, serta pengembangan peternakan keluarga.</p>
                </a>

                <a href="<?php echo esc_url( home_url('/potensi#sdm') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80" style="transition-delay: 240ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-[#1a0d3d] text-white text-xs font-extrabold flex items-center justify-center">05</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Pemberdayaan</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">Sumber Daya Manusia</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Partisipasi aktif warga, kelompok pemuda, kelompok perempuan, dan lembaga kemasyarakatan desa.</p>
                </a>

                <a href="<?php echo esc_url( home_url('/peta-statistik') ); ?>" class="reveal-up card-hover-lift group block bg-slate-50 hover:bg-white p-7 rounded-3xl border border-slate-200/80" style="transition-delay: 300ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="w-10 h-10 rounded-2xl bg-[#1a0d3d] text-white text-xs font-extrabold flex items-center justify-center">06</span>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Kewilayahan</span>
                    </div>
                    <h3 class="text-lg font-extrabold mb-2 text-slate-900 group-hover:text-[#1a0d3d] transition-colors">Peta &amp; Batas Administratif</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Kondisi geografis seluas 11,88 km², batas wilayah desa, serta pembagian administratif 6 Dusun dan 20 RT.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Data & Statistik Desa (Kartu Rounded-3xl + Animated Counter) -->
    <section class="py-16 md:py-24 bg-slate-50 border-t border-slate-200/70">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl">
            <div class="reveal-up flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="inline-block bg-purple-100 text-[#1a0d3d] text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Data &amp; Wilayah</span>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Statistik Desa Benua Tengah</h2>
                </div>
                <a href="<?php echo esc_url( home_url('/peta-statistik') ); ?>" class="text-sm font-bold text-[#1a0d3d] hover:underline">
                    Lihat Peta Wilayah &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Total Penduduk</span>
                    <span class="text-3xl md:text-4xl font-extrabold text-[#1a0d3d]"><span class="bt-counter" data-target="3767"><?php echo esc_html( $total_penduduk ); ?></span> <span class="text-base font-semibold text-slate-500">Jiwa</span></span>
                </div>

                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50" style="transition-delay: 60ms;">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Penduduk Laki-Laki</span>
                    <span class="text-3xl md:text-4xl font-extrabold text-slate-900"><span class="bt-counter" data-target="1911"><?php echo esc_html( $penduduk_laki ); ?></span> <span class="text-base font-semibold text-slate-500">Jiwa</span></span>
                </div>

                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50" style="transition-delay: 120ms;">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Penduduk Perempuan</span>
                    <span class="text-3xl md:text-4xl font-extrabold text-slate-900"><span class="bt-counter" data-target="1201"><?php echo esc_html( $penduduk_pr ); ?></span> <span class="text-base font-semibold text-slate-500">Jiwa</span></span>
                </div>

                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50" style="transition-delay: 180ms;">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Pembagian Dusun</span>
                    <span class="text-3xl font-extrabold text-slate-900"><?php echo esc_html( $jumlah_dusun ); ?></span>
                </div>

                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50" style="transition-delay: 240ms;">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Rukun Tetangga</span>
                    <span class="text-3xl font-extrabold text-slate-900"><?php echo esc_html( $jumlah_rt ); ?></span>
                </div>

                <div class="reveal-up card-hover-lift bg-white p-7 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50" style="transition-delay: 300ms;">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Luas Wilayah Desa</span>
                    <span class="text-3xl font-extrabold text-slate-900"><?php echo esc_html( $luas_wilayah ); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Kolaborasi KKN Politala 2026 -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl">
            <div class="reveal-up bg-[#1a0d3d] rounded-3xl p-8 md:p-12 text-white grid grid-cols-1 lg:grid-cols-12 gap-8 items-center shadow-2xl shadow-[#1a0d3d]/20 relative overflow-hidden">
                <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>

                <div class="lg:col-span-7 relative z-10">
                    <span class="inline-block bg-white/10 border border-white/15 text-amber-400 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-4">Pengabdian Masyarakat</span>
                    <h2 class="text-2xl md:text-4xl font-extrabold mb-4 leading-tight">KKN Politeknik Negeri Tanah Laut 2026 di Desa Benua Tengah</h2>
                    <p class="text-slate-200 leading-relaxed mb-7 text-sm md:text-base">
                        Dokumentasi kegiatan kolaborasi, program kerja pemberdayaan, serta pengembangan media informasi digital desa yang dilaksanakan oleh mahasiswa KKN Politala 2026 bersama pemerintah dan warga Desa Benua Tengah.
                    </p>
                    <a href="<?php echo esc_url( home_url('/kkn-politala-2026') ); ?>" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-6 py-3.5 rounded-2xl text-sm shadow-lg shadow-amber-500/20 hover:-translate-y-0.5 transition-all">
                        <span>Lihat Dokumentasi Kegiatan</span>
                        <span>&rarr;</span>
                    </a>
                </div>
                <div class="lg:col-span-5 relative z-10">
                    <div class="group rounded-2xl overflow-hidden border border-white/15 bg-[#12082b]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kkn.jpeg" alt="Tim KKN Politala 2026 Desa Benua Tengah" class="w-full h-64 md:h-72 object-cover object-center block transition-transform duration-500 group-hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script Scroll Reveal & Animated Counter -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const revealEls = document.querySelectorAll('.reveal-up');
            const revealObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            revealEls.forEach(function (el) {
                revealObserver.observe(el);
            });

            const counters = document.querySelectorAll('.bt-counter');
            const counterObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-target'), 10);
                    const duration = 1100;
                    const startTime = performance.now();

                    function updateCounter(now) {
                        const progress = Math.min((now - startTime) / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        const current = Math.floor(eased * target);
                        el.textContent = current.toLocaleString('id-ID');
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            el.textContent = target.toLocaleString('id-ID');
                        }
                    }
                    requestAnimationFrame(updateCounter);
                    obs.unobserve(el);
                });
            }, { threshold: 0.4 });

            counters.forEach(function (c) {
                counterObserver.observe(c);
            });
        });
    </script>

<?php get_footer(); ?>