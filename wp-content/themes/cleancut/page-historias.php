<?php
get_header();
get_template_part('template-parts/header/showcase');
?>

<script>
	$('#accordion').on('shown.bs.collapse', function() {

		var panel = $(this).find('.in');

		$('html, body').animate({
			scrollTop: panel.offset().top
		}, 500);

	});
</script>
<section id="#scrollDown" class="margin-top-2 margin-bottom-2">
	<div class="container">
		<div class="col-md-7">
			<div class="panel-group" id="accordion1">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">BENEFICIÁRIOS</a>
						</h4>

					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
							<h3>Os Jovens que estão mudando seu destino</h3>
							<?php $i = 0; // Counter
							?>
							<?php $featured_query = new WP_Query(array(
								'category_name' => 'beneficiarios-stories',
								'orgderby' => 'ID',
								'order' => 'ASC'
							)); ?>

							<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
								<?php
								$i++;
								if ($i % 2 != 0) {
									$float = 'no-float';
									$background = 'bg-gray';
									$alignText = 'text-left';
								} else {
									$float = 'float-right';
									$background = 'bg-white';
									$alignText = 'text-right';
								} ?>
								<!-- <h2>ACCORDION 1</h2> -->
								<div class="row <?php echo $background; ?>">
									<div class="col-md-4  <?php echo $float; ?>">
										<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-circle img-vertical-center')); ?>

									</div>
									<div class="col-md-8">
										<h4><?php the_title(); ?></h4>
										<hr>
										<p><?php the_content(); ?>
									</div>
								</div>
							<?php endwhile; ?>

						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">AS FAMÍLIAS DOS BENEFICIÁRIOS
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="row">
								<?php $i = 0; // Counter
								?>
								<?php $featured_query = new WP_Query(array(
									'category_name' => 'pais-dos-beneficiarios',
									'orgderby' => 'ID',
									'order' => 'ASC'
								)); ?>

								<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
									<?php
									$i++;
									if ($i % 2 != 0) {
										$float = 'no-float';
										$background = 'bg-gray';
										$alignText = 'text-left';
									} else {
										$float = 'float-right';
										$background = 'bg-white';
										$alignText = 'text-right';
									} ?>
									<!-- <h2>ACCORDION 1</h2> -->
									<div class="row <?php echo $background; ?>">
										<div class="col-md-4 <?php echo $float; ?>">
											<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-circle img-vertical-center')); ?>

										</div>
										<div class="col-md-8">
											<h4><?php the_title(); ?></h4>
											<h5><?php the_field('subtitle_accordion'); ?></h5>
											<p><?php the_content(); ?></p>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">PADRINHOS, EMPRESAS E APOIADORES
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel-group" id="accordion2">
								<div class="row">
									<?php $i = 0; // Counter
									?>
									<?php $featured_query = new WP_Query(array(
										'category_name' => 'padrinhos-empresas',
										'orgderby' => 'ID',
										'order' => 'ASC'
									)); ?>

									<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
										<?php
										$i++;
										if ($i % 2 != 0) {
											$float = 'no-float';
											$background = 'bg-gray';
											$alignText = 'text-left';
										} else {
											$float = 'float-right';
											$background = 'bg-white';
											$alignText = 'text-right';
										} ?>
										<!-- <h2>ACCORDION 1</h2> -->
										<div class="row <?php echo $background; ?>">
											<div class="col-md-4 <?php echo $float; ?>">
												<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-circle img-vertical-center')); ?>

											</div>
											<div class="col-md-8">
												<h4><?php the_title(); ?></h4>
												<h5><?php the_field('subtitle_accordion'); ?></h5>
												<p><?php the_content(); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">INSTITUIÇÕES DE ENSINO
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel-group" id="accordion2">
								<div class="row">
									<?php $i = 0; // Counter
									?>
									<?php $featured_query = new WP_Query(array(
										'category_name' => 'instituicoes-ensino',
										'orgderby' => 'ID',
										'order' => 'ASC'
									)); ?>

									<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
										<?php
										$i++;
										if ($i % 2 != 0) {
											$float = 'no-float';
											$background = 'bg-gray';
											$alignText = 'text-left';
										} else {
											$float = 'float-right';
											$background = 'bg-white';
											$alignText = 'text-right';
										} ?>
										<!-- <h2>ACCORDION 1</h2> -->
										<div class="row <?php echo $background; ?>">
											<div class="col-md-4 <?php echo $float; ?>">
												<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-circle img-vertical-center')); ?>

											</div>
											<div class="col-md-8">
												<h4><?php the_title(); ?></h4>
												<h5><?php the_field('subtitle_accordion'); ?></h5>
												<p><?php the_content(); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">EQUIPE DO PROJETO RESGATE
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel-group" id="accordion2">
								<div class="row">
									<?php $i = 0; // Counter
									?>
									<?php $featured_query = new WP_Query(array(
										'category_name' => 'equipe-projeto-resgate',
										'orgderby' => 'ID',
										'order' => 'ASC'
									)); ?>

									<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
										<?php
										$i++;
										if ($i % 2 != 0) {
											$float = 'no-float';
											$background = 'bg-gray';
											$alignText = 'text-left';
										} else {
											$float = 'float-right';
											$background = 'bg-white';
											$alignText = 'text-right';
										} ?>
										<!-- <h2>ACCORDION 1</h2> -->
										<div class="row <?php echo $background; ?>">
											<div class="col-md-4 <?php echo $float; ?>">
												<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-circle img-vertical-center')); ?>

											</div>
											<div class="col-md-8">
												<h4><?php the_title(); ?></h4>
												<h5><?php the_field('subtitle_accordion'); ?></h5>
												<p><?php the_content(); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="col-md-5 historias-accordion-img">
			<?php if (get_field('historias_image_1', 27)) { ?>
				<img data-aos-offset="300" data-aos="fade-left" data-aos-duration="500" src="<?php the_field('historias_image_1', 27); ?>" />
			<?php }; ?>
			<?php if (get_field('historias_image_2', 27)) { ?>
				<img data-aos-offset="100" data-aos="fade-left" data-aos-duration="1000" src="<?php the_field('historias_image_2', 27); ?>" />
			<?php }; ?>
			<?php if (get_field('historias_image_3', 27)) { ?>
				<img data-aos-offset="100" data-aos="fade-left" data-aos-duration="1500" src="<?php the_field('historias_image_3', 27); ?>" />
			<?php }; ?>
			<?php if (get_field('historias_image_4', 27)) { ?>
				<img data-aos-offset="100" data-aos="fade-left" data-aos-duration="2000" src="<?php the_field('historias_image_4', 27); ?>" />
			<?php }; ?>
			<?php if (get_field('historias_image_5', 27)) { ?>
				<img data-aos-offset="100" data-aos="fade-left" data-aos-duration="2500" src="<?php the_field('historias_image_5', 27); ?>" />
			<?php }; ?>
			<?php if (get_field('historias_image_6', 27)) { ?>
				<img data-aos-offset="100" data-aos="fade-left" data-aos-duration="3000" src="<?php the_field('historias_image_6', 27); ?>" />
			<?php }; ?>
		</div>





	</div>

</section>



<?php get_footer(); ?>
