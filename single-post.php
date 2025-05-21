<?php get_header(); ?>

    <section class="populaire">
        <div class="global"> 
            <h2 class="global__titre"><?php the_title(); ?></h2>
            <div class="global__singlepost">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="global__singlepost__article"> 
                <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('ma_taille_custom', ['class' => 'global__singlepost__image']);
                    }
                ?>
                <div class="global__singlepost__div"><?php the_content() ?>
                <div class="global__singlepost__temperatures">
                    <p>Température maximum: <strong><?php the_field('temperature_maximum') ?>&#176;C</strong></p>
                    <p>Température minimum: <strong> <?php the_field('temperature_minimum') ?>&#176;C</strong></p>
                    <p>Température moyenne: <strong><?php the_field('temperature_moyenne')  ?>&#176;C</strong></p>
                </div>
                <p>
                    Auteur : <strong><?php the_author(); ?></strong> | Publié le : <strong><?php echo get_the_date(); ?></strong>
                </p>
                <div class="global__singlepost__categories">
                    <p>Catégories : </p>
                    <?php the_category(); ?>
                    <?php  $tableau = get_the_category(); 
                        // print_r ($tableau);
                    ?>
                </div>
            </article>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>