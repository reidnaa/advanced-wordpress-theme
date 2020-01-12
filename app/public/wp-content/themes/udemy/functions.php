<?php


// setup

define('RN_DEVMODE', true);

//includes
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/setup.php'));
include(get_theme_file_path('includes/custom-nav-walkers.php'));
include(get_theme_file_path('includes/widgets.php'));
include(get_theme_file_path('includes/theme-customizer.php'));
include(get_theme_file_path('includes/customizer/social.php'));
include(get_theme_file_path('includes/customizer/misc.php'));
include(get_theme_file_path('includes/customizer/enqueue.php'));

//hooks
add_action('wp_enqueue_scripts', 'add_scripts');
add_action('after_setup_theme', 'rn_setup_theme');
add_action('widgets_init', 'rn_widgets');
add_action('customize_register', 'rn_customize_register');
add_action('rn_customize_init', 'rn_customize_preview_init');

//shortcodes






?>