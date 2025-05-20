<?php 
/**
 * SEARCH.PHP
 * 
 * Modèle pour afficher les résultats de recherche dans WordPress.
 * Utilisé automatiquement lorsqu'un utilisateur effectue une recherche sur le site.
 */

get_header(); 
?>

<main class="site__main">
    <section class="recherche__section">
        <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        $search_term = get_search_query();
        ?>

        <h2 class="recherche__titre">
            <?php 
            if ($total_results === 1) {
                echo '1 résultat trouvé pour : <strong>' . esc_html($search_term) . '</strong>';
            } elseif ($total_results > 1) {
                echo $total_results . ' résultats trouvés pour : <strong>' . esc_html($search_term) . '</strong>';
            } else {
                echo 'Aucun résultat trouvé pour : <strong>' . esc_html($search_term) . '</strong>';
            }
            ?>
        </h2>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Essayez un autre mot-clé ou vérifiez l’orthographe.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
