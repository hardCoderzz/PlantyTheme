<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_style');

function theme_enqueue_style()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',get_stylesheet_uri(), array('parent-style'));
}

function register_planty_menu() {
    register_nav_menu('Primary menu',__( 'Planty Menu' ));
   }

 add_action( 'init', 'register_planty_menu' );
  
?>  
