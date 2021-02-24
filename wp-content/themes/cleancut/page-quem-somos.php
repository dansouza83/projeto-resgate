<?php get_header(); ?>

<section class="showcase-como-funciona">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content margin-top-15">
    <small data-aos="zoom-in-out" data-aos-duration="1000"><?php echo get_field('small_title'); ?></small>

    <h1 data-aos="zoom-in-down" data-aos-duration="2000"><?php the_title(); ?></h1>

    <p data-aos="zoom-in-up" data-aos-duration="3000"><?php echo get_field('subtitle'); ?></p>

    <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>
     <a data-aos-offset="10" data-aos="zoom-in-right" data-aos-duration="3000" class="btn btn-default btn-lg" href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>" target="_blank">QUERO ESTUDAR</a>
    <?php endif; ?>

    <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
     <a data-aos-offset="10" data-aos="zoom-in-left" data-aos-duration="1500" class="btn btn-default btn-lg" href="<?php echo get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/'); ?>" target="_blank">QUERO COLABORAR</a>
    <?php endif; ?>

   </div>
  </div>
 </div>
</section>



<?php get_footer(); ?>