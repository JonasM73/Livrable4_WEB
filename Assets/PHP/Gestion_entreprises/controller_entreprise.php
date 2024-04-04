<?php
    #initialisation
    require_once 'methodes_entreprise.php';



    $stat_entreprise = new méthodes_entreprises();

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


  
$smarty->display(MAIN_PATH . "/Template/$page.tpl");