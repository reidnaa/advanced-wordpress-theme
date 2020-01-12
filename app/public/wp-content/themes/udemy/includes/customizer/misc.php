<?php 

function rn_misc_customizer_section($wp_customizer){
    $wp_customizer->add_setting('rn_header_show_search',[
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);
    $wp_customizer->add_setting('rn_header_show_cart',[
        'default' => 'yes',
        'transport' => 'postMssage'
    ]);
    $wp_customizer->add_setting('rn_footer_copyright_text',[
        'default' => 'Copyrights &copy; 2020 All Rights Reserved'
    ]);
    
    $wp_customizer->add_setting('rn_footer_privacy_policy',[
        'default' => 0
    ]);

    $wp_customizer->add_setting('rn_read_more_color', [
        'default' => '#1ABC9C'
    ]);

    $wp_customizer->add_setting('rn_report_file', [
        'default' => ''
    ]);

    $wp_customizer->add_section('rn_misc_section', [
        'title' => __('Theme Misc Settings' , 'udemy'),
        'priority' => 30,
        'panel' => 'udemy'
    ]);

    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_header_show_search_input',
        array(
            'label' => __('Show Search Button in Header', 'udemy'),
            'section' => 'rn_misc_section',
            'settings' => 'rn_header_show_search',
            'type' => 'checkbox' ,
            'choices' => [
                'yes' => 'YES'
            ]   
        )
        ));

    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_header_show_cart_input',
        array(
            'label' => __('Show Cart Icon in Header', 'udemy'),
            'section' => 'rn_misc_section',
            'settings' => 'rn_header_show_cart',
            'type' => 'checkbox' ,
            'choices' => [
                'yes' => 'YES'
            ]   
        )
        ));

    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_header_show_copyright_input',
        array(
            'label' => __('Show Copyright Text in Footer', 'udemy'),
            'section' => 'rn_misc_section',
            'settings' => 'rn_footer_copyright_text',
            'type' => 'checkbox' ,
            'choices' => [
                'yes' => 'YES'
            ]   
        )
        ));
        
    $wp_customizer->add_control(new WP_Customize_Control(
        $wp_customizer,
        'rn_header_show_privacy_policy_input',
        array(
            'label' => __('Show Privacy Policy in Footer', 'udemy'),
            'section' => 'rn_misc_section',
            'settings' => 'rn_footer_privacy_policy',
            'type' => 'checkbox' ,
            'choices' => [
                'yes' => 'YES'
            ]   
        )
        )); 
        
        $wp_customizer->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customizer, 
            'rn_read_more_color_input', 
            array(
                'label'      => __( 'Read More Color', 'udemy' ),
                'section'    => 'rn_misc_section',
                'settings'   => 'rn_read_more_color',
            ) ) 
        );

        $wp_customizer->add_control( 
            new WP_Customize_Upload_Control( 
            $wp_customizer, 
            'rn_report_file_input', 
            array(
                'label'      => __( 'File Report', 'mytheme' ),
                'section'    => 'rn_misc_section',
                'settings'   => 'rn_report_file',
            ) ) 
        );
}