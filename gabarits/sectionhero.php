<?php 
/**
 * SECTIONHERO.PHP
 * 
 * Voici la section Hero de mon site web, qui contient les informations nécessaires.
 */

// Récupération des paramètres du customizer
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = [];
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}

$hero_courriel = get_theme_mod('hero_courriel', '');
$couleur_texte = get_theme_mod('hero_texte', '#000000');  // Couleur du texte

?>

<style>
.hero {
    color: <?php echo esc_attr($couleur_texte); ?>;
}
</style>

<div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[0]); ?>'); background-repeat: no-repeat; background-size: cover;"></div>
<div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[1]); ?>'); background-repeat: no-repeat; background-size: cover;"></div>
<div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[2]); ?>'); background-repeat: no-repeat; background-size: cover;"></div>

<div class="hero__contenu global">
    <h1 class="hero__titre"><?php bloginfo("name"); ?></h1>
    <p class="hero__description"><?php bloginfo("description"); ?></p>
    
    <p class="hero__courriel">
        <?php echo esc_html($hero_courriel); ?>
        <a href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>"><?php echo esc_html(get_option('admin_email')); ?></a>
    </p>

    <div class="hero__icone">
        <?php get_template_part('gabarits/icones'); ?>
    </div>

    <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
    <p class="hero_auteur">Auteur: <?php echo esc_html($hero_auteur); ?></p>
    <p class="hero__telephone">514-254-7131</p>

    <div class="conteneur">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Courriel</th>
                <th>Téléphone</th>
               
            </tr>
            <tr>
                <td>Écrivez votre nom</td>
                <td>Écrivez votre prénom</td>
                <td>Écrivez votre courriel</td>
                <td>Écrivez votre téléphone</td>
                <td>S'INSCRIRE</td>
            </tr>
        </table>
    </div>
</div>
</section>
