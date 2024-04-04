<?php
require_once 'methodes_Compte.php';


$Compte = new Compte();
$erreur_cree = "";
$sucess_cree = "";
$btn_connexion = ''; 


if(isset($_POST['créer_compte'])){
    if(!empty($_POST['name']) AND !empty($_POST['confirmpassword']) AND !empty($_POST['password'])AND !empty($_POST['email']) AND !empty($_POST['surname']) AND !empty($_POST['Centre']) AND !empty($_POST['promo']) AND !empty($_POST['type'])){
        $nom = htmlspecialchars($_POST['name']);
        $prenom =htmlspecialchars($_POST['surname']);
        $type = htmlspecialchars($_POST['type']);
        $email_login = htmlspecialchars($_POST['email']);
        $MDP = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $MDPver = htmlspecialchars($_POST['password']);

        $promo = htmlspecialchars($_POST['promo']);
        $centre = htmlspecialchars($_POST['Centre']);

        $result = $Compte->créer_compte($nom, $prenom, $type, $email_login, $MDP, $promo, $centre);
        
        if ($result !== false) {
            $sucess_cree = "<p class='succes_creer'>Création de compte réussis ! Aller Vous connecter maintenant !<p>";

    }else {                         $erreur_cree = "<p class='error_creer'>Un problème est survenue<p>";  }
}else {                             $erreur_cree = "<p class='error_creer'>Des champs sont manquant<p>";    }
}

$smarty->assign('sucess_cree', $sucess_cree);
$smarty->assign('erreur_cree', $erreur_cree);
$smarty->display(MAIN_PATH . "/Template/$page.tpl");
?>
