<?php
// Add Customizer Functionality
require get_template_directory() . '/inc/customizer.php ';



// Theme Support
function cleancut_theme_support(){

 //LOGO
 add_theme_support('custom-logo');

 function cleantcut_custom_logo_setup(){

 $defaults = array(
  'height' => '50',
  'width' => '100',
  'flex-height'=> true,
  'flex-width'=>true,
  'header-text'=>array(
   'site-title',
   'site-description'),
   'unlink-homepage-logo' => true
 );
 add_theme_support('custom-logo', '$defaults');
 }

 // MENU
  register_nav_menus(
   array(
    'main-menu' => __('Main Menu'),
    'footer-menu' => __('Footer Menu'),
    'formularios' => __('Formulários')
   ));


 // Featured Image
 add_theme_support('post-thumbnails');
 add_image_size('como-funciona-img');

 // Post Format Support
 add_theme_support('post-formats', array('aside', 'gallery'));

 add_filter('widget_text', 'do_shortcode');

 add_filter('the_content', 'do_blocks', 9);
 add_filter('the_content', 'wptexturize');
 add_filter('the_content', 'convert_smilies', 20);
 add_filter('the_content', 'wpautop');
 add_filter('the_content', 'do_shortcode', 11);
 add_filter('the_content', 'shortcode_unautop');
 add_filter('the_content', 'prepend_attachment');
 add_filter('the_content', 'wp_make_content_images_responsive');
}

add_action('after_setup_theme', 'cleancut_theme_support');

add_action('the_content', 'ravs_content_div');
function ravs_content_div($content)
{
 return '<div class="col-md-12 col-lg-12">' . $content . '</div>';
}

// Widget Locations

function init_widgets($id)
{
 register_sidebar(array(
  'name' => 'Sidebar',
  'id' => 'sidebar',
  'before_widget' => '<div class="well animated fadeInRight sidebar-widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title'  => '</h3>'
 ));

 register_sidebar(array(
  'name' => 'Subnav',
  'id' => 'subnav',
  'before_widget' => '<div class="sub-nav">',
  'after_widget' => '</div>',
  'before_title' => '<div class="hide">',
  'after_title'  => '</div>'
 ));

 register_sidebar(array(
  'name' => 'Bottom',
  'id' => 'bottom',
  'before_widget' => '<div class="section-a animated fadeInUp"><div class="container">',
  'after_widget' => '</div></div>',
  'before_title' => '<div class="hide">',
  'after_title'  => '</div>'
 ));
}
add_action('widgets_init', 'init_widgets');

// Get Top Parent Page

function get_top_parent()
{
 global $post; // check if is parent
 if ($post->post_parent) {
  $ancestors = array_reverse(get_post_ancestors($post->ID));
  return $ancestors[0];
 }
 return $post->ID;
}

// Excerpt Length
function set_excerpt_length()
{
 return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');