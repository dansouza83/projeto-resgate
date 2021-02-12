<?php get_header(); ?>

<section class="showcase-think-tank-criando-o-futuro">
 <div class="showcase-criando-o-futuro-content">
  <div class="showcase-criando-o-futuro-buttons">
   <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>
    <a class="btn btn-default btn-md" href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>" target="_blank">QUERO ESTUDAR</a>
   <?php endif; ?>

   <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
    <a class="btn btn-default btn-md" href="<?php echo get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/'); ?>" target="_blank">QUERO COLABORAR</a>
   <?php endif; ?>
  </div>
 </div>
</section>

<section>
 <img class="img-responsive" src="<?php echo get_theme_file_uri('/img/ThinkTank-Estudantes3-1.jpg') ?>" alt="">
</section>

<section>
 <div class="col-md-6">
  <img src="<?php echo get_theme_file_uri('/img/depoimento.jpg') ?>" alt="">
 </div>
 <div class="col-md-6">
  <img src="<?php echo get_theme_file_uri('/img/depoimento2.jpg') ?>" alt="">
 </div>
</section>

<section>



 <?php if (have_posts()) :  ?>
  <?php while (have_posts()) : the_post(); ?>

   <?php
   $args = array(
    'post_type' => 'ttvideos',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
   );

   $loop = new WP_Query($args);

   while ($loop->have_posts()) : $loop->the_post(); ?>
    <article class="post">
    <hr>

     <div class="col-md-5">
      <div class="embed-container">
       <?php the_field('think_tank_video') ?>
      </div>
     </div>
     <div class="col-md-7">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
     </div>

    </article>
   <?php endwhile;
   wp_reset_postdata(); ?>


  <?php endwhile; ?>

 <?php endif; ?>

</section>



<?php get_footer(); ?>