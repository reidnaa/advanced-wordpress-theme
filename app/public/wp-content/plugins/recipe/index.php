<?php

/*
* Plugin Name: Recipe
* Description: A simple Wordpress plugin that allows the user to create recipes and rate recipes
* Version: 1.0
* Author: Reid Naaykens
* Author URI:    
* Text Domain: recipe
*/

if(!function_exists('add_action')): 
echo 'hey there im just a plugin I dont really work here';
exit;
endif;

//setup
define('RECIPE_PLUGIN_URL', __FILE__);

//includes    
include('includes/activate.php');
include('includes/init.php');
include('process/save-post.php');
include('process/filter-content.php');
include('includes/front/enqueue.php');
include('process/rate-recipe.php');


//hooks    
register_activation_hook(__FILE__, 'r_activate_plugin');
add_action('init', 'recipe_init');
add_action('save_post_recipe', 'r_save_post_admin', 10, 3);
add_action('wp_enqueue_scripts', 'r_enqueue_scripts', 100);
add_filter('the_content', 'r_filter_recipe_content');
add_action('wp_ajax_r_rate_recipe', 'r_rate_recipe');
//shortcodes