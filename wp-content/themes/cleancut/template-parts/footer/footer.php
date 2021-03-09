<?php get_header(); ?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4 data-aos="fade-down" data-aos-duration="2000">Menu Principal</h4>
				<div data-aos="fade-right" data-aos-duration="3000">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'depth'          => 2,
							// 'container'      => false,
							'menu_class'     => 'nav header-nav header-bottom-nav nav-center nav-uppercase',
						)
					);
					?>
				</div>
			</div>
			<div class="col-md-4">
				<h4 data-aos="fade-down" data-aos-duration="2000">Formulários</h4>
				<div data-aos="fade-up" data-aos-duration="3000">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'formularios',
							'depth'          => 2,
							// 'container'      => false,
							'menu_class'     => 'nav header-nav header-bottom-nav nav-center nav-uppercase',
						)
					);
					?>
				</div>

			</div>
			<!-- IMAGEM QUE VALEM A PENA  -->
			<div class="col-md-4">

			<p class="copyright text-muted small">Copyright &copy; Projeto Resgate Theme 2021. All Rights Reserved</p>

		</div>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css">

</footer>
