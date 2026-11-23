<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo is_front_page() ? 'Benua Tengah — Kecamatan Takisung, Kabupaten Tanah Laut' : wp_title('|', false, 'right') . 'Benua Tengah'; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        utama: {
                            950: '#12082b',
                            900: '#1a0d3d',
                            800: '#261456',
                            700: '#351c75',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeUpSoft {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero-anim-1 { animation: fadeUpSoft 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .hero-anim-2 { opacity: 0; animation: fadeUpSoft 0.7s cubic-bezier(0.16, 1, 0.3, 1) 0.12s forwards; }
        .hero-anim-3 { opacity: 0; animation: fadeUpSoft 0.7s cubic-bezier(0.16, 1, 0.3, 1) 0.24s forwards; }

        .reveal-up {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-up.is-visible { opacity: 1; transform: translateY(0); }

        .card-hover-lift {
            position: relative;
            overflow: hidden;
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease, border-color 0.35s ease;
        }
        .card-hover-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -12px rgba(26, 13, 61, 0.14);
        }
        .card-hover-lift::after {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.45), transparent);
            transform: skewX(-20deg);
            transition: left 0.75s ease;
            pointer-events: none;
        }
        .card-hover-lift:hover::after { left: 140%; }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-[#1a0d3d] selection:text-white">

    <?php $is_profil_group = ( is_page('profil-desa') || is_page('struktur-organisasi') || is_page('peta-statistik') ); ?>

    <!-- Navigasi Utama -->
    <nav class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-slate-200/80 shadow-sm">
        <div class="container mx-auto px-5 md:px-8 py-3.5 flex justify-between items-center gap-6">
            <!-- Identitas Desa (Ringkas & Proporsional) -->
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="flex items-center gap-3 shrink-0 group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotanahlaut.png" alt="Logo Kabupaten Tanah Laut" onerror="this.style.display='none'" class="h-10 md:h-11 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <div>
                    <span class="text-lg md:text-xl font-extrabold text-[#1a0d3d] block leading-tight tracking-tight">Desa Benua Tengah</span>
                    <span class="text-[11px] sm:text-xs text-slate-500 font-medium block leading-snug mt-0.5">Kec. Takisung, Kab. Tanah Laut</span>
                </div>
            </a>

            <!-- Menu Desktop (5 Item Utama + Dropdown Profil Desa) -->
            <div class="hidden lg:flex items-center gap-6 xl:gap-7 text-sm font-semibold text-slate-600 whitespace-nowrap">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="transition-colors <?php echo is_front_page() ? 'text-[#1a0d3d] font-bold' : 'hover:text-[#1a0d3d]'; ?>">Beranda</a>

                <!-- Dropdown Profil Desa -->
                <div class="relative group">
                    <button type="button" aria-haspopup="true" class="inline-flex items-center gap-1 py-2 transition-colors <?php echo $is_profil_group ? 'text-[#1a0d3d] font-bold' : 'hover:text-[#1a0d3d]'; ?>">
                        <span>Profil Desa</span>
                        <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="invisible opacity-0 translate-y-1 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 absolute left-0 top-full pt-2 w-60 z-50">
                        <div class="bg-white rounded-2xl shadow-xl shadow-slate-900/10 border border-slate-100 p-2 space-y-1">
                            <a href="<?php echo esc_url( home_url('/profil-desa') ); ?>" class="block px-3.5 py-2.5 rounded-xl text-xs transition-colors <?php echo is_page('profil-desa') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-[#1a0d3d]'; ?>">
                                <span class="block font-bold">Tentang &amp; Sejarah Desa</span>
                                <span class="text-[11px] text-slate-400 font-normal">Visi misi dan gambaran umum</span>
                            </a>
                            <a href="<?php echo esc_url( home_url('/struktur-organisasi') ); ?>" class="block px-3.5 py-2.5 rounded-xl text-xs transition-colors <?php echo is_page('struktur-organisasi') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-[#1a0d3d]'; ?>">
                                <span class="block font-bold">Struktur Organisasi</span>
                                <span class="text-[11px] text-slate-400 font-normal">Perangkat Pemdes &amp; BPD</span>
                            </a>
                            <a href="<?php echo esc_url( home_url('/peta-statistik') ); ?>" class="block px-3.5 py-2.5 rounded-xl text-xs transition-colors <?php echo is_page('peta-statistik') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-[#1a0d3d]'; ?>">
                                <span class="block font-bold">Peta &amp; Statistik</span>
                                <span class="text-[11px] text-slate-400 font-normal">Batas wilayah dan kependudukan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url('/potensi') ); ?>" class="transition-colors <?php echo is_page('potensi') ? 'text-[#1a0d3d] font-bold' : 'hover:text-[#1a0d3d]'; ?>">Potensi</a>
                <a href="<?php echo esc_url( home_url('/anggaran-desa') ); ?>" class="transition-colors <?php echo is_page('anggaran-desa') ? 'text-[#1a0d3d] font-bold' : 'hover:text-[#1a0d3d]'; ?>">Anggaran Desa</a>
                <a href="<?php echo esc_url( home_url('/kkn-politala-2026') ); ?>" class="transition-colors <?php echo is_page('kkn-politala-2026') ? 'text-[#1a0d3d] font-bold' : 'hover:text-[#1a0d3d]'; ?>">KKN Politala 2026</a>

                <a href="https://linktr.ee/pemdesbenuatengah" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 bg-[#1a0d3d] hover:bg-[#261456] text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-md shadow-[#1a0d3d]/20 hover:-translate-y-0.5 transition-all shrink-0">
                    <span>Layanan Surat</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>

                <!-- Tombol Kelola Admin: hanya tampil saat admin login -->
                <?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
                    <a href="<?php echo esc_url( admin_url() ); ?>" class="inline-flex items-center gap-1.5 border border-[#1a0d3d]/20 bg-purple-50 text-[#1a0d3d] hover:bg-purple-100 text-xs font-bold px-3.5 py-2.5 rounded-xl transition-all shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15.5A3.5 3.5 0 1012 8.5a3.5 3.5 0 000 7zm7-3.5a7 7 0 11-14 0 7 7 0 0114 0zM12 12h.01"></path>
                        </svg>
                        <span>Kelola</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Tombol Admin Langsung untuk Mobile -->
            <?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
                <a href="<?php echo esc_url( admin_url() ); ?>" class="lg:hidden inline-flex items-center gap-1.5 border border-[#1a0d3d]/20 bg-purple-50 text-[#1a0d3d] text-[11px] font-bold px-2.5 py-2 rounded-xl shrink-0">
                    Kelola
                </a>
            <?php endif; ?>

            <!-- Tombol Menu Mobile -->
            <button id="bt-mobile-btn" type="button" aria-label="Buka Menu" class="lg:hidden p-2 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Dropdown Menu Mobile -->
        <div id="bt-mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-200 px-5 py-4 space-y-1 text-sm font-semibold text-slate-700">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="block py-2 px-3 rounded-xl <?php echo is_front_page() ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Beranda</a>
            <div class="pt-1 pb-1">
                <span class="block px-3 py-1 text-[11px] font-extrabold uppercase tracking-wider text-slate-400">Profil Desa</span>
                <a href="<?php echo esc_url( home_url('/profil-desa') ); ?>" class="block py-2 pl-5 pr-3 rounded-xl <?php echo is_page('profil-desa') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Tentang &amp; Sejarah Desa</a>
                <a href="<?php echo esc_url( home_url('/struktur-organisasi') ); ?>" class="block py-2 pl-5 pr-3 rounded-xl <?php echo is_page('struktur-organisasi') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Struktur Organisasi</a>
                <a href="<?php echo esc_url( home_url('/peta-statistik') ); ?>" class="block py-2 pl-5 pr-3 rounded-xl <?php echo is_page('peta-statistik') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Peta &amp; Statistik</a>
            </div>
            <a href="<?php echo esc_url( home_url('/potensi') ); ?>" class="block py-2 px-3 rounded-xl <?php echo is_page('potensi') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Potensi</a>
            <a href="<?php echo esc_url( home_url('/anggaran-desa') ); ?>" class="block py-2 px-3 rounded-xl <?php echo is_page('anggaran-desa') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">Anggaran Desa</a>
            <a href="<?php echo esc_url( home_url('/kkn-politala-2026') ); ?>" class="block py-2 px-3 rounded-xl <?php echo is_page('kkn-politala-2026') ? 'bg-purple-50 text-[#1a0d3d] font-bold' : ''; ?>">KKN Politala 2026</a>
            <div class="pt-3 mt-2 border-t border-slate-100">
                <a href="https://linktr.ee/pemdesbenuatengah" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-[#1a0d3d] hover:bg-[#261456] text-white font-bold py-2.5 rounded-xl">
                    Layanan Surat Online
                </a>
            </div>

            <!-- Tombol Masuk Admin / Kelola Admin -->
            <div class="pt-3 mt-2 border-t border-slate-100">
                <?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
                    <a href="<?php echo esc_url( admin_url() ); ?>" class="block w-full text-center bg-purple-100 text-[#1a0d3d] font-bold py-2.5 rounded-xl mb-2">
                        Kelola Admin
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>