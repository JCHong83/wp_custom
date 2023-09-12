<?php

// Excerpt Lenght
function jc_custom_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'jc_custom_excerpt_length', 999);
