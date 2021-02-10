<section class="dark_banner animated fadeInUp container-fluid bg-dark">
 <div class="container">
  <div class="col-md-8 dark_banner-heading">
   <h2 class="partner-heading"><?php echo get_theme_mod('dark_banner_heading', 'Seja um parceiro do Projeto Resgate.'); ?></h2>
   <h4 class="partner-sub-heading"><?php echo get_theme_mod('dark_banner_sub_heading', 'Há muitas formas de colaborar com este projeto sério e eficaz.'); ?></h4>
  </div>
  <div class="col-md-4 padtop-7 padbottom-5">
   <a href="<?php echo get_theme_mod('partner_button_link', 'https://projetoresgate.org.br/apoiadores-projeto-social-joinville/') ?>" type="button" class="btn btn-warning partner-button btn-lg"><?php echo get_theme_mod('partner_button_text', 'Quero ser um apoiador'); ?></a>
  </div>
 </div>
</section>

<section class="banner animated animate fadeIn ">
 <div class="container">
  <div class="row">
   <div class="col-md-6 banner-heading animated fadeInDown">
    <h2><?php echo get_theme_mod('bottom_banner_heading', 'Nossas redes sociais'); ?></h2>
   </div>
   <div class="col-md-6">
    <ul class="list-inline banner-social-buttons  animated fadeInRight animate__delay-2s">
     <?php if (get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
      <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url', 'http://facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
     <?php endif; ?>

     <?php if (get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
      <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('twitter_url', 'http://twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
     <?php endif; ?>

     <?php if (get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
      <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('linkedin_url', 'http://linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a></li>
     <?php endif; ?>
    </ul>
   </div>
  </div>
 </div>
</section>

<footer>
 <div class="container">
  <div class="row">
   <div class="col-lg-3">
    <?php
    wp_nav_menu(
     array(
      'theme_location' => 'footer',
      'depth'          => 2,
      'container'      => false,
      'menu_class'     => 'nav header-nav header-bottom-nav nav-center nav-uppercase',
      'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
      'walker'         => new wp_bootstrap_navwalker()
     )
    );
    ?>
   </div>
   <div class="col-md-3"></div>
   <div class="col-md-3"></div>
   <div class="col-md-3"></div>
  </div>
  <p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2016. All Rights Reserved</p>

 </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

</body>

</html>