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
      <div class="carte__temperatures">
      <p>Température maximum: <strong><?php the_field('temperature_maximum') ?>&#176;C</strong></p>
                    <p>Température minimum: <strong> <?php the_field('temperature_minimum') ?>&#176;C</strong></p>
                    <p>Température moyenne: <strong><?php the_field('temperature_moyenne')  ?>&#176;C</strong></p>
                    </div>
<?php endif; ?>

    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">En savoir plus</a>
   
  </div>
</article>