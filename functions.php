<?php 
/**
 * FUNCTIONS.PHP
 * 
 * Fichier functions.php : Ce fichier inclut des fichiers supplémentaires pour la gestion des fonctionnalités du thème. 
 * - Le fichier `customizer.php` permet de gérer les options personnalisées du Customizer de WordPress.
 * - Le fichier `options.php` contient des options supplémentaires de configuration du thème.
 */



$functions_dir = get_template_directory() . '/functions/';
// Inclure les fichiers spécifiques
include_once $functions_dir . 'customizer.php';
include_once $functions_dir . 'options.php';

?>