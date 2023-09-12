<?php

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
    'name' => __('Page Sidebar', 'jc_custom'),
    'id' => 'sidebar-2',
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
add_action('widgets_init', 'jc_custom_widgets_init');
