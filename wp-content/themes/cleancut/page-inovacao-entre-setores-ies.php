<?php get_header(); ?>

<section>
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <?php the_field('title-ies') ?>
   </div>
  </div>
  <div class="row">
   <div class="col-md-6 col-lg-6">
   <div class='embed-container'>
    <iframe src='https://www.youtube.com/embed//4Tq5EGU60hA' frameborder='0' allowfullscreen></iframe></div>
    <div><?php the_field('left_text_ies'); ?></div>
   </div>
   <div class="col-md-6 col-lg-6"></div>
   <div class="col-md-6 col-lg-6"></div>
   <div class="col-md-6 col-lg-6"><?php the_field('right_text_ies'); ?></div>
  </div>
</section>


<?php get_footer(); ?>