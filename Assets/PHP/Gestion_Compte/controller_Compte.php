<?php
require_once 'methodes_Compte.php';


$Compte = new Compte();

$erreur_cree = "";
$sucess_cree = "";
$btn_connexion = ''; 
$etudiant = array();

if ($page == 'Rechercher_un_compte_etudiant'){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['action']) && $_POST['action'] === 'rechercher_etudiant') {
            // Vérifier si le bouton "Rechercher" a été cliqué
        
            // Récupérer les valeurs des champs
            $nom = isset($_POST['nom']) ? $_POST['nom'] . '%' : '';
            $prenom = isset($_POST['prénom']) ? $_POST['prénom'] . '%' : '';
            $centre = isset($_POST['Centre']) ? $_POST['Centre'] . '%' : '';
            $promo = isset($_POST['promo']) ? $_POST['promo'] . '%' : '';
            
        
            $etudiant = $Compte->afficher_un_compte_etudiant($nom, $prenom, $centre, $promo);
    }
    }else {
        $etudiant = $Compte->afficher_compte_etudiant();
    }
}
if ($page == 'Rechercher_un_compte'){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['action']) && $_POST['action'] === 'rechercher_pilote') {
        
            $nom = isset($_POST['nom']) ? $_POST['nom'] . '%' : '';
            $prenom = isset($_POST['prénom']) ? $_POST['prénom'] . '%' : '';
            $centre = isset($_POST['Centre']) ? $_POST['Centre'] . '%' : '';
            $promo = isset($_POST['promo']) ? $_POST['promo'] . '%' : '';
            
        
            $etudiant = $Compte->afficher_un_compte_Pilote($nom, $prenom, $centre, $promo);
    }
    }else {
        $etudiant = $Compte->afficher_compte_Pilotes();
    }
}
if ($page == 'Statistiques_etudiant'){
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['afficher_stat'])) {
            $action = $_POST['afficher_stat'];
            $labels = array();
            $data = array();
            switch ($action) {
                case 'Afficher les statitistiques de la répartition des Etudiant par promotions':
                    $stat_comp = $Compte->stat_etudiant_promo();
                    $titre_graphique = "Répartition des Etudiant par Promotions";
                    $nom_axe_y = "Nombres etudiants";
                    $nom_axe_x = "Promotions";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
                case 'Afficher les statitistiques de la répartition des Etudiant par Centre':
                    $stat_comp = $Compte->stat_etudiant_localité();
                    $titre_graphique = "Répartition des Etudiant par Centre";
                    $nom_axe_y = "Nombres etudiants";
                    $nom_axe_x = "Villes";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
            }
            // Générer le code JavaScript pour le diagramme à barres
            $new = "<script>
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: " . json_encode($labels) . ",
                    datasets: [{
                        label: '" . $nom_axe_y . "',
                        data: " . json_encode($data) . ",
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: '" . $titre_graphique . "',
                            padding: {
                                top: 10,
                                bottom: 10
                            },
                            font: {
                                size: 30 // Taille du titre du graphique
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: '" . $nom_axe_y . "',
                                font: {
                                    size: 24 // Taille du titre de l'axe y
                                }
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: '" . $nom_axe_x . "',
                                font: {
                                    size: 24 // Taille du titre de l'axe y
                                }
                            }
                        }
                    }
                }
            });
        </script>";
        $smarty->assign('new', $new); 
        }
    }else{
        $new = '';         
        $smarty->assign('new', $new); 
    }

}


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

$smarty->assign('etudiant', $etudiant); 
$smarty->assign('sucess_cree', $sucess_cree);
$smarty->assign('erreur_cree', $erreur_cree);
$smarty->display(MAIN_PATH . "/Template/$page.tpl");


?>
