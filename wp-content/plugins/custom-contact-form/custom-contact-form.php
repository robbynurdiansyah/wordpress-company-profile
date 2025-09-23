<?php
/*
Plugin Name: Custom Contact Form
Description: Plugin custom sederhana untuk menampilkan contact form dan mengirim email ke admin.
Version: 1.0
Author: Nama Anda
*/

// Tambahkan CSS khusus untuk form
function ccf_enqueue_styles()
{
    echo '
    <style>
    .ccf-form-wrapper {
        max-width: 400px;
        margin: 30px auto;
        padding: 24px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    }
    .ccf-form-wrapper input,
    .ccf-form-wrapper textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 15px;
    }
    .ccf-form-wrapper button {
        background: #007cba;
        color: #fff;
        border: none;
        padding: 10px 24px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .ccf-form-wrapper button:hover {
        background: #005a87;
    }
    </style>
    ';
}
add_action('wp_head', 'ccf_enqueue_styles');

// Fungsi untuk menampilkan form dan proses submit
function ccf_display_form()
{
    // Proses submit
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ccf_name'])) {
        $name    = sanitize_text_field($_POST['ccf_name']);
        $email   = sanitize_email($_POST['ccf_email']);
        $message = sanitize_textarea_field($_POST['ccf_message']);

        $admin_email = get_option('admin_email');
        $subject = "Pesan Baru dari $name";
        $body    = "Nama: $name\nEmail: $email\nPesan:\n$message";

        wp_mail($admin_email, $subject, $body);

        echo '<div style="color:green;">Pesan berhasil dikirim!</div>';
    }

    // Tampilkan form
    ob_start();
?>
    <div class="ccf-form-wrapper">
        <form method="post">
            <input type="text" name="ccf_name" placeholder="Nama" required />
            <input type="email" name="ccf_email" placeholder="Email" required />
            <textarea name="ccf_message" placeholder="Pesan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
<?php
    return ob_get_clean();
}

// Daftarkan shortcode [custom_contact_form]
add_shortcode('custom_contact_form', 'ccf_display_form');
