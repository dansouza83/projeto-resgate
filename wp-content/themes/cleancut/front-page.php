<?php get_header(); ?>
<!-- SHOWCASE -->

<section data-aos="fade-in-down" data-aos-duration="3000" class="row showcase">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-content">
    <small data-aos="zoom-in"
     data-aos-duration="800"><?php echo get_theme_mod('showcase_heading_small', 'SEJA UM PADRINHO DE UMA CRIANÇA.'); ?></small>

    <h1 data-aos="zoom-in" data-aos-duration="1000">
     <?php echo get_theme_mod('showcase_heading', 'Eles têm um sonho.'); ?></h1>

    <p data-aos="zoom-in-up" data-aos-duration="1500" class="lead">
     <?php echo get_theme_mod('showcase_text', 'Basta o estudo para alcançá-lo.'); ?></p>

    <?php if (get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/') != '') : ?>

    <a data-aos="fade-up-right" data-aos-duration="1000" class="btn btn-default btn-lg"
     href="<?php echo get_theme_mod('queroestudar_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>"
     target="_blank">QUERO ESTUDAR</a>
    <?php endif; ?>

    <?php if (get_theme_mod('querocolaborar_url', 'https://projetoresgate.org.br/quero-colaborar-projeto-social-joinville/') != '') : ?>
    <a data-aos="fade-up-left" data-aos-duration="1500" data-target="#quero_colaborar_modal" data-toggle="modal"
     class="btn btn-default btn-lg" href="<?php echo get_theme_mod('querocolaborar_url', '#quero_colaborar_modal'); ?>"
     target="_blank">QUERO COLABORAR</a>
    <?php endif; ?>
    <div data-aos-offset="50" data-aos="fade-in-up" data-aos-duration="2500" class="arrow bounce">
     <a id="arrow" class="fa fa-arrow-down fa-2x" href="#scrollDown" data-target="scrollDown"></a>
    </div>
   </div>

  </div>
 </div>
</section>



<!-- SUB BANNER -->

<section class="row sub-banner" id="scrollDown">
 <div class="container">
  <div class="col-md-8">
   <div data-aos-duration="1000" data-aos="fade-up" class="sub-banner-content padtop-15 col-sm-12 col-xs-12">
    <h1 class="">
     <?php echo get_theme_mod('sub_banner_heading', 'Educação e desenvolvimento pessoal para transformação') ?></h1>
    <h3>
     <?php echo get_theme_mod('sub_heading_sub_heading', 'Articulação entre sociedade, empresas e instituições, onde um potencializa o trabalho do outro:'); ?>
    </h3>
    <img class="sub-banner-img-2 img-responsive center-block" src="<?php echo get_theme_mod('sub_banner_image2') ?>"
     alt="">
   </div>
  </div>
  <div class=" pad-5 col-md-4 col-sm-12 col-xs-12">
   <div data-aos-duration="2000" data-aos-anchor-placement="center-bottom" data-aos="fade-up" class="content">
    <img class="img-responsive center-block" src="<?php echo get_theme_mod('sub_banner_image'); ?>" alt="">
   </div>
  </div>
 </div>
</section>

<!-- CALL TO ACTION -->

<section class="row call-to-action">
 <div class="space"></div>
 <div class="container transparent-bg-dark">

  <div style="max-height: 70px;">
   <h1 data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="1500">
    <?php echo get_theme_mod('call_to_action_heading', 'Formar um jovem para vida, não há preço.'); ?></h1>
  </div>

  <h4 data-aos="fade-down" data-aos-duration="2000" class="text-center text-white call-to-action-subtitle">
   <?php echo get_theme_mod('call_to_action_heading_small', 'Histórias de superação e colaboração que mudam vidas'); ?>
  </h4>

  <div data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2000"
   style="margin-top: 14px; padding-bottom: 18px;" class="container center-horizontal-div padtop-20px padbottom-20px">
   <a class="btn btn-default btn-lg"
    href="<?php echo get_theme_mod('call_to_action_url', 'https://projetoresgate.org.br/quero-estudar-projeto-resgate/'); ?>"><?php echo get_theme_mod('call_to_action_button_txt'); ?></a>
  </div>

 </div>

</section>

<!-- NUMBERS SECTION -->

<section class="container-fluid numbers padtop-5 padbottom-5">
 <div class="container">
  <h1 data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2000"
   class="text-center col-xs-12">
   <?php echo get_theme_mod('numbers_heading', 'Existem muitos sonhos para serem viabilizados'); ?></h1>
  <h3 data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-down" data-aos-duration="2000"
   class="text-center col-xs-12">
   <?php echo get_theme_mod('numbers_sub_heading', 'Precisamos da sua ajuda para potencializar o projeto'); ?></h3>
 </div>
 <div class="container padtop-5">
  <div class="numbers-content col-md-3 col-sm-6 col-xs-12">
   <i data-aos-offset="200" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="800"
    class="<?php echo get_theme_mod('number_1_icon', 'fa fa-4x fa-star'); ?>"></i>
   <h1 data-aos-offset="150" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="1000">
    <?php echo get_theme_mod('number_1', '187'); ?></h1>
   <hr data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-right" data-aos-duration="800">
   <h4 data-aos-offset="50" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2000">
    <?php echo get_theme_mod('numbers_heading_1', 'CONCLUÍRAM O ENSINO TÉCNICO'); ?></h4>
  </div>
  <div class="numbers-content col-md-3 col-sm-6 col-xs-12">
   <i data-aos-offset="200" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="1000"
    class="<?php echo get_theme_mod('number_2_icon', 'fa fa-4x fa-graduation-cap'); ?>"></i>
   <h1 data-aos-offset="150" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="1200">
    <?php echo get_theme_mod('number_2', '59'); ?></h1>
   <hr data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-right" data-aos-duration="800">
   <h4 data-aos-offset="50" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="1500">
    <?php echo get_theme_mod('numbers_heading_2', 'SE FORMARAM OU CURSAM ENSINO SUPERIOR'); ?></h4>
  </div>
  <div class="numbers-content col-md-3 col-sm-6 col-xs-12">
   <i data-aos-offset="200" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="1500"
    class="<?php echo get_theme_mod('number_3_icon', 'fa fa-4x fa-book'); ?>"></i>
   <h1 data-aos-offset="150" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2000">
    <?php echo get_theme_mod('number_3', '265'); ?></h1>
   <hr data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-right" data-aos-duration="800">
   <h4 data-aos-offset="50" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2500">
    <?php echo get_theme_mod('numbers_heading_3', 'BOLSAS DE ESTUDO EM 2014'); ?></h4>
  </div>
  <div class="numbers-content col-md-3 col-sm-6 col-xs-12">
   <i data-aos-offset="200" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2000"
    class="<?php echo get_theme_mod('number_4_icon'); ?>"></i>
   <h1 data-aos-offset="150" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="2500">
    <?php echo get_theme_mod('number_4', '476'); ?></h1>
   <hr data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-right" data-aos-duration="800">
   <h4 data-aos-offset="50" data-aos-anchor-placement="center-bottom" data-aos="flip-up" data-aos-duration="3000">
    <?php echo get_theme_mod('numbers_heading_4', 'BENIFICIÁRIOS CRESCERAM E AJUDAM O PROJETO'); ?></h4>
  </div>
 </div>
</section>

<!-- WHITE SECTION -->

<section class="container-fluid center-block white-section padtop-5 padbottom-5">

 <div class="container">
  <h1 data-aos-anchor-placement="center-bottom" data-aos="fade-in" data-aos-duration="1500"
   class="text-center col-xs-12">
   <?php echo get_theme_mod('white_section_heading', 'Existem muitos sonhos para serem viabilizados'); ?></h1>
  <h3 data-aos-anchor-placement="center-bottom" data-aos="fade-in" data-aos-duration="1500"
   class="text-center col-xs-12">
   <?php echo get_theme_mod('white_section_sub_heading', 'Precisamos da sua ajuda para potencializar o projeto'); ?>
  </h3>
 </div>

 <div class="container align-center-div padtop-5 text-center center-block">

  <div data-aos-anchor-placement="center-bottom" data-aos="zoom-in" data-aos-duration="700"
   class="box-content col-md-3 col-sm-6 col-xs-12">
   <i class="<?php echo get_theme_mod('white_section_1_icon', 'fa fa-4x fa-user'); ?>"></i>
   <h4><?php echo get_theme_mod('white_section_1', 'JOVEM'); ?></h4>
   <hr>
   <h6>
    <?php echo get_theme_mod('white_section_heading_1', 'Educação e desenvolvimento pessoal para alcançar um sonho.'); ?>
   </h6>
  </div>

  <div data-aos-anchor-placement="center-bottom" data-aos="zoom-in" data-aos-duration="1000"
   class="box-content col-md-3 col-sm-6 col-xs-12">
   <i class="<?php echo get_theme_mod('white_section_2_icon', 'fa fa-4x fa-users') ?>"></i>
   <h4><?php echo get_theme_mod('white_section_2', 'FAMÍLIA'); ?></h4>
   <hr>
   <h6>
    <?php echo get_theme_mod('white_section_heading_2', 'Acompanhamento social e oportunidades para seus filhos.'); ?>
   </h6>
  </div>

  <div data-aos-anchor-placement="center-bottom" data-aos="zoom-in" data-aos-duration="1300"
   class="box-content col-md-3 col-sm-6 col-xs-12">
   <i class="<?php echo get_theme_mod('white_section_3_icon', 'fa fa-4x fa-universal-access'); ?>"></i>
   <h4><?php echo get_theme_mod('white_section_3', 'SOCIEDADE'); ?></h4>
   <hr>
   <h6>
    <?php echo get_theme_mod('white_section_heading_3', 'Elevação dos índices e educação para desenvolvimento da comunidade.'); ?>
   </h6>
  </div>

  <div data-aos-anchor-placement="center-bottom" data-aos="zoom-in" data-aos-duration="1600"
   class="box-content col-md-3 col-sm-6 col-xs-12">
   <i class="<?php echo get_theme_mod('white_section_4_icon', 'fa fa-4x fa-building'); ?>"></i>
   <h4><?php echo get_theme_mod('white_section_4', 'EMPRESAS'); ?></h4>
   <hr>
   <h6>
    <?php echo get_theme_mod('white_section_heading_4', 'Formação de profissionais competentes e redução de problemas sociais.'); ?>
   </h6>
  </div>

 </div>
</section>

<!-- LOGOS -->
<section class="logo-slider container-fluid shadowUp padtop-5 padbottom-5">
 <div class="container text-center">
  <h1 data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="flip-down" data-aos-duration="1500">
   <?php echo get_theme_mod('slider_logo_heading', 'Pessoas e Empresas apoiam o Projeto Resgate'); ?></h1>
  <h3 data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="2500">
   <?php echo get_theme_mod('slider_logo_sub_heading', 'Conheça algumas empresas apoiadoras') ?></h3>
 </div>
 <div class="container padtop-5">
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="800"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_1') ?>"
    alt=""></div>
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="1000"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_2') ?>"
    alt=""></div>
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="1500"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_3') ?>"
    alt=""></div>
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="2000"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_4') ?>"
    alt=""></div>
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="2500"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_5') ?>"
    alt=""></div>
  <div data-aos-offset="100" data-aos-anchor-placement="center-bottom" data-aos="fade-up" data-aos-duration="3000"
   class="col-md-2"><img class="img-responsive center-block" src="<?php echo get_theme_mod('slider_logo_image_6') ?>"
    alt=""></div>
 </div>
</section>


<?php get_footer(); ?>