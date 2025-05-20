<?php

/**
 * TEMPLATE 404.PHP
 *
 * Ce modèle s'affiche lorsqu'une page demandée n'existe pas.
 * Il propose un message d’erreur personnalisé et esthétique avec :
 * 
 * - Une image de fond personnalisable via le customizer (`erreur_background`)
 * - Une couleur de texte personnalisable (`erreur_texte_couleur`)
 * - Un message engageant pour l’utilisateur
 * - Un bouton de retour à l’accueil
 * - Un menu secondaire dédié (menu404)
 *
 * Ce template améliore l'expérience utilisateur en conservant
 * une esthétique cohérente avec le reste du thème.
 */

$erreur_background = get_theme_mod('erreur_background', '');
$erreur_texte_couleur = get_theme_mod('erreur_texte_couleur', '#000000'); 
?>

<?php get_header(); ?>

<style>
  .error404 {
    background-image: url('<?php echo esc_url($erreur_background); ?>');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<section class="error404">
  <div class="erreur">
    <h1 class="H1Erreur404">Oops, vous avez échoué sur l'île 404 !</h1>
    <h2 class="H2Erreur404">Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !</h2>
    <a href="<?php echo home_url(); ?>" class="btn-home">Retour à l'accueil</a>
    <div class="404_menu">
          <?php wp_nav_menu(array(
              "menu" => "menu404",
              "container" => "nav",
          )); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
</body>
</html>
