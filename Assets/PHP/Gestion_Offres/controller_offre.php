<?php
    #initialisation
    require_once 'methodes_offre.php';
    require_once 'Assets/PHP/Gestion_Accueil/Méthodes_Accueil.php';

    $Accueil_offre = new Accueil_offre();
    $off= new Entreprise();

    $result_competences = ; // Compter le nombre d'offres par compétences
    $result_localité = ; // Compter le nombre d'offres par villes
    $result_promo = ; // Compter le nombre d'offres par promotions
    $result_durée = ; // Compter le nombre d'offres par durée de stages
    $result_TOP = ; // Top des offres en Wishlist

    // Enregistrer les données dans un tableau avec colonne "secteur d'activité" et "nombre"
    $competences = array();
    while ($row = mysqli_fetch_assoc($result_competences)) {
        $competences[/*Ajouter les données*/];
    }

    $localite = array();
    while ($row = mysqli_fetch_assoc($result_localité)) {
        $localite[/*Ajouter les données*/];
    }

    $promo = array();
    while ($row = mysqli_fetch_assoc($result_promo)) {
        $promo[/*Ajouter les données*/];
    }

    $duree = array();
    while ($row = mysqli_fetch_assoc($result_durée)) {
        $duree[/*Ajouter les données*/];
    }

    $TOP = array();
    while ($row = mysqli_fetch_assoc($result_TOP)) {
        $TOP[/*Ajouter les données*/];
    }

    //Assigner les données à Smarty
    $smarty->assign('competences', $competences);
    $smarty->assign('localite', $localite);
    $smarty->assign('promo', $promo);
    $smarty->assign('duree', $duree);
    $smarty->assign('TOP', $TOP);

    $id_offre = substr($key, strlen('modifier_offre_'));
    $offre = $Accueil_offre->getOffreParId($id_offre);
    if ($offre) {
        $smarty->assign('offre', $offre);
        exit;
    } else {

    }
    $smarty->display(MAIN_PATH . "/Template/Modifier_offre.tpl");