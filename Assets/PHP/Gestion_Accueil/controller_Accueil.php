<?php

#initialisation
require_once 'Méthodes_Accueil.php';
$Accueil_offre = new Accueil_offre();

if (isset($_POST['id_offre'])) {
    $id_offre = $_POST['id_offre'];
    $Accueil_offre->Supprimer_Offre($id_offre);
}


$offres = $Accueil_offre->Afficher_Nom_Offre(); 
$offres_descriptif = $Accueil_offre->Afficher_descriptif_Offre(); 
$offres_Date = $Accueil_offre->Afficher_Date();
$offres_remuneration = $Accueil_offre->Afficher_remuneration();
$offres_place = $Accueil_offre->Afficher_Place();

$smarty->assign('offres', $offres);
$smarty->assign('offres_descriptif', $offres_descriptif); 
$smarty->assign('offres_Date', $offres_Date); 
$smarty->assign('offres_remuneration', $offres_remuneration); 
$smarty->assign('offres_place', $offres_place); 

$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");




?>
