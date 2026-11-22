<footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800 text-sm">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            
            <!-- Identitas Singkat -->
            <div class="text-center md:text-left">
                <span class="text-slate-200 font-bold block mb-1">Pemerintah Desa Benua Tengah</span>
                <p class="text-xs text-slate-500 font-light">Kecamatan Takisung, Kabupaten Tanah Laut, Kalimantan Selatan.</p>
            </div>
            
            <!-- Tautan Navigasi Ringkas -->
            <div class="flex flex-wrap justify-center gap-6 text-xs font-light text-slate-400">
                <a href="<?php echo home_url('/visi-misi'); ?>" class="hover:text-white transition">Visi Misi</a>
                <a href="<?php echo home_url('/struktur-organisasi'); ?>" class="hover:text-white transition">Struktur Organisasi</a>
                <a href="<?php echo home_url('/potensi'); ?>" class="hover:text-white transition">Potensi</a>
                <a href="<?php echo home_url('/peta-statistik'); ?>" class="hover:text-white transition">Peta & Statistik</a>
                <a href="<?php echo home_url('/kkn-politala-2026'); ?>" class="hover:text-white transition">KKN Politala 2026</a>
            </div>

            <!-- Hak Cipta -->
            <div class="text-center md:text-right text-xs text-slate-500 font-light">
                &copy; 2026 Desa Benua Tengah.<br>Seluruh Hak Cipta Dilindungi.
            </div>

        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>