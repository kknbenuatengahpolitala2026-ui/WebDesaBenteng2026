<?php
/*
Template Name: Dokumentasi KKN Politala 2026
*/
get_header();

$img_base_url = get_template_directory_uri() . '/assets/images/';

// Data Rekapitulasi Kegiatan KKN Politala 2026 (7 Minggu)
$rekap_kkn = [
    [
        'id'        => 'minggu-01',
        'minggu'    => 'Minggu 01',
        'status'    => 'selesai',
        'kategori'  => 'Penerimaan, Pendidikan & Kesehatan',
        'judul'     => 'Penerimaan Resmi KKN, Koordinasi Proker SD, & Partisipasi Posyandu',
        'deskripsi' => 'Mengawali masa pengabdian di Desa Benua Tengah, mahasiswa KKN Politeknik Negeri Tanah Laut 2026 melaksanakan prosesi penerimaan resmi bersama jajaran Pemerintah Desa yang diantar langsung oleh Dosen Pembimbing Lapangan (DPL). Pada pekan pertama ini, tim juga menjalin silaturahmi serta diskusi penyelarasan program kerja bersama beberapa Sekolah Dasar (SD) di wilayah desa, sekaligus turut membantu kader dalam pelayanan kesehatan Posyandu masyarakat.',
        'poin'      => [
            'Penerimaan resmi mahasiswa KKN oleh pihak Pemerintah Desa Benua Tengah dan pengantaran oleh Dosen Pembimbing Lapangan (DPL).',
            'Silaturahmi dan diskusi rencana program kerja (proker) yang akan dijalankan pada beberapa Sekolah Dasar (SD) di Benua Tengah.',
            'Membantu dan berpartisipasi aktif bersama kader kesehatan dalam pelaksanaan kegiatan Posyandu desa.',
        ],
        'foto'      => [
            ['file' => 'minggu1-1.jpeg', 'ket' => 'Penerimaan resmi mahasiswa KKN dan pengantaran oleh DPL di Kantor Desa Benua Tengah'],
            ['file' => 'minggu1-2.jpeg', 'ket' => 'Silaturahmi dan diskusi program kerja bersama pihak Sekolah Dasar di Benua Tengah'],
            ['file' => 'minggu1-3.jpeg', 'ket' => 'Pendampingan dan partisipasi kegiatan pelayanan Posyandu masyarakat'],
        ],
    ],
    [
        'id'        => 'minggu-02',
        'minggu'    => 'Minggu 02',
        'status'    => 'selesai',
        'kategori'  => 'Pertanian, Layanan Desa & Bakti Sosial',
        'judul'     => 'Pengendalian Hama Gapoktan, Aksi Donor Darah PMI, & Bakti Sosial',
        'deskripsi' => 'Memasuki pekan kedua pengabdian, mahasiswa KKN Politeknik Negeri Tanah Laut 2026 melaksanakan berbagai agenda lintas sektor, mulai dari pendampingan pengendalian hama bersama Gapoktan di bawah bimbingan Dinas Pertanian Kabupaten Tanah Laut hingga penyelenggaraan aksi donor darah bersama PMI Kabupaten Tanah Laut di Balai Desa. Di samping melakukan pemeliharaan (maintenance) perangkat komputer kantor desa, tim juga turut berpartisipasi dalam Perkemahan Pramuka Kecamatan Takisung serta membantu Pemerintah Desa menyalurkan makanan bergizi bagi ibu hamil dan balita.',
        'poin'      => [
            'Mengikuti kegiatan pengendalian hama bersama Gapoktan yang dibawahi Dinas Pertanian Kabupaten Tanah Laut.',
            'Melakukan pemeliharaan (maintenance) perangkat komputer untuk menunjang administrasi di Balai Desa.',
            'Melaksanakan aksi donor darah di Balai Desa bekerja sama dengan PMI Kabupaten Tanah Laut.',
            'Berpartisipasi aktif dalam kegiatan Perkemahan Pramuka Kecamatan Takisung.',
            'Membantu pihak desa dalam membagikan makanan bergizi untuk ibu hamil dan balita.',
        ],
        'foto'      => [
            ['file' => 'minggu2-1.jpg', 'ket' => 'Kegiatan pengendalian hama Gapoktan bersama Dinas Pertanian Kab. Tanah Laut'],
            ['file' => 'minggu2-2.jpeg', 'ket' => 'Maintenance perangkat komputer pelayanan administrasi di Balai Desa'],
            ['file' => 'minggu2-3.jpg', 'ket' => 'Aksi sosial donor darah bekerja sama dengan PMI Kab. Tanah Laut di Balai Desa'],
            ['file' => 'minggu2-4.jpg', 'ket' => 'Partisipasi dalam kegiatan Perkemahan Pramuka Kecamatan Takisung'],
            ['file' => 'minggu2-5.jpeg', 'ket' => 'Penyaluran makanan bergizi bagi ibu hamil dan balita bersama Pemerintah Desa'],
        ],
    ],
    [
        'id'        => 'minggu-03',
        'minggu'    => 'Minggu 03',
        'status'    => 'selesai',
        'kategori'  => 'Pemerintahan, Pendidikan & PKK',
        'judul'     => 'Dukungan Musrenbangdes, Pengajaran SD, & Pelatihan Pangan Non-Beras PKK',
        'deskripsi' => 'Pada pekan ketiga masa pengabdian, mahasiswa KKN Politeknik Negeri Tanah Laut 2026 turut membantu kelancaran pelaksanaan Musyawarah Perencanaan Pembangunan Desa (Musrenbangdes) Benua Tengah serta mengikuti upacara peringatan Hari Sumpah Pemuda di SDN Benua Tengah 1 dan SDN Benua Tengah 3. Di bidang pendidikan dan pemberdayaan masyarakat, tim mengisi kelas edukasi literasi keuangan bertema "Aku Pintar Mengelola Uang" di SDN Benua Tengah 1, mengajar mata pelajaran Bahasa Inggris dan PJOK di SDN Benua Tengah 2, serta mendampingi ibu-ibu PKK dalam pelatihan pembuatan olahan makanan non-beras.',
        'poin'      => [
            'Berpartisipasi aktif membantu persiapan dan melancarkan acara Musrenbangdes Desa Benua Tengah.',
            'Mengikuti upacara peringatan Hari Sumpah Pemuda di SDN Benua Tengah 1 dan SDN Benua Tengah 3.',
            'Mengajar materi literasi keuangan bertema "Aku Pintar Mengelola Uang" pada SDN Benua Tengah 1.',
            'Mengajar mata pelajaran Bahasa Inggris serta Pendidikan Jasmani, Olahraga, dan Kesehatan (PJOK) di SDN Benua Tengah 2.',
            'Mengikuti kegiatan ibu-ibu PKK dalam pelatihan pembuatan olahan makanan non-beras.',
        ],
        'foto'      => [
            ['file' => 'minggu3-1.jpeg', 'ket' => 'Dukungan kelancaran pelaksanaan acara Musrenbangdes Desa Benua Tengah'],
            ['file' => 'minggu3-2.jpeg', 'ket' => 'Upacara peringatan Hari Sumpah Pemuda di SDN Benua Tengah 1 dan SDN Benua Tengah 3'],
            ['file' => 'minggu3-3.jpg', 'ket' => 'Edukasi literasi keuangan "Aku Pintar Mengelola Uang" di SDN Benua Tengah 1'],
            ['file' => 'minggu3-4.jpg', 'ket' => 'Kegiatan belajar mengajar Bahasa Inggris dan PJOK di SDN Benua Tengah 2'],
            ['file' => 'minggu3-5.jpg', 'ket' => 'Pelatihan pembuatan makanan non-beras bersama ibu-ibu PKK Desa Benua Tengah'],
        ],
    ],
    [
        'id'        => 'minggu-04',
        'minggu'    => 'Minggu 04',
        'status'    => 'selesai',
        'kategori'  => 'Literasi UMKM, Kewilayahan & Budaya',
        'judul'     => 'Edukasi Perpajakan UMKM, Survei Plang Batas Desa, & Festival Kuda Lumping',
        'deskripsi' => 'Memasuki pekan keempat pengabdian, mahasiswa KKN Politeknik Negeri Tanah Laut 2026 mendampingi tim dosen Prodi Akuntansi Perpajakan Politala dalam kegiatan sosialisasi dan edukasi ketentuan pajak guna meningkatkan literasi pelaku UMKM di Desa Benua Tengah. Selain melakukan survei titik lokasi pemasangan plang perbatasan desa serta berpartisipasi dalam Festival Kuda Lumping se-Kecamatan Takisung di Pantai Takisung, tim juga melaksanakan diskusi program kerja di MIS Nur Aldzulam dan melanjutkan pengajaran Bahasa Inggris serta PJOK di SDN Benua Tengah 2.',
        'poin'      => [
            'Mendampingi edukasi dari tim dosen Prodi Akuntansi Perpajakan Politala kepada warga Desa Benua Tengah terkait ketentuan pajak guna meningkatkan literasi UMKM desa.',
            'Melaksanakan silaturahmi dan diskusi terkait program kerja di MIS Nur Aldzulam.',
            'Berpartisipasi dalam gelaran Festival Kuda Lumping se-Kecamatan Takisung di Pantai Takisung.',
            'Melakukan survei titik lokasi pemasangan plang perbatasan Desa Benua Tengah.',
            'Melanjutkan kegiatan mengajar Bahasa Inggris dan PJOK di SDN Benua Tengah 2.',
        ],
        'foto'      => [
            ['file' => 'minggu4-1.jpg', 'ket' => 'Edukasi ketentuan pajak untuk peningkatan literasi UMKM oleh dosen Prodi Akuntansi Perpajakan Politala'],
            ['file' => 'minggu4-2.jpg', 'ket' => 'Diskusi penyelarasan program kerja bersama pihak MIS Nur Aldzulam'],
            ['file' => 'minggu4-3.jpg', 'ket' => 'Partisipasi Festival Kuda Lumping se-Kecamatan Takisung di Pantai Takisung'],
            ['file' => 'minggu4-4.jpeg', 'ket' => 'Survei lapangan penentuan titik pemasangan plang perbatasan desa'],
            ['file' => 'minggu4-5.jpg', 'ket' => 'Pengajaran Bahasa Inggris dan PJOK lanjutan di SDN Benua Tengah 2'],
        ],
    ],
    // Kerangka Minggu 05 - 07 (Ubah 'status' menjadi 'selesai' dan isi 'poin' serta 'foto' saat data sudah siap)
    [
        'id'        => 'minggu-05',
        'minggu'    => 'Minggu 05',
        'status'    => 'upcoming',
        'kategori'  => 'Agenda Pekan ke-5',
        'judul'     => 'Rekapitulasi Kegiatan Minggu ke-5',
        'deskripsi' => 'Dokumentasi dan ringkasan pelaksanaan program kerja KKN Politeknik Negeri Tanah Laut 2026 pekan kelima akan segera diperbarui pada bagian ini.',
        'poin'      => [],
        'foto'      => [],
    ],
    [
        'id'        => 'minggu-06',
        'minggu'    => 'Minggu 06',
        'status'    => 'upcoming',
        'kategori'  => 'Agenda Pekan ke-6',
        'judul'     => 'Rekapitulasi Kegiatan Minggu ke-6',
        'deskripsi' => 'Dokumentasi dan ringkasan pelaksanaan program kerja KKN Politeknik Negeri Tanah Laut 2026 pekan keenam akan segera diperbarui pada bagian ini.',
        'poin'      => [],
        'foto'      => [],
    ],
    [
        'id'        => 'minggu-07',
        'minggu'    => 'Minggu 07',
        'status'    => 'upcoming',
        'kategori'  => 'Agenda Pekan ke-7',
        'judul'     => 'Rekapitulasi Kegiatan Minggu ke-7 & Penarikan',
        'deskripsi' => 'Dokumentasi penyelesaian program kerja, serah terima luaran digital desa, dan penarikan mahasiswa KKN Politeknik Negeri Tanah Laut 2026 akan segera diperbarui pada bagian ini.',
        'poin'      => [],
        'foto'      => [],
    ],
];
?>

    <!-- Hero Halaman KKN Politala 2026 -->
    <header class="bg-[#1a0d3d] text-white relative overflow-hidden pt-12 pb-20 md:pt-16 md:pb-24">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-5 md:px-8 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7">
                    <div class="hero-anim-1 inline-flex items-center gap-2 bg-white/10 border border-white/15 px-4 py-1.5 rounded-full text-amber-400 text-xs font-bold uppercase tracking-widest mb-4">
                        <span>Pengabdian Masyarakat &bull; Politala 2026</span>
                    </div>
                    <h1 class="hero-anim-2 text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">
                        KKN Politeknik Negeri Tanah Laut 2026
                    </h1>
                    <p class="hero-anim-3 mt-4 text-sm sm:text-base text-slate-200 leading-relaxed max-w-2xl">
                        Rekapitulasi mingguan program kerja, kolaborasi pemberdayaan masyarakat, pendidikan, serta pengembangan media informasi digital di Desa Benua Tengah, Kecamatan Takisung.
                    </p>
                </div>

                <div class="lg:col-span-5 hero-anim-3">
                    <div class="rounded-3xl overflow-hidden border border-white/15 bg-[#12082b] shadow-2xl">
                        <img src="<?php echo esc_url( $img_base_url . 'kkn.jpeg' ); ?>" alt="Tim KKN Politala 2026 Desa Benua Tengah" class="w-full h-56 sm:h-64 object-cover object-center block">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Kartu Ringkasan Capaian KKN -->
    <section class="container mx-auto px-5 md:px-8 max-w-6xl -mt-10 relative z-20">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3.5 sm:gap-5">
            <div class="bg-white rounded-2xl sm:rounded-3xl p-5 border border-slate-100 shadow-lg shadow-slate-900/5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Durasi Program</span>
                <span class="text-xl sm:text-2xl font-extrabold text-[#1a0d3d] mt-1 block">7 Minggu</span>
                <span class="text-xs text-slate-500 mt-0.5 block">Periode Pengabdian 2026</span>
            </div>
            <div class="bg-white rounded-2xl sm:rounded-3xl p-5 border border-slate-100 shadow-lg shadow-slate-900/5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Laporan Terisi</span>
                <span class="text-xl sm:text-2xl font-extrabold text-amber-600 mt-1 block">Minggu 01 – 04</span>
                <span class="text-xs text-slate-500 mt-0.5 block">18 Dokumentasi Kegiatan</span>
            </div>
            <div class="bg-white rounded-2xl sm:rounded-3xl p-5 border border-slate-100 shadow-lg shadow-slate-900/5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Sekolah Mitra</span>
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 mt-1 block">4 Sekolah</span>
                <span class="text-xs text-slate-500 mt-0.5 block">SDN 1, 2, 3 &amp; MIS Nur Aldzulam</span>
            </div>
            <div class="bg-white rounded-2xl sm:rounded-3xl p-5 border border-slate-100 shadow-lg shadow-slate-900/5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Fokus Kolaborasi</span>
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 mt-1 block">Lintas Sektor</span>
                <span class="text-xs text-slate-500 mt-0.5 block">Pemdes, PKK, Gapoktan &amp; PMI</span>
            </div>
        </div>
    </section>

    <!-- Bilah Filter Mingguan (Sticky) -->
    <section class="sticky top-[68px] z-30 bg-white/95 backdrop-blur-md border-b border-slate-200/80 mt-10">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl py-3.5">
            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-0.5" id="kkn-filter-bar">
                <button type="button" data-filter="all" class="kkn-filter-btn shrink-0 px-4 py-2 rounded-xl text-xs font-bold bg-[#1a0d3d] text-white shadow-md shadow-[#1a0d3d]/20 transition-all">
                    Semua Pekan (7)
                </button>
                <?php foreach ( $rekap_kkn as $item ) : ?>
                    <button type="button" data-filter="<?php echo esc_attr( $item['id'] ); ?>" class="kkn-filter-btn shrink-0 px-4 py-2 rounded-xl text-xs font-bold bg-slate-100 text-slate-600 hover:bg-purple-50 hover:text-[#1a0d3d] transition-all inline-flex items-center gap-1.5">
                        <span><?php echo esc_html( $item['minggu'] ); ?></span>
                        <?php if ( 'selesai' === $item['status'] ) : ?>
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        <?php else : ?>
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                        <?php endif; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Daftar Rekapitulasi Mingguan -->
    <main class="py-12 md:py-16">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl space-y-8">
            <?php foreach ( $rekap_kkn as $index => $pekan ) : ?>
                <article id="<?php echo esc_attr( $pekan['id'] ); ?>" data-week-card="<?php echo esc_attr( $pekan['id'] ); ?>" class="kkn-week-card reveal-up bg-white rounded-3xl border border-slate-200/80 shadow-lg shadow-slate-200/40 overflow-hidden scroll-mt-36">
                    <!-- Header Kartu Pekan -->
                    <div class="p-6 sm:p-8 md:p-9 border-b border-slate-100">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
                            <div class="flex flex-wrap items-center gap-2.5">
                                <span class="bg-[#1a0d3d] text-amber-400 text-xs font-extrabold uppercase tracking-widest px-3.5 py-1.5 rounded-xl">
                                    <?php echo esc_html( $pekan['minggu'] ); ?>
                                </span>
                                <span class="bg-purple-50 text-[#1a0d3d] text-xs font-bold px-3 py-1.5 rounded-xl">
                                    <?php echo esc_html( $pekan['kategori'] ); ?>
                                </span>
                            </div>

                            <?php if ( 'selesai' === $pekan['status'] ) : ?>
                                <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 border border-emerald-200/70 text-xs font-bold px-3 py-1 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    <span>Terdokumentasi</span>
                                </span>
                            <?php else : ?>
                                <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 border border-amber-200/70 text-xs font-bold px-3 py-1 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                    <span>Dokumentasi Menyusul</span>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-slate-900 leading-snug">
                            <?php echo esc_html( $pekan['judul'] ); ?>
                        </h2>

                        <p class="mt-3 text-slate-600 text-sm sm:text-base leading-relaxed">
                            <?php echo esc_html( $pekan['deskripsi'] ); ?>
                        </p>

                        <?php if ( ! empty( $pekan['poin'] ) ) : ?>
                            <div class="mt-6 bg-slate-50 rounded-2xl p-5 sm:p-6 border border-slate-100">
                                <h3 class="text-xs font-extrabold uppercase tracking-wider text-[#1a0d3d] mb-3.5">
                                    Rincian Kegiatan Utama
                                </h3>
                                <ul class="space-y-2.5">
                                    <?php foreach ( $pekan['poin'] as $i => $poin_kegiatan ) : ?>
                                        <li class="flex items-start gap-3 text-sm text-slate-700 leading-relaxed">
                                            <span class="w-6 h-6 rounded-lg bg-[#1a0d3d] text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">
                                                <?php echo esc_html( $i + 1 ); ?>
                                            </span>
                                            <span><?php echo esc_html( $poin_kegiatan ); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Galeri Foto Dokumentasi Pekan -->
                    <?php if ( ! empty( $pekan['foto'] ) ) : ?>
                        <div class="p-6 sm:p-8 bg-slate-50/60">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-extrabold uppercase tracking-wider text-slate-500">
                                    Galeri Dokumentasi (<?php echo count( $pekan['foto'] ); ?> Foto)
                                </span>
                                <span class="text-xs text-slate-400">Klik foto untuk memperbesar</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                <?php foreach ( $pekan['foto'] as $f_idx => $foto ) :
                                    $src_foto = $img_base_url . $foto['file'];
                                ?>
                                    <button
                                        type="button"
                                        data-lightbox-trigger
                                        data-src="<?php echo esc_url( $src_foto ); ?>"
                                        data-week="<?php echo esc_attr( $pekan['minggu'] ); ?>"
                                        data-caption="<?php echo esc_attr( $foto['ket'] ); ?>"
                                        class="group text-left bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md hover:border-[#1a0d3d]/30 transition-all focus:outline-none focus:ring-2 focus:ring-[#1a0d3d]"
                                    >
                                        <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                                            <img
                                                src="<?php echo esc_url( $src_foto ); ?>"
                                                alt="<?php echo esc_attr( $foto['ket'] ); ?>"
                                                loading="lazy"
                                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');"
                                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            >
                                            <!-- Fallback rapi jika file foto belum diunggah ke assets/images/ -->
                                            <div class="hidden absolute inset-0 flex flex-col items-center justify-center p-4 text-center bg-gradient-to-br from-purple-50 to-slate-100 text-slate-500">
                                                <svg class="w-8 h-8 text-[#1a0d3d]/40 mb-2" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <span class="text-[11px] font-bold text-[#1a0d3d] block">Slot Foto <?php echo esc_html( $pekan['minggu'] ); ?></span>
                                                <code class="text-[10px] text-slate-500 mt-0.5"><?php echo esc_html( $foto['file'] ); ?></code>
                                            </div>

                                            <span class="absolute top-2.5 right-2.5 bg-[#1a0d3d]/80 text-white text-[10px] font-bold px-2.5 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                                                Perbesar
                                            </span>
                                        </div>
                                        <div class="p-3.5">
                                            <p class="text-xs text-slate-600 font-medium line-clamp-2 leading-relaxed">
                                                <?php echo esc_html( $foto['ket'] ); ?>
                                            </p>
                                        </div>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Modal Lightbox Galeri Foto -->
    <div id="kkn-lightbox" class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true" aria-label="Pratinjau Foto Kegiatan KKN">
        <button id="lb-close" type="button" aria-label="Tutup Galeri" class="absolute top-4 right-4 sm:top-6 sm:right-6 w-11 h-11 rounded-2xl bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <button id="lb-prev" type="button" aria-label="Foto Sebelumnya" class="absolute left-3 sm:left-6 w-11 h-11 rounded-2xl bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <div class="max-w-4xl w-full flex flex-col items-center">
            <div class="bg-slate-900 rounded-2xl overflow-hidden border border-white/15 shadow-2xl max-h-[72vh] flex items-center justify-center">
                <img id="lb-img" src="" alt="" class="max-h-[72vh] w-auto object-contain block">
            </div>
            <div class="mt-4 text-center max-w-2xl px-4">
                <div class="inline-flex items-center gap-2 mb-1.5">
                    <span id="lb-week" class="bg-amber-500 text-slate-950 text-[11px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded-md"></span>
                    <span id="lb-counter" class="text-xs text-slate-400 font-semibold"></span>
                </div>
                <p id="lb-caption" class="text-sm sm:text-base text-white font-medium leading-relaxed"></p>
            </div>
        </div>

        <button id="lb-next" type="button" aria-label="Foto Berikutnya" class="absolute right-3 sm:right-6 w-11 h-11 rounded-2xl bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <!-- Script Filter Mingguan, Lightbox, & Scroll Reveal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Scroll Reveal
            const revealEls = document.querySelectorAll('.reveal-up');
            const revealObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });

            revealEls.forEach(function (el) {
                revealObserver.observe(el);
            });

            // 2. Filter Per Minggu
            const filterBtns = document.querySelectorAll('.kkn-filter-btn');
            const weekCards  = document.querySelectorAll('.kkn-week-card');

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const target = btn.getAttribute('data-filter');

                    filterBtns.forEach(function (b) {
                        b.classList.remove('bg-[#1a0d3d]', 'text-white', 'shadow-md', 'shadow-[#1a0d3d]/20');
                        b.classList.add('bg-slate-100', 'text-slate-600');
                    });

                    btn.classList.remove('bg-slate-100', 'text-slate-600');
                    btn.classList.add('bg-[#1a0d3d]', 'text-white', 'shadow-md', 'shadow-[#1a0d3d]/20');

                    weekCards.forEach(function (card) {
                        if (target === 'all' || card.getAttribute('data-week-card') === target) {
                            card.classList.remove('hidden');
                            card.classList.add('is-visible');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            });

            // 3. Lightbox Galeri Foto
            const lightbox  = document.getElementById('kkn-lightbox');
            const lbImg     = document.getElementById('lb-img');
            const lbWeek    = document.getElementById('lb-week');
            const lbCaption = document.getElementById('lb-caption');
            const lbCounter = document.getElementById('lb-counter');
            const triggers  = Array.from(document.querySelectorAll('[data-lightbox-trigger]'));
            let currentIdx  = 0;

            function showLightbox(index) {
                if (!triggers.length) return;
                currentIdx = (index + triggers.length) % triggers.length;
                const item = triggers[currentIdx];

                lbImg.src = item.getAttribute('data-src');
                lbImg.alt = item.getAttribute('data-caption');
                lbWeek.textContent = item.getAttribute('data-week');
                lbCaption.textContent = item.getAttribute('data-caption');
                lbCounter.textContent = (currentIdx + 1) + ' / ' + triggers.length;

                lightbox.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lightbox.classList.add('hidden');
                document.body.style.overflow = '';
            }

            triggers.forEach(function (btn, idx) {
                btn.addEventListener('click', function () {
                    showLightbox(idx);
                });
            });

            document.getElementById('lb-close').addEventListener('click', closeLightbox);
            document.getElementById('lb-prev').addEventListener('click', function () {
                showLightbox(currentIdx - 1);
            });
            document.getElementById('lb-next').addEventListener('click', function () {
                showLightbox(currentIdx + 1);
            });

            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', function (e) {
                if (lightbox.classList.contains('hidden')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') showLightbox(currentIdx - 1);
                if (e.key === 'ArrowRight') showLightbox(currentIdx + 1);
            });
        });
    </script>

<?php get_footer(); ?>