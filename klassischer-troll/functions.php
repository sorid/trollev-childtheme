<?php
 
/* functions für childtheme Klassischer Troll */

function twentyfifteen_child_styles() {
  wp_deregister_style( 'twentyfifteen-style');
  wp_register_style('twentyfifteen-style', get_template_directory_uri(). '/style.css');
  wp_enqueue_style('twentyfifteen-style', get_template_directory_uri(). '/style.css');
  wp_enqueue_style( 'childtheme-style', get_stylesheet_directory_uri().'/style.css', array('twentyfifteen-style') );
}

/* Goolegfonst entfernen */
function wpse_dequeue_google_fonts() {
    wp_dequeue_style( 'twentyfifteen-fonts' );
}

add_action( 'wp_enqueue_scripts', 'wpse_dequeue_google_fonts', 20 );

/* Child Theme laden */
add_action( 'wp_enqueue_scripts', 'twentyfifteen_child_styles' );
