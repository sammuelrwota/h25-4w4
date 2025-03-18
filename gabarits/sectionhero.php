<?php 
 /**
 * SECTIONHERO.PHP
 * 
 * Voici la section Hero de mon site web, qui contient les informations nécessaires.
 */
?>

<?php
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    $hero_courriel = get_theme_mod('hero_courriel','');
    $hero_background = get_theme_mod('hero_background', 'Default Title');
    $couleur = substr(get_theme_mod('hero_icone', '#fff'),1);
    $couleur_texte = get_theme_mod('hero_texte', '#fff');
?>
<style>.hero{
    color: <?php echo $couleur_texte ?> ;
}
</style>
<section class="hero" style="background-image: url('<?php echo $hero_background ?>'); Background-repeat: no-repeat" <?php echo $couleur_texte ?>>
    <div class="hero__contenu global">
        <h1 class="hero__titre hero__couleur"><?php bloginfo("name"); ?></h1>
        <p class="hero__description">
            <?php bloginfo("description"); ?>
        </p>
        <p class="hero__courriel"><?php echo $hero_courriel ?>
            <a href="#"><?php bloginfo("admin_email"); ?></a>
        </p>
        
        <div class="hero__icone">
            <?php get_template_part('gabarits/icones'); ?>
        </div>

        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <p class="hero_auteur">Auteur: <?php echo $hero_auteur ?></p>
        <p class="hero__telephone">
            514-254-7131
        </p>

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
