<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( "fontawesome" ,"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child', get_stylesheet_directory_uri(). '/style.css',array( 'parent'),rand(111,9999));
     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Monoton&display=swap', false );
 	wp_enqueue_style( 'raleway','https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,500;0,600;1,300&display=swap', false );
}


?>