<?php

function add_scripts(){

    $uri = get_theme_file_uri();
    $ver = RN_DEVMODE ? time() :false;
    wp_register_style('rn_stylecss', $uri  . '/assets/css/style.css',[], $ver);
    wp_register_style('rn_googlefonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',[], $ver);
    wp_register_style('rn_bootstrap_css', $uri . '/assets/css/bootstrap.css',[], $ver);
    wp_register_style('rn_dark', $uri . '/assets/css/dark.css',[], $ver);
    wp_register_style('rn_font_icons', $uri . '/assets/css/font-icons.css',[], $ver);
    wp_register_style('rn_animate', $uri . '/assets/css/animate.css',[], $ver);
    wp_register_style('rn_magnific_popup', $uri . '/assets/css/magnific-popup.css',[], $ver);
    wp_register_style('rn_responsive', $uri . '/assets/css/responsive.css',[], $ver);
    wp_register_style('rn_custom', $uri . '/assets/css/custom.css',[], $ver);
    
    
    
    
    
    wp_enqueue_style('rn_stylecss');
    wp_enqueue_style('rn_googlefonts');
    wp_enqueue_style('rn_bootstrap_css');
    wp_enqueue_style('rn_dark');
    wp_enqueue_style('rn_font_icons');
    wp_enqueue_style('rn_animate');
    wp_enqueue_style('rn_magnific_popup');
    wp_enqueue_style('rn_responsive');
    wp_enqueue_style('rn_custom');

    wp_register_script('rn_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);
    wp_register_script('rn_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('rn_plugins');
    wp_enqueue_script('rn_functions');


    $read_more_color = get_theme_mod('rn_read_more_color');

    wp_add_inline_style(
        'rn_custom',
        'a.more-link(color:' . $read_more_color . ';border-colro:'.$read_more_color.';}'
    );
}



?>