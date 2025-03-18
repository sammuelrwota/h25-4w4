<?php
/**
 * CUSTOMIZER.PHP
 * 
 * Modifie facilement les éléments des sections Hero et Footer.
 */

function theme_tp_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  //Création d'une nouvelle section dans le customizer.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_tp'),
    'priority' => 30,
  ));
  ///////////////////////////////////////////////////// Ajout de la donnée.
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Sammuel Rwota', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  //////////////////////////////////////////////////// Ajout du contrôle de la donnée.
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
  /////////////////////////////////////////////////// Ajout de la donnée image en arriere plan.
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  /////////////////////////////////////////////////// Ajout du contrôle de la donnée du background
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Hero Couleur texte', 'theme_31w'),
    'section' => 'hero_section',
  )));
    /////////////////////////////////////////////////// Ajout de la donnée image en arriere plan.
    $wp_customize->add_setting('hero_couleur', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    /////////////////////////////////////////////////// Ajout du contrôle de la donnée du background
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
      'label' => __('Hero Background Image', 'theme_31w'),
      'section' => 'hero_section',
    )));
  ////////////////////////////////////////////////// Création de la section footer dans le customizer:
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section Footer', 'theme_tp'),
    'priority' => 30,
  ));
  //////////////////////////////////////////////// Ajout de la donnée de changement des icones SVG dans le footer
  $wp_customize->add_setting('footer_couleurIcones', array(
    'default' => __('0000', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  ////////////////////////////////////////////// Ajout du controle de la donnée.
  $wp_customize->add_control('footer_couleurIcones', array(
    'label' => __('Couleur des Icones', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  //////////////////////////////////////////////  Mission.
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Voyager!', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  //////////////////////////////////////////////  Adresse.
  $wp_customize->add_setting('footer_adresse', array(
      'default' => __('5800 Sherbrooke-est - Montréal (Québec) H1X 2A2', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('footer_adresse', array(
      'label' => __('Adresse', 'theme_tp'),
      'section' => 'footer_section',
      'type' => 'text',
  ));

//////////////////////////////////////////////  Telephone.
  $wp_customize->add_setting('footer_telephone', array(
      'default' => __('514-254-7131', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('footer_telephone', array(
      'label' => __('Téléphone', 'theme_tp'),
      'section' => 'footer_section',
      'type' => 'text',
  ));

  }
  add_action('customize_register', 'theme_tp_customize_register');
?>

-
