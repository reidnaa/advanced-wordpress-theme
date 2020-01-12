<?php

function rn_social_customizer_section($wp_customizer){
    $wp_customizer->add_setting('rn_facebook_handle',[
        'default' => ''
    ]);
    $wp_customizer->add_setting('rn_twitter_handle',[
        'default' => ''
    ]);
    $wp_customizer->add_setting('rn_instagram_handle',[
        'default' => ''
    ]);
    $wp_customizer->add_setting('rn_phone_handle',[
        'default' => ''
    ]);
    $wp_customizer->add_setting('rn_email_handle',[
        'default' => ''
    ]);

    $wp_customizer->add_section('rn_social_section', [
        'title' =>  __('Social Settings', 'udemy'),
        'priority' => '30' ,
        'panel' => 'udemy'
    ]);
    
    

    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'udemy' ),
            'section'        => 'rn_social_section',
            'settings'       => 'rn_facebook_handle',
            'type'           => 'text',
        )
    )
   );
   $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_social_twitter_input',
        array(
            'label'          => __( 'Twitter Handle', 'udemy' ),
            'section'        => 'rn_social_section',
            'settings'       => 'rn_twitter_handle',
            'type'           => 'text',
        )
    )
    );
    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_social_instagram_input',
        array(
            'label'          => __( 'Instagram Handle', 'udemy' ),
            'section'        => 'rn_social_section',
            'settings'       => 'rn_instagram_handle',
            'type'           => 'text',
        )
    )
    );
    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_social_phone_input',
        array(
            'label'          => __( 'Phone Handle', 'udemy' ),
            'section'        => 'rn_social_section',
            'settings'       => 'rn_phone_handle',
            'type'           => 'text',
        )
    )
    );
    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_social_email_input',
        array(
            'label'          => __( 'Email Handle', 'udemy' ),
            'section'        => 'rn_social_section',
            'settings'       => 'rn_email_handle',
            'type'           => 'text',
        )
    )
    );
}