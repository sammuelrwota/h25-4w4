<?php 
/**
 * FRONT-PAGE.PHP
 * 
 *   Template de la page d'accueil : Affiche l'en-tête, suivi de la section hero (récupérée via gabarits/sectionhero).
 *   Ensuite, les articles sont affichés dans une section populaire :
 * - Si l'article appartient à la catégorie "galerie", son contenu est affiché.
 * - Sinon, le modèle gabarits/carte est utilisé pour afficher un aperçu de l'article.
 * - Le fichier inclut également le pied de page avec get_footer().
 */
?>





<?php get_header(); ?>
    <?php get_template_part("gabarits/hero"); ?>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!-- ////////////////////////////////////////////////  section rest-api -->
    <section class="destination">
        <?php categories_liste("destination") ?>
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>

    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>
