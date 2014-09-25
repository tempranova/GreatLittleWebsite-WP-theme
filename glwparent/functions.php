<?php

// Declare Woocommerce support
add_theme_support( 'woocommerce' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Turn off top navigation for admin

add_filter( 'show_admin_bar', '__return_false' );

// Add featured images

add_theme_support( 'post-thumbnails' );

// Add CSS Bootstrap, custom

  function theme_styles() {
    wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child_theme_css', get_template_directory_uri() . '/../glwparent-child/style.css');
  }

  add_action('wp_enqueue_scripts', 'theme_styles');

// Add JS Modernizr (header), Bootstrap (footer)

  function theme_js() {
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
    wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('bootstrap_min_js'), '', true);

  }

  add_action('wp_enqueue_scripts', 'theme_js');

// Dealing with and creating menus

add_theme_support ('menus');

function register_theme_menus() {
  register_nav_menus(
    array (
      'header-menu' => __( 'Header Menu'),
      'top-menu' => __( 'Top Menu')
    )
  );
}

add_action ( 'init', 'register_theme_menus' );

// Making widgets

function create_widget($name, $id, $description) {

  register_sidebar(array (
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

create_widget( 'Front Page Left', 'front-page-left', 'For the area on the left of the front page.');
create_widget( 'Front Page Middle', 'front-page-middle', 'For the area on the middle of the front page.');
create_widget( 'Front Page Right', 'front-page-right', 'For the area on the right of the front page.');

create_widget( 'Page', 'page-sidebar', 'For the area on the main sidebar.');
create_widget( 'Blog', 'blog-sidebar', 'For the area on the blog sidebar.');

create_widget( 'Footer Left', 'footer-left', 'The Footer left sidebar.');
create_widget( 'Footer Middle', 'footer-middle', 'The Footer middle sidebar.');
create_widget( 'Footer Right', 'footer-right', 'The Footer right sidebar.');
?>
