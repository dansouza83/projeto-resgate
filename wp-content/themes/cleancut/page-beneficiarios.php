<?php get_header(); ?>

<section class="showcase-como-funciona">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content">
    <small><?php echo get_theme_mod('', 'CONHEÇA OS JOVENS BENEFICIADOS COM O PROJETO RESGATE'); ?></small>

    <h1><?php echo get_theme_mod('', 'Beneficiários'); ?></h1>

    <p>
     <?php echo get_theme_mod('', 'Conheça algumas jovens que estão buscando seu sonho com a educação em escolas particulares com apoio do Projeto Resgate em Joinville.'); ?>
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

<section class="section-beneficiarios">
 <div class="container">
  <div class="row">
   <?php echo do_shortcode('[gallery ids="304,306,300,302,301,298,299,296,295,297,293,292,294,289,287,288,284,282,281,283" size="thumbnail" columns="4"  align="center" link="none" ]');?>
  </div>
 </div>
</section>
<?php get_footer(); ?>