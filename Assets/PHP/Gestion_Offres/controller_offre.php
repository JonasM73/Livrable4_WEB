<?php
    #initialisation
    require_once 'methodes_offre.php';



    $stat_offre = new Methodes_offres();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['afficher_stat'])) {
            $action = $_POST['afficher_stat'];
            $labels = array();
            $data = array();
            switch ($action) {
                case 'Afficher les statitistiques de la répartition des offres par compétence':
                    $stat_comp = $stat_offre->stat_offre_comp();
                    $titre_graphique = "Répartition des offres par Compétence";
                    $nom_axe_y = "Nombre des compétences";
                    $nom_axe_x = "offre de stage";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
                case 'Afficher les statitistiques de la répartition des offres par localité':
                    $stat_comp = $stat_offre->stat_offre_Localite();
                    $titre_graphique = "Répartition des offres par localité";
                    $nom_axe_y = "Nombres offres";
                    $nom_axe_x = "Villes";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }
                    break;
                case 'Afficher les statitistiques de la répartition des offres par durée de stage':
                    $stat_comp = $stat_offre->stat_offre_duréer();
                    $titre_graphique = "Répartition des offres par durée de stage";
                    $nom_axe_y = "Durée du stage en semaine";
                    $nom_axe_x = "Nombres offres";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                    }                    
                    break;
                    case 'Afficher les statitistiques de la répartition des offres par promotions':
                    $stat_comp = $stat_offre->stat_offre_promo();
                    $titre_graphique = "Répartition des offres par promotions";
                    $nom_axe_y = "Nombre offres";
                    $nom_axe_x = "Promotions";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                        } 
                    break;
                case 'Afficher le top des offres mise en wishlist':
                    $stat_comp = $stat_offre->stat_offre_wishlist();
                    $titre_graphique = "Top des offres mise en wishlist";
                    $nom_axe_y = "Nombre de like";
                    $nom_axe_x = "Offres";
                    foreach ($stat_comp as $offre) {
                        $labels[] = $offre->get_x();
                        $data[] = $offre->get_y();
                        } 

                    break;
                default:
                    // Action par défaut si aucune correspondance n'est trouvée
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
                        label: 'Nombre de compétences',
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
    }


  
$smarty->display(MAIN_PATH . "/Template/Dashboard_O.tpl");