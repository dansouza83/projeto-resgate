<nav class="navbar navbar-inverse navbar-fixed-top">
 		<div class="container">
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<div data-aos="fade-down" data-aos-duration="2500">
 					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
 						<?php if (has_custom_logo()) : ?>
 							<?php the_custom_logo(); ?>
 						<?php else : ?>
 							<h1><?php bloginfo('name'); ?></h1>
 						<?php endif; ?>
 					</a>
 				</div>
 			</div>
 			<div id="navbar" class="navbar-collapse collapse">
 				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container_class' => 'menu-header'
						)
					);
					?>
 			</div>
 			<!--/.nav-collapse -->

 		</div>

 	</nav>
