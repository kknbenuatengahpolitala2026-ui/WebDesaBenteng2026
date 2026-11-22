<?php get_header(); ?>

    <!-- Header Halaman Peta & Statistik -->
    <header class="bg-[#1a0d3d] text-white py-16 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-5 md:px-8 max-w-5xl relative z-10">
            <span class="inline-block bg-white/10 border border-white/15 text-amber-400 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Data &amp; Wilayah</span>
            <h1 class="text-3xl md:text-5xl font-extrabold uppercase tracking-tight mb-2">Peta &amp; Statistik Desa</h1>
            <p class="text-slate-300 text-sm md:text-base">Kondisi geografis, batas administratif, tata guna lahan, dan data demografi penduduk Desa Benua Tengah</p>
        </div>
    </header>

    <main class="py-16 bg-slate-50">
        <div class="container mx-auto px-5 md:px-8 max-w-5xl space-y-10 md:space-y-12">
            
            <!-- SEKSI PETA SPASIAL DESA (HD & MODERN) -->
            <section class="reveal-up bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="border-l-4 border-amber-500 pl-4 mb-6">
                    <span class="inline-block text-amber-700 text-xs font-bold uppercase tracking-wider mb-1">Peta Spasial Desa</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Peta Wilayah Desa Benua Tengah</h2>
                </div>
                
                <!-- Display Peta HD Format JPEG -->
                <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50 p-2 sm:p-4 mb-5 group shadow-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/PetaDesaBenuaTengah2026.png" alt="Peta Resmi Desa Benua Tengah" class="w-full h-auto object-contain block mx-auto transition-transform duration-500 group-hover:scale-[1.015]">
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs text-slate-500 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <p class="leading-relaxed"><strong>Sumber:</strong> Citra Satelit, Aparat &amp; Masyarakat Desa, Denah Desa Benua Tengah (KKN POLITALA 2026)</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/PetaDesaBenuaTengah2026.png" download="PetaDesaBenuaTengah2026.png" class="inline-flex items-center justify-center gap-1.5 bg-[#1a0d3d] hover:bg-[#261456] text-white font-bold px-4 py-2 rounded-xl transition-all shrink-0">
                        <span>Unduh Peta HD (JPEG)</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- SEKSI GEOGRAFIS & BATAS WILAYAH -->
            <section class="reveal-up bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="border-l-4 border-purple-800 pl-4 mb-6">
                    <span class="inline-block text-[#1a0d3d] text-xs font-bold uppercase tracking-wider mb-1">Geografis &amp; Wilayah</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Kondisi Geografis &amp; Batas Wilayah</h2>
                </div>
                
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">
                    Desa Benua Tengah terletak di Kecamatan Takisung, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan dengan luas wilayah <strong>11,88 km²</strong> (berdasarkan publikasi BPS 2025). Secara administratif, wilayah Desa Benua Tengah berbatasan dengan beberapa wilayah desa di sekitarnya, serta mencakup wilayah permukiman, lahan pertanian, perkebunan, serta berbagai fasilitas umum penunjang kehidupan masyarakat.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="card-hover-lift bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200/50">
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block mb-1">Sebelah Utara</span>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">Desa Ranggang, Kecamatan Takisung</p>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200/50">
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block mb-1">Sebelah Selatan</span>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">Desa Trans Sos, Kecamatan Panyipatan</p>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200/50">
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block mb-1">Sebelah Timur</span>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">Desa Benua Lawas, Kecamatan Takisung</p>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200/50">
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block mb-1">Sebelah Barat</span>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">Desa Gunung Makmur, Kecamatan Takisung</p>
                    </div>
                </div>
            </section>

            <!-- SEKSI TATA GUNA LAHAN -->
            <section class="reveal-up bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="border-l-4 border-amber-500 pl-4 mb-6">
                    <span class="inline-block text-amber-700 text-xs font-bold uppercase tracking-wider mb-1">Tata Guna Lahan</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Rincian Luas Wilayah Berdasarkan Penggunaan</h2>
                </div>

                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">
                    Desa Benua Tengah pada awalnya adalah sebuah desa hasil pemekaran dari desa Benua Lawas sejak tahun 70-an. Berikut adalah rincian luas wilayah berdasarkan klasifikasi penggunaan lahan:
                </p>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- Sisi Kiri: Visualisasi Progress Bar -->
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Visualisasi Penggunaan Lahan</span>
                        
                        <div class="space-y-3 bg-slate-50 p-5 rounded-2xl border border-slate-100">
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Perkebunan</span>
                                    <span>883.631 Ha/m²</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 35%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Pekarangan</span>
                                    <span>786.369 Ha/m²</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-amber-600 h-2 rounded-full" style="width: 31%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Waduk I &amp; II</span>
                                    <span>350.000 Ha/m²</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 14%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Persawahan</span>
                                    <span>330.000 Ha/m²</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 13%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sisi Kanan: Tabel Data Teknis -->
                    <div class="lg:col-span-7 overflow-x-auto rounded-2xl border border-slate-200">
                        <table class="w-full text-left border-collapse text-sm">
                            <thead>
                                <tr class="bg-slate-50 border-b border-slate-200">
                                    <th class="py-3 px-4 font-bold text-slate-700">Jenis Penggunaan Lahan</th>
                                    <th class="py-3 px-4 font-bold text-slate-700 text-right">Luas (Ha/m²)</th>
                                    <th class="py-3 px-4 font-bold text-slate-500">Satuan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-600">
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Waduk I dan II</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">350.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Persawahan</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">330.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Perkebunan</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">883.631</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Kuburan</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">31.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Pekarangan</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">786.369</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Kantor Desa</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">50.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Perkantoran</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">10.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="py-3.5 px-4 font-medium text-slate-900">Luas Prasarana Umum Lainnya</td>
                                    <td class="py-3.5 px-4 text-right font-semibold text-slate-900">80.000</td>
                                    <td class="py-3.5 px-4 text-slate-400">Ha/m²</td>
                                </tr>
                                <tr class="bg-amber-500/5 font-bold border-t-2 border-slate-300">
                                    <td class="py-4 px-4 text-slate-900">Total Luas</td>
                                    <td class="py-4 px-4 text-right text-[#1a0d3d] text-base">2.520.000</td>
                                    <td class="py-4 px-4 text-slate-500 font-medium">Ha/m²</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- SEKSI DATA DEMOGRAFI DESA -->
            <section class="reveal-up bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 md:p-9">
                <div class="border-l-4 border-[#1a0d3d] pl-4 mb-6">
                    <span class="inline-block text-[#1a0d3d] text-xs font-bold uppercase tracking-wider mb-1">Data Demografi</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Data Demografi Desa Benua Tengah</h2>
                </div>
                
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-8">
                    Data demografi merupakan gambaran mengenai keadaan penduduk Desa Benua Tengah yang meliputi jumlah penduduk, jenis kelamin, jumlah kepala keluarga, tingkat pendidikan, mata pencaharian, serta kondisi sosial masyarakat.
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-5 gap-4">
                    <div class="card-hover-lift bg-slate-50 p-5 rounded-2xl text-center border border-slate-100 shadow-sm">
                        <span class="block text-2xl md:text-3xl font-extrabold text-[#1a0d3d] tracking-tight">3.767</span>
                        <span class="text-xs text-slate-500 font-bold uppercase tracking-wider mt-1 block">Total Jiwa</span>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-5 rounded-2xl text-center border border-slate-100 shadow-sm">
                        <span class="block text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">1.911</span>
                        <span class="text-xs text-slate-500 font-bold uppercase tracking-wider mt-1 block">Laki-Laki</span>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-5 rounded-2xl text-center border border-slate-100 shadow-sm">
                        <span class="block text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">1.201</span>
                        <span class="text-xs text-slate-500 font-bold uppercase tracking-wider mt-1 block">Perempuan</span>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-5 rounded-2xl text-center border border-slate-100 shadow-sm">
                        <span class="block text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">6</span>
                        <span class="text-xs text-slate-500 font-bold uppercase tracking-wider mt-1 block">Dusun</span>
                    </div>
                    <div class="card-hover-lift bg-slate-50 p-5 rounded-2xl text-center border border-slate-100 shadow-sm col-span-2 sm:col-span-1">
                        <span class="block text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">20</span>
                        <span class="text-xs text-slate-500 font-bold uppercase tracking-wider mt-1 block">RT</span>
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200/60 p-4 rounded-2xl text-xs text-slate-500 text-center mt-5 font-semibold">
                    &bull; Data di atas mengacu pada kependudukan tahun 2025 (berdasarkan tahun pendataan akhir 2024).
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