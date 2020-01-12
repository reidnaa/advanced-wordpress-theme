<?php 


function rn_widgets(){
    register_sidebar([
        'name' => __("Theme Sidebar", 'reidswordpress'),
        'id' => 'rn_sidebar',
        'description' => __('Sidebar for the theme Reids Wordpress', 'reidswordpress'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">'  ,
        'after_widget' =>  '</div>' ,
        'before_title' =>   '<h4>' ,
        'after_title' =>    '</h4>'
    ]);
}

?>