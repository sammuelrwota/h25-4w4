<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- Navigation avec le menu burger intégré -->
      <div class="entete__navigation">
        <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox">
        <label for="menu-toggle" class="menu-toggle-label">
          <img src="<?php echo get_template_directory_uri(); ?>/images/burger-menu.png" alt="Menu" class="icon-burger">
          <img src="<?php echo get_template_directory_uri(); ?>/images/burger-menu-close.png" alt="Fermer" class="icon-close">
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
