<?php

function cleancut_customize_register($wp_customize)
{

 // ======================== SHOWCASE

 $wp_customize->add_section('showcase', array(
  'title'       => __('Showcase', 'cleancut'),
  'description' => sprintf(__('Options for showcase area', 'cleancut')),
  'priority'    => 130
 ));

 // Heading Setting
 $wp_customize->add_setting('showcase_heading', array(
  'default'   => _x('Projeto Resgate', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Heading Control
 $wp_customize->add_control('showcase_heading', array(
  'label'     => __('Heading', 'cleancut'),
  'section'   => 'showcase',
  'priority'  => 3
 ));

 // Heading Small Setting
 $wp_customize->add_setting('showcase_heading_small', array(
  'default'   => _x('Projeto Resgate', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Heading Small Control
 $wp_customize->add_control('showcase_heading_small', array(
  'label'     => __('Heading Small', 'cleancut'),
  'section'   => 'showcase',
  'priority'  => 2
 ));

 // Text Setting
 $wp_customize->add_setting('showcase_text', array(
  'default'   => _x('Um projeto social de Joinville, Santa Catarina', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Text Control
 $wp_customize->add_control('showcase_text', array(
  'label'     => __('Text', 'cleancut'),
  'section'   => 'showcase',
  'priority'  => 4
 ));

 // Image Setting
 $wp_customize->add_setting('showcase_image', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/showcase.jpg',
  'type'      => 'theme_mod'
 ));

 // Image Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
  'label'     => __('Background Image', 'cleancut'),
  'section'   => 'showcase',
  'settings'  => 'showcase_image',
  'priority'  => 1
 )));

 // Showcase Height Setting
 $wp_customize->add_setting('showcase_height', array(
  'default'    => _x(700, 'cleancut'),
  'type'       => 'theme_mod'
 ));

 // Showcase Height Control
 $wp_customize->add_control('showcase_height', array(
  'label'     => __('Showcase Height', 'cleancut'),
  'section'   => 'showcase',
  'priority'  => 5
 ));

// ============================= SHOWCASE

$wp_customize->add_section('social', array(
 'title'       => __('Showcase Buttons', 'cleancut'),
 'description' => sprintf(__('Link para os formulãrios', 'cleancut')),
 'priority'    => 140
));

// Quero estudar URL Setting
$wp_customize->add_setting('queroestudar_url', array(
 'default'              => _x('https://projetoresgate.org.br/formularios/quero-estudar/', 'cleancut'),
 'type'                 => 'theme_mod'
));

// Quero estudar URL Control
$wp_customize->add_control('queroestudar_url', array(
 'label'    => __('Quero Estudar URL', 'cleancut'),
 'section'  => 'social',
 'priority' => 1
));

// Quero Colaborar URL Setting
$wp_customize->add_setting('querocolaborar_url', array(
 'default'   => _x('https://projetoresgate.org.br/formularios/quero-colaborar/', 'cleancut'),
 'type'      => 'theme_mod'
));

// Quero Colaborar URL Control
$wp_customize->add_control('querocolaborar_url', array(
 'label'    => __('Quero Colaborar URL', 'cleancut'),
 'section'  => 'social',
 'priority' => 2
));


// ========================= SUBBANER

 $wp_customize->add_section('sub_banner', array(
  'title'       => __('Sub-Banner', 'cleancut'),
  'description' => sprintf(__('Secondary banner in home', 'cleancut')),
  'priority'    => 150
 ));

 // Sub-Banner Image Setting.
 $wp_customize->add_setting('sub_banner_image', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/banner.jpg',
  'type'      => 'theme_mod'
 ));

 // Sub-Banner Image Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sub_banner_image', array(
  'label'     => __('Right Image Block', 'cleancut'),
  'section'   => 'sub_banner',
  'settings'  => 'sub_banner_image',
  'priority'  => 1
 )));

 // Sub-Banner Heading Setting
 $wp_customize->add_setting('sub_banner_heading', array(
  'default'   => _x('Educação e desenvolvimento pessoal para transformação', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Sub-Banner Heading Control
 $wp_customize->add_control('sub_banner_heading', array(
  'label'     => __('Heading', 'cleancut'),
  'section'   => 'sub_banner',
  'priority'  => 2
 ));

 // Sub-Banner Sub-Heading Setting
 $wp_customize->add_setting('sub_banner_sub_heading', array(
  'default'   => _x('Articulação entre sociedade, empresas e instituições, onde um potencializa o trabalho do outro:', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Sub-Banner Sub-Heading Control
 $wp_customize->add_control('sub_banner_sub_heading', array(
  'label'     => __('Sub-Heading', 'cleancut'),
  'section'   => 'sub_banner',
  'priority'  => 2
 ));

 // Sub-banner Image 2 Setting
 $wp_customize->add_setting('sub_banner_image2', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/showcase.jpg',
  'type'      => 'theme_mod'
 ));

 // Sub_banner Image 2 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sub_banner_image2', array(
  'label'     => __('Background Image', 'cleancut'),
  'section'   => 'sub_banner',
  'settings'  => 'sub_banner_image2',
  'priority'  => 3
 )));

// ======================= MISC

 // Misc Options Section
 $wp_customize->add_section('misc', array(
  'title'      => __('Misc Options', 'cleancut'),
  'descrption' => sprintf(__('Misc options for theme', 'cleancut')),
  'priority'   => 150
 ));

 // Choose either theme animation or static ----------------------------------------------------------------------//
 $wp_customize->add_setting('animation', array(
  'default'   => '1'
 ));

 $wp_customize->add_control(
  new WP_Customize_Control(
   $wp_customize,
   'animation',
   array(
    'label'    => __('Enable Animation', 'cleancut'),
    'section'  => 'misc',
    'settings' => 'animation',
    'type'     => 'checkbox',
   )
  )
 );

// ===================== CALL TO ACTION

 $wp_customize->add_section('call_to_action', array(
  'title'       => __('Call to action', 'cleancut'),
  'description' => sprintf(__('Options for Call to Action area', 'cleancut')),
  'priority'    => 160
 ));

 // Call to Action Image Setting.
 $wp_customize->add_setting('call_to_action', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/banner.jpg',
  'type'      => 'theme_mod'
 ));

 // Call to Action Image Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'call_to_action', array(
  'label'     => __('Background Image', 'cleancut'),
  'section'   => 'call_to_action',
  'settings'  => 'call_to_action',
  'priority'  => 1
 )));

 // Call to action button URL Setting
 $wp_customize->add_setting('call_to_action_url', array(
  'default'  => _x('https://projetoresgate.org.br/historias-educacao-joinville/', 'cleancut'),
  'type'     => 'theme_mod'
 ));

 // Call to action button URL Control
 $wp_customize->add_control('call_to_action_url', array(
  'label'    => __('Call to Action Button URL', 'cleancut'),
  'section'  => 'call_to_action',
  'priority' => 2
 ));

 // -------------Call to action button text

 // Text Setting
 $wp_customize->add_setting('call_to_action_button_txt', array(
  'default'   => _x('Conheça as histórias', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Text Control
 $wp_customize->add_control('call_to_action_button_txt', array(
  'label'     => __('Button Text', 'cleancut'),
  'section'   => 'call_to_action',
  'priority'  => 3
 ));

 // Heading Setting
 $wp_customize->add_setting('call_to_action_heading', array(
  'default'   => _x('Formar um jovem para vida, não há preço.
 ', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Heading Control
 $wp_customize->add_control('call_to_action_heading', array(
  'label'     => __('Heading', 'cleancut'),
  'section'   => 'call_to_action',
  'priority'  => 3
 ));

 // Heading Small Setting
 $wp_customize->add_setting('call_to_action_heading_small', array(
  'default'   => _x('Histórias de superação e colaboração que mudam vidas
 ', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Heading Small Control
 $wp_customize->add_control('call_to_action_heading_small', array(
  'label'     => __('Heading Small', 'cleancut'),
  'section'   => 'call_to_action',
  'priority'  => 2
 ));


 // ==================================NUMBERS

 $wp_customize->add_section('numbers', array(
  'title'       => __('Numbers Section', 'cleancut'),
  'description' => sprintf(__('Options for Numbers Section area', 'cleancut')),
  'priority'    => 168
 ));

 // Numbers Image Setting
 $wp_customize->add_setting('numbers_image', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/sonhos-viabilizados-wrappers.jpg',
  'type'      => 'theme_mod'
 ));

 // Numbers Image Setting
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
  'label'     => __('Background Image', 'cleancut'),
  'section'   => 'numbers',
  'settings'  => 'numbers_image',
  'priority'  => 1
 )));

 // ---------------------------Number heading

 // Bottom Banner Heading Setting
 $wp_customize->add_setting('numbers_heading', array(
  'default'    => _x('Existem muitos sonhos para serem viabilizados', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Bottom Banner Heading Control
 $wp_customize->add_control('numbers_heading', array(
  'label'     => __('Heading', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 2
 ));

 // -------------------------Numbers Sub Heading

 // Bottom Banner Heading Setting
 $wp_customize->add_setting('numbers_sub_heading', array(
  'default'    => _x('Precisamos da sua ajuda para potencializar o projeto', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Bottom Banner Heading Control
 $wp_customize->add_control('numbers_sub_heading', array(
  'label'     => __('Sub Heading', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 3
 ));

 // ----------- Number 1

 // Number 1 Icon Setting
 $wp_customize->add_setting('number_1_icon', array(
  'default'    => _x('fas fa-4x fa-star', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 1 Icon Control
 $wp_customize->add_control('number_1_icon', array(
  'label'     => __('Icon 1', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 4
 ));

 // Number 1 Setting
 $wp_customize->add_setting('number_1', array(
  'default'    => _x('187', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 1 Control
 $wp_customize->add_control('number_1', array(
  'label'     => __('Number 1', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 5
 ));

 // Number 1 Heading Setting
 $wp_customize->add_setting('numbers_heading_1', array(
  'default'    => _x('CONCLUÍRAM O ENSINO TÉCNICO', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 1 Heading Control
 $wp_customize->add_control('numbers_heading_1', array(
  'label'     => __('Heading 1', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 6
 ));

 // -------------Number 2

 // Number 2 Icon Setting
 $wp_customize->add_setting('number_2_icon', array(
  'default'    => _x('fas fa-4x fa-graduation-cap', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 2 Icon Control
 $wp_customize->add_control('number_2_icon', array(
  'label'     => __('Icon 2', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 7
 ));

 // Number 2 Setting
 $wp_customize->add_setting('number_2', array(
  'default'    => _x('59', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 2 Control
 $wp_customize->add_control('number_2', array(
  'label'     => __('Number 2', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 8
 ));

 // Number 2 Heading Setting
 $wp_customize->add_setting('numbers_heading_2', array(
  'default'    => _x('SE FORMARAM OU CURSAM ENSINO SUPERIOR', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 2 Heading Control
 $wp_customize->add_control('numbers_heading_2', array(
  'label'     => __('Heading 2', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 9
 ));

 // -------------Number 3

 // Number 3 Icon Setting
 $wp_customize->add_setting('number_3_icon', array(
  'default'    => _x('fas fa-4x fa-book', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 3 Icon Control
 $wp_customize->add_control('number_3_icon', array(
  'label'     => __('Icon 3', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 10
 ));

 // Number 3 Setting
 $wp_customize->add_setting('number_3', array(
  'default'    => _x('265', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 3 Control
 $wp_customize->add_control('number_3', array(
  'label'     => __('Number 3', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 11
 ));

 // Number 3 Heading Setting
 $wp_customize->add_setting('numbers_heading_3', array(
  'default'    => _x('BOLSAS DE ESTUDO EM 2014', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 3 Heading Control
 $wp_customize->add_control('numbers_heading_3', array(
  'label'     => __('Heading 3', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 12
 ));

 // -------------Number 4

 // Number 4 Icon Setting
 $wp_customize->add_setting('number_4_icon', array(
  'default'    => _x('fas fa-4x fa-heart', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 4 Icon Control
 $wp_customize->add_control('number_4_icon', array(
  'label'     => __('Icon 4', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 13
 ));

 // Number 4 Setting
 $wp_customize->add_setting('number_4', array(
  'default'    => _x('476', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 4 Control
 $wp_customize->add_control('number_4', array(
  'label'     => __('Number 4', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 14
 ));

 // Number 4 Heading Setting
 $wp_customize->add_setting('numbers_heading_4', array(
  'default'    => _x('BENIFICIÁRIOS CRESCERAM E AJUDAM O PROJETO', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Number 4 Heading Control
 $wp_customize->add_control('numbers_heading_4', array(
  'label'     => __('Heading 4', 'cleancut'),
  'section'   => 'numbers',
  'priority'  => 15
 ));

 // ======================= WHITE SECTION

 $wp_customize->add_section('white_section', array(
  'title'       => __('White Section', 'cleancut'),
  'description' => sprintf(__('Options for White Section area', 'cleancut')),
  'priority'    => 168
 ));

 // Numbers Image Setting
 $wp_customize->add_setting('white_section_image', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/sonhos-viabilizados-wrappers.jpg',
  'type'      => 'theme_mod'
 ));

 // Numbers Image Setting
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
  'label'     => __('Background Image', 'cleancut'),
  'section'   => 'white_section',
  'settings'  => 'white_section_image',
  'priority'  => 1
 )));

 // ---------------------------WHITE SECTION heading

 // Bottom Banner Heading Setting
 $wp_customize->add_setting('white_section_heading', array(
  'default'    => _x('Todos ganham com o modelo do Projeto Resgate', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // Bottom Banner Heading Control
 $wp_customize->add_control('numbers_heading', array(
  'label'     => __('Heading', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 2
 ));

 // -------------------------WHITE SECTION Sub Heading

 // WHITE SECTION Heading Setting
 $wp_customize->add_setting('white_section_sub_heading', array(
  'default'    => _x('Beneficiários, parceiros e a sociedade', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTIONHeading Control
 $wp_customize->add_control('white_section_sub_heading', array(
  'label'     => __('Sub Heading', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 3
 ));

 // ----------- WHITE SECTION 1

 // WHITE SECTION 1 Icon Setting
 $wp_customize->add_setting('white_section_1_icon', array(
  'default'    => _x('fas fa-4x fa-user', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 1 Icon Control
 $wp_customize->add_control('white_section_1_icon', array(
  'label'     => __('Icon 1', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 4
 ));

 // WHITE SECTION 1 Setting
 $wp_customize->add_setting('white_section_1', array(
  'default'    => _x('187', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 1 Control
 $wp_customize->add_control('white_section_1', array(
  'label'     => __('White Section 1', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 5
 ));

 // WHITE SECTION 1 Heading Setting
 $wp_customize->add_setting('white_section_heading_1', array(
  'default'    => _x('CONCLUÍRAM O ENSINO TÉCNICO', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 1 Heading Control
 $wp_customize->add_control('white_section_heading_1', array(
  'label'     => __('Heading 1', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 6
 ));

 // -------------WHITE SECTION 2

 // WHITE SECTION 2 Icon Setting
 $wp_customize->add_setting('white_section_2_icon', array(
  'default'    => _x('fas fa-4x fa-certificate', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 2 Icon Control
 $wp_customize->add_control('white_section_2_icon', array(
  'label'     => __('Icon 2', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 7
 ));

 // WHITE SECTION 2 Setting
 $wp_customize->add_setting('white_section_2', array(
  'default'    => _x('59', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 2 Control
 $wp_customize->add_control('white_section_2', array(
  'label'     => __('White Section 2', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 8
 ));

 // WHITE SECTION 2 Heading Setting
 $wp_customize->add_setting('white_section_heading_2', array(
  'default'    => _x('SE FORMARAM OU CURSAM ENSINO SUPERIOR', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 2 Heading Control
 $wp_customize->add_control('white_section_heading_2', array(
  'label'     => __('Heading 2', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 9
 ));

 // -------------WHITE SECTION 3

 // WHITE SECTION 3 Icon Setting
 $wp_customize->add_setting('white_section_3_icon', array(
  'default'    => _x('fas fa-4x fa-universal-access', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 3 Icon Control
 $wp_customize->add_control('white_section_3_icon', array(
  'label'     => __('Icon 3', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 10
 ));

 // WHITE SECTION 3 Setting
 $wp_customize->add_setting('white_section_3', array(
  'default'    => _x('265', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 3 Control
 $wp_customize->add_control('white_section_3', array(
  'label'     => __('White Section 3', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 11
 ));

 // WHITE SECTION 3 Heading Setting
 $wp_customize->add_setting('white_section_heading_3', array(
  'default'    => _x('BOLSAS DE ESTUDO EM 2014', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 3 Heading Control
 $wp_customize->add_control('white_section_heading_3', array(
  'label'     => __('Heading 3', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 12
 ));

 // -------------WHITE SECTION 4

 // WHITE SECTION 4 Icon Setting
 $wp_customize->add_setting('white_section_4_icon', array(
  'default'    => _x('fa fa-4x fa-building', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 4 Icon Control
 $wp_customize->add_control('white_section_4_icon', array(
  'label'     => __('Icon 4', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 13
 ));

 // WHITE SECTION 4 Setting
 $wp_customize->add_setting('white_section_4', array(
  'default'    => _x('476', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 4 Control
 $wp_customize->add_control('white_section_4', array(
  'label'     => __('White Section 4', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 14
 ));

 // WHITE SECTION 4 Heading Setting
 $wp_customize->add_setting('white_section_heading_4', array(
  'default'    => _x('BENIFICIÁRIOS CRESCERAM E AJUDAM O PROJETO', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 // WHITE SECTION 4 Heading Control
 $wp_customize->add_control('white_section_heading_4', array(
  'label'     => __('Heading 4', 'cleancut'),
  'section'   => 'white_section',
  'priority'  => 15
 ));

 // ==================== LOGOS

 $wp_customize->add_section('slider_logos', array(
  'title'       => __('Slider Logos', 'cleancut'),
  'description' => sprintf(__('Options for Logo area', 'cleancut')),
  'priority'    => 180
 ));

 $wp_customize->add_setting('slider_logo_heading', array(
  'default'   => _x('Pessoas e Empresas apoiam o Projeto Resgate', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('slider_logo_heading', array(
  'label'     => __('Heading logos area', 'cleancut'),
  'section'   => 'slider_logos',
  'priority'  => 1
 ));

 $wp_customize->add_setting('slider_logo_sub_heading', array(
  'default'   => _x('Conheça algumas empresas apoiadoras', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('slider_logo_sub_heading', array(
  'label'     => __('Sub Heading logos area', 'cleancut'),
  'section'   => 'slider_logos',
  'priority'  => 2
 ));

 // Logo 1 Setting
 $wp_customize->add_setting('slider_logo_image_1', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/1-embraco.png',
  'type'      => 'theme_mod'
 ));

 // Logo 1 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_1', array(
  'label'     => __('Logo Area 1', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_1',
  'priority'  => 3
 )));

 // Logo 2 Setting
 $wp_customize->add_setting('slider_logo_image_2', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/2-whirpool.png',
  'type'      => 'theme_mod'
 ));

 // Logo 2 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_2', array(
  'label'     => __('Logo Area 2', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_2',
  'priority'  => 4
 )));

 // Logo 3 Setting
 $wp_customize->add_setting('slider_logo_image_3', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/3-somos01.png',
  'type'      => 'theme_mod'
 ));

 // Logo 3 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_3', array(
  'label'     => __('Logo Area 3', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_3',
  'priority'  => 5
 )));

 // Logo 4 Setting
 $wp_customize->add_setting('slider_logo_image_4', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/4-neogrid.png',
  'type'      => 'theme_mod'
 ));

 // Logo 3 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_4', array(
  'label'     => __('Logo Area 4', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_4',
  'priority'  => 6
 )));

 // Logo 5 Setting
 $wp_customize->add_setting('slider_logo_image_5', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/5-gidion.png',
  'type'      => 'theme_mod'
 ));

 // Logo 5 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_5', array(
  'label'     => __('Logo Area 5', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_5',
  'priority'  => 7
 )));

 // Logo 6 Setting
 $wp_customize->add_setting('slider_logo_image_6', array(
  'default'   => get_bloginfo('template_directory') . '/assets/images/8-transtusa.png',
  'type'      => 'theme_mod'
 ));

 // Logo 6 Control
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_logo_image_6', array(
  'label'     => __('Logo Area 6', 'cleancut'),
  'section'   => 'slider_logos',
  'settings'  => 'slider_logo_image_6',
  'priority'  => 8
 )));

// ==================== SEJA PARCEIRO


 $wp_customize->add_section('be_partner', array(
  'title'      => sprintf(__('Options for bottom dark banner', 'cleancut')),
  'priority'   => 190
 ));

 $wp_customize->add_setting('partner_heading', array(
  'default'   => _x('Seja um parceiro do Projeto Resgate.', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('partner_heading', array(
  'label'     => __('Heading text', 'cleancut'),
  'section'   => 'be_partner',
  'priority'  => 1
 ));

 $wp_customize->add_setting('partner_sub_heading', array(
  'default'    => _x('Há muitas formas de colaborar com este projeto sério e eficaz.', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('partner_sub_heading', array(
  'label'     => __('Sub Heading text', 'cleancut'),
  'section'   => 'be_partner',
  'priority'  => 2
 ));

 $wp_customize->add_setting('partner_button_link', array(
  'default'   => _x('https://projetoresgate.org.br/apoiadores-projeto-social-joinville/', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('partner_button_link', array(
  'label'     => __('Button link', 'cleancut'),
  'section'   => 'be_partner',
  'priority'  => 3
 ));

 $wp_customize->add_setting('partner_button_text', array(
  'default'   => _x('Quero ser um apoiador', 'cleancut'),
  'type'      => 'theme_mod'
 ));

 $wp_customize->add_control('partner_button_text', array(
  'label'     => __('Button text', 'cleancut'),
  'section'   => 'be_partner',
  'priority'  => 4
 ));

// ================== BOTTOM BANNER

$wp_customize->add_section('bottom_banner', array(
 'title'       => __('Bottom Banner', 'cleancut'),
 'description' => sprintf(__('Options for bootom banner area', 'cleancut')),
 'priority'    => 198
));

// Bottom Banner Image Setting
$wp_customize->add_setting('bottom_banner_image', array(
 'default'   => get_bloginfo('template_directory') . '/assets/images/banner.jpg',
 'type'      => 'theme_mod'
));

// Bottom Banner Image Setting
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bottom_banner_image', array(
 'label'     => __('Background Image', 'cleancut'),
 'section'   => 'bottom_banner',
 'settings'  => 'bottom_banner_image',
 'priority'  => 1
)));

// Bottom Banner Heading Setting
$wp_customize->add_setting('bottom_banner_heading', array(
 'default'    => _x('Nossas redes sociais', 'cleancut'),
 'type'      => 'theme_mod'
));

// Bottom Banner Heading Control
$wp_customize->add_control('bottom_banner_heading', array(
 'label'     => __('Heading', 'cleancut'),
 'section'   => 'bottom_banner',
 'priority'  => 3
));

// $wp_customize->add_section('showcase_como_funciona', array(
//  'title'       => __('Showcase "Como Funciona" page', 'cleancut'),
//  'description' => sprintf(__('Options for showcase "Como Funciona" Page area', 'cleancut')),
//  'priority'    => 200
// ));

// // Image Setting
// $wp_customize->add_setting('showcase_como_funciona_image', array(
//  'default'   => get_bloginfo('template_directory') . '/assets/images/banner-como-funciona-projeto-resgate.jpg',
//  'type'      => 'theme_mod'
// ));

// // Image Control
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_como_funciona_image', array(
//  'label'     => __('Background Image', 'cleancut'),
//  'section'   => 'showcase_como_funciona',
//  'settings'  => 'showcase_como_funciona_image',
//  'priority'  => 1
// )));


}


add_action('customize_register', 'cleancut_customize_register');
//
