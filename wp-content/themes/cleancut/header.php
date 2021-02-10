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
 <style>
  /* Defaults */
  .showcase {
   height: <?php echo get_theme_mod('showcase_height', 700); ?>px;
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
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
   </div>

   <div id="navbar" class="collapse navbar-collapse navbar-ex1-collapse">
    <?php
    wp_nav_menu(
     array(
      'theme_location' => 'primary',
      'depth'          => 2,
      'container'      => false,
      'menu_class'     => 'nav navbar-nav navbar-right',
      'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
      'walker'         => new wp_bootstrap_navwalker()
     )
    );
    ?>
   </div>
   <!--/.nav-collapse -->
  </div>
 </nav>