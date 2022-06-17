<?php
session_start();

/**
 * Plugin Name:       Import Xlsx Plugin
 * Description:       Plugin corresponding to an xlsx file import.
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            Ludovic 
 * Author URI:        https://github.com/ludo06000
 * Text Domain:       import-xlsx-file
 * Domain Path:       /languages
 */

//plugin Xlsx import file
function wporg_options_page() {
    add_menu_page(
        'Import Xlsx',
        'Import Xlsx',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/importXLSX.php',
        null,
        'dashicons-upload',
        20
    );
}

function mentormarketing_product() {

// CPT Product 
$labels = array(
    'name' => 'mentormarketing_product',
    'add_new_item' => 'Ajouter un fichier',
    'edit_new-item' => 'Modifier un produit',
    'menu-name' => 'Produits',
);

$args = array(
    'labels' => $labels,
    'public' => true,
    'menu_position' => 3,
    'menu_icon' => 'dashicons-products',
);

register_post_type( 'Produits', $args);
}

add_action('init', 'mentormarketing_product'); // Le hook init lance la fonction
add_action( 'admin_menu', 'wporg_options_page' );

?>
