<?php
function childtheme_enqueue_styles(){
 wp_enqueue_style('parent_style', get_template_directory_uri() . './style.css');
 wp_enqueue_style('child_style', get_stylesheet_directory_uri() . './style.css', false, filemtime(get_stylesheet_directory() .'/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'childtheme_enqueue_styles', 999);