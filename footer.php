<?php 
/**
 * FOOTER.PHP
 * 
 *   Template du pied de page : Affiche le pied de page du site avec trois sections.
 * - Section 1 : Menu externe (références à des liens externes).
 * - Section 2 : Informations de contact (téléphone, adresse et mission) récupérées via le Customizer. + Intégration des icônes.
 * - Section 3 : Menu principal et formulaire de recherche.
 *   Ce fichier inclut également la fonction `wp_footer()` pour charger les scripts et ressources nécessaires avant la fermeture du balise body.
 */
$footer_couleur = get_theme_mod('footer_couleur', '#2c2c2c');
genere_vague($footer_couleur);
?>

<footer style="background-color: <?= $footer_couleur?>">
    <div class="piedpage global">
        <section class="piedpage__s1">
            <h3 class="liens-de-voyage">Liens de voyage</h3>
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
        </section>

        <section class="piedpage__s2">
            <h3>Infos</h3>
            <div class="piedpage__s2__contact">
                Téléphone: <?php echo esc_html(get_theme_mod('footer_telephone', '514-254-7131')); ?>
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=phone&color=FFF" width="20" height="20">
            </div>
            <div class="piedpage__s2__adresse">
                <div class="piedpage__s2__adresse__coord">
                    <?php echo esc_html(get_theme_mod('footer_adresse', '5800 Sherbrooke-est - Montréal (Québec) H1X 2A2')); ?>
                    <img src="https://s2.svgbox.net/octicons.svg?ic=location&color=FFF" width="20" height="20">
                </div>
            </div>
            <div class="piedpage__s2__description">
                <?php echo esc_html(get_theme_mod('footer_mission', 'Votre mission est de voyager pour vivre!')); ?>
            </div>
            <div class="piedpage__s2__icones_reseaux_sociaux">
                <a href="https://www.linkedin.com/in/sammuel-rwota-6baa9234b/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=FFF" width="20" height="20" alt="LinkedIn">
                </a>
                <a href="https://www.instagram.com/sammuelrwota/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=FFF" width="20" height="20" alt="Instagram">
                </a>
                <a href="https://github.com/sammuelrwota/h25-4w4/tree/tp2" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <img src="https://s2.svgbox.net/social.svg?ic=github&color=FFF" width="20" height="20" alt="GitHub">
                </a>
            </div>
            <?php get_search_form(); ?>
        </section>

        <section class="piedpage__s3">

            <div class="piedpage__3_menu_nav">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'piedpage__3_menu_nav'
                )); ?>
                     
            </div>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>