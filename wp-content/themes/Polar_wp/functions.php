<?php 

add_action( 'wp_enqueue_scripts',function () {
	wp_enqueue_style( 'style',get_template_directory_uri() .'/src/css/index.css');



	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/src/js/index.min.js', array(), '1.0.0', true )
    ;
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>