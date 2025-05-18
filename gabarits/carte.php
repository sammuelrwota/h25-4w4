<?php
/**
 * CARTE.PHP
 * 
 * TEMPLATE-PART CARTE.
 * 
 * Voici mon modèle de carte, un gabarit contenant les cartes présentant les articles de voyage.
 * L'étoile uniquement si l'article appartient à la catégorie populaire.
 */
?>


 
<article class="carte carte--grande">
  <figure class="carte__image"> 
    <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('carte_image_dimension', ['class' => 'image-carte']);


        }

      if (has_term('populaire', 'category')) { 
        echo '<span class="carte__etoile">&#9733;</span>';
      }
    ?>
  </figure>
  
  <div class="carte__contenu">
     
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... "); ?></p>
    <?php if (function_exists('the_field')) : ?>
  <p>Température Maximum: <?php the_field("temperature_maximum"); ?>°C</p>
  <p>Température Minimum: <?php the_field("temperature_minimum"); ?>°C</p>
  <p>Température Moyenne: <?php the_field("temperature_moyenne"); ?>°C</p>
<?php endif; ?>

    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite</a>
    <?php the_category(); ?>
  </div>
</article>