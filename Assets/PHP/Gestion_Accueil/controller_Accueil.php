<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Méthodes_Accueil.php';

$Accueil_offre = new Accueil_offre();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'supprimer_offre_') === 0) {
            $id_offre = substr($key, strlen('supprimer_offre_'));
            $Accueil_offre->Supprimer_Offre($id_offre);
            echo "Contenu de Compétence_value : " . $id_offre;
            header("Location: index.php");
            exit;
        }
    }

    if (isset($_POST['Rechercher_offre'])) {
        $ou_content = $_POST['Ou'];
        $nom_content = $_POST['Nom'];
        $Compétence_value = $_POST['Comp'];

        echo "Contenu de Compétence_value : " . $Compétence_value;

        exit;
    }
}

$offres = $Accueil_offre->Afficher_Offres();
$smarty->assign('offres', $offres);
$smarty->display(MAIN_PATH . "/Template/Accueil.tpl");