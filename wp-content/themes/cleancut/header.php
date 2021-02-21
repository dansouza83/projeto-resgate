<!DOCTYPE html>
<html lang="pt-BR" <?php // language_attributes();
                   ?>>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
 <?php if (get_theme_mod('animation', 1)) :  ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
 <?php endif; ?>
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


 <script>
  //Change pos/background/padding/add shadow on nav when scroll event happens
  $(function() {
   var navbar = $('.navbar');

   $(window).scroll(function() {
    if ($(window).scrollTop() <= 40) {
     navbar.removeClass('navbar-scroll');
    } else {
     navbar.addClass('navbar-scroll');
    }
   });
  });
 </script>


 <style>
  /* Nav / Navbar Styles
===================================*/
.navbar {
	background: #efd53d;
	border-bottom: none;
	padding: 30px 0;
	transition-duration: 0.6s;
}
.navbar-default .navbar-brand,
.navbar-default .navbar-nav>li>a {
	color: #183532;
}

/* jQuery Styles
===================================*/
.navbar-scroll {
	background: #ffffff;
	padding: 0;
	box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
	transition-duration: 0.6s;
}
.nav-dropdown-scroll {
	background: #e7eaea;
	box-shadow: 0px 10px 9px rgba(0, 0, 0, 0.4);
}
  /* Defaults */
  .showcase {
   height: <?php echo get_theme_mod('showcase_height', 700);
           ?>px;
   background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/banner-home-projeto-resgate-smaller.jpg') ?>);
  }

  .showcase-como-funciona {
   background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/banner-como-funciona-projeto-resgate.jpg') ?>);
  }

  .banner {
   background: url(<?php echo get_theme_mod('bottom_banner_image', get_bloginfo('template_url') . '/img/fotos-que-valem.jpg') ?>) no-repeat center center;
  }

  .call-to-action {
   background: url(<?php echo get_theme_mod('call_to_action', get_bloginfo('template_url') . '/img/formacao-wrapper-banner.jpg') ?>) no-repeat center center;
  }

  .numbers {
   background: url(<?php echo get_theme_mod('numbers', get_bloginfo('template_url') . '/img/sonhos-viabilizados-wrappers.jpg') ?>) no-repeat center center;
  }

  .showcase-think-tank-criando-o-futuro {
   background-image: url('<?php the_field('think_tank_header_background'); ?>');
  }
 </style>
</head>

<body>

 <nav class="navbar navbar-default navbar-fixed-top" id="myScrollspy">
  <div class="container">
   <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
     <?php if (has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
     <?php else : ?>
      <h1><?php bloginfo('name'); ?></h1>
     <?php endif; ?>
    </a>
   </div>
   <div id="navbar" class="navbar-collapse colapse ">
    <?php
    wp_nav_menu(
     array(
      'main-menu' => 'Main Menu',
      'footer-menu' => 'Footer Menu',
      'container_class' => 'menu-header'
     ));
    ?>
   </div>
   <!--/.nav-collapse -->
  </div>
 </nav>