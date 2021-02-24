<?php get_header(); ?>

<div style="margin-top: 13.7rem;" class="showcase-think-tank-criando-o-futuro animated fadeInDown padtop-15">
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
</div>

<div>
 <img class="img-responsive" src="<?php echo get_theme_file_uri('/img/ThinkTank-Estudantes3-1.jpg') ?>" alt="">
 <div class="col-md-6">
  <img src="<?php echo get_theme_file_uri('/img/depoimento.jpg') ?>" alt="">
 </div>
 <div class="col-md-6">
  <img src="<?php echo get_theme_file_uri('/img/depoimento2.jpg') ?>" alt="">
 </div>
</div>



<div><h1 class="text-center">VÍDEOS</h1></div>



 <?php $i = 0; ?>

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
    <?php
    $i++;
    if ($i % 2 != 0) {
     $float = 'no-float';
     $bgcolor = 'bg-video-gr';
    } else {
     $float = 'pull-right';
     $bgcolor = 'bg-color-org';
    }
    ?>
    <div class="container-flex">
     <article class="post <?php echo $bgcolor; ?>">
      <div class="col-md-6 no-padding <?php echo $float ?>">
       <div class="embed-container">
        <?php the_field('think_tank_video') ?>
       </div>
      </div>
      <div class="col-md-6">
       <h3><?php the_title(); ?></h3>
       <?php the_content(); ?>
      </div>

     </article>
    </div>
    <hr>

   <?php endwhile;
   wp_reset_postdata(); ?>


  <?php endwhile; ?>

 <?php endif; ?>

</div>



<?php get_footer(); ?>