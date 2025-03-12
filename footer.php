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
                    <?php echo esc_html(get_theme_mod('footer_adresse', 'Votre adresse ici')); ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo esc_html(get_theme_mod('footer_mission', 'Votre mission ici')); ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3">
            <div class="footer__contact">
                Téléphone: <?php echo esc_html(get_theme_mod('footer_telephone', 'Votre numéro de téléphone ici')); ?>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>
