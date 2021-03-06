<?php
get_header();
get_template_part('template-parts/header/showcase');

$i = 0;  // Counter

$featured_query = new WP_Query(array(
	'category_name' => 'como-funciona',
	'orderby' => 'date',
	'order' => 'ASC'
));

while ($featured_query->have_posts()) : $featured_query->the_post();
	$i++;
	if ($i % 2 != 0) {
		$float = 'pull-left';
		$textAlign = 'text-left';
		$effect = 'data-aos="fade-left" data-aos-duration="2000" data-aos-offset="300"';
		$flip = 'data-aos="flip-right" data-aos-duration="3000" data-aos-offset="300"';
	} else {
		$float = 'pull-right';
		$textAlign = 'text-right';
		$effect = 'data-aos="fade-right" data-aos-duration="2000" data-aos-offset="300"';
		$flip = 'data-aos="flip-left" data-aos-duration="3000" data-aos-offset="300"';
	}
?>
	<section id="scrollDown">
		<div class="container como-funciona">
			<div <?php echo $effect; ?> class="row <?php echo $textAlign; ?>">
				<div class="col-md-2 col-lg-2 col-sm-2 padtop-3 <?php echo $float; ?>">
					<?php the_post_thumbnail('como-funciona-img'); ?></div>
				<div class="col-md-10 col-lg-10 col-sm-10 padtop-4"><b><?php the_title(); ?></b>
					<?php the_excerpt(); ?></div>
			</div>
		</div>
	</section>
	<hr data-aos="flip-left">
<?php endwhile ?>

<?php
//Variables
$headerEffect = 'data-aos="fade-up" data-aos-duration="2500" data-aos-offset="60"';
$hrEffect = 'data-aos="flip-left" data-aos-duration="2000"';
$subtitleEffect = 'data-aos="fade-down" data-aos-duration="3500" data-aos-offset="60"';

$icon1Effect = 'data-aos="fade-up" data-aos-duration="3000" ';
$icon2Effect = 'data-aos="fade-up" data-aos-duration="2500" ';
$icon3Effect = 'data-aos="fade-up" data-aos-duration="2000" ';
$icon4Effect = 'data-aos="fade-up" data-aos-duration="1500" ';

$title1Effect = 'data-aos="flip-up" data-aos-duration="3000" data-aos-offset="100" ';
$title2Effect = 'data-aos="flip-up" data-aos-duration="3000" data-aos-offset="100" ';
$title3Effect = 'data-aos="flip-up" data-aos-duration="3000" data-aos-offset="100" ';
$title4Effect = 'data-aos="flip-up" data-aos-duration="3000" data-aos-offset="100" ';

$titleH51Effect = 'data-aos="fade-up" data-aos-duration="1000" ';
$titleH52Effect = 'data-aos="fade-up" data-aos-duration="2000" ';
$titleH53Effect = 'data-aos="fade-up" data-aos-duration="1000" ';
$titleH54Effect = 'data-aos="fade-left" data-aos-duration="1500" ';

$subtitle1Effect = 'data-aos="fade-up" data-aos-duration="3000" ';
$subtitle2Effect = 'data-aos="fade-up" data-aos-duration="1500" ';
$subtitle3Effect = 'data-aos="fade-up" data-aos-duration="1000" ';
$subtitle4Effect = 'data-aos="fade-up" data-aos-duration="2000" ';

?>

<div class="row text-white container-fluid bg-primary text-center diferenciais margin-top-4">
	<div class="col-md-12">
		<h2 <?php echo $headerEffect; ?> ><?php the_field('icons_main_title', 21) ?></h2>
		<hr <?php echo $hrEffect; ?> >
	</div>
	<div <?php echo $subtitleEffect; ?> class="col-md-12text-uppercase">
		<h5 class="text-white"><i><?php the_field('icons_main_subtitle', 21) ?></i></h5>
	</div>

	<div class="col-lg-3">
		<?php if (get_field('icon_1', 21)) { ?>
			<img <?php echo $icon1Effect; ?> src="<?php the_field('icon_1', 21); ?>" />
		<?php }; ?>
		<h5 <?php echo $title1Effect; ?> class="text-white"><?php the_field('title_1', 21) ?></h5>
		<hr <?php echo $hrEffect; ?> >
		<p <?php echo $subtitle1Effect; ?>><?php the_field('subtitle_1', 21) ?></p>
	</div>

	<div class="col-lg-3">
		<?php if (get_field('icon_2', 21)) { ?>
			<img <?php echo $icon2Effect; ?> src="<?php the_field('icon_2', 21); ?>" alt="">
		<?php }; ?>
		<h5 <?php echo $title2Effect; ?> class="text-white"><?php the_field('title_2', 21) ?></h5>
		<hr <?php echo $hrEffect; ?> >
		<p <?php echo $subtitle2Effect; ?>><?php the_field('subtitle_2', 21) ?></p>
	</div>
	<div class="col-lg-3">
		<?php if (get_field('icon_3', 21)) { ?>
			<img <?php echo $icon3Effect; ?> src="<?php the_field('icon_3', 21); ?>" alt="">
		<?php }; ?>
		<h5 <?php echo $title3Effect; ?> class="text-white"><?php the_field('title_3', 21) ?></h5>
		<hr <?php echo $hrEffect; ?> >
		<p <?php echo $subtitle3Effect; ?>><?php the_field('subtitle_3', 21) ?></p>
	</div>

	<div class="col-lg-3">
		<?php if (get_field('icon_4', 21)) { ?>
			<img <?php echo $icon4Effect; ?> src="<?php the_field('icon_4', 21); ?>" alt="">
		<?php }; ?>
		<h5 <?php echo $title4Effect; ?> class="text-white"><?php the_field('title_4', 21) ?></h5>
		<hr <?php echo $hrEffect; ?> >
		<p <?php echo $subtitle4Effect; ?>><?php the_field('subtitle_4', 21) ?></p>
	</div>
</div>

<?php get_footer(); ?>
