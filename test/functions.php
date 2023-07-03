<?php
function yourtheme_enqueue_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style(
        'navbar-styles',
        get_template_directory_uri() . '/assets/css/navbar-styles.css',
        array(),
        '1.0'
    );
}

function yourtheme_enqueue_scripts()
{
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
 

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('mobile-menu', __('Mobile Menu'));
}

add_action('wp_enqueue_scripts', 'yourtheme_enqueue_styles');

add_action('wp_enqueue_scripts', 'yourtheme_enqueue_scripts');
add_action('init', 'register_my_menu');
?>