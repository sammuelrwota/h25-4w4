<?php
/**
 * IMAGES
 *
 * Ajoute une taille d’image personnalisée (600x600) aux éditeurs WordPress.
 */
function ajouter_taille_custom_aux_editeurs() {
  add_theme_support('post-thumbnails');
  add_image_size('ma_taille_custom', 600, 600, true);

  add_filter('image_size_names_choose', function($sizes) {
      return array_merge($sizes, [
          'ma_taille_custom' => 'Ma Taille Customisée'
      ]);
  });
}
add_action('after_setup_theme', 'ajouter_taille_custom_aux_editeurs');
