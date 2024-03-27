<?php
// Définition du chemin du répertoire principal
define('MAIN_PATH', getcwd());
// Fichier à importer
require(MAIN_PATH . "/smarty-4.3.2/libs/Smarty.class.php");

// Instanciation de Smarty
$smarty = new Smarty();

// Obtention des informations en GET et POST
$action1 = isset($_GET['page']) ? $_GET['page'] : '';
//$action2 = isset($_POST['']) ? $_POST[''] : '';

// Boucle principale
if ($action1 !== '') {
    $smarty->display(MAIN_PATH . '$page');
} else {
    // Afficher la page d'accueil par défaut
    $smarty->display(MAIN_PATH . '\Accueil\Accueil.tpl');
}