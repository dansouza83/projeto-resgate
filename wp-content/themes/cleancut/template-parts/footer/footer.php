<footer>
 <div class="container">
  <div class="row">
   <div class="col-lg-4">
    <?php
    wp_nav_menu(
     array(
      'theme_location' => 'footer-menu',
      'depth'          => 2,
      // 'container'      => false,
      'menu_class'     => 'nav header-nav header-bottom-nav nav-center nav-uppercase',
     )
    );
    ?>
   </div>
   <div class="col-md-4">
   <?php
    wp_nav_menu(
     array(
      'theme_location' => 'formularios',
      'depth'          => 2,
      // 'container'      => false,
      'menu_class'     => 'nav header-nav header-bottom-nav nav-center nav-uppercase',
     )
    );
    ?>
   </div>
   <div class="col-md-4"></div>
  </div>
  <p class="copyright text-muted small">Copyright &copy; Projeto Resgate Theme 2021. All Rights Reserved</p>

 </div>
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css">

</footer>
