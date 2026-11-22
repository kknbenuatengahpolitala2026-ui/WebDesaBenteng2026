<?php get_header(); ?>

    <!-- Custom CSS untuk Animasi Motion & Garis Bagan Interaktif -->
    <style>
        /* Animasi Muncul Bertahap (Staggered Reveal) */
        .org-reveal {
            opacity: 0;
            transform: translateY(24px) scale(0.98);
            transition: opacity 0.65s cubic-bezier(0.22, 1, 0.36, 1),
                        transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .org-reveal.is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Kartu Node Bagan Interaktif */
        .org-node {
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1),
                        box-shadow 0.3s ease,
                        border-color 0.3s ease,
                        opacity 0.3s ease;
            cursor: pointer;
            position: relative;
        }
        .org-node:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 32px -10px rgba(26, 13, 61, 0.18);
        }
        .org-node:active {
            transform: translateY(-2px) scale(0.99);
        }

        /* Efek Sorotan Saat Pencarian */
        .org-node.is-dimmed {
            opacity: 0.28;
            filter: grayscale(60%);
            transform: scale(0.98);
        }
        .org-node.is-highlighted {
            opacity: 1;
            filter: none;
            box-shadow: 0 0 0 3px #f59e0b, 0 20px 35px -10px rgba(245, 158, 11, 0.35) !important;
            transform: translateY(-4px) scale(1.02);
            z-index: 20;
        }

        /* Animasi Kilau Halus pada Pimpinan Tertinggi */
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 14px 30px -8px rgba(26, 13, 61, 0.35); }
            50% { box-shadow: 0 18px 40px -6px rgba(245, 158, 11, 0.28); }
        }
        .leader-glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }

        /* Animasi Garis Aliran Komando */
        @keyframes flowLine {
            0% { background-position: 0% 0%; }
            100% { background-position: 0% 200%; }
        }
        .line-animated-v {
            background: linear-gradient(180deg, #cbd5e1 0%, #f59e0b 50%, #cbd5e1 100%);
            background-size: 100% 200%;
            animation: flowLine 3.5s linear infinite;
        }

        /* Animasi Modal Detail Tupoksi */
        #tupoksiModal {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.28s ease;
        }
        #tupoksiModal.open {
            opacity: 1;
            pointer-events: auto;
        }
        #tupoksiModal .modal-card {
            transform: translateY(20px) scale(0.95);
            transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1);
        }
        #tupoksiModal.open .modal-card {
            transform: translateY(0) scale(1);
        }

        /* Transisi Collapse Cabang */
        .branch-content {
            transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
            overflow: hidden;
        }
        .branch-content.collapsed {
            max-height: 0 !important;
            opacity: 0;
            margin-top: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            pointer-events: none;
        }
    </style>

    <!-- Header Halaman Struktur Organisasi -->
    <header class="bg-[#1a0d3d] text-white py-16 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-5 md:px-8 max-w-6xl relative z-10">
            <span class="inline-block bg-white/10 border border-white/15 text-amber-400 text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-3">Kelembagaan &amp; Pemerintahan</span>
            <h1 class="text-3xl md:text-5xl font-extrabold uppercase tracking-tight mb-2">Struktur Organisasi Desa</h1>
            <p class="text-slate-300 text-sm md:text-base max-w-2xl">Bagan interaktif Susunan Organisasi dan Tata Kerja (SOTK) Pemerintah Desa serta Badan Permusyawaratan Desa (BPD) Benua Tengah</p>
        </div>
    </header>

    <main class="py-12 md:py-16 bg-slate-50">
        <div class="container mx-auto px-5 md:px-8 max-w-6xl space-y-8">

            <!-- BAR KONTROL INTERAKTIF (FILTER TAB & PENCARIAN) -->
            <div class="org-reveal bg-white rounded-3xl border border-slate-200/80 shadow-md p-4 sm:p-5 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 sticky top-3 z-30 backdrop-blur-md bg-white/95">
                <!-- Filter Tab Lembaga -->
                <div class="flex flex-wrap items-center gap-2" role="tablist">
                    <button type="button" data-filter="all" class="filter-tab active bg-[#1a0d3d] text-white text-xs sm:text-sm font-bold px-4 py-2.5 rounded-2xl transition-all shadow-sm">
                        Semua Bagan (Pemdes &amp; BPD)
                    </button>
                    <button type="button" data-filter="pemdes" class="filter-tab bg-slate-100 hover:bg-slate-200/70 text-slate-700 text-xs sm:text-sm font-bold px-4 py-2.5 rounded-2xl transition-all">
                        Pemerintah Desa (Pemdes)
                    </button>
                    <button type="button" data-filter="bpd" class="filter-tab bg-slate-100 hover:bg-slate-200/70 text-slate-700 text-xs sm:text-sm font-bold px-4 py-2.5 rounded-2xl transition-all">
                        Struktur BPD
                    </button>
                </div>

                <!-- Kolom Pencarian Nama / Jabatan -->
                <div class="relative w-full lg:w-80">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z"></path>
                    </svg>
                    <input type="text" id="orgSearchInput" placeholder="Cari nama atau jabatan..." class="w-full pl-10 pr-9 py-2.5 text-xs sm:text-sm bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:border-[#1a0d3d] focus:bg-white transition-all text-slate-800 font-medium">
                    <button type="button" id="clearSearchBtn" class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-700 text-xs font-bold">✕</button>
                </div>
            </div>

            <!-- Petunjuk Interaktif Singkat -->
            <div class="org-reveal flex flex-wrap items-center justify-between gap-3 px-2 text-xs text-slate-500">
                <p class="flex items-center gap-2 font-medium">
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-amber-100 text-amber-700 font-extrabold">i</span>
                    <span>Klik pada kotak jabatan mana saja untuk melihat rincian <strong>Tugas Pokok &amp; Fungsi (Tupoksi)</strong>.</span>
                </p>
                <div class="flex items-center gap-4">
                    <span class="inline-flex items-center gap-2 font-semibold">
                        <span class="w-5 h-0.5 bg-slate-400 inline-block"></span> Garis Komando
                    </span>
                    <span class="inline-flex items-center gap-2 font-semibold">
                        <span class="w-5 border-t-2 border-dashed border-amber-500 inline-block"></span> Garis Koordinasi / Staf
                    </span>
                </div>
            </div>

            <!-- =================================================================
                 BAGAN 1: PEMERINTAH DESA BENUA TENGAH (EKSEKUTIF DESA)
            ================================================================== -->
            <section id="section-pemdes" class="org-section org-reveal bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 sm:p-8 md:p-12">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-slate-100 pb-6 mb-10">
                    <div>
                        <span class="inline-block bg-purple-100 text-[#1a0d3d] text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-2">Eksekutif Desa</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Bagan Pemerintah Desa Benua Tengah</h2>
                        <p class="text-slate-500 text-sm mt-1">Penyelenggara urusan pemerintahan, pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat desa.</p>
                    </div>
                    <span class="self-start md:self-auto bg-slate-100 text-slate-700 text-xs font-bold px-3.5 py-1.5 rounded-full">12 Unsur Perangkat</span>
                </div>

                <div class="relative">
                    <!-- TINGKAT 1: KEPALA DESA -->
                    <div class="org-reveal flex flex-col items-center relative z-10">
                        <div class="org-node leader-glow w-full max-w-xs sm:max-w-sm bg-[#1a0d3d] text-white rounded-2xl p-5 text-center border-b-4 border-amber-500 group"
                             data-role="Kepala Desa Benua Tengah"
                             data-name="ISMANU"
                             data-category="Pimpinan Eksekutif Desa"
                             data-line="Pimpinan Tertinggi Pemerintah Desa"
                             data-tupoksi="Memimpin penyelenggaraan Pemerintahan Desa, melaksanakan pembangunan desa, pembinaan kemasyarakatan, dan pemberdayaan masyarakat Desa Benua Tengah serta menjalin kemitraan bersama BPD.">
                            <span class="text-[11px] font-extrabold uppercase tracking-widest text-amber-400 block mb-1">Kepala Desa</span>
                            <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight uppercase">ISMANU</h3>
                            <span class="mt-2 inline-block text-[10px] text-slate-300 group-hover:text-amber-300 transition-colors">Klik lihat tupoksi &rarr;</span>
                        </div>
                        <!-- Garis Vertikal Beranimasi -->
                        <div class="w-0.5 h-9 md:h-11 line-animated-v"></div>
                    </div>

                    <!-- TINGKAT 2: SEKRETARIAT DESA (CABANG KANAN DARI GARIS UTAMA) -->
                    <div class="org-reveal relative max-w-5xl mx-auto" style="transition-delay: 80ms;">
                        <!-- Poros Tengah Vertikal (Desktop) -->
                        <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-slate-300"></div>

                        <div class="md:w-1/2 md:ml-auto md:pl-10 relative pb-8 md:pb-10">
                            <!-- Garis Penghubung Horizontal dari Poros Tengah ke Sekdes -->
                            <div class="hidden md:block absolute left-0 top-10 w-10 border-t-2 border-dashed border-amber-500"></div>

                            <!-- Kotak Sekretaris Desa -->
                            <div class="org-node bg-white border-2 border-[#1a0d3d]/20 border-t-4 border-t-[#1a0d3d] rounded-2xl p-4 sm:p-5 text-center shadow-md max-w-xs mx-auto relative z-10 group"
                                 data-role="Sekretaris Desa"
                                 data-name="MUHTADI"
                                 data-category="Unsur Sekretariat Desa"
                                 data-line="Garis Koordinasi & Staf Administrasi Kepala Desa"
                                 data-tupoksi="Membantu Kepala Desa dalam bidang administrasi pemerintahan, mengoordinasikan penyusunan perencanaan pembangunan desa, administrasi keuangan, serta pelayanan tata usaha dan umum.">
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Sekretaris Desa</span>
                                <h4 class="text-base sm:text-lg font-extrabold text-slate-900">MUHTADI</h4>
                                <span class="mt-1.5 inline-block text-[10px] text-slate-400 group-hover:text-[#1a0d3d] transition-colors">Klik lihat tupoksi &rarr;</span>
                            </div>

                            <!-- Tombol Lipat / Buka Kaur -->
                            <div class="flex flex-col items-center">
                                <div class="w-0.5 h-4 bg-slate-300"></div>
                                <button type="button" data-target="branch-kaur" class="toggle-branch-btn inline-flex items-center gap-1 bg-purple-50 hover:bg-purple-100 text-[#1a0d3d] text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded-full border border-purple-200/70 transition-all">
                                    <span>Unsur Staf / Kaur</span>
                                    <svg class="w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div class="w-0.5 h-4 bg-slate-300"></div>
                            </div>

                            <!-- Sub-Cabang: Kaur Keuangan & Kaur Tata Usaha -->
                            <div id="branch-kaur" class="branch-content relative pt-4" style="max-height: 500px;">
                                <div class="hidden sm:block absolute top-0 left-1/4 right-1/4 h-0.5 bg-slate-300"></div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                    <!-- Kaur Keuangan -->
                                    <div class="relative">
                                        <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                        <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-purple-700 rounded-2xl p-4 text-center shadow-sm h-full flex flex-col justify-center"
                                             data-role="Kepala Urusan (Kaur) Keuangan"
                                             data-name="PURHANDOKO ARDI"
                                             data-category="Unsur Sekretariat Desa"
                                             data-line="Bertanggung jawab kepada Sekretaris Desa"
                                             data-tupoksi="Melaksanakan fungsi kebendaharaan desa, pengurusan administrasi keuangan, sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, serta penyusunan laporan realisasi APBDes.">
                                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Kaur Keuangan</span>
                                            <p class="text-sm font-extrabold text-slate-900">PURHANDOKO ARDI</p>
                                        </div>
                                    </div>

                                    <!-- Kaur Tata Usaha & Umum -->
                                    <div class="relative">
                                        <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                        <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-purple-700 rounded-2xl p-4 text-center shadow-sm h-full flex flex-col justify-center"
                                             data-role="Kepala Urusan (Kaur) Tata Usaha & Umum"
                                             data-name="GUSTI DINI MASDIANI"
                                             data-category="Unsur Sekretariat Desa"
                                             data-line="Bertanggung jawab kepada Sekretaris Desa"
                                             data-tupoksi="Melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat-menyurat, arsip, ekspedisi, penataan administrasi perangkat desa, serta pengelolaan aset dan perlengkapan kantor desa.">
                                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Kaur Tata Usaha &amp; Umum</span>
                                            <p class="text-sm font-extrabold text-slate-900">GUSTI DINI MASDIANI</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TINGKAT 3: PELAKSANA TEKNIS (KEPALA SEKSI / KASI) -->
                    <div class="org-reveal relative max-w-3xl mx-auto pt-4 pb-8 md:pb-10" style="transition-delay: 140ms;">
                        <div class="hidden sm:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-slate-300"></div>

                        <!-- Label & Toggle Cabang Kasi -->
                        <div class="flex justify-center mb-4 relative z-10">
                            <button type="button" data-target="branch-kasi" class="toggle-branch-btn inline-flex items-center gap-1.5 bg-amber-50 hover:bg-amber-100 text-amber-800 text-[10px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full border border-amber-200 transition-all">
                                <span>Pelaksana Teknis (Kasi)</span>
                                <svg class="w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>

                        <div id="branch-kasi" class="branch-content relative pt-4" style="max-height: 500px;">
                            <div class="hidden sm:block absolute top-0 left-1/4 right-1/4 h-0.5 bg-slate-300"></div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-12 relative z-10">
                                <!-- Kasi Pemerintahan -->
                                <div class="relative">
                                    <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-white border border-slate-200 border-t-4 border-t-amber-500 rounded-2xl p-5 text-center shadow-md"
                                         data-role="Kepala Seksi (Kasi) Pemerintahan"
                                         data-name="DENI SAPUTRA"
                                         data-category="Pelaksana Teknis Desa"
                                         data-line="Garis Komando Langsung Kepala Desa"
                                         data-tupoksi="Melaksanakan manajemen tata praja pemerintahan, menyusun rancangan regulasi desa, pembinaan masalah pertanahan, ketenteraman dan ketertiban, serta pendataan kependudukan dan profil desa.">
                                        <span class="text-[11px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Kasi Pemerintahan</span>
                                        <h4 class="text-base sm:text-lg font-extrabold text-slate-900">DENI SAPUTRA</h4>
                                    </div>
                                </div>

                                <!-- Kasi Kesejahteraan -->
                                <div class="relative">
                                    <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-white border border-slate-200 border-t-4 border-t-amber-500 rounded-2xl p-5 text-center shadow-md"
                                         data-role="Kepala Seksi (Kasi) Kesejahteraan"
                                         data-name="PARIYANTI"
                                         data-category="Pelaksana Teknis Desa"
                                         data-line="Garis Komando Langsung Kepala Desa"
                                         data-tupoksi="Melaksanakan pembangunan sarana prasarana perdesaan, pembangunan bidang pendidikan, kesehatan, sosial budaya, serta fasilitasi pemberdayaan masyarakat dan peningkatan ekonomi keluarga.">
                                        <span class="text-[11px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Kasi Kesejahteraan</span>
                                        <h4 class="text-base sm:text-lg font-extrabold text-slate-900">PARIYANTI</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TINGKAT 4: PELAKSANA KEWILAYAHAN (KEPALA DUSUN 1 – 6) -->
                    <div class="org-reveal relative max-w-5xl mx-auto pt-4" style="transition-delay: 200ms;">
                        <!-- Label & Toggle Cabang Kepala Dusun -->
                        <div class="flex justify-center mb-4 relative z-10">
                            <button type="button" data-target="branch-dusun" class="toggle-branch-btn inline-flex items-center gap-1.5 bg-slate-100 hover:bg-slate-200/80 text-slate-800 text-[10px] font-extrabold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-slate-200 transition-all">
                                <span>Pelaksana Kewilayahan (Kepala Dusun 1 – 6)</span>
                                <svg class="w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>

                        <div id="branch-dusun" class="branch-content relative pt-4" style="max-height: 900px;">
                            <div class="hidden md:block absolute top-0 left-[16.67%] right-[16.67%] h-0.5 bg-slate-300"></div>

                            <!-- Baris 1 Dusun (Dusun 1, 2, 3) -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 relative z-10">
                                <!-- Kepala Dusun 1 -->
                                <div class="relative">
                                    <div class="hidden md:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-slate-700 rounded-2xl p-4 sm:p-5 text-center shadow-sm"
                                         data-role="Kepala Dusun 1"
                                         data-name="SUTIAWAN"
                                         data-category="Pelaksana Kewilayahan"
                                         data-line="Garis Komando Kepala Desa di Wilayah Dusun 1"
                                         data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, pembinaan ketenteraman dan ketertiban masyarakat, serta koordinasi ketua RT di lingkungan Dusun 1.">
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1">Kepala Dusun 1</span>
                                        <p class="text-base font-extrabold text-slate-900">SUTIAWAN</p>
                                    </div>
                                </div>

                                <!-- Kepala Dusun 2 -->
                                <div class="relative">
                                    <div class="hidden md:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-slate-700 rounded-2xl p-4 sm:p-5 text-center shadow-sm"
                                         data-role="Kepala Dusun 2"
                                         data-name="DESY OKTA HERIYANI"
                                         data-category="Pelaksana Kewilayahan"
                                         data-line="Garis Komando Kepala Desa di Wilayah Dusun 2"
                                         data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, pembinaan ketenteraman dan ketertiban masyarakat, serta koordinasi ketua RT di lingkungan Dusun 2.">
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1">Kepala Dusun 2</span>
                                        <p class="text-base font-extrabold text-slate-900">DESY OKTA HERIYANI</p>
                                    </div>
                                </div>

                                <!-- Kepala Dusun 3 -->
                                <div class="relative">
                                    <div class="hidden md:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-slate-700 rounded-2xl p-4 sm:p-5 text-center shadow-sm"
                                         data-role="Kepala Dusun 3"
                                         data-name="ARIANI"
                                         data-category="Pelaksana Kewilayahan"
                                         data-line="Garis Komando Kepala Desa di Wilayah Dusun 3"
                                         data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, pembinaan ketenteraman dan ketertiban masyarakat, serta koordinasi ketua RT di lingkungan Dusun 3.">
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1">Kepala Dusun 3</span>
                                        <p class="text-base font-extrabold text-slate-900">ARIANI</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Garis Penghubung Vertikal ke Baris 2 Dusun (Desktop) -->
                            <div class="hidden md:grid grid-cols-3 gap-6 h-5">
                                <div class="flex justify-center"><div class="w-0.5 h-full bg-slate-300"></div></div>
                                <div class="flex justify-center"><div class="w-0.5 h-full bg-slate-300"></div></div>
                                <div class="flex justify-center"><div class="w-0.5 h-full bg-slate-300"></div></div>
                            </div>

                            <!-- Baris 2 Dusun (Dusun 4, 5, 6) -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mt-4 md:mt-0 relative z-10">
                                <!-- Kepala Dusun 4 -->
                                <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-slate-700 rounded-2xl p-4 sm:p-5 text-center shadow-sm"
                                     data-role="Kepala Dusun 4"
                                     data-name="SUJENDRO"
                                     data-category="Pelaksana Kewilayahan"
                                     data-line="Garis Komando Kepala Desa di Wilayah Dusun 4"
                                     data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, pembinaan ketenteraman dan ketertiban masyarakat, serta koordinasi ketua RT di lingkungan Dusun 4.">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1">Kepala Dusun 4</span>
                                    <p class="text-base font-extrabold text-slate-900">SUJENDRO</p>
                                </div>

                                <!-- Kepala Dusun 5 -->
                                <div class="org-node bg-slate-50 border border-dashed border-slate-300 border-t-4 border-t-slate-400 rounded-2xl p-4 sm:p-5 text-center"
                                     data-role="Kepala Dusun 5"
                                     data-name="- (Dalam Pembaruan Data)"
                                     data-category="Pelaksana Kewilayahan"
                                     data-line="Garis Komando Kepala Desa di Wilayah Dusun 5"
                                     data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, dan pembinaan masyarakat di lingkungan Dusun 5 (Data pejabat sedang dalam pembaruan administrasi desa).">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Kepala Dusun 5</span>
                                    <p class="text-sm font-semibold text-slate-400 italic">- (Dalam Pembaruan Data)</p>
                                </div>

                                <!-- Kepala Dusun 6 -->
                                <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-slate-700 rounded-2xl p-4 sm:p-5 text-center shadow-sm"
                                     data-role="Kepala Dusun 6"
                                     data-name="AGUS SUPRYANTO"
                                     data-category="Pelaksana Kewilayahan"
                                     data-line="Garis Komando Kepala Desa di Wilayah Dusun 6"
                                     data-tupoksi="Membantu Kepala Desa dalam pelaksanaan tugas pemerintahan, pembangunan, pembinaan ketenteraman dan ketertiban masyarakat, serta koordinasi ketua RT di lingkungan Dusun 6.">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1">Kepala Dusun 6</span>
                                    <p class="text-base font-extrabold text-slate-900">AGUS SUPRYANTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PENGHUBUNG KEMITRAAN PEMDES <-> BPD -->
            <div id="partnership-divider" class="org-reveal flex flex-col items-center justify-center py-1">
                <div class="w-0.5 h-5 border-l-2 border-dashed border-amber-500"></div>
                <span class="bg-amber-50 text-amber-800 border border-amber-200 text-[11px] font-extrabold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-sm">
                    &#8597; Garis Kemitraan &amp; Koordinasi Sejajar (Pemdes &amp; BPD)
                </span>
                <div class="w-0.5 h-5 border-l-2 border-dashed border-amber-500"></div>
            </div>

            <!-- =================================================================
                 BAGAN 2: BADAN PERMUSYAWARATAN DESA (BPD) BENUA TENGAH
            ================================================================== -->
            <section id="section-bpd" class="org-section org-reveal bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 p-6 sm:p-8 md:p-12">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-slate-100 pb-6 mb-10">
                    <div>
                        <span class="inline-block bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-2">Kelembagaan Permusyawaratan</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Bagan Struktur BPD Desa Benua Tengah</h2>
                        <p class="text-slate-500 text-sm mt-1">Badan Permusyawaratan Desa yang melaksanakan fungsi membahas dan menyepakati rancangan peraturan desa bersama Kepala Desa serta menampung dan menyalurkan aspirasi masyarakat.</p>
                    </div>
                    <span class="self-start md:self-auto bg-amber-50 text-amber-800 border border-amber-200/60 text-xs font-bold px-3.5 py-1.5 rounded-full">7 Unsur Pimpinan &amp; Anggota</span>
                </div>

                <div class="relative">
                    <!-- TINGKAT 1: KETUA BPD -->
                    <div class="org-reveal flex flex-col items-center relative z-10">
                        <div class="org-node leader-glow w-full max-w-xs sm:max-w-sm bg-gradient-to-br from-[#1a0d3d] to-[#2c1763] text-white rounded-2xl p-5 text-center border-b-4 border-amber-500 group"
                             data-role="Ketua BPD Desa Benua Tengah"
                             data-name="MUANAWI"
                             data-category="Pimpinan BPD"
                             data-line="Pimpinan Kolektif Badan Permusyawaratan Desa"
                             data-tupoksi="Memimpin rapat-rapat BPD, mengoordinasikan pembahasan dan penyepakatan rancangan Peraturan Desa bersama Kepala Desa, serta memimpin penyelenggaraan Musyawarah Desa.">
                            <span class="text-[11px] font-extrabold uppercase tracking-widest text-amber-400 block mb-1">Ketua BPD</span>
                            <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight uppercase">MUANAWI</h3>
                            <span class="mt-2 inline-block text-[10px] text-slate-300 group-hover:text-amber-300 transition-colors">Klik lihat tupoksi &rarr;</span>
                        </div>
                        <div class="w-0.5 h-8 md:h-10 line-animated-v"></div>
                    </div>

                    <!-- TINGKAT 2: WAKIL KETUA BPD & SEKRETARIS BPD -->
                    <div class="org-reveal relative max-w-3xl mx-auto pt-4 pb-8 md:pb-10" style="transition-delay: 90ms;">
                        <div class="hidden sm:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-slate-300"></div>
                        <div class="hidden sm:block absolute top-0 left-1/4 right-1/4 h-0.5 bg-slate-300"></div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-12 relative z-10">
                            <!-- Wakil Ketua BPD -->
                            <div class="relative">
                                <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                <div class="org-node bg-white border border-slate-200 border-t-4 border-t-[#1a0d3d] rounded-2xl p-5 text-center shadow-md"
                                     data-role="Wakil Ketua BPD"
                                     data-name="NORHAYADI"
                                     data-category="Pimpinan BPD"
                                     data-line="Unsur Pimpinan Badan Permusyawaratan Desa"
                                     data-tupoksi="Membantu Ketua BPD dalam mengoordinasikan pelaksanaan tugas bidang-bidang BPD serta menggantikan tugas Ketua BPD apabila berhalangan.">
                                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Wakil Ketua BPD</span>
                                    <h4 class="text-base sm:text-lg font-extrabold text-slate-900">NORHAYADI</h4>
                                </div>
                            </div>

                            <!-- Sekretaris BPD -->
                            <div class="relative">
                                <div class="hidden sm:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                <div class="org-node bg-white border border-slate-200 border-t-4 border-t-[#1a0d3d] rounded-2xl p-5 text-center shadow-md"
                                     data-role="Sekretaris BPD"
                                     data-name="SUHERNI"
                                     data-category="Pimpinan BPD"
                                     data-line="Unsur Pimpinan & Administrasi BPD"
                                     data-tupoksi="Menyelenggarakan administrasi kesekretariatan BPD, pencatatan risalah sidang/musyawarah desa, pengelolaan surat-menyurat, serta pengarsipan keputusan BPD.">
                                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-amber-600 block mb-1">Sekretaris BPD</span>
                                    <h4 class="text-base sm:text-lg font-extrabold text-slate-900">SUHERNI</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TINGKAT 3: KEPALA BIDANG 1, KEPALA BIDANG 2, & ANGGOTA BPD -->
                    <div class="org-reveal relative max-w-5xl mx-auto pt-4" style="transition-delay: 160ms;">
                        <div class="flex justify-center mb-4 relative z-10">
                            <button type="button" data-target="branch-bpd-bidang" class="toggle-branch-btn inline-flex items-center gap-1.5 bg-amber-50 hover:bg-amber-100 text-amber-900 text-[10px] font-extrabold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-amber-200 transition-all">
                                <span>Bidang &amp; Anggota BPD</span>
                                <svg class="w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>

                        <div id="branch-bpd-bidang" class="branch-content relative pt-4" style="max-height: 700px;">
                            <div class="hidden lg:block absolute top-0 left-[12.5%] right-[12.5%] h-0.5 bg-slate-300"></div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 relative z-10">
                                <!-- Kepala Bidang 1 -->
                                <div class="relative">
                                    <div class="hidden lg:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-amber-500 rounded-2xl p-5 text-center shadow-sm h-full flex flex-col justify-center"
                                         data-role="Kepala Bidang 1 BPD"
                                         data-name="SAMAT"
                                         data-category="Bidang Kerja BPD"
                                         data-line="Bidang Penyelenggaraan Pemerintahan & Pembinaan Kemasyarakatan"
                                         data-tupoksi="Membidangi pengawasan penyelenggaraan pemerintahan desa, pembahasan rancangan peraturan desa, serta pembinaan ketenteraman dan kemasyarakatan Desa Benua Tengah.">
                                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-700 block mb-1.5">Kepala Bidang 1</span>
                                        <p class="text-base font-extrabold text-slate-900">SAMAT</p>
                                    </div>
                                </div>

                                <!-- Kepala Bidang 2 -->
                                <div class="relative">
                                    <div class="hidden lg:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-amber-500 rounded-2xl p-5 text-center shadow-sm h-full flex flex-col justify-center"
                                         data-role="Kepala Bidang 2 BPD"
                                         data-name="AMAT ARIFIN"
                                         data-category="Bidang Kerja BPD"
                                         data-line="Bidang Pembangunan Desa & Pemberdayaan Masyarakat"
                                         data-tupoksi="Membidangi pengawasan pelaksanaan pembangunan desa, evaluasi laporan keterangan penyelenggaraan pemerintahan desa (LKPPD), serta pemberdayaan masyarakat.">
                                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-700 block mb-1.5">Kepala Bidang 2</span>
                                        <p class="text-base font-extrabold text-slate-900">AMAT ARIFIN</p>
                                    </div>
                                </div>

                                <!-- Anggota BPD 1 -->
                                <div class="relative">
                                    <div class="hidden lg:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-purple-700 rounded-2xl p-5 text-center shadow-sm h-full flex flex-col justify-center"
                                         data-role="Anggota BPD Desa Benua Tengah"
                                         data-name="RISKA HANDAYANI"
                                         data-category="Anggota BPD"
                                         data-line="Unsur Anggota Badan Permusyawaratan Desa"
                                         data-tupoksi="Menyerap, menampung, menghimpun, dan menyalurkan aspirasi masyarakat Desa Benua Tengah serta berpartisipasi aktif dalam musyawarah dan pengambilan keputusan BPD.">
                                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-[#1a0d3d] block mb-1.5">Anggota BPD</span>
                                        <p class="text-base font-extrabold text-slate-900">RISKA HANDAYANI</p>
                                    </div>
                                </div>

                                <!-- Anggota BPD 2 -->
                                <div class="relative">
                                    <div class="hidden lg:block absolute -top-4 left-1/2 -translate-x-1/2 w-0.5 h-4 bg-slate-300"></div>
                                    <div class="org-node bg-slate-50 hover:bg-white border border-slate-200 border-t-4 border-t-purple-700 rounded-2xl p-5 text-center shadow-sm h-full flex flex-col justify-center"
                                         data-role="Anggota BPD Desa Benua Tengah"
                                         data-name="SUKAMDI"
                                         data-category="Anggota BPD"
                                         data-line="Unsur Anggota Badan Permusyawaratan Desa"
                                         data-tupoksi="Menyerap, menampung, menghimpun, dan menyalurkan aspirasi masyarakat Desa Benua Tengah serta berpartisipasi aktif dalam musyawarah dan pengambilan keputusan BPD.">
                                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-[#1a0d3d] block mb-1.5">Anggota BPD</span>
                                        <p class="text-base font-extrabold text-slate-900">SUKAMDI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- =====================================================================
         MODAL INTERAKTIF DETAIL JABATAN & TUPOKSI
    ====================================================================== -->
    <div id="tupoksiModal" class="fixed inset-0 z-50 bg-slate-950/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="modal-card bg-white rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100">
            <!-- Header Modal -->
            <div class="bg-[#1a0d3d] text-white p-6 relative">
                <button type="button" id="closeModalBtn" class="absolute top-5 right-5 w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors">
                    ✕
                </button>
                <span id="modalCategory" class="inline-block bg-amber-500/20 border border-amber-400/30 text-amber-300 text-[11px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full mb-2">Kategori</span>
                <h3 id="modalRole" class="text-xl sm:text-2xl font-extrabold tracking-tight leading-snug">Nama Jabatan</h3>
            </div>

            <!-- Isi Modal -->
            <div class="p-6 space-y-4">
                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-200/70">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-0.5">Nama Pejabat</span>
                    <p id="modalName" class="text-lg font-extrabold text-slate-900">-</p>
                </div>

                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-amber-600 block mb-1">Kedudukan &amp; Garis Hubungan</span>
                    <p id="modalLine" class="text-xs sm:text-sm font-semibold text-slate-700">-</p>
                </div>

                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#1a0d3d] block mb-1">Tugas Pokok &amp; Fungsi (Tupoksi)</span>
                    <p id="modalTupoksi" class="text-xs sm:text-sm text-slate-600 leading-relaxed">-</p>
                </div>

                <div class="pt-2 flex justify-end">
                    <button type="button" id="closeModalFooterBtn" class="bg-[#1a0d3d] hover:bg-[#261456] text-white text-xs font-bold px-5 py-2.5 rounded-xl transition-all">
                        Tutup Detail
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Animasi & Interaktivitas Penuh -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Scroll Reveal Animation
            const revealEls = document.querySelectorAll('.org-reveal');
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

            // 2. Filter Tab (Semua / Pemdes / BPD)
            const filterTabs = document.querySelectorAll('.filter-tab');
            const secPemdes = document.getElementById('section-pemdes');
            const secBpd = document.getElementById('section-bpd');
            const divider = document.getElementById('partnership-divider');

            filterTabs.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    filterTabs.forEach(function (t) {
                        t.classList.remove('active', 'bg-[#1a0d3d]', 'text-white', 'shadow-sm');
                        t.classList.add('bg-slate-100', 'text-slate-700');
                    });
                    btn.classList.add('active', 'bg-[#1a0d3d]', 'text-white', 'shadow-sm');
                    btn.classList.remove('bg-slate-100', 'text-slate-700');

                    const filter = btn.getAttribute('data-filter');
                    if (filter === 'all') {
                        secPemdes.style.display = 'block';
                        secBpd.style.display = 'block';
                        divider.style.display = 'flex';
                    } else if (filter === 'pemdes') {
                        secPemdes.style.display = 'block';
                        secBpd.style.display = 'none';
                        divider.style.display = 'none';
                    } else if (filter === 'bpd') {
                        secPemdes.style.display = 'none';
                        secBpd.style.display = 'block';
                        divider.style.display = 'none';
                    }
                });
            });

            // 3. Pencarian Real-Time Nama & Jabatan
            const searchInput = document.getElementById('orgSearchInput');
            const clearBtn = document.getElementById('clearSearchBtn');
            const allNodes = document.querySelectorAll('.org-node');

            function runSearch() {
                const q = searchInput.value.trim().toLowerCase();
                if (!q) {
                    clearBtn.classList.add('hidden');
                    allNodes.forEach(function (node) {
                        node.classList.remove('is-dimmed', 'is-highlighted');
                    });
                    return;
                }

                clearBtn.classList.remove('hidden');
                // Buka semua cabang terlipat agar hasil pencarian terlihat
                document.querySelectorAll('.branch-content.collapsed').forEach(function (bc) {
                    bc.classList.remove('collapsed');
                });

                allNodes.forEach(function (node) {
                    const role = (node.getAttribute('data-role') || '').toLowerCase();
                    const name = (node.getAttribute('data-name') || '').toLowerCase();
                    const text = node.textContent.toLowerCase();

                    if (role.includes(q) || name.includes(q) || text.includes(q)) {
                        node.classList.add('is-highlighted');
                        node.classList.remove('is-dimmed');
                    } else {
                        node.classList.add('is-dimmed');
                        node.classList.remove('is-highlighted');
                    }
                });
            }

            searchInput.addEventListener('input', runSearch);
            clearBtn.addEventListener('click', function () {
                searchInput.value = '';
                runSearch();
                searchInput.focus();
            });

            // 4. Tombol Lipat / Buka Cabang (Collapse / Expand)
            const toggleBtns = document.querySelectorAll('.toggle-branch-btn');
            toggleBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const targetId = btn.getAttribute('data-target');
                    const branchEl = document.getElementById(targetId);
                    const icon = btn.querySelector('svg');
                    if (!branchEl) return;

                    branchEl.classList.toggle('collapsed');
                    if (branchEl.classList.contains('collapsed')) {
                        icon.style.transform = 'rotate(-90deg)';
                    } else {
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });

            // 5. Modal Detail Tupoksi Saat Kotak Jabatan Diklik
            const modal = document.getElementById('tupoksiModal');
            const closeBtn = document.getElementById('closeModalBtn');
            const closeFooterBtn = document.getElementById('closeModalFooterBtn');

            allNodes.forEach(function (node) {
                node.addEventListener('click', function () {
                    document.getElementById('modalCategory').textContent = node.getAttribute('data-category') || 'Struktur Desa';
                    document.getElementById('modalRole').textContent = node.getAttribute('data-role') || '';
                    document.getElementById('modalName').textContent = node.getAttribute('data-name') || '-';
                    document.getElementById('modalLine').textContent = node.getAttribute('data-line') || '-';
                    document.getElementById('modalTupoksi').textContent = node.getAttribute('data-tupoksi') || '-';
                    modal.classList.add('open');
                });
            });

            function closeModal() {
                modal.classList.remove('open');
            }

            closeBtn.addEventListener('click', closeModal);
            closeFooterBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function (e) {
                if (e.target === modal) closeModal();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modal.classList.contains('open')) {
                    closeModal();
                }
            });
        });
    </script>

<?php get_footer(); ?>