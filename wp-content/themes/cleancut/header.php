<!DOCTYPE html>
<html lang="pt-BR" <?php language_attributes();  ?>>
<head>
 <!-- META  -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

 <!-- JAVASCRIPT -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

 <script>
 //Change pos/background/padding/add shadow on nav when scroll event happens
 $(function() {
  var navbar = $('.navbar');

  $(window).scroll(function() {
   if ($(window).scrollTop() <= 40) {
    navbar.removeClass('navbar-scroll');
    navbar.removeClass('custom-logo-scroll');
    navbar.removeClass('menu-header-scroll');
   } else {
    navbar.addClass('navbar-scroll');
    navbar.addClass('custom-logo-scroll');
    navbar.addClass('menu-header-scroll');
   }
  });
 });
 </script>
<!--
 <script>
  $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function () {
  $('#bs-example-navbar-collapse-1').append($('#sidebar').html());
  $('#bs-example-navbar-collapse-1 ul').last().removeClass('nav-pills nav-stacked').addClass('navbar navbar-nav');
});
$('#bs-example-navbar-collapse-1').on('hidden.bs.collapse', function () {
  $('#bs-example-navbar-collapse-1 ul:last-child').remove();x
});
$(window).on('resize', function () {
  if (window.innerWidth > 768) {$('#bs-example-navbar-collapse-1').collapse('hide');}
});
 </script> -->

 <!-- STYLES -->
 <script src="https://kit.fontawesome.com/8d8c51ecf9.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

 <!-- AOS EFFECTS -->
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <!-- <link rel="stylesheet" href="<?php // bloginfo('template_url'); ?>/assets/css/aos.css"> -->

 <style>
 /* Defaults */
 .showcase {
  height: <?php echo get_theme_mod('showcase_height', 700);
  ?>px;
  background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/assets/images/banner-home-projeto-resgate-smaller.jpg') ?>);
 }
 .showcase-como-funciona {
  background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/assets/images/banner-como-funciona-projeto-resgate.jpg') ?>);
 }
 .banner {
  background: url(<?php echo get_theme_mod('bottom_banner_image', get_bloginfo('template_url') . '/assets/images/fotos-que-valem.jpg') ?>) no-repeat center center;
 }
 .call-to-action {
  background: url(<?php echo get_theme_mod('call_to_action', get_bloginfo('template_url') . '/assets/images/formacao-wrapper-banner.jpg') ?>) no-repeat center center;
 }
 .numbers {
  background: url(<?php echo get_theme_mod('numbers', get_bloginfo('template_url') . '/assets/images/sonhos-viabilizados-wrappers.jpg') ?>) no-repeat center center;
 }
 .showcase-think-tank-criando-o-futuro {
  background-image: url('<?php the_field('think_tank_header_background'); ?>');
 }
 </style>

</head>

<body data-aos="fade-down" data-aos-duration="3000" >
 <?php get_template_part('/template-parts/header/navbar'); ?>