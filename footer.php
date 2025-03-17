<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <?php echo esc_html(get_theme_mod('footer_adresse', '5800 Sherbrooke-est - Montréal (Québec) H1X 2A2')); ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo esc_html(get_theme_mod('footer_mission', 'Voyager pour vivre!')); ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3">
            <div class="footer__contact">
                Téléphone: <?php echo esc_html(get_theme_mod('footer_telephone', '514-254-7131')); ?>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>
