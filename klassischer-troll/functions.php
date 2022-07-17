<?php
 
/* functions für childtheme Klassischer Troll */

function twentyfifteen_child_styles() {
wp_deregister_style( 'twentyfifteen-style');
wp_register_style('twentyfifteen-style', get_template_directory_uri(). '/style.css');
wp_enqueue_style('twentyfifteen-style', get_template_directory_uri(). '/style.css');
wp_enqueue_style( 'childtheme-style', get_stylesheet_directory_uri().'/style.css', array('twentyfifteen-style') );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_child_styles' );

 /* Bei Kommentaren die IP nicht mitloggen
function  wpb_remove_commentsip( $comment_author_ip ) {
	return '';
	}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );
/*