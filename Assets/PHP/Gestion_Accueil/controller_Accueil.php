<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Méthodes_Accueil.php';

$Accueil_offre = new Accueil_offre();

// Vérifie si un bouton de suppression a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'supprimer_offre_') === 0) {
            $id_offre = substr($key, strlen('supprimer_offre_'));
            $Accueil_offre->Supprimer_Offre($id_offre);
            header("Location: index.php");
            exit;
        }
    }
}

// Récupère les offres à afficher
$offres = $Accueil_offre->Afficher_Offres();

// Assigne les offres à Smarty pour affichage
$smarty->assign('offres', $offres);

// Affiche le template Accueil.tpl
$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");