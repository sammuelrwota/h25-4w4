<?php
/**
 * SINGLE-POST.PHP
 * 
 * Modèle pour l'affichage d'un article individuel sur WordPress.
 * Ce fichier est utilisé pour afficher un article complet lorsque l'utilisateur clique sur un titre d'article.
 * 
 * - Si l'article possède une image à la une, celle-ci est affichée avec la taille 'large'.
 * - Le titre de l'article est affiché dans un `<h2>`.
 * - Le contenu complet de l'article est affiché avec `the_content()`.
 * - En bas de l'article, des informations supplémentaires sont affichées, telles que la température maximale, minimale et moyenne, récupérées à partir des champs personnalisés (ACF).
 * 
 * Le pied de page est également inclus à la fin avec `get_footer()`.
 */ 
?>   
  
<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('large'); }
            ?>  
            <h2><?php the_title(); ?></h2>
            <div><?php the_content() ?>
                    <p>Température Maximum: <?php the_field("temperature_maximum"); ?>°C</p>
                    <p>Température Minimum: <?php the_field("temperature_minimum"); ?>°C</p>
                    <p>Température Moyenne: <?php the_field("temperature_moyenne"); ?>°C</p>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
   
</body>
</html>