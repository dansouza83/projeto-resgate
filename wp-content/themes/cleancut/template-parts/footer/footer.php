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
  <p class="copyright text-muted small">Copyright &copy; Projeto Resgate Theme 2021. All Rights Reserved</p>

 </div>
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css">

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<?php get_template_part('content-modal','page'); ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.12.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.js"></script>

<!-- AOS effects -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>