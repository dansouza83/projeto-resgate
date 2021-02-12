<?php

function cleancut_post_types() {


// Campus Post Type
 register_post_type('ttvideos', array(
  'supports'      => array('title', 'editor', 'excerpt'),
  'show_in_rest'  => true, // Switch to Guttenberg editor
  'has_archive'   => true, // Add archive
  'public'        => true, // Permission
  'menu_icon'     => 'dashicons-location-alt', // Icon from right menu
  'rewrite'       => array('slug' => 'TT Viceos'), // Plural to ttvideoss link
  'labels'        => array(
   'name'          => 'Think Tank Vídeos', // Title
   'add_new_item'  => 'Add New TT Vídeos',
   'edit_item'     => 'Edit TT Vídeos',
   'all_items'     => 'All TT Vídeos',
   'singular_name' => 'TT Video'
  )
 ));

}
add_action('init', 'cleancut_post_types')

 ?>