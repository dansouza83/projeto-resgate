<?php get_header(); ?>

<?php get_template_part('template-parts/header/showcase'); ?>

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
