<?php get_header(); ?>

    <header class="bg-blue-900 text-white py-16 text-center shadow-md">
        <div class="container mx-auto px-4">
            <span class="bg-blue-800 text-blue-100 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Pemerintahan Desa</span>
            <h1 class="text-3xl md:text-5xl font-extrabold mb-2">Struktur Organisasi</h1>
            <p class="text-blue-200 text-sm md:text-base">Bagan Susunan Organisasi dan Tata Kerja Pemerintahan Desa Benua Tengah</p>
        </div>
    </header>

    <main class="py-16 bg-gray-50 min-h-[60vh]">
        <div class="container mx-auto px-4 max-w-5xl">
            
            <div class="flex flex-col items-center mb-10">
                <div class="w-full max-w-sm bg-white rounded-2xl shadow-md border border-blue-100 p-6 text-center hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Bapak [Nama Kepala Desa]</h3>
                    <p class="text-blue-900 font-semibold text-sm mt-1">Kepala Desa Benua Tengah</p>
                    <p class="text-gray-500 text-xs mt-2">Pimpinan Eksekutif Pemerintahan Desa</p>
                </div>
                <div class="w-1 h-10 bg-blue-300 my-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center space-x-4 hover:shadow-md transition">
                    <div>
                        <h4 class="font-bold text-lg text-gray-900">Sekretaris Desa</h4>
                        <p class="text-blue-900 text-sm font-medium">[Nama Sekretaris Desa]</p>
                        <p class="text-gray-500 text-xs mt-1">Koordinator Administrasi & Keuangan</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center space-x-4 hover:shadow-md transition">
                    <div>
                        <h4 class="font-bold text-lg text-gray-900">Kasi Pemerintahan</h4>
                        <p class="text-blue-900 text-sm font-medium">[Nama Kasi Pemerintahan]</p>
                        <p class="text-gray-500 text-xs mt-1">Bidang Kependudukan & Ketertiban</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 text-center hover:shadow-md transition">
                    <h5 class="font-bold text-gray-900">Kaur Keuangan</h5>
                    <p class="text-xs text-blue-900 font-medium mt-1">[Nama Kaur Keuangan]</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 text-center hover:shadow-md transition">
                    <h5 class="font-bold text-gray-900">Kaur Umum & Perencanaan</h5>
                    <p class="text-xs text-blue-900 font-medium mt-1">[Nama Kaur Umum]</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 text-center hover:shadow-md transition">
                    <h5 class="font-bold text-gray-900">Kasi Kesejahteraan & Pelayanan</h5>
                    <p class="text-xs text-blue-900 font-medium mt-1">[Nama Kasi Kesra]</p>
                </div>
            </div>

        </div>
    </main>

<?php get_footer(); ?>