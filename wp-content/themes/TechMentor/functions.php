<?php

function mytheme_supports(){
    add_theme_support('title-tag');
};

function mytheme_register_assets() {
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap' );

};
  
add_action('after_setup_theme', 'App\mytheme_supports');
add_action('wp_enqueue_scripts','App\mytheme_register_assets');


