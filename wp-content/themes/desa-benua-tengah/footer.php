<footer class="bg-[#12082b] text-slate-300 border-t border-white/10 text-sm">
        <div class="container mx-auto px-5 md:px-8 py-12 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 pb-8 border-b border-white/10">
                <div class="md:col-span-5">
                    <span class="text-lg font-extrabold text-white block mb-2">Pemerintah Desa Benua Tengah</span>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        Kecamatan Takisung, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan. Media informasi resmi penyelenggaraan pemerintahan, pembangunan, dan pelayanan publik desa.
                    </p>
                </div>
                
                <div class="md:col-span-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block mb-3">Navigasi Cepat</span>
                    <ul class="grid grid-cols-2 gap-2 text-xs text-slate-300">
                        <li><a href="<?php echo esc_url( home_url('/profil-desa') ); ?>" class="hover:text-white transition-colors">Profil Desa</a></li>
                        <li><a href="<?php echo esc_url( home_url('/struktur-organisasi') ); ?>" class="hover:text-white transition-colors">Struktur Organisasi</a></li>
                        <li><a href="<?php echo esc_url( home_url('/potensi') ); ?>" class="hover:text-white transition-colors">Potensi Desa</a></li>
                        <li><a href="<?php echo esc_url( home_url('/peta-statistik') ); ?>" class="hover:text-white transition-colors">Peta &amp; Statistik</a></li>
                        <li><a href="<?php echo esc_url( home_url('/kkn-politala-2026') ); ?>" class="hover:text-white transition-colors">KKN Politala 2026</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block mb-3">Pelayanan Publik</span>
                    <a href="https://linktr.ee/pemdesbenuatengah" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/15 border border-white/15 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-all">
                        <span>Portal Layanan Surat</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-slate-400">
                <p>&copy; 2026 Pemerintah Desa Benua Tengah. Hak Cipta Dilindungi.</p>
                <p>Kecamatan Takisung, Kabupaten Tanah Laut</p>
                <div class="inline-flex items-center gap-2">
                    <span class="text-slate-300">Sosial Media</span>
                    <a href="https://www.instagram.com/pemdesbenuatengah?rpxt=aTFjbjV3c3QzdmZ4" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/15 border border-white/15 text-white text-xs font-bold px-3 py-2 rounded-xl transition-all" aria-label="Instagram Pemerintah Desa Benua Tengah">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4 fill-current">
                            <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A5.5 5.5 0 1 1 6.5 13 5.5 5.5 0 0 1 12 7.5zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5zm5.25-3.25a1.25 1.25 0 1 1-1.25 1.25 1.25 1.25 0 0 1 1.25-1.25z"/>
                        </svg>
                        
                    </a>
                    <a href="https://www.tiktok.com/@pemdesbenuatengah?is_from_webapp=1&amp;sender_device=pc" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/15 border border-white/15 text-white text-xs font-bold px-3 py-2 rounded-xl transition-all" aria-label="TikTok Pemerintah Desa Benua Tengah">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4 fill-current">
                            <path d="M16.7 5.1c.7.9 1.8 1.6 3.3 1.8v3.2a8.2 8.2 0 0 1-3.3-.8v6.2a6.1 6.1 0 1 1-5.3-6v3.3a2.9 2.9 0 1 0 2 2.8V2h3.3v.2c.1 1.2.4 2.2 1 2.9z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('bt-mobile-btn')?.addEventListener('click', function () {
                document.getElementById('bt-mobile-menu')?.classList.toggle('hidden');
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>