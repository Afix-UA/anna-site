<?php
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

        function my_scripts_method(){

            wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
            // wp_enqueue_style( 'style-min', get_template_directory_uri() . '/assets/css/style.min.css');

            wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
    }

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

?>
