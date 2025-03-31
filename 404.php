<?php $erreur_background = get_theme_mod('erreur_background', '');?>
<?php get_header(); ?>
<section class="error404" style="background-image: url(<?php echo $erreur_background?>);">
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