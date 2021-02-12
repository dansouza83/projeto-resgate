<?php get_header(); ?>

<section class="showcase-como-funciona">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content">
    <small><?php echo get_theme_mod('', 'TRANSFORMAÇÃO PELA EDUCAÇÃO'); ?></small>

    <h1><?php echo get_theme_mod('', 'Como Funciona'); ?></h1>

    <p>
     <?php echo get_theme_mod('', 'Promovemos a chance de crianças e jovens ingressarem em um ambiente mais favorável para a educação. Articulamos a captação de bolsas de estudo e apoio complementar para que possam frequentar boas escolas e conquistar uma formação profissional. Assim, os filhos dos beneficiários não precisarão de ajuda de projetos sociais.'); ?>
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
<?php

// $oneArray=array_combine(range(1, count($i)), $i);

$i = 0;  // Counter

?>
<?php $featured_query = new WP_Query(array(
 'category_name' => 'como-funciona',
 'orderby' => 'date',
 'order' => 'ASC'
)); ?>

<?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>

<?php
 $i++;
 if ($i % 2 != 0) {
  $float = 'pull-left';
  $textAlign = 'text-left';
 } else {
  $float = 'pull-right';
  $textAlign = 'text-right';
 }
 ?>
<section>
 <div class="container como-funciona">
  <div class="row <?php echo $textAlign; ?>">
   <div class="col-md-2 col-lg-2 col-sm-2 padtop-3 <?php echo $float; ?>"><?php the_post_thumbnail('como-funciona-img'); ?></div>
   <div class="col-md-10 col-lg-10 col-sm-10 padtop-4"><b><?php the_title(); ?></b>
   <?php the_excerpt(); ?></div>
   </div>
 </div>
</section>
<hr>
<?php endwhile ?>


<div class="row container-fluid bg-primary text-center diferenciais margin-top-4">
 <div class="col-md-12">
  <h2>
   <?php the_field('icons_main_title', 21) ?></h2>
  <hr>
 </div>
 <div class="col-md-12 text-uppercase">
  <h5><i><?php the_field('icons_main_subtitle', 21) ?></i></h5>
 </div>

 <div class="col-lg-3">
  <?php if (get_field('icon_1', 21)) { ?>
  <img src="<?php the_field('icon_1', 21); ?>" />
  <?php }; ?>
  <h5><?php the_field('title_1', 21) ?></h5>
  <hr>
  <p><?php the_field('subtitle_1', 21)?></p>
 </div>

 <div class="col-lg-3">
  <?php if (get_field('icon_2', 21)) { ?>
  <img src="<?php the_field('icon_2', 21); ?>" alt="">
  <?php }; ?>
  <h5><?php the_field('title_2', 21) ?></h5>
  <hr>
  <p><?php the_field('subtitle_2', 21)?></p>
 </div>
 <div class="col-lg-3">
  <?php if (get_field('icon_3', 21)) { ?>
  <img src="<?php the_field('icon_3', 21); ?>" alt="">
  <?php }; ?>
  <h5><?php the_field('title_3', 21) ?></h5>
  <hr>
  <p><?php the_field('subtitle_3', 21)?></p>
 </div>

 <div class="col-lg-3">
  <?php if (get_field('icon_4', 21)) { ?>
  <img src="<?php the_field('icon_4', 21); ?>" alt="">
  <?php }; ?>
  <h5><?php the_field('title_4', 21) ?></h5>
  <hr>
  <p><?php the_field('subtitle_4', 21)?></p>
 </div>
</div>

<?php get_footer(); ?>