<?php
// Add Customizer Functionality
require get_template_directory() . '/inc/customizer.php ';

// Theme Support
function cleancut_theme_support(){

 //LOGO
add_theme_support('custom-logo');

function cleantcut_custom_logo_setup(){

 function http_response_code($code = NULL) {
  if ($code !== NULL) {
      switch ($code) {
          case 100: $text = 'Continue';
              break;
          case 101: $text = 'Switching Protocols';
              break;
          case 200: $text = 'OK';
              break;
          case 201: $text = 'Created';
              break;
          case 202: $text = 'Accepted';
              break;
          case 203: $text = 'Non-Authoritative Information';
              break;
          case 204: $text = 'No Content';
              break;
          case 205: $text = 'Reset Content';
              break;
          case 206: $text = 'Partial Content';
              break;
          case 300: $text = 'Multiple Choices';
              break;
          case 301: $text = 'Moved Permanently';
              break;
          case 302: $text = 'Moved Temporarily';
              break;
          case 303: $text = 'See Other';
              break;
          case 304: $text = 'Not Modified';
              break;
          case 305: $text = 'Use Proxy';
              break;
          case 400: $text = 'Bad Request';
              break;
          case 401: $text = 'Unauthorized';
              break;
          case 402: $text = 'Payment Required';
              break;
          case 403: $text = 'Forbidden';
              break;
          case 404: $text = 'Not Found';
              break;
          case 405: $text = 'Method Not Allowed';
              break;
          case 406: $text = 'Not Acceptable';
              break;
          case 407: $text = 'Proxy Authentication Required';
              break;
          case 408: $text = 'Request Time-out';
              break;
          case 409: $text = 'Conflict';
              break;
          case 410: $text = 'Gone';
              break;
          case 411: $text = 'Length Required';
              break;
          case 412: $text = 'Precondition Failed';
              break;
          case 413: $text = 'Request Entity Too Large';
              break;
          case 414: $text = 'Request-URI Too Large';
              break;
          case 415: $text = 'Unsupported Media Type';
              break;
          case 500: $text = 'Internal Server Error';
              break;
          case 501: $text = 'Not Implemented';
              break;
          case 502: $text = 'Bad Gateway';
              break;
          case 503: $text = 'Service Unavailable';
              break;
          case 504: $text = 'Gateway Time-out';
              break;
          case 505: $text = 'HTTP Version not supported';
              break;
          default:
              exit('Unknown http status code "' . htmlentities($code) . '"');
              break;
      }
      $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
      header($protocol . ' ' . $code . ' ' . $text);
      $GLOBALS['http_response_code'] = $code;
  } else {
      $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);
  }
  return $code;
 }


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
 function my_menu()
 {
  register_nav_menus(
   array(
    'main-menu' => __('Main Menu'),
    'footer-menu' => __('Footer Menu'),
   )
  );
 }

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


