<?php
// Définir une nouvelle taille d'image personnalisée
add_image_size('carte_image_dimension', 500, 250, true);

// Chemin vers le dossier functions
$functions_dir = get_template_directory() . '/functions/';

// Liste des fichiers à inclure
$function_files = array(
    'generateur.php',
    'genere-boutons.php',
    'customizer.php',
    'options.php'
);

// Boucle pour inclure tous les fichiers si le fichier existe
foreach ($function_files as $file) {
    $path = $functions_dir . $file;
    if (file_exists($path)) {
        include_once $path;
    } else {
        error_log("Le fichier de fonction suivant est introuvable : $path");
    }
}
