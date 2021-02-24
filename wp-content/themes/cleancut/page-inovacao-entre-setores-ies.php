<?php get_header(); ?>
<section class="showcase-como-funciona animated fadeInDown">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content animated fadeInUp animated-3s">
    <?php echo the_field('small_title'); ?>

    <h1><?php echo the_field('title'); ?></h1>

    <p>
     <?php echo the_field('subtitle'); ?>
    </p>

    <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>
    <a class="btn btn-default btn-lg"
     href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>"
     target="_blank">QUERO ESTUDAR</a>
    <?php endif; ?>

    <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
    <a class="btn btn-default btn-lg"
     href="<?php echo get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/'); ?>"
     target="_blank">QUERO COLABORAR</a>
    <?php endif; ?>

   </div>
  </div>
 </div>
</section>
<section class="animated fadeInUp">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <?php the_field('title-ies') ?>
   </div>
  </div>
  <div class="row">
   <div class="col-md-6 col-lg-6">
    <div class='embed-container'>
     <iframe style="margin-top: 0px;" src='https://www.youtube.com/embed//4Tq5EGU60hA' frameborder='0'
      allowfullscreen></iframe>
    </div>
    <div><?php the_field('left_text_ies'); ?></div>
   </div>
   <div class="col-md-6 col-lg-6"></div>
   <div class="col-md-6 col-lg-6"></div>
   <div class="col-md-6 col-lg-6">
   <?php the_field('right_text_ies'); ?>
   </div>
  </div>
</section>


<?php get_footer(); ?>