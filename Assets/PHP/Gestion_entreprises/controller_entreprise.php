<?php
    #initialisation
    require_once 'methodes_entreprise.php';



    $stat_entreprise = new méthodes_entreprises();
    $succes_E = "";
    $erreur_E = "";
    $entreprise = array();
    $note = ""; // Définition initiale de la variable $note
    $id_ut = ""; // Définition initiale de la variable $id_ut

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['afficher_stat'])) {
            $action = $_POST['afficher_stat'];
            $labels = array();
            $data = array();
            switch ($action) {
                case "Afficher les statitistiques de la répartition des Entreprise par secteur de activité":
                    $stat_comp = $stat_entreprise->stat_entreprise_secteur_act();
                    $titre_graphique = "Répartition des entreprises par secteur de activité";
                    $nom_axe_y = "Nombres entreprises";
                    $nom_axe_x = "Secteur activité";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
                case "Afficher les statitistiques de la répartition des Entreprise par localité":
                    $stat_comp = $stat_entreprise->stat_entreprise_Localite();
                    $titre_graphique = "Répartition des entreprises par localité";
                    $nom_axe_y = "Nombres de entreprises";
                    $nom_axe_x = "Villes";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
                case "Afficher les statitistiques de la répartition des Entreprise par promotions":
                    $stat_comp = $stat_entreprise->stat_entreprise_promo();
                    $titre_graphique = "Répartition des entreprises par promotions";
                    $nom_axe_y = "Nombres de eentreprises";
                    $nom_axe_x = "Promotions";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }                    
                    break;
                    case "Afficher le top des entreprise demandées en fonction de ses offres":
                    $stat_comp = $stat_entreprise->stat_entreprise_topentreprise();
                    $titre_graphique = "Top des entreprise demandées en fonction de ses offres";
                    $nom_axe_y = "Nombre de postulation";
                    $nom_axe_x = "Entreprises";
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
    }else {
        $new = '';         
        $smarty->assign('new', $new); 
    }

    if ($page == 'Créer_entreprise') {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['action']) && $_POST['action'] === 'Créer_entreprise') {
                $nom_entreprise = isset($_POST['nom_enterprise']) ? $_POST['nom_enterprise'] : '';
                $secteur_activite = isset($_POST['secteur']) ? $_POST['secteur'] : '';
                $nombre_centre = isset($_POST['number']) ? $_POST['number'] : '';
                $adresses = array();
                for ($i = 1; $i <= $nombre_centre; $i++) {
                    $cp = isset($_POST['CP' . $i]) ? $_POST['CP' . $i] : '';
                    $ville = isset($_POST['ville' . $i]) ? $_POST['ville' . $i] : ''; // Modification ici
                    $adresse = isset($_POST['address' . $i]) ? $_POST['address' . $i] : '';
                    $adresses[] = array('CP' => $cp, 'AD' => $adresse, 'ville' => $ville); // Modification ici
                }
    
                $entreprise = new Entreprise();
                $entreprise->setNom($nom_entreprise);
                $entreprise->setSecteurActivite($secteur_activite);
                $resultat = $stat_entreprise->insererEntrepriseAvecAdresses($entreprise, $adresses);
    
                if ($resultat) {
                    // L'entreprise a été insérée avec succès
                    $succes_E = "<p class='sucess_entreprise'>Entreprise insérée avec succès.<p>";
                } else {
                    // Une erreur s'est produite lors de l'insertion de l'entreprise
                    $erreur_E = "<p class='erreur_entreprise'>Echec de l'insértion.<p>";
                }
            }
        }
    }
    
    
    if ($page == 'Rechercher_Entreprise'){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST['action']) && $_POST['action'] === 'rechercher') {
                // Vérifier si le bouton "Rechercher" a été cliqué
            
                // Récupérer les valeurs des champs
                $nom = isset($_POST['nom']) ? $_POST['nom'] . '%' : '';
                $secteur = isset($_POST['secteur']) ? $_POST['secteur'] . '%' : '';
                $centre = isset($_POST['ville']) ? $_POST['ville'] . '%' : '';
                $CP = isset($_POST['CP']) ? $_POST['CP'] . '%' : '';
                $AP = isset($_POST['AP']) ? $_POST['AP'] . '%' : '';
            
                $entreprise = $stat_entreprise->afficher_une_entreprise($nom, $secteur, $centre, $CP, $AP);

            
        }
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'Invisible_') === 0) {
                $id_offre = substr($key, strlen('Invisible_'));
                $entreprise = $stat_entreprise->invisibilite($id_offre); 
                $entreprise = $stat_entreprise->afficher_entreprise();

            }
        }
        

        foreach ($_POST as $key => $value) {
        if (strpos($key, 'noter_') === 0) {
            $id_offre = substr($key, strlen('noter_'));
            if (isset($_POST['Note_' . $id_offre]) && !empty($_POST['Note_' . $id_offre])) {
                $note = $_POST['Note_' . $id_offre] ;
                $id_ut = $_SESSION['id_utilisateur'];
                $stat_entreprise->noter($id_offre, $note, $id_ut); 
                var_dump($status);
            }              
        $entreprise = $stat_entreprise->afficher_entreprise();
    }
}
    }else {
        $entreprise = $stat_entreprise->afficher_entreprise();

    }
}




    $smarty->assign('entreprise', $entreprise);
    $smarty->assign('succes_E', $succes_E);
    $smarty->assign('erreur_E', $erreur_E);

$smarty->display(MAIN_PATH . "/Template/$page.tpl");
