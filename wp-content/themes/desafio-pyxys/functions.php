<?php

define('INCLUDE_URI', get_template_directory_uri());
define('INCLUDE_PATH', get_template_directory());

function custom_load_scripts(){

    wp_enqueue_style('bundle', INCLUDE_URI.'/public/build/css/bundle.min.css', array(), filemtime(INCLUDE_PATH. '/public/build/css/bundle.min.css'), 'all');
    wp_enqueue_style('bootstrap', INCLUDE_URI.'/dist/css/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('fontawesome', INCLUDE_URI.'/assets/fonts/fontawesome-all.min.css', array(), false, 'all');
    // wp_enqueue_style('font-awesome', INCLUDE_URI.'/assets/fonts/font-awesome.min.css', array(), false, 'all');
    // wp_enqueue_style('fontawesome-over', INCLUDE_URI.'/assets/fonts/fontawesome5-overrides.min.css', array(), false, 'all');

    // wp_enqueue_script('bootstrap', INCLUDE_URI.'/assets/bootstrap/js/bootstrap.min.js', array(), false, true);
    // wp_enqueue_script('sweetalert', '//cdn.jsdelivr.net/npm/sweetalert2@11', array(), null, true);
    // wp_enqueue_script('theme', INCLUDE_URI.'/assets/js/theme.js', array(), false, true);
     wp_enqueue_script('app', INCLUDE_URI.'/public/build/js/app.min.js', array('jquery'), filemtime(INCLUDE_PATH.'/public/build/js/app.min.js'), true);

    // Passa um objeto com parâmetros para o Javascript
    wp_localize_script('app', 'wp', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'home_url' => home_url(),
        'current_page' => get_queried_object()->post_name,
    ));
}
add_action('wp_enqueue_scripts', 'custom_load_scripts', 1);

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    )
);
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

show_admin_bar(false);
