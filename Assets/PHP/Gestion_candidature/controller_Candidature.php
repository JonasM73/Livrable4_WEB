<?php
    require_once 'methodes_Candidature.php';

    $Accueil_offre = new wishlist();
    $Accueil_offre2 = new Accueil_offre();

    $id_utilisateur = $_SESSION['id_utilisateur'] ;


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Traitement des actions de suppression ou de modification d'offre
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'supprimer_offre_') === 0) {
                $id_offre = substr($key, strlen('supprimer_offre_'));
                $Accueil_offre2->Supprimer_Offre($id_offre);
                header("Location: index.php");
                exit;
            }
        }
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'modifier_offre_') === 0) {
                $id_offre = substr($key, strlen('modifier_offre_'));
                $offre = $Accueil_offre2->getOffreParId($id_offre); 
                if ($offre) {
                    $smarty->assign('offre', $offre);
                    $smarty->display(MAIN_PATH . "/Template/Modifier_offre.tpl");
                    exit;
                } else {  
                    // Gérer le cas où l'offre n'est pas trouvée
                }
            }
        }
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'postuler_offre_') === 0) {
                $id_offre = substr($key, strlen('postuler_offre_'));
                $offre = $Accueil_offre2->getOffreParId($id_offre); 
                if ($offre) {
                    $smarty->assign('offre', $offre);
                    $smarty->assign('Bravo', $Bravo);
                    $smarty->display(MAIN_PATH . "/Template/Postuler.tpl");
                    exit;
                } else {  
                    // Gérer le cas où l'offre n'est pas trouvée
                }
            }
        }
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'Postuler_') === 0) {
                $id_offre = substr($key, strlen('Postuler_'));
        
                $Lettre_motiv = isset($_POST['LM']) ? $_POST['LM'] : '';
                $nom_fichier_cv = isset($_FILES['CV']['name']) ? $_FILES['CV']['name'] : '';
                    
                $offre = $Accueil_offre2->getOffreParId($id_offre); 
                $id_ut = $_SESSION['id_utilisateur'];
    
                $Accueil_offre2->postuler($Lettre_motiv, $nom_fichier_cv, $id_ut, $id_offre);
                if ($offre) {
                    $smarty->assign('offre', $offre);
                    $Bravo = "<p class='bravo_vous'>VOUS AVEZ POSTULER A UNE OFFRE <p>";
                    $smarty->assign('Bravo', $Bravo);
                    $smarty->display(MAIN_PATH . "/Template/Postuler.tpl");
                    exit;
                } else {  
                    // Gérer le cas où l'offre n'est pas trouvée
                }
            }
        }
    }
    
    $offres_l = $Accueil_offre->Afficher_Offres($id_utilisateur);
    $smarty->assign('offres_l', $offres_l);



    $smarty->display(MAIN_PATH . "/Template/$page.tpl");
