<?php
/**
 * Functions and definitions untuk Tema Desa Benua Tengah
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Pengaturan Dasar Tema & Navigasi Menu
 */
function dbt_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    register_nav_menus( array(
        'primary' => 'Menu Utama Desa Benua Tengah',
        'footer'  => 'Menu Footer Desa Benua Tengah',
    ) );
}
add_action( 'after_setup_theme', 'dbt_theme_setup' );

/**
 * 2. Memuat Stylesheet, Font, & Tailwind CSS
 */
function dbt_enqueue_assets() {
    wp_enqueue_style(
        'dbt-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'dbt-main-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'dbt-tailwind-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );
}
add_action( 'wp_enqueue_scripts', 'dbt_enqueue_assets' );

/**
 * =========================================================================
 * 3. FITUR CRUD TRANSPARANSI ANGGARAN DESA (APBDes - FOTO & PDF)
 * Menu otomatis muncul di Dashboard WordPress: "Anggaran Desa"
 * =========================================================================
 */

// Daftarkan Custom Post Type "Anggaran Desa"
function dbt_register_anggaran_desa_cpt() {
    $labels = array(
        'name'               => 'Anggaran Desa (APBDes)',
        'singular_name'      => 'Anggaran Desa',
        'menu_name'          => 'Anggaran Desa',
        'name_admin_bar'     => 'Anggaran Desa',
        'add_new'            => 'Tambah Tahun Anggaran',
        'add_new_item'       => 'Tambah Data Anggaran Desa Baru',
        'new_item'           => 'Data Anggaran Baru',
        'edit_item'          => 'Edit Data Anggaran Desa',
        'view_item'          => 'Lihat Data Anggaran',
        'all_items'          => 'Semua Tahun Anggaran',
        'search_items'       => 'Cari Tahun Anggaran',
        'not_found'          => 'Belum ada data anggaran desa yang diunggah.',
        'not_found_in_trash' => 'Tidak ada data di tempat sampah.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'anggaran_desa', $args );
}
add_action( 'init', 'dbt_register_anggaran_desa_cpt' );

// Ubah placeholder judul di halaman tambah data
function dbt_anggaran_title_placeholder( $title ) {
    $screen = get_current_screen();
    if ( isset( $screen->post_type ) && 'anggaran_desa' === $screen->post_type ) {
        $title = 'Contoh: APBDes Desa Benua Tengah Tahun Anggaran 2025';
    }
    return $title;
}
add_filter( 'enter_title_here', 'dbt_anggaran_title_placeholder' );

// Tambahkan Formulir Input (Meta Box) Unggah Foto & PDF
function dbt_add_anggaran_meta_boxes() {
    add_meta_box(
        'dbt_anggaran_dokumen_box',
        'Formulir Dokumen & Lampiran APBDes (Foto Infografis & File PDF)',
        'dbt_render_anggaran_meta_box',
        'anggaran_desa',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'dbt_add_anggaran_meta_boxes' );

function dbt_render_anggaran_meta_box( $post ) {
    wp_nonce_field( 'dbt_save_anggaran_meta', 'dbt_anggaran_nonce' );

    $tahun      = get_post_meta( $post->ID, '_dbt_tahun_anggaran', true );
    $status     = get_post_meta( $post->ID, '_dbt_status_anggaran', true );
    $foto_url   = get_post_meta( $post->ID, '_dbt_foto_infografis', true );
    $pdf_url    = get_post_meta( $post->ID, '_dbt_file_pdf', true );
    $keterangan = get_post_meta( $post->ID, '_dbt_keterangan_anggaran', true );
    $pendapatan = get_post_meta( $post->ID, '_dbt_total_pendapatan', true );
    $belanja    = get_post_meta( $post->ID, '_dbt_total_belanja', true );
    $pembiayaan = get_post_meta( $post->ID, '_dbt_total_pembiayaan', true );

    if ( empty( $tahun ) ) {
        $tahun = date( 'Y' );
    }
    ?>
    <style>
        .dbt-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-top: 10px; }
        .dbt-form-full { grid-column: 1 / -1; }
        .dbt-field-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 14px 16px; }
        .dbt-field-box label { display: block; font-weight: 700; color: #1e293b; margin-bottom: 6px; font-size: 13px; }
        .dbt-field-box input[type="text"],
        .dbt-field-box input[type="number"],
        .dbt-field-box select,
        .dbt-field-box textarea { width: 100%; padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 13px; }
        .dbt-hint { display: block; font-size: 11px; color: #64748b; margin-top: 5px; }
        .dbt-upload-row { display: flex; gap: 8px; align-items: center; }
        .dbt-preview-img { margin-top: 10px; max-height: 180px; border-radius: 8px; border: 1px solid #cbd5e1; display: block; }
        .dbt-pdf-badge { display: inline-flex; align-items: center; gap: 6px; margin-top: 10px; background: #ede9fe; color: #1a0d3d; font-weight: 600; font-size: 12px; padding: 6px 12px; border-radius: 6px; }
        @media (max-width: 782px) { .dbt-form-grid { grid-template-columns: 1fr; } }
    </style>

    <div class="dbt-form-grid">
        <div class="dbt-field-box">
            <label for="dbt_tahun_anggaran">Tahun Anggaran *</label>
            <input type="number" id="dbt_tahun_anggaran" name="dbt_tahun_anggaran" value="<?php echo esc_attr( $tahun ); ?>" min="2015" max="2099" required>
            <span class="dbt-hint">Masukkan 4 digit tahun anggaran (contoh: 2025 atau 2026).</span>
        </div>

        <div class="dbt-field-box">
            <label for="dbt_status_anggaran">Status Dokumen Anggaran</label>
            <select id="dbt_status_anggaran" name="dbt_status_anggaran">
                <option value="APBDes Awal" <?php selected( $status, 'APBDes Awal' ); ?>>APBDes Awal (Penetapan)</option>
                <option value="APBDes Perubahan" <?php selected( $status, 'APBDes Perubahan' ); ?>>APBDes Perubahan</option>
                <option value="Laporan Realisasi Akhir Tahun" <?php selected( $status, 'Laporan Realisasi Akhir Tahun' ); ?>>Laporan Realisasi Akhir Tahun</option>
            </select>
            <span class="dbt-hint">Pilih tahapan dokumen anggaran desa yang dipublikasikan.</span>
        </div>

        <div class="dbt-field-box">
            <label for="dbt_foto_infografis">1. Lampiran Foto Infografis / Baliho APBDes (JPG / PNG)</label>
            <div class="dbt-upload-row">
                <input type="text" id="dbt_foto_infografis" name="dbt_foto_infografis" value="<?php echo esc_url( $foto_url ); ?>" placeholder="https://...">
                <button type="button" class="button button-primary" id="dbt_upload_foto_btn">Pilih / Unggah Foto</button>
                <button type="button" class="button" id="dbt_remove_foto_btn" style="<?php echo empty( $foto_url ) ? 'display:none;' : ''; ?>">Hapus</button>
            </div>
            <span class="dbt-hint">Unggah foto baliho atau poster ringkasan APBDes tahunan agar mudah dibaca warga.</span>
            <div id="dbt_foto_preview_wrap">
                <?php if ( ! empty( $foto_url ) ) : ?>
                    <img src="<?php echo esc_url( $foto_url ); ?>" class="dbt-preview-img" alt="Preview Infografis">
                <?php endif; ?>
            </div>
        </div>

        <div class="dbt-field-box">
            <label for="dbt_file_pdf">2. Lampiran Dokumen Resmi APBDes (File PDF)</label>
            <div class="dbt-upload-row">
                <input type="text" id="dbt_file_pdf" name="dbt_file_pdf" value="<?php echo esc_url( $pdf_url ); ?>" placeholder="https://...">
                <button type="button" class="button button-primary" id="dbt_upload_pdf_btn">Pilih / Unggah PDF</button>
                <button type="button" class="button" id="dbt_remove_pdf_btn" style="<?php echo empty( $pdf_url ) ? 'display:none;' : ''; ?>">Hapus</button>
            </div>
            <span class="dbt-hint">Unggah berkas PDF Perdes APBDes atau Laporan Pertanggungjawaban Realisasi.</span>
            <div id="dbt_pdf_preview_wrap">
                <?php if ( ! empty( $pdf_url ) ) : ?>
                    <span class="dbt-pdf-badge">File PDF Terlampir: <?php echo esc_html( basename( $pdf_url ) ); ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="dbt-field-box dbt-form-full">
            <label>Ringkasan Angka Utama (Opsional — Kosongkan jika hanya ingin menampilkan Foto &amp; PDF)</label>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px; margin-top: 8px;">
                <div>
                    <span style="font-size: 11px; font-weight: 600; color: #475569;">Total Pendapatan Desa</span>
                    <input type="text" name="dbt_total_pendapatan" value="<?php echo esc_attr( $pendapatan ); ?>" placeholder="Contoh: Rp 1.450.000.000">
                </div>
                <div>
                    <span style="font-size: 11px; font-weight: 600; color: #475569;">Total Belanja Desa</span>
                    <input type="text" name="dbt_total_belanja" value="<?php echo esc_attr( $belanja ); ?>" placeholder="Contoh: Rp 1.420.000.000">
                </div>
                <div>
                    <span style="font-size: 11px; font-weight: 600; color: #475569;">Total Pembiayaan / SiLPA</span>
                    <input type="text" name="dbt_total_pembiayaan" value="<?php echo esc_attr( $pembiayaan ); ?>" placeholder="Contoh: Rp 30.000.000">
                </div>
            </div>
        </div>

        <div class="dbt-field-box dbt-form-full">
            <label for="dbt_keterangan_anggaran">Catatan / Keterangan Singkat (Opsional)</label>
            <textarea id="dbt_keterangan_anggaran" name="dbt_keterangan_anggaran" rows="3" placeholder="Contoh: Publikasi Peraturan Desa Benua Tengah tentang Anggaran Pendapatan dan Belanja Desa (APBDes) Tahun Anggaran berjalan."><?php echo esc_textarea( $keterangan ); ?></textarea>
        </div>
    </div>
    <?php
}

// Aktifkan WordPress Media Uploader di Halaman Admin Anggaran Desa
function dbt_enqueue_anggaran_admin_media( $hook ) {
    global $post_type;
    if ( ( 'post.php' === $hook || 'post-new.php' === $hook ) && 'anggaran_desa' === $post_type ) {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'dbt_enqueue_anggaran_admin_media' );

function dbt_anggaran_admin_media_script() {
    global $post_type;
    if ( 'anggaran_desa' !== $post_type ) {
        return;
    }
    ?>
    <script>
    jQuery(document).ready(function($) {
        var fotoFrame;
        var pdfFrame;

        $('#dbt_upload_foto_btn').on('click', function(e) {
            e.preventDefault();
            if (fotoFrame) {
                fotoFrame.open();
                return;
            }
            fotoFrame = wp.media({
                title: 'Pilih atau Unggah Foto Infografis APBDes',
                button: { text: 'Gunakan Foto Ini' },
                library: { type: 'image' },
                multiple: false
            });
            fotoFrame.on('select', function() {
                var attachment = fotoFrame.state().get('selection').first().toJSON();
                $('#dbt_foto_infografis').val(attachment.url);
                $('#dbt_foto_preview_wrap').html('<img src="' + attachment.url + '" class="dbt-preview-img" alt="Preview">');
                $('#dbt_remove_foto_btn').show();
            });
            fotoFrame.open();
        });

        $('#dbt_remove_foto_btn').on('click', function() {
            $('#dbt_foto_infografis').val('');
            $('#dbt_foto_preview_wrap').html('');
            $(this).hide();
        });

        $('#dbt_upload_pdf_btn').on('click', function(e) {
            e.preventDefault();
            if (pdfFrame) {
                pdfFrame.open();
                return;
            }
            pdfFrame = wp.media({
                title: 'Pilih atau Unggah Dokumen PDF APBDes',
                button: { text: 'Gunakan File PDF Ini' },
                library: { type: 'application/pdf' },
                multiple: false
            });
            pdfFrame.on('select', function() {
                var attachment = pdfFrame.state().get('selection').first().toJSON();
                $('#dbt_file_pdf').val(attachment.url);
                $('#dbt_pdf_preview_wrap').html('<span class="dbt-pdf-badge">File PDF Terlampir: ' + attachment.filename + '</span>');
                $('#dbt_remove_pdf_btn').show();
            });
            pdfFrame.open();
        });

        $('#dbt_remove_pdf_btn').on('click', function() {
            $('#dbt_file_pdf').val('');
            $('#dbt_pdf_preview_wrap').html('');
            $(this).hide();
        });
    });
    </script>
    <?php
}
add_action( 'admin_footer', 'dbt_anggaran_admin_media_script' );

// Simpan Data CRUD Saat Tombol Publish / Update Ditekan
function dbt_save_anggaran_desa_meta( $post_id ) {
    if ( ! isset( $_POST['dbt_anggaran_nonce'] ) || ! wp_verify_nonce( $_POST['dbt_anggaran_nonce'], 'dbt_save_anggaran_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['dbt_tahun_anggaran'] ) ) {
        update_post_meta( $post_id, '_dbt_tahun_anggaran', sanitize_text_field( $_POST['dbt_tahun_anggaran'] ) );
    }
    if ( isset( $_POST['dbt_status_anggaran'] ) ) {
        update_post_meta( $post_id, '_dbt_status_anggaran', sanitize_text_field( $_POST['dbt_status_anggaran'] ) );
    }
    if ( isset( $_POST['dbt_foto_infografis'] ) ) {
        update_post_meta( $post_id, '_dbt_foto_infografis', esc_url_raw( $_POST['dbt_foto_infografis'] ) );
    }
    if ( isset( $_POST['dbt_file_pdf'] ) ) {
        update_post_meta( $post_id, '_dbt_file_pdf', esc_url_raw( $_POST['dbt_file_pdf'] ) );
    }
    if ( isset( $_POST['dbt_keterangan_anggaran'] ) ) {
        update_post_meta( $post_id, '_dbt_keterangan_anggaran', sanitize_textarea_field( $_POST['dbt_keterangan_anggaran'] ) );
    }
    if ( isset( $_POST['dbt_total_pendapatan'] ) ) {
        update_post_meta( $post_id, '_dbt_total_pendapatan', sanitize_text_field( $_POST['dbt_total_pendapatan'] ) );
    }
    if ( isset( $_POST['dbt_total_belanja'] ) ) {
        update_post_meta( $post_id, '_dbt_total_belanja', sanitize_text_field( $_POST['dbt_total_belanja'] ) );
    }
    if ( isset( $_POST['dbt_total_pembiayaan'] ) ) {
        update_post_meta( $post_id, '_dbt_total_pembiayaan', sanitize_text_field( $_POST['dbt_total_pembiayaan'] ) );
    }
}
add_action( 'save_post_anggaran_desa', 'dbt_save_anggaran_desa_meta' );

// Validasi data anggaran sebelum record dipublikasikan
function dbt_validate_anggaran_desa( $post_id, $post ) {
    if ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) {
        return;
    }

    if ( 'anggaran_desa' !== $post->post_type ) {
        return;
    }

    $tahun  = absint( get_post_meta( $post_id, '_dbt_tahun_anggaran', true ) );
    $status = get_post_meta( $post_id, '_dbt_status_anggaran', true );

    if ( empty( $tahun ) || $tahun < 2015 || $tahun > 2099 ) {
        update_post_meta( $post_id, '_dbt_tahun_anggaran', date( 'Y' ) );
    }

    $status_izin = array( 'APBDes Awal', 'APBDes Perubahan', 'Laporan Realisasi Akhir Tahun' );
    if ( ! in_array( $status, $status_izin, true ) ) {
        update_post_meta( $post_id, '_dbt_status_anggaran', 'APBDes Awal' );
    }
}
add_action( 'save_post_anggaran_desa', 'dbt_validate_anggaran_desa', 20, 2 );

// Tambahkan kolom administrasi yang mudah dipindai admin
function dbt_anggaran_admin_sortable_columns( $columns ) {
    $columns['tahun'] = 'tahun_anggaran';
    $columns['status_doc'] = 'status_anggaran';
    return $columns;
}
add_filter( 'manage_edit-anggaran_desa_sortable_columns', 'dbt_anggaran_admin_sortable_columns' );

function dbt_anggaran_admin_sort_query( $query ) {
    if ( ! is_admin() || ! $query->is_main_query() ) {
        return;
    }

    if ( 'tahun_anggaran' === $query->get( 'orderby' ) ) {
        $query->set( 'meta_key', '_dbt_tahun_anggaran' );
        $query->set( 'orderby', 'meta_value_num' );
    }

    if ( 'status_anggaran' === $query->get( 'orderby' ) ) {
        $query->set( 'meta_key', '_dbt_status_anggaran' );
        $query->set( 'orderby', 'meta_value' );
    }
}
add_action( 'pre_get_posts', 'dbt_anggaran_admin_sort_query' );

// Rapikan Kolom Daftar Tabel di Dashboard Admin (Read View)
function dbt_anggaran_admin_columns( $columns ) {
    return array(
        'cb'         => '<input type="checkbox" />',
        'title'      => 'Judul Dokumen Anggaran',
        'tahun'      => 'Tahun',
        'status_doc' => 'Status',
        'lampiran'   => 'Kelengkapan Berkas',
        'date'       => 'Tanggal Publikasi',
    );
}
add_filter( 'manage_anggaran_desa_posts_columns', 'dbt_anggaran_admin_columns' );

function dbt_anggaran_admin_column_content( $column, $post_id ) {
    if ( 'tahun' === $column ) {
        $tahun = get_post_meta( $post_id, '_dbt_tahun_anggaran', true );
        echo '<strong>' . esc_html( $tahun ? $tahun : '-' ) . '</strong>';
    } elseif ( 'status_doc' === $column ) {
        $status = get_post_meta( $post_id, '_dbt_status_anggaran', true );
        echo esc_html( $status ? $status : 'APBDes Awal' );
    } elseif ( 'lampiran' === $column ) {
        $foto = get_post_meta( $post_id, '_dbt_foto_infografis', true );
        $pdf  = get_post_meta( $post_id, '_dbt_file_pdf', true );
        echo $foto ? '<span style="color:#15803d;font-weight:600;">&#10003; Foto</span> &nbsp; ' : '<span style="color:#94a3b8;">&#10005; Foto</span> &nbsp; ';
        echo $pdf ? '<span style="color:#15803d;font-weight:600;">&#10003; PDF</span>' : '<span style="color:#94a3b8;">&#10005; PDF</span>';
    }
}
add_action( 'manage_anggaran_desa_posts_custom_column', 'dbt_anggaran_admin_column_content', 10, 2 );

// Sembunyikan Admin Bar dari tampilan publik dan tampilan depan.
// Hak tambah, edit, dan hapus tetap hanya tersedia melalui /wp-admin bagi admin.
add_filter( 'show_admin_bar', '__return_false' );