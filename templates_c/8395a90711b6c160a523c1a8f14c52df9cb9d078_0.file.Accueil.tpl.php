<?php
/* Smarty version 4.3.2, created on 2024-03-27 10:37:49
  from 'C:\xampp\htdocs\Livrable4_WEB\Accueil\Accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6603e8eda33958_13780194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8395a90711b6c160a523c1a8f14c52df9cb9d078' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Livrable4_WEB\\Accueil\\Accueil.tpl',
      1 => 1711532264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603e8eda33958_13780194 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Accueil</title>
		<link rel="stylesheet" type="text/css" href="Assets\CSS\style_site.css">
		<link rel="stylesheet" type="text/css" href="Assets\CSS\Accueil.css">
	</head>

	<body>
		<header>
			<img src="Images/logo.png" alt="logo Stage Cesi Link" class="logo">
			<hr>
			<nav class="navbar">
				<div class="dropdown">
					<a href="index.php?page=/Accueil/Accueil.tpl">Accueil </a>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Entreprises </a>
				<div class="dropdown-content">
					<a href="#">Entreprises</a>
					<a href="index.php?page=/Entreprises/Créer_entreprise.tpl">Inscrire mon Entreprise</a>
					<a href="#">Dashboard Entreprise</a>
				</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Offres </a>
					<div class="dropdown-content">
						<a href="index.php?page=/Offres/Créer_offre.tpl">Créer mon offre </a>
						<a href="#">Dashboard offre</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Pilotes / Etudiants </a>
					<div class="dropdown-content">
						<a href="index.php?page=/Pilotes/Rechercher_un_compte.tpl">Rechercher un compte Pilote</a>
						<a href="index.php?page=/Etudiants/Rechercher_un_compte_etudiant.tpl">Rechercher un compte Etudiant</a>
						<a href="index.php?page=/Etudiants/Statistiques_etudiant.tpl">Dashboard Etudiant</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Liste de Souhait </a>
			</nav>
			<nav class="moncompte">
				<div class="dropdown">
					<a href="#">&nbsp;Mon&nbsp;Compte</a>
					<div class="dropdown-content">
						<a href="index.php?page=/Mon_compte/Connexion.tpl">S'identifier</a>
						<a href="index.php?page=/Mon_compte/Creer_un_compte.tpl">Créer un compte</a>
						<a href="#">Mon compte</a>
					</div>
				</div>
			</nav>
			<hr>
		</header>
		
		<main>
			<div class="bloc-gauche">
    			<div class="menu-container">
        			<div class="menu">
            			<div class="option">
                			<input type="checkbox" id="interest" name="category">
                			<label for="interest" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Compétences :</label>
                			&nbsp;
                			<div class="submenu">
                    			<div>
									<input type="radio" id="finance_et_banque" name="interest">
									<label for="finance_et_banque">Finance et banque</label>
								</div>
                    			<div>
									<input type="radio" id="ingenieur_informatique" name="interest">
									<label for="ingenieur_informatique">Ingénieur Informatique</label>
								</div>
                    			<div>
									<input type="radio" id="marketing_et_publicite" name="interest">
									<label for="marketing_et_publicite">Marketing et publicité</label>
								</div>
                    			<div>
									<input type="radio" id="ressources_humaines" name="interest">
									<label for="ressources_humaines">Ressources Humaines</label>
								</div>
                    			<div>
									<input type="radio" id="agriculture" name="interest">
									<label for="agriculture">Agriculture</label>
								</div>
                    			<div>
									<input type="radio" id="immobilier" name="interest">
									<label for="immobilier">Immobilier</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selection" name="interest" value="">
									<label for="aucune_selection">Aucune sélection</label>
								</div>
                			</div>
            			</div>
            			<div class="option">
                			<input type="checkbox" id="city" name="category">
                			<label for="city"style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Durée du Stage :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="moins_d_un_mois" name="duration">
									<label for="moins_d_un_mois">Moins d'un mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_1_et_3_mois" name="duration">
									<label for="entre_1_et_3_mois">Entre 1 et 3 mois</label>
								</div>
                   				<div>
									<input type="radio" id="entre_3_et_6_mois" name="duration">
									<label for="entre_3_et_6_mois">Entre 3 et 6 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_6_et_9_mois" name="duration">
									<label for="entre_6_et_9_mois">Entre 6 et 9 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_9_et_12_mois" name="duration">
									<label for="entre_9_et_12_mois">Entre 9 et 12 mois</label>
								</div>
                    			<div>
									<input type="radio" id="plus_d_un_an" name="duration">
									<label for="plus_d_un_an">Plus d'un an</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionmois" name="duration" value="">
									<label for="aucune_selectionmois">Aucune sélection</label>
								</div>
                			</div>
            			</div>
            			<div class="option">
                			<input type="checkbox" id="remun" name="category">
                			<label for="remun"style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Rémunération :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="sans_remuneration" name="payment">
									<label for="sans_remuneration">Sans rémunération</label>
								</div>
                    			<div>
									<input type="radio" id="remuneration_forfaitaire" name="payment">
									<label for="remuneration_forfaitaire">Rémunération forfaitaire</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_200_mensuel" name="payment">
									<label for="minimum_200_mensuel">Au minimum 200€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_500_mensuel" name="payment">
									<label for="minimum_500_mensuel">Au minimum 500€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_1000_mensuel" name="payment">
									<label for="minimum_1000_mensuel">Au minimum 1000€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionprix" name="payment" value="">
									<label for="aucune_selectionprix">Aucune sélection</label>
								</div>
                			</div>
            			</div>
            			<div class="option">
    						<input type="checkbox" id="Promo" name="category">
                			<label for="Promo" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Promotions assignées :</label>
    						<div class="submenu">
        						<div>
									<input type="radio" id="CPI_A1" name="Promo">
									<label for="CPI_A1">CPI A1</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_INFO" name="Promo">
									<label for="CPI_A2_INFO">CPI A2 INFO</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_GENERALISTE" name="Promo">
									<label for="CPI_A2_GENERALISTE">CPI A2 GENERALISTE</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_BTP" name="Promo">
									<label for="CPI_A2_BTP">CPI A2 BTP</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_S3E" name="Promo">
									<label for="CPI_A2_S3E">CPI A2 S3E</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISE" name="Promo">
									<label for="CI_M1_INFO_FISE">CI M1 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISE" name="Promo">
									<label for="CI_M1_GENERALISTE_FISE">CI M1 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISE" name="Promo">
									<label for="CI_M1_BTP_FISE">CI M1 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISE" name="Promo">
									<label for="CI_M1_S3E_FISE">CI M1 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISA" name="Promo">
									<label for="CI_M1_INFO_FISA">CI M1 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISA" name="Promo">
									<label for="CI_M1_GENERALISTE_FISA">CI M1 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISA" name="Promo">
									<label for="CI_M1_BTP_FISA">CI M1 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISA" name="Promo">
									<label for="CI_M1_S3E_FISA">CI M1 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISE" name="Promo">
									<label for="CI_M2_INFO_FISE">CI M2 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISE" name="Promo">
									<label for="CI_M2_GENERALISTE_FISE">CI M2 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISE" name="Promo">
									<label for="CI_M2_BTP_FISE">CI M2 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_S3E_FISE" name="Promo">
									<label for="CI_M2_S3E_FISE">CI M2 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISA" name="Promo">
									<label for="CI_M2_INFO_FISA">CI M2 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISA" name="Promo">
									<label for="CI_M2_GENERALISTE_FISA">CI M2 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISA" name="Promo">
									<label for="CI_M2_BTP_FISA">CI M2 BTP FISA</label>
								</div>
       			 				<div>
									<input type="radio" id="CI_M2_S3E_FISA" name="Promo">
									<label for="CI_M2_S3E_FISA">CI M2 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISE" name="Promo">
									<label for="CI_M3_INFO_FISE">CI M3 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISE" name="Promo">
									<label for="CI_M3_GENERALISTE_FISE">CI M3 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISE" name="Promo">
									<label for="CI_M3_BTP_FISE">CI M3 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISE" name="Promo">
									<label for="CI_M3_S3E_FISE">CI M3 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISA" name="Promo">
									<label for="CI_M3_INFO_FISA">CI M3 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISA" name="Promo">
									<label for="CI_M3_GENERALISTE_FISA">CI M3 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISA" name="Promo">
									<label for="CI_M3_BTP_FISA">CI M3 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISA" name="Promo">
									<label for="CI_M3_S3E_FISA">CI M3 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_INFO" name="Promo">
									<label for="Diplome_ING_INFO">Diplômé ING INFO</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_GEN" name="Promo">
									<label for="Diplome_ING_GEN">Diplômé ING GEN</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_BTP" name="Promo">
									<label for="Diplome_ING_BTP">Diplômé ING BTP</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_S3E" name="Promo">
									<label for="Diplome_ING_S3E">Diplômé ING S3E</label>
								</div>
        						<div>
									<input type="radio" id="aucune_selectionpromo" name="Promo" value="">
									<label for="aucune_selectionpromo">Aucune sélection</label>
								</div>
    						</div>
						</div>
        			</div>      
    			</div>
			</div>
			<div class="bloc-droite-container">
				<div class="bloc-droite-high">
        			<div class="Nom_E">
    					<div class="input-group">
    						<div class="text-area-container">
        						<label for="Nom" id="Nom">Nom ?</label>
        						<textarea id="textarea_E" placeholder="Entreprises ?"></textarea>
    						</div>
   	 						<button type="submit">Aller !</button>
						</div>
    					<div class="input-group">
    						<div class="text-area-container">
        						<label for="Ou" id="ou">📍Où ?</label>
        						<textarea id="textarea_O" placeholder="Ville, Adresse, CP ?"></textarea>
    						</div>
   	 						<button type="submit">Aller !</button>
						</div>
					</div>
				</div>
				<div class="bloc-droitedroite-high">
    				<button type="submit" class="btn-rechercher" onclick="validation()">Rechercher</button>
				</div>
			</div>
			<div class="affichage">
    			<div class="affichage1">
        			<div class="logostage">
					</div>
    			</div>
    			<div class="conteneur-droite">
        			<div class="texte_affichage1">Nom de l'offre de stage 1</div>
        			<div class="presentation_affichage1">
   						<div class="texte-presentation">
							<p>Bienvenue sur notre plateforme de stage!</p>
							<p>Chez [Nom de votre entreprise], nous croyons au pouvoir de l'apprentissage pratique. C'est pourquoi nous offrons des opportunités de stage passionnantes pour les étudiants désireux d'acquérir une expérience précieuse dans leur domaine d'études.</p>
							<p>À propos de nous :</p>
							<p>[Nom de votre entreprise] est une entreprise innovante dans le domaine [industrie/domaine]. Nous nous engageons à fournir un environnement de travail dynamique où chaque membre de notre équipe a la possibilité de développer ses compétences et de contribuer à des projets stimulants.</p>
							<p>Pourquoi nous rejoindre en tant que stagiaire :</p>
							<p>En tant que stagiaire chez [Nom de votre entreprise], vous aurez l'opportunité de travailler aux côtés de professionnels expérimentés, d'acquérir une expérience pratique dans votre domaine d'intérêt et de participer à des projets impactants. Nous croyons en l'importance de l'apprentissage continu et nous nous engageons à vous fournir les ressources et le soutien nécessaires pour que vous puissiez réussir et développer votre carrière.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="affichage">
    			<div class="affichage1">
        			<div class="logostage">
					</div>
    			</div>
    			<div class="conteneur-droite">
        			<div class="texte_affichage1">Nom de l'offre de stage 2</div>
        			<div class="presentation_affichage1">
   						<div class="texte-presentation">
							<p>Bienvenue sur notre plateforme de stage!</p>
							<p>Chez [Nom de votre entreprise], nous croyons au pouvoir de l'apprentissage pratique. C'est pourquoi nous offrons des opportunités de stage passionnantes pour les étudiants désireux d'acquérir une expérience précieuse dans leur domaine d'études.</p>
							<p>À propos de nous :</p>
							<p>[Nom de votre entreprise] est une entreprise innovante dans le domaine [industrie/domaine]. Nous nous engageons à fournir un environnement de travail dynamique où chaque membre de notre équipe a la possibilité de développer ses compétences et de contribuer à des projets stimulants.</p>
							<p>Pourquoi nous rejoindre en tant que stagiaire :</p>
							<p>En tant que stagiaire chez [Nom de votre entreprise], vous aurez l'opportunité de travailler aux côtés de professionnels expérimentés, d'acquérir une expérience pratique dans votre domaine d'intérêt et de participer à des projets impactants. Nous croyons en l'importance de l'apprentissage continu et nous nous engageons à vous fournir les ressources et le soutien nécessaires pour que vous puissiez réussir et développer votre carrière.</p>
						</div>
					</div>
    			</div>
			</div>
			<div class="affichage">
    			<div class="affichage1">
        			<div class="logostage">
					</div>
    			</div>
    			<div class="conteneur-droite">
        			<div class="texte_affichage1">Nom de l'offre de stage 3</div>
        			<div class="presentation_affichage1">
   						<div class="texte-presentation">
							<p>Bienvenue sur notre plateforme de stage!</p>
							<p>Chez [Nom de votre entreprise], nous croyons au pouvoir de l'apprentissage pratique. C'est pourquoi nous offrons des opportunités de stage passionnantes pour les étudiants désireux d'acquérir une expérience précieuse dans leur domaine d'études.</p>
							<p>À propos de nous :</p>
							<p>[Nom de votre entreprise] est une entreprise innovante dans le domaine [industrie/domaine]. Nous nous engageons à fournir un environnement de travail dynamique où chaque membre de notre équipe a la possibilité de développer ses compétences et de contribuer à des projets stimulants.</p>
							<p>Pourquoi nous rejoindre en tant que stagiaire :</p>
							<p>En tant que stagiaire chez [Nom de votre entreprise], vous aurez l'opportunité de travailler aux côtés de professionnels expérimentés, d'acquérir une expérience pratique dans votre domaine d'intérêt et de participer à des projets impactants. Nous croyons en l'importance de l'apprentissage continu et nous nous engageons à vous fournir les ressources et le soutien nécessaires pour que vous puissiez réussir et développer votre carrière.</p>
						</div>
					</div>
    			</div>
			</div>
		</main>

		<?php echo '<script'; ?>
 src="Assets/JS/Accueil.js"><?php echo '</script'; ?>
>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<footer class="footerbasse">
			<div class="footer-container">
    			<footer class="leftfooter">
        			<label for="Navigation" id="navigation-label">Navigation :</label>
       			 	<p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
        			<nav class="navbarfooter">
            			<a href="#">Accueil </a>&nbsp;&nbsp;|&nbsp;&nbsp;
            			<a href="#">Entreprises </a>&nbsp;&nbsp;|&nbsp;&nbsp;
            			<a href="#">Offres </a>&nbsp;&nbsp;|&nbsp;&nbsp;
            			<a href="#">Pilotes / Etudiants </a>&nbsp;&nbsp;|&nbsp;&nbsp;
            			<a href="#">Liste de Souhait </a>  
        			</nav>
        			<p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
    			</footer>
				<footer class="rightfooter">
    				<label for="contacter" id="reseaux-label">Suivez-nous ! </label>
        			<div class="social-media">
            			<img src="Images/insta.png" alt="logo insta" class="logoinsta">
            			<p>@StageLink_Cesi</p>
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            			<img src="Images/ytb.png" alt="logo ytb" class="logoinsta">
            			<p>StageLinkCesi_yt</p>
        			</div>
        			<div class="social-media">
            			<img src="Images/gmail.png" alt="logo gmail" class="logoinsta">
            			<a href="https://www.instagram.com/">@StageLinkCesi </a>&nbsp;&nbsp;
           	 			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            			<img src="Images/linkedin1.png" alt="logo linkedin" class="logoinsta">
            			<p>StageCesi@link.com</p>
        			</div>
				</footer>
			</div>
			<footer class="basfooter">
    			<div class="social-media">
        			<img src="Images/logo.png" alt="logo Stage Cesi Link" class="logoCesi">
        			<label for="contacter" id="bas-label">&copy; 2024 - Stage Link Cesi</label>
    			</div>
    		</footer>
		</footer>
	</body>
</html><?php }
}