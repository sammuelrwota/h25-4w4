<?php 
/**
 * SEARCHFORM.PHP
 * 
 * Modèle pour le formulaire de recherche dans WordPress.
 * Ce fichier est utilisé pour afficher le formulaire de recherche sur le site,
 * permettant aux utilisateurs de rechercher des contenus.
 * 
 * - Le formulaire utilise la méthode GET pour soumettre la recherche à l'URL de la page d'accueil.
 * - Le champ de recherche affiche le texte saisi précédemment (si applicable).
 * - Le bouton de soumission contient une icône de recherche.
 */
 ?>

<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    <button class="recherche__bouton" type="submit">
        <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
    </button>
</form>