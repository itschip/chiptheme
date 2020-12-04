<?php

function load_stylesheets() {
  // bootstrap css
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  // custom css
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');
// always remember semicolon

add_theme_support('menus');

register_nav_menus(array(
  'header-menu' => __('Header Menu', 'theme'),
  'footer-menu' => __('Footer Menu', 'theme')
));


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );