<?php get_header(); ?>
<section>
 <div class="container padtop-16rem padbottom-15">
  <div data-aos="fade-right" data-aos-duration="2000" class="col-md-8">
   <div role="main" id="contato-8316da49375f0054958a"></div>
  </div>
  <div data-aos="fade-left" data-aos-duration="2000"  class="col-md-4">
  <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'medium' );
}
?>
  <br>
   <?php echo the_field('side_text'); ?>
  </div>
 </div>
</section>

<!-- contato -->
<script type="text/javascript"
 src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
new RDStationForms('contato-8316da49375f0054958a', 'UA-77402993-1').createForm();
</script>

<?php get_footer(); ?>