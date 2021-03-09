<?php get_header(); ?>

<h4 data-aos="fade-down" data-aos-duration="2000">Linkedin</h4>
				<div class="linkedin">
					<?php get_template_part('template-parts/carousel/carousel'); ?>
					<?php
					// the query
					$the_query = new WP_Query(array(
						'category_name' => 'linkedin',
						'post_status' => 'publish',
						'posts_per_page' => 2,
						'order' => 'DESC',
						'orderby' => 'date'
					));
					?>

					<?php if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div data-aos="fade-left" data-aos-duration="2800" data-aos-delay="500" class="linkedin">
								<a href="<?php the_field('linkedin_url'); ?>" target="blank">
									<?php the_post_thumbnail('linkedin-image-post-type'); ?>
								</a>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php __('No News'); ?></p>
					<?php endif;
					?>
				</div>
			</div>

<?php get_footer(); ?>

