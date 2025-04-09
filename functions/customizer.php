<?php
/**
 * CUSTOMIZER.PHP
 * 
 * Modifie facilement les éléments des sections Hero et Footer.
 */

function theme_30w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    // Section Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_30w'),
        'priority' => 30,
    ));

    // Titre auteur
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Sammuel Rwota', 'theme_30w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_30w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Courriel
    $wp_customize->add_setting('hero_courriel', array(
        'default' => __('', 'theme_30w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_30w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Image d’arrière-plan
    for ($k = 0; $k < 3; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image en arrière plan ' . ($k + 1), 'theme_30w'),
            'section' => 'hero_section',
        )));
    }

    // Couleur du texte
    $wp_customize->add_setting('hero_texte', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_texte', array(
        'label' => __('Couleur du texte', 'theme_30w'),
        'section' => 'hero_section',
    )));

    // Section Footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section pied de page', 'theme_30w'),
        'priority' => 30,
    ));

    // Mission
    $wp_customize->add_setting('footer_mission', array(
        'default' => __('Mission du club de voyage', 'theme_30w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_30w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Adresse
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('Adresse', 'theme_30w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_30w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Téléphone
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('Telephone', 'theme_30w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Telephone', 'theme_30w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_30w_customize_register');
?>
