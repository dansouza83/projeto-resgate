
<?php
get_header();
$query = new WP_Query( array( 'category__in' => array(1) ) );
// the query
// $query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>

<!-- pagination here -->

<!-- the loop -->
<?php while ( $query->have_posts() ) : $query->the_post();

 $i++;
 if ($i % 2 != 0) {
  // Odd Post
  $section_class = 'section-a';
  $left_class = 'col-lg-5 col-sm-6';
  $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
  $img_class = 'img-circle img-responsive';
 } else {
  // Even Post
  $section_class = 'section-b';
  $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 ';
  $right_class = 'col-lg-5 col-sm-pull-6 col-sm-6';
  $img_class = 'img-responsive img-circle padtop-5';
 }
 ?>
 <?php
 // Aside Content
 if (has_post_format($format, $post_id) && get_post_format($post_id) == 'aside') : ?>
<?php require get_template_directory() . './content-aside.php'; ?>

<?php
// Gallery Content
elseif(has_post_format($format, $post_id) && get_post_format($post_id) == 'gallery') : ?>
<?php require get_template_directory() . './content-gallery.php' ?>

<?php else : ?>
  <?php // Standard Content
  require get_template_directory() . './content.php'; ?>
 <?php endif; ?>
<?php endwhile; ?>
<!-- end of the loop -->

<!-- pagination here -->

<?php wp_reset_postdata(); ?>


<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

