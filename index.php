<?php
// Définition du chemin du répertoire principal
define('MAIN_PATH', getcwd());
// Fichier à importer
require(MAIN_PATH . "/smarty-4.3.2/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->setTemplateDir(MAIN_PATH . '/Template');
$page = isset($_GET['page']) ? $_GET['page'] : '';
HEADER_FOOTER();


function DISPLAY($content, $content_footer){
    global $smarty, $page;
    $smarty->assign('header', $content);
    $smarty->assign('content_footer', $content_footer);
    if ($page == 'Acceuil') {                                                                   require_once 'Assets\PHP\Gestion_Accueil\controller_Accueil.php';} 
    elseif($page == 'Créer_entreprise' || $page == 'Dashboard_E'){                              require_once 'Assets\PHP\Gestion_entreprises\controller_GE.php';    }
    elseif($page == 'Connexion'){                                                               require_once 'Assets\PHP\Gestion_Acces\controller_Acces.php';    }
    elseif($page == 'Créer_offre' || $page == 'Dashboard_O'){                                   require_once 'Assets\PHP\Gestion_Offres\controller_offre.php';    }
    elseif($page == 'Rechercher_un_compte_etudiant' ||$page == 'Rechercher_un_compte'|| $page == 'Statistiques_etudiant'|| $page == 'Creer_un_compte' || $page == 'Mon_Compte')
    {       require_once 'Assets\PHP\Gestion_Compte\controller_Compte.php';    }
    elseif($page == 'Wishlist' ){                                                               require_once 'Assets\PHP\Gestion_Candidature\controller_Candidature.php';    }
    else {                                                                                      require_once 'Assets\PHP\Gestion_Accueil\controller_Accueil.php';    }

}

function HEADER_FOOTER(){
    global $smarty, $action1;
    $header = "<img src='Images/logo.png' alt='logo Stage Cesi Link' class='logo'>
    <hr>
    <nav class='navbar'>
        <div class='dropdown'>
            <a href='index.php?page=Accueil'>Accueil </a>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <div class='dropdown'>
            <a href='#'>Entreprises </a>
        <div class='dropdown-content'>
            <a href='#'>Entreprises</a>
            <a href='index.php?page=Créer_entreprise'>Inscrire mon Entreprise</a>
            <a href='index.php?page=Dashboard_E'>Dashboard Entreprise</a>
        </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <div class='dropdown'>
            <a href='#'>Offres </a>
            <div class='dropdown-content'>
                <a href='index.php?page=Créer_offre'>Créer mon offre </a>
                <a href='index.php?page=Dashboard_O'>Dashboard offre</a>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <div class='dropdown'>
            <a href='#'>Pilotes / Etudiants </a>
            <div class='dropdown-content'>
                <a href='index.php?page=Rechercher_un_compte'>Rechercher un compte Pilote</a>
                <a href='index.php?page=Rechercher_un_compte_etudiant'>Rechercher un compte Etudiant</a>
                <a href='index.php?page=Statistiques_etudiant'>Dashboard Etudiant</a>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href='index.php?page=Wishlist'>Liste de Souhait </a>
    </nav>
    <nav class='moncompte'>
        <div class='dropdown'>
            <a href='#'>&nbsp;Mon&nbsp;Compte</a>
            <div class='dropdown-content'>
                <a href='index.php?page=Connexion'>S'identifier</a>
                <a href='index.php?page=Creer_un_compte'>Créer un compte</a>
                <a href='index.php?page=Mon_Compte'>Mon compte</a>
            </div>
        </div>
    </nav>
    <hr>";
    $footer = "
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

    <footer class='footerbasse'>
        <div class='footer-container'>
            <footer class='leftfooter'>
                <label for='Navigation' id='navigation-label'>Navigation :</label>
                    <p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
                <nav class='navbarfooter'>
                    <a href='#'>Accueil </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href='#'>Entreprises </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href='#'>Offres </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href='#'>Pilotes / Etudiants </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href='#'>Liste de Souhait </a>  
                </nav>
                <p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
            </footer>
            <footer class='rightfooter'>
                <label for='contacter' id='reseaux-label'>Suivez-nous ! </label>
                <div class='social-media'>
                    <img src='Images/insta.png' alt='logo insta' class='logoinsta'>
                    <p>@StageLink_Cesi</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <img src='Images/ytb.png' alt='logo ytb' class='logoinsta'>
                    <p>StageLinkCesi_yt</p>
                </div>
                <div class='social-media'>
                    <img src='Images/gmail.png' alt='logo gmail' class='logoinsta'>
                    <a href='https://www.instagram.com/'>@StageLinkCesi </a>&nbsp;&nbsp;
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <img src='Images/linkedin1.png' alt='logo linkedin' class='logoinsta'>
                    <p>StageCesi@link.com</p>
                </div>
            </footer>
        </div>
        <footer class='basfooter'>
            <div class='social-media'>
                <img src='Images/logo.png' alt='logo Stage Cesi Link' class='logoCesi'>
                <label for='contacter' id='bas-label'>&copy; 2024 - Stage Link Cesi</label>
            </div>
        </footer>
    </footer>" ;
    DISPLAY($header, $footer);
}


?>
