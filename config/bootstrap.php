<?php 
 /**
     * -----------------------------------------------------------
     *                L'amorceur de l'application
     * 
     * Ses rôles : 
     *      - Charger les raccourcis (constantes)
     *      - Charger les variables d'environnement
     *      - Charger la configuration système
     *      - Charger la configuration session
     *      - Charger le monolog
     * -----------------------------------------------------------
    */

// Chargement des contantes
require __DIR__ . "/constants.php";


// Chargement des variables d'environnement
// $envFile = file_exists(ROOT . "/env.local.conf") ? ROOT . "/env.local.conf" : ROOT . "/env.conf";
// $envFile = parse_ini_file(ROOT . "/../env.conf");

require __DIR__ . "/dotenv.php";

// Chargement de la configuration 

require __DIR__ . "/system.php";

//Chargment de la configuration session
require __DIR__ . "/session.php";

// Chargement du monolog

require __DIR__ . "/monolog.php";