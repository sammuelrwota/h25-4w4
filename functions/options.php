<?php
/**
 * OPTIONS
 * 
 * Les options du thème
*/
function mon_theme_supports() {

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
    // Définir une nouvelle taille d'image personnalisée
add_image_size('carte_image_dimension', 500, 250, true);
add_theme_support('custom-logo', array(
  'height'      => 250,
  'width'       => 250,
  'flex-height' => true,
  'flex-width'  => true,
));

}
add_action( 'after_setup_theme', 'mon_theme_supports' );


function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 

wp_enqueue_script(
'destination_restapi',
get_template_directory_uri() . '/js/destination.js',
array(),
filemtime(get_template_directory() . 
'/js/destination.js'),
true
);
wp_enqueue_script(
    'carrousel',
    get_template_directory_uri() . '/js/carrousel.js',
    array(),
    filemtime(get_template_directory() . 
    '/js/carrousel.js'),
    true
    );

} 
/* 
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');




function afficher_menu_pays() {
  $parent = get_category_by_slug('pays');
  if (!$parent) {
    echo '<p>Catégorie "Pays" non trouvée.</p>';
    return;
  }

  $children = get_categories(array('parent' => $parent->term_id));
  echo '<ul class="categorie__ul">';
  foreach ($children as $cat) {
    echo '<li class="categorie__ul__li" ';
    echo 'data-method="search" data-search="' . esc_attr($cat->name) . '">';
    echo esc_html($cat->name);
    echo '</li>';
  }
  echo '</ul>';
}

/**
* Modifie la requete principale de WordPress avant qu'elle soit exécuté
* le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
* Dépendant de la condition initiale on peut filtrer un type particulier de requête
* Dans ce cas ci nous filtrons la requête de la page d'accueil
* @param WP_query  $query la requête principal de WP
*/


function modifie_requete_principal( $query ) {
  if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'category_name', 'populaire' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    }
   }
   add_action( 'pre_get_posts', 'modifie_requete_principal' );


?>
