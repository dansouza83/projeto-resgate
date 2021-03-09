<?php get_header(); ?>

<?php echo get_template_part('template-parts/header/showcase-blog'); ?>


<?php
$i = 0;

$the_query = new WP_Query(array(
	'category_name' => 'blog',
	'post_status' => 'publish',
	'posts_per_page' => 5,
));

if ($the_query->have_posts()) :
	while ($the_query->have_posts()) : $the_query->the_post();
		$i++;
		if ($i % 2 != 0) {
			// Odd Post
			$section_class = 'section-a';
			$left_class = 'col-lg-5 col-sm-6';
			$right_class = 'col-lg-6 col-sm-6';
			$img_class = 'img-responsive';
		} else {
			// Even Post
			$section_class = 'section-b';
			$left_class = 'col-lg-5 col-sm-push-7 col-sm-6';
			$right_class = 'col-lg-6 col-sm-pull-6 col-sm-6';
			$img_class = 'img-responsive';
		}

		// Aside Content
		if (has_post_format($format, $post_id) && get_post_format($post_id) == 'aside') :
			require get_template_directory() . './content-aside.php';

		// Gallery Content
		elseif (has_post_format($format, $post_id) && get_post_format($post_id) == 'gallery') :
			require get_template_directory() . './content-gallery.php';

			else :
			// Standard Content
			require get_template_directory() . './content.php';
		endif;
	endwhile;

	wp_reset_postdata();

endif;
get_footer(); ?>

