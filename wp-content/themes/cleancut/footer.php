


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