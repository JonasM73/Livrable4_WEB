<?php 
require_once 'Méthodes_Accueil.php';
$Accueil_offre = new Accueil_offre();

// Page actuelle, par défaut 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = intval($page); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Traitement des actions de suppression ou de modification d'offre
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
            } else {  
                // Gérer le cas où l'offre n'est pas trouvée
            }
        }
    }
    
    // Traitement de la recherche
    if (isset($_POST['Rechercher_offre'])) {
        $ou_content = $_POST['Ou'].'%';
        $nom_content = $_POST['Nom'].'%';
        $Compétence_value = $_POST['Comp'].'%';
        $durée_stage = !empty($_POST['durée']) ? $_POST['durée'] : 0;
        $remuneration = !empty($_POST['remun']) ? $_POST['remun'] : 0;
        $promotion = $_POST['promotion_value'].'%';
        if (!empty($ou_content) || !empty($nom_content) || !empty($Compétence_value) || !empty($durée_stage) || !empty($remuneration) || !empty($promotion)) {
            $offres = $Accueil_offre->rechercher_offre($ou_content, $nom_content, $Compétence_value, $durée_stage, $remuneration, $promotion);
            $smarty->assign('offres', $offres); 

            // Recalcul de la pagination après la recherche
            $offres_par_page = 5;
            $total_offres = count($offres);
            $total_pages = ceil($total_offres / $offres_par_page);
            $offset = ($page - 1) * $offres_par_page;
            $offres_l = array_slice($offres, $offset, $offres_par_page);

            $smarty->assign('offres_l', $offres_l); 
            $smarty->assign('total_pages', $total_pages);
            $smarty->assign('page_actuelle', $page);

            $smarty->display(MAIN_PATH . "/Template/Accueil.tpl");
            exit;
        }
        exit;
    }
} else {
    // Traitement de la pagination sans recherche
    $offres_par_page = 5;
    $all_offres = $Accueil_offre->Afficher_Offres();
    $total_offres = count($all_offres);
    $total_pages = ceil($total_offres / $offres_par_page);
    $offset = ($page - 1) * $offres_par_page;
    $offres_l = array_slice($all_offres, $offset, $offres_par_page);

    $smarty->assign('offres_l', $offres_l); 
    $smarty->assign('total_pages', $total_pages);
    $smarty->assign('page_actuelle', $page);
}

$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");
?>
