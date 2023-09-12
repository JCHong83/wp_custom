<?php

// Bootstrap4 Navwalker
require get_template_directory() . '/inc/bs4navwalker.php';

// Theme Setup
require get_template_directory() . '/inc/theme-setup.php';

// Theme Scripts
require get_template_directory() . '/inc/theme-scripts.php';

// Widget Init
require get_template_directory() . '/inc/widget-init.php';

/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
require get_template_directory() . '/inc/tabtitle.php';


// Excerpt Lenght
require get_template_directory() . '/inc/excerpt-lenght.php';
