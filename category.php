<?php
/**
 * CATEGORY.PHP
 * 
 * Template de la page de catégorie : Affiche le titre et la description de la catégorie, puis liste les articles associés à cette catégorie.
 * Chaque article est affiché à l'aide du modèle de carte gabarits/carte. Ce fichier inclut également l'en-tête et le pied de page du site.
 */ 
?>

<?php get_header(); ?>
    <h1><?php single_cat_title();?></h1>
    <p><?php echo category_description(); ?></p>
    <section class="populaire">
        <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>