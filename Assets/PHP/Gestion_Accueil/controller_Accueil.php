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
        if (strpos($key, 'Postuler_offre_') === 0) {
            $id_offre = substr($key, strlen('Postuler_offre_'));
            $Accueil_offre->Supprimer_Offre($id_offre);
            header("Location: index.php");
            exit;
        }
    }

    if (isset($_POST['Rechercher_offre'])) {
        $ou_content = $_POST['Ou'];
        $nom_content = $_POST['Nom'];
        $Compétence_value = $_POST['Comp'];
        $durée_stage = $_POST['durée'];
        $remuneration = $_POST['remun'];
        $promotion = $_POST['promotion_value'];
        //echo "Contenu de Compétence_value : " . $ou_content . "<br>";
        //echo "Contenu de Compétence_value : " . $nom_content . "<br>";
        //echo "Contenu de Compétence_value : " . $Compétence_value . "<br>";
        //echo "Contenu de Compétence_value : " . $durée_stage . "<br>";
        //echo "Contenu de Compétence_value : " . $remuneration . "<br>";
        //echo "Contenu de Compétence_value : " . $promotion . "<br>";
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