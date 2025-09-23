<?php
/*
Plugin Name: Hello Custom
Description: Plugin custom sederhana untuk menampilkan pesan di footer.
Version: 1.0
Author: Nama Anda
*/

// Fungsi untuk menampilkan pesan di footer
function hello_custom_footer_message()
{
    echo '<p style="text-align:center;color:green;">Hello, ini pesan dari plugin custom!</p>';
}

// Hook fungsi ke wp_footer
add_action('wp_footer', 'hello_custom_footer_message');
