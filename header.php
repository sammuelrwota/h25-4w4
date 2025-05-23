<?php 
/**
 * HEADER.PHP
 * 
 * Template de l'en-tête : Ce fichier inclut la structure HTML de l'en-tête de la page.
 *  - Le logo personnalisé est récupéré via la fonction `the_custom_logo()`.
 *  - La navigation inclut un menu burger (avec une icône d'ouverture et de fermeture), affiché sous forme de menu mobile.
 *  - Le menu principal est généré via `wp_nav_menu()` et un formulaire de recherche est également inclus.
 *  - Le fichier charge également les scripts nécessaires pour afficher le menu burger et la logique associée au basculement de l'état du menu.
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=devicewidth, initial-scale=1.0"><base href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



  <title>Club de voyage</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="entete">
      <figure class="entete__logo">
        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>
      </figure>

      <div class="entete__navigation">
        <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox">
        <label for="menu-toggle" class="menu-toggle-label">
          <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=fff" alt="Menu" class="icon-burger" width="32" height="32">
          <img src="https://s2.svgbox.net/hero-outline.svg?ic=x&color=fff" alt="Fermer" class="icon-close" width="32" height="32">
        </label>
        <div class="entete__menu-wrapper">
          <?php wp_nav_menu(array(
            'menu' => 'principal',
            'container' => 'nav',
            'container_class' => 'entete__menu'
          )); ?>
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </header>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const menuWrapper = document.querySelector(".entete__menu-wrapper");
      const iconBurger = document.querySelector(".icon-burger");
      const iconClose = document.querySelector(".icon-close");

      if (menuToggle && menuWrapper && iconBurger && iconClose) {
        menuToggle.addEventListener("change", function () {
          if (menuToggle.checked) {
            menuWrapper.style.display = "flex"; 
            iconBurger.style.display = "none"; 
            iconClose.style.display = "block"; 
          } else {
            menuWrapper.style.display = "none"; 
            iconBurger.style.display = "block";  
            iconClose.style.display = "none";    
          }
        });
      }
    });
  </script>
</body>
</html>