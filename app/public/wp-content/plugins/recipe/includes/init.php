<?php

function recipe_init(){
        $labels = array(
            'name'               => _x( 'recipes', 'post type general name', 'recipe' ),
            'singular_name'      => _x( 'recipe', 'post type singular name', 'recipe' ),
            'menu_name'          => _x( 'recipes', 'admin menu', 'recipe' ),
            'name_admin_bar'     => _x( 'recipe', 'add new on admin bar', 'recipe' ),
            'add_new'            => _x( 'Add New', 'recipe', 'recipe' ),
            'add_new_item'       => __( 'Add New recipe', 'recipe' ),
            'new_item'           => __( 'New recipe', 'recipe' ),
            'edit_item'          => __( 'Edit recipe', 'recipe' ),
            'view_item'          => __( 'View recipe', 'recipe' ),
            'all_items'          => __( 'All recipes', 'recipe' ),
            'search_items'       => __( 'Search recipes', 'recipe' ),
            'parent_item_colon'  => __( 'Parent recipes:', 'recipe' ),
            'not_found'          => __( 'No recipes found.', 'recipe' ),
            'not_found_in_trash' => __( 'No recipes found in Trash.', 'recipe' )
        );
    
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Custom Post Type for Recipes', 'recipe' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'recipe' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => [ 'title', 'editor', 'author', 'thumbnail' ],
            'taxonomies'         => ['category' , 'post_tag'],
            'show_in_rest'       => true
        );
    
        register_post_type( 'recipe', $args );
}
