<?php

namespace App;

function mytheme_supports(){
    add_theme_support('title-tag');
};

function mytheme_register_assets() {
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap' );

};

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
  


add_action('init', 'App\mentormarketing_product'); // Le hook init lance la fonction
add_action('after_setup_theme', 'App\mytheme_supports');
add_action('wp_enqueue_scripts','App\mytheme_register_assets');


