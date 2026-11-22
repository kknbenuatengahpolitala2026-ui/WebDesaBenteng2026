<?php get_header(); ?>

    <header class="bg-blue-900 text-white py-16 text-center shadow-md">
        <div class="container mx-auto px-4">
            <span class="bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Pengabdian Masyarakat</span>
            <h1 class="text-3xl md:text-5xl font-extrabold mb-2">KKN Politala 2026</h1>
            <p class="text-blue-200 text-sm md:text-base">Kolaborasi Mahasiswa Politeknik Negeri Tanah Laut Bersama Warga Desa Benua Tengah</p>
        </div>
    </header>

    <main class="py-16 bg-gray-50 min-h-[50vh]">
        <div class="container mx-auto px-4 max-w-5xl">
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12 text-gray-700 leading-relaxed mb-12">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                else:
                    ?>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Program KKN Politala 2026</h2>
                    <p class="text-gray-600 mb-6">
                        Program Kuliah Kerja Nyata mahasiswa Politeknik Negeri Tanah Laut di Desa Benua Tengah berfokus pada penerapan teknologi tepat guna, digitalisasi administrasi desa, serta pengembangan potensi lokal demi kesejahteraan masyarakat.
                    </p>
                    <?php
                endif;
                ?>
            </div>

            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Fokus Program Kerja & Dokumentasi</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="bg-blue-100 text-blue-900 h-40 rounded-xl flex items-center justify-center font-bold text-sm mb-4">[ Foto Proker Digitalisasi ]</div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2">Digitalisasi Desa</h4>
                        <p class="text-sm text-gray-600">Pengembangan website profil desa dan optimalisasi layanan administrasi online berbasis Google Forms.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="bg-blue-100 text-blue-900 h-40 rounded-xl flex items-center justify-center font-bold text-sm mb-4">[ Foto Proker UMKM ]</div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2">Pemberdayaan UMKM</h4>
                        <p class="text-sm text-gray-600">Pelatihan pemasaran digital dan pengemasan produk lokal unggulan warga Desa Benua Tengah.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="bg-blue-100 text-blue-900 h-40 rounded-xl flex items-center justify-center font-bold text-sm mb-4">[ Foto Kegiatan Sosial ]</div>
                        <h4 class="font-bold text-lg text-gray-800 mb-2">Edukasi & Lingkungan</h4>
                        <p class="text-sm text-gray-600">Program penyuluhan kesehatan, kebersihan lingkungan, serta kegiatan sosial bersama warga dan anak-anak desa.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php get_footer(); ?>