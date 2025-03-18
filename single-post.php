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