<?php

// Theme Scripts
function jc_custom_scripts()
{
  // css
  wp_enqueue_style('bootstrap-styles', '//cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome-styles', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
  wp_enqueue_style('lightbox-styles', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css');
  wp_enqueue_style('style-css', get_stylesheet_uri());

  // js
  wp_enqueue_script('jQuery-js', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
  wp_enqueue_script('popper-js', '//cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array(), '1.14.7', true);
  wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '4.3.1', true);
  wp_enqueue_script('lightbox-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.js', array(), '2.11.4', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'jc_custom_scripts');
