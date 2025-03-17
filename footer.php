<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
        </section>

        <section class="piedpage__s2">
            <div class="footer__contact">
                Téléphone: <?php echo esc_html(get_theme_mod('footer_telephone', '514-254-7131')); ?>
            </div>
            <div class="piedpage__s2__adresse">
                <div class="piedpage__s2__adresse__coord">
                    <?php echo esc_html(get_theme_mod('footer_adresse', '5800 Sherbrooke-est - Montréal (Québec) H1X 2A2')); ?>
                </div>
            </div>
            <div class="piedpage__s2__description">
                <?php echo esc_html(get_theme_mod('footer_mission', 'Voyager pour vivre!')); ?>
            </div>
        </section>

        <section class="piedpage__s3">

            <div class="footer_menu_nav">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'footer_menu_nav'
                )); ?>
                     <?php get_search_form(); ?>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>
