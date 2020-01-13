<?php

function r_activate_plugin(){
    if(version_compare(get_bloginfo('version'), '5.0', '<')){
        wp_die(__("Update wordpress", 'recipe'));
    }

    global $wpdb;

    $createSql = "
        CREATE TABLE " . $wpdb->prefix . "`ratings` (
            `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `recipe_id` bigint(20) unsigned NOT NULL,
            `rating` float(3,2) unsigned NOT NULL,
            `user_ip` varchar(50) NOT NULL
        )" . $wpdb->get_charset_collate() . ';';

       require( ABSPATH . '/wp-admin/includes/upgrade.php');
       
       dbDelta($createSQL);
}