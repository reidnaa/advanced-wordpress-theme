<?php


function rn_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'reidswordpress'));
    register_nav_menu('secondary', __('Secondary Menu', 'reidswordpress'));
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5',array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'starter-content',[
        'widgets' => [
            'rn_sidebar' => [
                'text_business_info', 'search', 'text_about',
            ]
        ],
        'attachments' => [
            'image-about' => [
                'post_title' => __('About', 'udemy'),
                'file' => 'assets/images/about/1.png'
            ]
        ],
        'posts' => [
            'home' => [
                'thumbnail' => '{{image-about}}'
            ],
            'about' => [
                'thumbnail' => '{{image-about}}'
            ],
            'contact' => [
                'thumbnail' => '{{image-about}}'
            ],
            'blog' => [
                'thumbnail' => '{{image-about}}'
            ],
            'homepage-section' => [
                'thumbnail' => '{{image-about}}'
            ],
        ],
        'options' => [
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}'
        ],
        'theme_mods' => [
           'rn_facebook_handle' => '',
           'rn_twitter_handle'  => '',
           'rn_instagram_handle' => '',
           'rn_email_handle'  => '',
           'rn_phone_handle'  => '',
           'rn_header_show_search' => 'yes',
           'rn_header_show_cart' => 'yes'
        ], 
        'nav_menus' => [
            'primary' => [
                'name' => __('Primary Menu', 'udemy'),
                'items' => [
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact',
                ]
            ],
            'secondary'=>   [
                'name' => __('Secondary Menu', 'udemy'),
                'items' => [
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact',
                ]
            ],
        ]
    ] );


    if (function_exists('quads_register_ad')){
        quads_register_ad( array(
            'location' => 'header', 
            'description' => 'Header position'
            ) 
        );
        }

        
}