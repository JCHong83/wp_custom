<?php

// Bootstrap4 Navwalker
require get_template_directory() . '/inc/bs4navwalker.php';

// Theme Setup
function jc_custom_setup()
{
  add_theme_support('post-thumbnails');
  add_image_size('front-slide', 1600, 1000, true);
  add_theme_support('post-formats', array('aside', 'link', 'status', 'video', 'image'));
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'jc_custom_setup');

// Theme Scripts
function jc_custom_scripts()
{
  // css
  wp_enqueue_style('bootstrap-styles', '//cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome-styles', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
  wp_enqueue_style('style-css', get_stylesheet_uri());

  // js
  wp_enqueue_script('jQuery-js', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
  wp_enqueue_script('popper-js', '//cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array(), '1.14.7', true);
  wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '4.3.1', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'jc_custom_scripts');

// Widget Init
add_action('widgets_init', 'jc_custom_widgets_init');
function jc_custom_widgets_init()
{
  register_sidebar(array(
    'name' => __('Main Sidebar', 'jc_custom'),
    'id' => 'sidebar-1',
    'description' => __('Widgets in this area will be shown on all posts and pages.', 'jc_custom'),
    'before_widget' => '<div id="%1$s" class="card card-body bg-light mb-4 card-raised">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widgettitle card-title">',
    'after_title' => '</h5>',
  ));

  register_sidebar(array(
    'name' => __('Footer-1', 'jc_custom'),
    'id' => 'footer-1',
    'description' => __('Add the first footer widget here.', 'jc_custom'),
    'before_widget' => '<div class="col-lg-3 mb-4">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="text-white mb-4">',
    'after_title' => '</h5>',
  ));

  register_sidebar(array(
    'name' => __('Footer-2', 'jc_custom'),
    'id' => 'footer-2',
    'description' => __('Add the second footer widget here.', 'jc_custom'),
    'before_widget' => '<div class="col-lg-5 mb-4">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="text-white mb-4">',
    'after_title' => '</h5>',
  ));

  register_sidebar(array(
    'name' => __('Footer-3', 'jc_custom'),
    'id' => 'footer-3',
    'description' => __('Add the third footer widget here.', 'jc_custom'),
    'before_widget' => '<div class="col-lg-4 mb-4">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="text-white mb-4">',
    'after_title' => '</h5>',
  ));

  register_sidebar(array(
    'name' => __('Socket', 'jc_custom'),
    'id' => 'soket',
    'description' => __('Add socket widget here.', 'jc_custom'),
    'before_widget' => '<div class="col-12 text-white">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="text-white mb-4">',
    'after_title' => '</h5>',
  ));
}
