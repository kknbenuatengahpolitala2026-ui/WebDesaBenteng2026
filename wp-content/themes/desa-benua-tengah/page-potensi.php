<?php get_header(); ?>

    <!-- Header Halaman Potensi -->
    <header class="bg-[#1a0d3d] text-white py-16 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-5 md:px-8 max-w-5xl relative z-10">
            <span class="inline-block bg-white/10 border border-white/15 text-amber-400 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Etalase &amp; Sumber Daya</span>
            <h1 class="text-3xl md:text-5xl font-extrabold uppercase tracking-tight mb-2">Potensi Desa Benua Tengah</h1>
            <p class="text-slate-300 text-sm md:text-base max-w-2xl">Kekayaan wisata alam, ekonomi kreatif UMKM, pertanian, kesenian tradisional, dan sumber daya manusia Desa Benua Tengah</p>
        </div>
    </header>

    <main class="py-16 bg-slate-50">
        <div class="container mx-auto px-5 md:px-8 max-w-5xl space-y-10 md:space-y-12">

            <!-- 01. POTENSI WISATA ALAM (WADUK & BUKIT SHANGYANG) -->
            <section id="wisata" class="reveal-up scroll-mt-24 bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="flex flex-wrap items-center justify-between gap-3 border-l-4 border-amber-500 pl-4 mb-6">
                    <div>
                        <span class="inline-block text-amber-700 text-xs font-bold uppercase tracking-wider mb-1">01 &bull; Pariwisata &amp; Alam</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Potensi Wisata Alam Desa</h2>
                    </div>
                    <span class="bg-amber-50 text-amber-800 border border-amber-200/70 text-xs font-bold px-3.5 py-1.5 rounded-full">Destinasi Unggulan</span>
                </div>

                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-7">
                    Selain unggul di sektor agraris dan UMKM, Desa Benua Tengah memiliki daya tarik wisata alam perairan dan perbukitan yang berpotensi dikembangkan sebagai destinasi rekreasi keluarga maupun wisata alam lokal di Kecamatan Takisung.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kartu Wisata 1: Waduk -->
                    <div class="card-hover-lift bg-slate-50 rounded-2xl border border-slate-200/70 overflow-hidden flex flex-col">
                        <div class="relative h-56 bg-gradient-to-br from-[#1a0d3d] via-[#261456] to-sky-900 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waduk.jpeg" alt="Wisata Waduk Desa Benua Tengah" onerror="this.style.display='none'" class="absolute inset-0 w-full h-full object-cover object-center z-10">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white/90 px-6 z-0">
                                <svg class="w-11 h-11 mx-auto mb-2 text-amber-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 15c2.483 0 4.345-1.5 6-1.5s3.517 1.5 6 1.5 4.345-1.5 6-1.5M3 19c2.483 0 4.345-1.5 6-1.5s3.517 1.5 6 1.5 4.345-1.5 6-1.5M12 3v7m0 0l-3-3m3 3l3-3"></path>
                                </svg>
                                <span class="text-xs font-bold uppercase tracking-widest text-amber-300 block">Kawasan Perairan Desa</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <h3 class="text-xl font-extrabold text-slate-900">Waduk Desa Benua Tengah</h3>
                                    <span class="text-[11px] font-bold bg-sky-100 text-sky-800 px-2.5 py-1 rounded-full shrink-0">Waduk I &amp; II</span>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Hamparan kawasan perairan seluas <strong>350.000 Ha/m²</strong> yang menjadi penopang utama pengairan pertanian warga sekaligus menyuguhkan suasana tenang untuk rekreasi santai, memancing, dan menikmati panorama matahari terbenam.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Wisata 2: Bukit Shangyang -->
                    <div class="card-hover-lift bg-slate-50 rounded-2xl border border-slate-200/70 overflow-hidden flex flex-col">
                        <div class="relative h-56 bg-gradient-to-br from-[#1a0d3d] via-[#261456] to-emerald-900 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bukit-shangyang.jpeg" alt="Wisata Bukit Shangyang Desa Benua Tengah" onerror="this.style.display='none'" class="absolute inset-0 w-full h-full object-cover object-center z-10">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white/90 px-6 z-0">
                                <svg class="w-11 h-11 mx-auto mb-2 text-amber-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 20l5.5-9 4 6 3-4.5L21 20H3z"></path>
                                </svg>
                                <span class="text-xs font-bold uppercase tracking-widest text-amber-300 block">Wisata Alam Perbukitan</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <h3 class="text-xl font-extrabold text-slate-900">Bukit Shangyang</h3>
                                    <span class="text-[11px] font-bold bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-full shrink-0">Panorama Alam</span>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Kawasan perbukitan alami di wilayah Desa Benua Tengah dengan lanskap hijau yang asri dan udara sejuk. Memiliki daya tarik tinggi untuk wisata alam, jalur jelajah santai, serta titik pandang hamparan wilayah desa dari ketinggian.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 02. POTENSI UMKM -->
            <section id="umkm" class="reveal-up scroll-mt-24 bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="flex flex-wrap items-center justify-between gap-3 border-l-4 border-[#1a0d3d] pl-4 mb-6">
                    <div>
                        <span class="inline-block text-[#1a0d3d] text-xs font-bold uppercase tracking-wider mb-1">02 &bull; Ekonomi Kreatif</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Potensi UMKM Desa</h2>
                    </div>
                    <span class="bg-purple-50 text-[#1a0d3d] text-xs font-bold px-3.5 py-1.5 rounded-full">91 Pelaku UMKM Aktif</span>
                </div>

                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">
                    Usaha mikro, kecil, dan menengah masyarakat Desa Benua Tengah memiliki peluang besar untuk terus dikembangkan melalui peningkatan kualitas produk, kemasan, pemasaran, serta pemanfaatan media digital. Saat ini tercatat sebanyak <strong>91 pelaku UMKM</strong> yang menggerakkan ekonomi keluarga di desa.
                </p>

                <div class="bg-slate-50 border border-slate-200/70 rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-amber-600 block mb-1">Contoh Produk Unggulan Lokal</span>
                        <h3 class="text-base md:text-lg font-extrabold text-slate-900">UMKM Pembuatan Kue Kering Ibu Wita Surimiati</h3>
                        <p class="text-xs md:text-sm text-slate-600 mt-1">Salah satu usaha kuliner rumahan warga Desa Benua Tengah yang memproduksi aneka kue kering berkualitas.</p>
                    </div>
                </div>
            </section>

            <!-- 03 & 04. PERTANIAN, PERKEBUNAN & PETERNAKAN -->
            <section id="pertanian" class="reveal-up scroll-mt-24 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card-hover-lift bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-8">
                    <span class="inline-block text-emerald-700 text-xs font-bold uppercase tracking-wider mb-2">03 &bull; Ketahanan Pangan</span>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-3">Pertanian dan Perkebunan</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Sektor pertanian dan perkebunan merupakan salah satu penopang utama mata pencaharian masyarakat Desa Benua Tengah yang terus dikembangkan melalui peningkatan produktivitas lahan, pemanfaatan teknologi tepat guna, serta penguatan kelompok tani.
                    </p>
                </div>

                <div class="card-hover-lift bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-8">
                    <span class="inline-block text-amber-700 text-xs font-bold uppercase tracking-wider mb-2">04 &bull; Ekonomi Agraris</span>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-3">Potensi Peternakan</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Kegiatan peternakan yang dikelola oleh masyarakat menjadi sumber pendapatan tambahan keluarga sekaligus membuka peluang pengembangan ekonomi lokal berbasis komoditas ternak desa.
                    </p>
                </div>
            </section>

            <!-- 05 & 06. KESENIAN BUDAYA & SUMBER DAYA MANUSIA -->
            <section id="budaya" class="reveal-up scroll-mt-24 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card-hover-lift bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-8">
                    <span class="inline-block text-[#1a0d3d] text-xs font-bold uppercase tracking-wider mb-2">05 &bull; Sosial &amp; Budaya</span>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-3">Kesenian dan Kebudayaan</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Kegiatan kesenian tradisional dan kebudayaan masyarakat merupakan bagian penting dari kekayaan sosial Desa Benua Tengah yang terus dilestarikan, salah satunya melalui kelompok kesenian <strong>L-BABA (Lestari Budaya Bangsa)</strong>.
                    </p>
                </div>

                <div id="sdm" class="card-hover-lift bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-8">
                    <span class="inline-block text-[#1a0d3d] text-xs font-bold uppercase tracking-wider mb-2">06 &bull; Pemberdayaan Warga</span>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-3">Potensi Sumber Daya Manusia</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Partisipasi aktif masyarakat, kelompok pemuda, kelompok perempuan, lembaga kemasyarakatan, serta berbagai organisasi sosial menjadi modal utama dalam menggerakkan pembangunan desa secara berkelanjutan.
                    </p>
                </div>
            </section>

        </div>
    </main>

    <!-- Script Scroll Reveal -->
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
            }, { threshold: 0.1 });

            revealEls.forEach(function (el) {
                revealObserver.observe(el);
            });
        });
    </script>

<?php get_footer(); ?>