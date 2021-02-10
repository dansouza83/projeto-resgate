<?php get_header(); ?>

<section class="showcase-como-funciona">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content">
    <small><?php echo get_theme_mod('', 'PESSOAS FÍSICAS E EMPRESAS COLABORAM PARA TRANSFORMAR A EDUCAÇÃO'); ?></small>

    <h1><?php echo get_theme_mod('', 'Apoiadores'); ?></h1>

    <p>
     <?php echo get_theme_mod('', 'Conheça algumas empresas que apoiam o Projeto Resgate em Joinville. Além das empresas, várias pessoas físicas e profissionais transformam nosso projeto em uma realidade.'); ?>
    </p>

    <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>
     <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>" target="_blank">QUERO ESTUDAR</a>
    <?php endif; ?>

    <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
     <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/'); ?>" target="_blank">QUERO COLABORAR</a>
    <?php endif; ?>

   </div>
  </div>
 </div>
</section>

<section class="section-apoiadores">
 <div class="container">
  <div class="row">
   <div class="col-md-2"><?php if (get_field('logo_apoiador_1')) { ?>
     <img src="<?php the_field('logo_apoiador_1'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_2')) { ?>
     <img src="<?php the_field('logo_apoiador_2'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_3')) { ?>
     <img src="<?php the_field('logo_apoiador_3'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_4')) { ?>
     <img src="<?php the_field('logo_apoiador_4'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_5')) { ?>
     <img src="<?php the_field('logo_apoiador_5'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_6')) { ?>
     <img src="<?php the_field('logo_apoiador_6'); ?>" />
    <?php }; ?>
   </div>

   <div class="col-md-2"><?php if (get_field('logo_apoiador_7')) { ?>
     <img src="<?php the_field('logo_apoiador_7'); ?>" />
    <?php }; ?>
   </div>

   <div class="row">
    <div class="col-md-2"><?php if (get_field('logo_apoiador_8')) { ?>
      <img src="<?php the_field('logo_apoiador_8'); ?>" />
     <?php }; ?>
    </div>

    <div class="col-md-2"><?php if (get_field('logo_apoiador_9')) { ?>
      <img src="<?php the_field('logo_apoiador_9'); ?>" />
     <?php }; ?>
    </div>

    <div class="col-md-2"><?php if (get_field('logo_apoiador_10')) { ?>
      <img src="<?php the_field('logo_apoiador_10'); ?>" />
     <?php }; ?>
    </div>

    <div class="col-md-2"><?php if (get_field('logo_apoiador_11')) { ?>
      <img src="<?php the_field('logo_apoiador_11'); ?>" />
     <?php }; ?>
    </div>

    <div class="col-md-2"><?php if (get_field('logo_apoiador_12')) { ?>
      <img src="<?php the_field('logo_apoiador_12'); ?>" />
     <?php }; ?>
    </div>

    <div class="col-md-2"><?php if (get_field('logo_apoiador_13')) { ?>
      <img src="<?php the_field('logo_apoiador_13'); ?>" />
     <?php }; ?>
    </div>

   </div>
  </div>
</section>
<?php get_footer(); ?>