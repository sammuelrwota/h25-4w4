<?php
/**
 * FONCTIONS
 * 
 * Charge les fichiers de fonctions personnalisées du thème.
 *
 */ 
$functions_dir = get_template_directory() . '/functions/';

$function_files = array(
    'images.php',
    'options.php',
    'customizer.php',
    'generateur.php',
    'genere-boutons.php',
    'page-templates.php' 
);

foreach ($function_files as $file) {
    $path = $functions_dir . $file;
    if (file_exists($path)) {
        include_once $path;
    } else {
        error_log("Le fichier de fonction suivant est introuvable : $path");
    }
}