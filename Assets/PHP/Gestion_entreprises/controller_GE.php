<?php
require_once 'Entreprise.php';
$ent= new Entreprise();

$result_secteur = ; // Compter le nombre d'entreprise par secteur d'activité
$result_localité = ; // Compter le nombre d'entreprise par ville
$result_annonces = ; // Top 10 des annonces les plus demandés

// Enregistrer les données dans un tableau avec colonne "secteur d'activité" et "nombre"
$secteurs_activite = array();
while ($row = mysqli_fetch_assoc($result_secteur)) {
$secteurs_activite[/*Ajouter les données*/];
}

$localite = array();
while ($row = mysqli_fetch_assoc($result_localité)) {
    $localite[/*Ajouter les données*/];
}

$annonces = array();
while ($row = mysqli_fetch_assoc($result_annonces)) {
    $annonces[/*Ajouter les données*/];
}

//Assigner les données à Smarty
$smarty->assign('secteur_activite', $secteur_activite);
$smarty->assign('localite', $localite);
$smarty->assign('annonces', $annonces);

$smarty->display(MAIN_PATH . "/Template/$page.tpl");