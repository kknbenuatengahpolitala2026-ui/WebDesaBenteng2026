<?php get_header(); ?>

    <header class="bg-gradient-to-br from-blue-950 via-blue-900 to-slate-900 text-white py-16 text-center shadow-md relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-3xl md:text-4xl font-extrabold mb-3 tracking-tight"><?php the_title(); ?></h1>
            
            <!-- Jejak Navigasi (Breadcrumbs) -->
            <div class="flex justify-center items-center space-x-2 text-xs text-blue-200/80 uppercase tracking-widest font-medium">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition">Beranda</a>
                <span>/</span>
                <span class="text-amber-400"><?php the_title(); ?></span>
            </div>
        </div>
    </header>

    <main class="py-20 bg-slate-50 min-h-[50vh]">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-white rounded-3xl shadow-xl shadow-slate-100 border border-slate-100 p-8 md:p-12 text-slate-600 leading-relaxed font-light">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                else:
                    ?>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4"><?php the_title(); ?></h2>
                    <p class="text-slate-500 mb-6 font-light">
                        Informasi lengkap mengenai halaman ini sedang dalam tahap penyusunan oleh tim pengelola website Desa Benua Tengah.
                    </p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>