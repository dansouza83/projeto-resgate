<?php get_header(); ?>

<?php get_template_part('template-parts/header/showcase'); ?>

<?php
// Variables
$bootstrap = 'col-md-2 col-sm-6 col-6';
$image = 'img-responsive center-block';
?>

<section id="scrollDown" class="section-apoiadores">
 <div class="container">
  <div class="row">
   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_1')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_1'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_2')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_2'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_3')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_3'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_4')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_4'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_5')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_5'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_6')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_6'); ?>" />
    <?php }; ?>
   </div>

   <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_7')) { ?>
     <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_7'); ?>" />
    <?php }; ?>
   </div>

   <div class="row">
    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_8')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_8'); ?>" />
     <?php }; ?>
    </div>

    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_9')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_9'); ?>" />
     <?php }; ?>
    </div>

    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_10')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_10'); ?>" />
     <?php }; ?>
    </div>

    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_11')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_11'); ?>" />
     <?php }; ?>
    </div>

    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_12')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_12'); ?>" />
     <?php }; ?>
    </div>

    <div class="<?php echo $bootstrap; ?>"><?php if (get_field('logo_apoiador_13')) { ?>
      <img class="<?php echo $image; ?>" src="<?php the_field('logo_apoiador_13'); ?>" />
     <?php }; ?>
    </div>

   </div>
  </div>
</section>
<?php get_footer(); ?>
