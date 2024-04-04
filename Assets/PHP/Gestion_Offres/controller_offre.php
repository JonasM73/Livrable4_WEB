<?php
    #initialisation
    require_once 'methodes_offre.php';
    require_once 'Assets/PHP/Gestion_Accueil/Méthodes_Accueil.php';

    $Accueil_offre = new Accueil_offre();
    
    $id_offre = substr($key, strlen('modifier_offre_'));
            $offre = $Accueil_offre->getOffreParId($id_offre); 
            if ($offre) {
                $smarty->assign('offre', $offre);
                exit;
            } else {  }

    $smarty->display(MAIN_PATH . "/Template/Modifier_offre.tpl");
