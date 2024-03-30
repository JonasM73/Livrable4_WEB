<?php

#initialisation
require_once 'Méthodes_Accueil.php'; // Le nom du fichier est "methode_accueil.php", assurez-vous qu'il est correctement orthographié
$Accueil_offre = new Accueil_offre();
$offres = $Accueil_offre->Afficher_Nom_Offre(); // Utilisez la méthode Afficher_Nom_Offre pour obtenir les offres
$offres_descriptif = $Accueil_offre->Afficher_descriptif_Offre(); // Utilisez la méthode Afficher_Nom_Offre pour obtenir les offres
$smarty->assign('offres', $offres); // $offres est votre tableau d'offres
$smarty->assign('offres_descriptif', $offres_descriptif); // $offres est votre tableau d'offres

$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");





?>
