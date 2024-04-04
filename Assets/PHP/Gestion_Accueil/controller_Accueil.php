<?php 

require_once 'Méthodes_Accueil.php';

$Accueil_offre = new Accueil_offre();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'supprimer_offre_') === 0) {
            $id_offre = substr($key, strlen('supprimer_offre_'));
            $Accueil_offre->Supprimer_Offre($id_offre);
            header("Location: index.php");
            exit;
        }
    }
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'modifier_offre_') === 0) {
            $id_offre = substr($key, strlen('modifier_offre_'));
            $offre = $Accueil_offre->getOffreParId($id_offre); 
            if ($offre) {
                $smarty->assign('offre', $offre);
                $smarty->display(MAIN_PATH . "/Template/Modifier_offre.tpl");
                exit;
            } else {  }
        }
    }
    

    if (isset($_POST['Rechercher_offre'])) {
        $ou_content = $_POST['Ou'].'%';
        $nom_content = $_POST['Nom'].'%';
        $Compétence_value = $_POST['Comp'].'%';
        $durée_stage = !empty($_POST['durée']) ? $_POST['durée'] : 0;
        $remuneration = !empty($_POST['remun']) ? $_POST['remun'] : 0;
        $promotion = $_POST['promotion_value'].'%';
        //Echo "Contenu de Compétence_value : " . $ou_content . "<br>";
        //Echo "Contenu de Compétence_value : " . $nom_content . "<br>";
        //Echo "Contenu de Compétence_value : " . $Compétence_value . "<br>";
        //Echo "Contenu de Compétence_value : " . $durée_stage . "<br>";
        //Echo "Contenu de Compétence_value : " . $remuneration . "<br>";
        //Echo "Contenu de Compétence_value : " . $promotion . "<br>";
        if (!empty($ou_content) || !empty($nom_content) || !empty($Compétence_value) || !empty($durée_stage) || !empty($remuneration) || !empty($promotion)) 
        {
        $offres = $Accueil_offre->rechercher_offre($ou_content, $nom_content, $Compétence_value, $durée_stage, $remuneration, $promotion);
        $smarty->assign('offres', $offres); 
        $smarty->display(MAIN_PATH . "/Template/Accueil.tpl");
        exit;
    }
        exit;
    }
    
}else {
    $offres = $Accueil_offre->Afficher_Offres();
    $smarty->assign('offres', $offres); 
}

$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");