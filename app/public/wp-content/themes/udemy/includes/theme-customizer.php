<?php

function rn_customize_register($wp_customizer){

    $wp_customizer->get_section('title_tagline')->title = 'General';

    $wp_customizer->add_panel('udemy', [
        'title' => __('Theme', 'udemy'),
        'description' => '<p>Theme Settings</p>',
        'priority' => 160,
        
    ]);
    rn_social_customizer_section($wp_customizer);
    rn_misc_customizer_section($wp_customizer);
}