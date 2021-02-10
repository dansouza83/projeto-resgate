<?php get_header(); ?>

<section class="showcase-como-funciona">
 <div class="container">
  <div class="col-md-12">
   <div class="showcase-como-funciona-content margin-top-8">
    <small><?php echo get_theme_mod('', 'PROJETO SOCIAL EM JOINVILLE QUE TRANSFORMA PELA EDUCAÇÃO'); ?></small>

    <h1><?php echo get_theme_mod('', 'Quem Somos'); ?></h1>

    <p><?php echo get_theme_mod('', 'Associação Projeto Resgate foi fundada em 1999. Tivemos o desejo de ajudar uma comunidade, mas não sabíamos como. Ao analisar a situação destas pessoas, entendemos que o problema não era apenas econômico, e sim social. Seria utópico resolver todas questões sociais, então elegemos a educação como prioridade, assim, as próximas gerações não precisariam mais de apoio. Iniciamos sem conhecimento específico, conseguimos engajar parceiros e formamos uma rede. A cada ano uma nova conquista e aprendizado. Atualmente o projeto está maduro e conta com vários casos de sucesso. Beneficiários estão formados e no mercado de trabalho, e voltaram para ajudar o projeto. Muitos estão no caminho e logo completarão o ciclo.'); ?></p>

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



<?php get_footer(); ?>