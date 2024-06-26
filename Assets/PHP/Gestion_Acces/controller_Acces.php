<?php
require_once 'methodes_Acces.php';
$acces = new Acces();

//////////////////////////////////////////////////////////////////////////////////////////
//          Il s'agit du controlleur pour la page de connexion et de déconnexion
/////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////
//                              méthode page de connexion
/////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['action']) && $_POST['action'] === 'Connexion') {
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $connexion_result = $acces->Connexion($email, $passwd);
    if ($connexion_result !== false) {
        // Vérifier si les clés existent dans $connexion_result avant de les utiliser
        if(isset($connexion_result['id_utilisateur']) && isset($connexion_result['utilisateur_type']) && isset($connexion_result['prenom_utilisateur'])) {
            // Connexion réussie, définir les cookies
            $_SESSION['id_utilisateur'] = $connexion_result['id_utilisateur'];
            $_SESSION['type_utilisateur'] = $connexion_result['utilisateur_type'];
            $_SESSION['prenom_utilisateur'] = $connexion_result['prenom_utilisateur'];
            $page = 'Acceuil';
            header("Location: index.php");
        }
    } else { 
        $erreur = "Veuillez entrer le bon mot de passe ou la bonne adresse mail...";
        $smarty->assign('erreur', $erreur);
    }
} else {
    $erreur = '';
    $smarty->assign('erreur', $erreur);
}


//////////////////////////////////////////////////////////////////////////////////////////
//                              Page de deconnexion
/////////////////////////////////////////////////////////////////////////////////////////
$erreur_deco = ''; 
$btn_connexion = ''; 

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['logout'])) {
    // Vérifie si les variables de session sont définies
    if (isset($_SESSION['id_utilisateur']) && isset($_SESSION['type_utilisateur']) && isset($_SESSION['prenom_utilisateur'])) {
        // Détruit la session actuelle
        session_unset(); // Supprime toutes les variables de session
        session_destroy(); // Détruit la session actuelle
        $erreur_deco = "<h1>Déconnexion réussie</h1>";
    } else {
        $erreur_deco = "<h1>Vous n'êtes pas connecté</h1>";
        $btn_connexion = "<button type='submit' name='btn_connexion' class='connexion-button'>Accéder a la page de connexion</button>";
    }
}
$smarty->assign('btn_connexion', $btn_connexion);
$smarty->assign('erreur_deco', $erreur_deco);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn_connexion'])) {
    $page = 'Connexion';
}




//////////////////////////////////////////////////////////////////////////////////////////
//                              rtenvoie a la page tpl
/////////////////////////////////////////////////////////////////////////////////////////
$smarty->display(MAIN_PATH . "/Template/$page.tpl");
?>
