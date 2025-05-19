<?php get_header(); ?>

    <section class="populaire">
        <div class="global"> 
             <h2 class="singlepost__titre"><?php the_title(); ?></h2>
            <div class="singlepost">
               
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="singlepost__article">
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('medium'); }
            ?>  
               
                <div class="singlepost__div"><?php the_content() ?>
                <?php the_category(); ?>
                <?php  $tableau = get_the_category(); 
                // print_r ($tableau);
                ?>
                <div class="singlepost__temperatures">
                <p>Température maximum: <?php the_field('temperature_maximum') ?>&#176;C</p>
                <p>Température minimum: <?php the_field('temperature_minimum') ?>&#176;C</p>
                <p>Température moyenne: <?php the_field('temperature_moyenne') ?>&#176;C</p></div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>