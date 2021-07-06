<?php

add_theme_support( 'menus' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );

function akvariehobby_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'akvariehobby_add_woocommerce_support' );

register_nav_menus( 
    array( 'top-menu' => 'Top menu', 'mobile-menu' => 'Mobile menu')
);

add_filter( 'default_checkout_billing_country', 'change_default_checkout_country' );

function change_default_checkout_country() {
    return 'SE';
}

add_filter( 'default_checkout_shipping_country', 'change_default_shipping_country' );

function change_default_shipping_country() {
    return 'SE';
}

function load_stylesheets() {
    
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', '1.01', 'all');
    wp_enqueue_style('stylesheet');
    wp_register_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css', '', '5.12.1', 'all');
    wp_enqueue_style('fa');
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Muli|Quicksand&display=swap', '', '1', 'all');
    wp_enqueue_style( 'fonts' );
    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', '1.01', 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javacripts() {
    
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1.01, true);
    wp_enqueue_script('custom');
    wp_register_script('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js', '', '5.12.1', true);
    wp_enqueue_style('fa');
}

add_action('wp_enqueue_scripts', 'load_javacripts');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/bootstrap-nav-walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_footer_widgets() {
    register_sidebar( array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
    register_sidebar( array(
        'name' => 'Footer 4',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );    
}

add_action( 'widgets_init', 'register_footer_widgets');

function register_sidebar_widgets() {
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Sidebar visible on pages' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'register_sidebar_widgets');
