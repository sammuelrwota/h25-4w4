<?php 
/*
Template Name: Pays
*/
get_header();
?>

<section class="populaire">
    <div class="global">
    <section class="galerie">
    <div class="global">
        <h2>Nos pays en vedette</h2>
        <div class="galerie__grid">
            <?php
            $args = array('category_name' => 'pays', 'posts_per_page' => 12);
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article>
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Voir plus</a>
                    </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>


    </div>
</section>

<?php get_footer(); ?>
</body>
</html>
