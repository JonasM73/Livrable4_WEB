<?php
require_once 'methodes_Acces.php';
$acces = new Acces();

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
    } else { $erreur = "Vueillez entrer le bon mot de passe ou la bonne adresse mail...";
            $smarty->assign('erreur', $erreur);

    }
}else {     $erreur = '';
            $smarty->assign('erreur', $erreur);
}

$smarty->display(MAIN_PATH . "/Template/$page.tpl");