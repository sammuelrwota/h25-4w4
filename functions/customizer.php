<?php
/**
 * CUSTOMIZER.PHP
 * 
 * Modifie facilement les éléments des sections Hero et Footer.
 */

/**
 * Configuration du customizer. On ajoute les sections hero et footer.
 */
function theme_tp_customize_register($wp_customize) {
    // Section Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_tp'),
        'priority' => 30,
    ));

    // Auteur
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Eddy Martin', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Images en arrière-plan
    for ($k = 0; $k < 3; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image en arrière plan ' . ($k + 1), 'theme_tp'),
            'section' => 'hero_section',
        )));
    }


    $social_networks = ['github', 'linkedin', 'instagram'];

    foreach ($social_networks as $network) {
        $default_url = '';
        if ($network === 'github') $default_url = 'https://github.com/sammuelrwota/h25-4w4/tree/tp2';
        elseif ($network === 'linkedin') $default_url = 'https://www.linkedin.com/in/sammuel-rwota-6baa9234b/';
        elseif ($network === 'instagram') $default_url = 'https://www.instagram.com/sammuelrwota/';

        $wp_customize->add_setting("social_link_$network", [
            'default' => $default_url,
            'sanitize_callback' => 'esc_url_raw',
        ]);

        $wp_customize->add_control("social_link_$network", [
            'label' => __('Lien ' . ucfirst($network), 'theme_tp'),
            'section' => 'hero_section',
            'type' => 'url',
        ]);
    }

}
add_action('customize_register', 'theme_tp_customize_register');

/**
 * Fonction pour afficher les icônes sociales dynamiquement
 */
function afficher_icones_sociaux() {
    $social_links = [
      'github' => 'https://github.com/sammuelrwota/h25-4w4/tree/tp2',
      'linkedin' => 'https://www.linkedin.com/in/sammuel-rwota-6baa9234b/',
      'instagram' => 'https://www.instagram.com/sammuelrwota/'
    ];
  
    echo '<div class="hero__icone-list">';
    foreach ($social_links as $network => $default_url) {
        $url = get_theme_mod("social_link_$network", $default_url);
        if (!empty($url)) {
            $icon_url = "https://s2.svgbox.net/social.svg?ic={$network}&color=ffffff";
            echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="hero__icone-link">';
            echo '<img src="' . esc_url($icon_url) . '" width="36" height="36" alt="' . ucfirst($network) . '">';
            echo '</a>';
        }
    }
    echo '</div>';
  }
  
