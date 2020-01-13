<?php
/*
Plugin Name: Hooks Plugin



*/


// function rn_title($title){
//     return 'Hooked' . $title;
// }



// function rn_footer_shoutout(){
//     echo "hooked example plugin wass wurrr<br>";
// }

// function rn_footer_shoutout_v2(){
//     echo "hooked example plugin wass wurrr V2 <br>";
// }

function rn_footer(){
    do_action('rn_custom_footer');
}

function rn_kill_wp(){
    echo "Killlllll";
}

// add_filter('the_title', 'rn_title');
// add_action('wp_footer', 'rn_footer_shoutout');
// add_action('wp_footer', 'rn_footer_shoutout_v2', 2);
add_action('wp_footer', 'rn_footer');
add_action('rn_custom_footer', 'rn_kill_wp');