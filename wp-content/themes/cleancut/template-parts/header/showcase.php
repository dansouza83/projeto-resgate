<section data-aos="fade-down" data-aos-duration="3000" data-aos-delay="300" class="showcase-como-funciona">
 <div class="container">
 <div class="col-md-2"></div>
  <div class="col-md-8">
   <div class="showcase-como-funciona-content">

    <?php echo get_field('small_title'); ?>

    <h1 class="text-white" data-aos="zoom-out" data-aos-duration="3000" ><?php echo the_title(); ?></h1>

    <p data-aos="zoom-in" data-aos-duration="2000">
     <?php echo get_field('subtitle'); ?>
    </p>

    <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>
     <a data-aos="flip-up" data-aos-duration="2000" class="btn btn-default btn-lg" href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>" target="_blank">QUERO ESTUDAR</a>
    <?php endif; ?>

    <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
     <a data-aos="flip-down" data-aos-duration="1000" class="btn btn-default btn-lg" href="<?php echo get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/'); ?>" target="_blank">QUERO COLABORAR</a>
    <?php endif; ?>

   </div>
   <div class="col-md-2"></div>
   <div class="arrow bounce">
    <a class="fa fa-arrow-down fa-2x" href="#scrollDown"></a>
   </div>

  </div>
 </div>
</section>
