<?php 

class RN_Custom_nav_walker extends Walker_Nav_Menu{
    public function start_lvl(&$output, $depth = 0, $args = []){
        $output .= '<ul class="special-class">';
    }

    public function start_element(&$output,$item,  $depth = 0, $args = [], $id = 0){
        $output .= '<li class="special-class">';
        $output .= $args->before;
        $output .= '<a href="' . $item->url . '">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_element(&$output,$item,  $depth = 0, $args = [], $id = 0){
        $output = '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = []){
        $output .= '</ul>';
    }
}