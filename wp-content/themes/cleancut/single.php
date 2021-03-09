<?php get_header(); ?>
<?php get_template_part('template-parts/header/showcase'); ?>

<?php while (have_posts()) : the_post(); ?>
 <section id="scrollDown" class="row">
  <div class="container">
   <div class="col-md-12">
   </div>
  </div>
 </section>

 <section class="row page">
  <div class="container">
   <div class="col-md-8">
    <div class="post-thumbnail">
     <?php the_post_thumbnail(); ?>
    </div>
    <div class="meta">Postado em <?php the_time('F j, g:i a'); ?></div>
    <?php echo the_content(); ?>
    <?php comments_template(); ?>
   </div>
   <div class="col-md-4">

     <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>

   </div>
  </div>
 </section>

<?php endwhile; ?>
<?php get_footer(); ?>
