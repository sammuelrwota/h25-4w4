<?php get_header(); ?>

<section class="populaire">
    <div class="global">
        <?php
        $couleur_haut = '#4a90e2'; 
        $couleur_bas = '#002244';  

        genere_vague__ef($couleur_haut, $couleur_bas);
        ?>

        <section class="galerie">
            <div class="global">
            
               
            </div>
        </section>

    </div>
</section>


<section class="destinationpays" style="background-color: <?= esc_attr($couleur_haut); ?>;">
    <?php afficher_menu_pays(); ?>
    <h2 class="destinationpays__titre">Pays</h2>
    <div class="destinationpays__list"></div>
</section>

<?php get_footer(); ?>
