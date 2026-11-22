<?php get_header(); ?>

    <header class="bg-gradient-to-br from-blue-950 via-blue-900 to-slate-900 text-white py-20 text-center relative overflow-hidden shadow-lg">
        <div class="absolute inset-0 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <span class="bg-blue-900/80 border border-blue-700/50 text-blue-200 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-widest mb-4 inline-block shadow-sm">Pemerintahan Desa</span>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-3">Visi dan Misi Desa</h1>
            <p class="text-blue-200/90 text-base max-w-xl mx-auto font-light">Landasan arah pembangunan dan komitmen pelayanan publik Desa Benua Tengah</p>
        </div>
    </header>

    <main class="py-20 bg-slate-50">
        <div class="container mx-auto px-6 max-w-4xl">
            
            <!-- Visi Card -->
            <div class="bg-white rounded-3xl shadow-xl shadow-slate-100 border border-slate-100 p-8 md:p-12 mb-10 relative overflow-hidden group hover:border-blue-200 transition-all duration-300">
                <div class="absolute top-0 left-0 w-2 h-full bg-blue-950"></div>
                <div class="flex items-center space-x-3 mb-4">
                    <span class="bg-blue-50 text-blue-950 font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-lg">Visi Utama</span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-slate-900 leading-snug">
                    "Terwujudnya Desa Benua Tengah yang Mandiri, Transparan, Sejahtera, dan Berbasis Teknologi Menuju Masyarakat yang Unggul."
                </h3>
            </div>

            <!-- Misi Card -->
            <div class="bg-white rounded-3xl shadow-xl shadow-slate-100 border border-slate-100 p-8 md:p-12 relative overflow-hidden hover:border-blue-200 transition-all duration-300">
                <div class="absolute top-0 left-0 w-2 h-full bg-amber-500"></div>
                <div class="flex items-center space-x-3 mb-6">
                    <span class="bg-amber-50 text-amber-700 font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-lg">Misi Pembangunan</span>
                </div>
                <div class="space-y-6 text-slate-600 leading-relaxed">
                    <div class="flex items-start space-x-4">
                        <span class="bg-blue-950 text-white font-bold text-sm w-7 h-7 rounded-xl flex items-center justify-center shrink-0 mt-0.5 shadow-sm">1</span>
                        <p><strong class="text-slate-900">Tata Kelola Pemerintahan:</strong> Meningkatkan kualitas pelayanan publik yang transparan, akuntabel, dan bebas korupsi di lingkungan aparatur desa.</p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="bg-blue-950 text-white font-bold text-sm w-7 h-7 rounded-xl flex items-center justify-center shrink-0 mt-0.5 shadow-sm">2</span>
                        <p><strong class="text-slate-900">Digitalisasi Layanan:</strong> Mengoptimalkan pemanfaatan teknologi informasi dalam administrasi kependudukan dan penyebaran informasi desa.</p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="bg-blue-950 text-white font-bold text-sm w-7 h-7 rounded-xl flex items-center justify-center shrink-0 mt-0.5 shadow-sm">3</span>
                        <p><strong class="text-slate-900">Pemberdayaan Ekonomi:</strong> Mengembangkan potensi lokal sektor pertanian, perkebunan, dan UMKM guna meningkatkan kesejahteraan ekonomi warga.</p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="bg-blue-950 text-white font-bold text-sm w-7 h-7 rounded-xl flex items-center justify-center shrink-0 mt-0.5 shadow-sm">4</span>
                        <p><strong class="text-slate-900">Infrastruktur & Lingkungan:</strong> Membangun sarana prasarana desa yang merata serta menjaga kelestarian lingkungan hidup yang sehat dan bersih.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php get_footer(); ?>