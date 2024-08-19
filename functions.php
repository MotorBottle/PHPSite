<?php
// Theme setup function
function my_theme_setup() {
    // Enable support for document title tag
    add_theme_support('title-tag');

    // Enable support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Enqueue styles and scripts
function my_theme_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/static/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/static/css/font-awesome.min.css');
    wp_enqueue_style('lightcase', get_template_directory_uri() . '/static/css/lightcase.css');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/static/css/meanmenu.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/static/css/nice-select.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/static/css/owl.carousel.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/static/css/animate.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/static/css/style.css');

    // Enqueue scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/static/js/jquery-2.2.4.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/static/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/static/js/jquery.meanmenu.min.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/static/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('lightcase', get_template_directory_uri() . '/static/js/lightcase.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/static/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('tilt', get_template_directory_uri() . '/static/js/tilt.jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/static/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/static/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/static/js/waypoint.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/static/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/static/js/isotope.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/static/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// Register custom post type for portfolio (if needed)
function create_portfolio_cpt() {
    $labels = array(
        'name' => _x('Portfolios', 'Post Type General Name', 'my-theme'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'my-theme'),
        'menu_name' => _x('Portfolios', 'Admin Menu text', 'my-theme'),
    );

    $args = array(
        'label' => __('Portfolio', 'my-theme'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt', 0);
?>
