<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-blue-950 selection:text-white">

    <nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-slate-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 group">
                    <!-- Memuat logotanahlaut.png dengan format landscape (h-10 w-auto object-contain) -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotanahlaut.png" alt="Logo Desa Benua Tengah" class="h-10 w-auto object-contain rounded-lg shadow-sm group-hover:scale-105 transition">
                    <div>
                        <span class="text-lg font-bold text-slate-900 block leading-tight">Desa Benua Tengah</span>
                        <span class="text-xs text-slate-500 font-medium">Kabupaten Tanah Laut</span>
                    </div>
                </a>
            </div>
            <div class="hidden lg:flex space-x-8 font-medium text-sm text-slate-600">
                <a href="<?php echo home_url(); ?>" class="hover:text-blue-950 transition">Beranda</a>
                <a href="<?php echo home_url('/visi-misi'); ?>" class="hover:text-blue-950 transition">Visi Misi</a>
                <a href="<?php echo home_url('/struktur-organisasi'); ?>" class="hover:text-blue-950 transition">Struktur Organisasi</a>
                <a href="<?php echo home_url('/potensi'); ?>" class="hover:text-blue-950 transition">Potensi</a>
                <a href="<?php echo home_url('/peta-statistik'); ?>" class="hover:text-blue-950 transition">Peta & Statistik</a>
                <a href="<?php echo home_url('/kkn-politala-2026'); ?>" class="hover:text-blue-950 transition">KKN Politala 2026</a>
            </div>
        </div>
    </nav>