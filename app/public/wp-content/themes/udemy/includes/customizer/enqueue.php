<?php

function rn_customize_preview_init(){
    wp_enqueue_script(
        'rn_theme_cusotmizer',
        get_theme_file_uri('/assets/js/theme-customize.js'),
        ['jquery', 'customize-preview'],
        false,
        true
    );
}