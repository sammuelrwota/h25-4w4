<?php
// Chemin vers le dossier functions
$functions_dir = get_template_directory() . '/functions/';

// Liste des fichiers à inclure
$function_files = array(
  
    'options.php',  
    'customizer.php',
    'genere-boutons.php',
    'generateur.php'
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