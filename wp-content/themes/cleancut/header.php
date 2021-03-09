<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<!-- META  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<!--     Define keywords for search engines -->
	<meta name="keywords" content="Projeto Resgate, projeto social, escola, aprendizado, joven aprendiz, matricular aluno, matriculas" />
	<!--     Define a description of your web page -->
	<meta name="description" content="Educação e desenvolvimento pessoal para transformação. Articulação entre sociedade, empresas e instituições, onde um potencializa o trabalho do outro." />
	<meta name="subject" content="Organização Não Governamental">
	<meta name="copyright" content="Projeto Resgate">
	<meta name="robots" content="index,follow, noindex, nofollow, none" />
	<meta name="Classification" content="Business">
	<!--     Define the author of a page -->
	<meta name="copyright" content="Todo os direitos reservados">
	<meta name="owner" content="Mário Sant'ana">
	<meta name="url" content="http://www.projetoresgate.org.br">
	<meta name="identifier-URL" content="http://www.projetoresgate.org.br">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script rel="javascript" async src="https://www.googletagmanager.com/gtag/js?id=G-PQ9XHY0FC2"></script> -->
	<script rel="javascript">
		// window.dataLayer = window.dataLayer || [];
		// function gtag() {
		// 	dataLayer.push(arguments);
		// }
		// gtag('js', new Date());
		// gtag('config', 'G-PQ9XHY0FC2');
	</script>

	<!-- JAVASCRIPT -->
	<script rel="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script rel="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script rel="javascript">
		// NAVBAR
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

		// Toggle click navbar

		function toggleBtn() {
			var x = document.getElementById("navbar");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>

	<!-- STYLES -->
	<script rel="javascript" src="https://kit.fontawesome.com/8d8c51ecf9.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- AOS EFFECTS -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/aos.css">

	<style>
		/* Defaults */
		.showcase {
			height: <?php echo get_theme_mod('showcase_height');
											?>;
			background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/assets/images/banner-home-projeto-resgate-smaller.jpg') ?>);
		}

		.showcase-quero-colaborar {
			min-height: 833px;
			background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_field('background_image'); ?>);
			background-repeat: repeat-x;
			background-size: cover;
			background-position-x: -1132px;
		}

		.showcase-quero-participar-think-tank {
			min-height: 833px;
			background-image: linear-gradient(rgb(202 158 0 / 50%), rgb(245, 197, 25)), url(<?php echo get_field('background_image'); ?>);
			background-repeat: repeat-x;
			background-size: cover;
			/* background-position-x: -1132px; */
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

<body>
	<?php get_template_part('/template-parts/header/navbar'); ?>
