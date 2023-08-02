<?php

/**
 * Enqueue Styles and Scripts
 */
function crossfxn_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main-crossfxn-styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_script('main-crossfxn-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'crossfxn_resources');

/**
 * Add Theme Support
 */
function crossfxn_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'crossfxn_features');

/**
 * Register Custom Nav Menus
 */
function crossfxn_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
  ));
}
add_action('init', 'crossfxn_menus');