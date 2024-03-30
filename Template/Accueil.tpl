<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Accueil</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/Accueil.css">


	</head>

	<body action='Accueil.tpl' method='POST'>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
			{$header}
		</header>
		
		<main>
			<div class="bloc-gauche">
    			<div class="menu-container">
        			<div class="menu">
            			<div class="option">
                			<input type="checkbox" id="Compétence" name="Compétence">
                			<label for="Compétence" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Compétences :</label>
                			&nbsp;
                			<div class="submenu">
                    			<div>
									<input type="radio" id="finance_et_banque" name="Compétence" onchange="updateCate(this)">
									<label for="finance_et_banque">Finance et banque</label>
								</div>	
                    			<div>
									<input type="radio" id="ingenieur_informatique" name="Compétence" onchange="updateCate(this)">
									<label for="ingenieur_informatique">Ingénieur Informatique</label>
								</div>
                    			<div>
									<input type="radio" id="marketing_et_publicite" name="Compétence" onchange="updateCate(this)">
									<label for="marketing_et_publicite">Marketing et publicité</label>
								</div>
                    			<div>
									<input type="radio" id="ressources_humaines" name="Compétence" onchange="updateCate(this)">
									<label for="ressources_humaines">Ressources Humaines</label>
								</div>
                    			<div>
									<input type="radio" id="agriculture" name="Compétence" onchange="updateCate(this)">
									<label for="agriculture">Agriculture</label>
								</div>
                    			<div>
									<input type="radio" id="immobilier" name="Compétence" onchange="updateCate(this)">
									<label for="immobilier">Immobilier</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selection" name="Compétence" onchange="updateCate(this)" >
									<label for="aucune_selection">Aucune sélection</label>
								</div>
                			</div>
            			</div>
						<p id="catValue"></p>

            			<div class="option">
                			<input type="checkbox" id="durée_stage" name="durée_stage">
                			<label for="durée_stage"style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Durée du Stage :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="moins d'un mois" name="durée_stage" onchange="updateCate2(this)">
									<label for="moins d'un mois">Moins d'un mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_1_et_3_mois" name="durée_stage" onchange="updateCate2(this)">
									<label for="entre_1_et_3_mois">Entre 1 et 3 mois</label>
								</div>
                   				<div>
									<input type="radio" id="entre_3_et_6_mois" name="durée_stage" onchange="updateCate2(this)">
									<label for="entre_3_et_6_mois">Entre 3 et 6 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_6_et_9_mois" name="durée_stage" onchange="updateCate2(this)">
									<label for="entre_6_et_9_mois">Entre 6 et 9 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_9_et_12_mois" name="durée_stage" onchange="updateCate2(this)">
									<label for="entre_9_et_12_mois">Entre 9 et 12 mois</label>
								</div>
                    			<div>
									<input type="radio" id="plus_d_un_an" name="durée_stage" onchange="updateCate2(this)">
									<label for="plus_d_un_an">Plus d'un an</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionmois" name="durée_stage" value="">
									<label for="aucune_selectionmois">Aucune sélection</label>
								</div>
                			</div>
            			</div>
            			<div class="option">
                			<input type="checkbox" id="remuneration" name="remuneration">
                			<label for="remuneration"style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Rémunération :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="sans remuneration" name="remuneration" onchange="updateCate3(this)">
									<label for="sans remuneration">Sans rémunération</label>
								</div>
                    			<div>
									<input type="radio" id="remuneration_forfaitaire" name="remuneration" onchange="updateCate3(this)">
									<label for="remuneration_forfaitaire">Rémunération forfaitaire</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_200_mensuel" name="remuneration" onchange="updateCate3(this)">
									<label for="minimum_200_mensuel">Au minimum 200€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_500_mensuel" name="remuneration" onchange="updateCate3(this)">
									<label for="minimum_500_mensuel">Au minimum 500€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_1000_mensuel" name="remuneration" onchange="updateCate3(this)">
									<label for="minimum_1000_mensuel">Au minimum 1000€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionprix" name="remuneration" onchange="updateCate3(this)">
									<label for="aucune_selectionprix">Aucune sélection</label>
								</div>
                			</div>
            			</div>
            			<div class="option">
    						<input type="checkbox" id="Promo" name="Promo">
                			<label for="Promo" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Promotions assignées :</label>
    						<div class="submenu">
        						<div>
									<input type="radio" id="CPI_A1" name="Promo" onchange="updateCate4(this)">
									<label for="CPI_A1">CPI A1</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_INFO" name="Promo" onchange="updateCate4(this)">
									<label for="CPI_A2_INFO">CPI A2 INFO</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_GENERALISTE" name="Promo" onchange="updateCate4(this)">
									<label for="CPI_A2_GENERALISTE">CPI A2 GENERALISTE</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_BTP" name="Promo" onchange="updateCate4(this)">
									<label for="CPI_A2_BTP">CPI A2 BTP</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_S3E" name="Promo" onchange="updateCate4(this)">
									<label for="CPI_A2_S3E">CPI A2 S3E</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_INFO_FISE">CI M1 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_GENERALISTE_FISE">CI M1 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_BTP_FISE">CI M1 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_S3E_FISE">CI M1 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_INFO_FISA">CI M1 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_GENERALISTE_FISA">CI M1 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_BTP_FISA">CI M1 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M1_S3E_FISA">CI M1 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_INFO_FISE">CI M2 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_GENERALISTE_FISE">CI M2 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_BTP_FISE">CI M2 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_S3E_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_S3E_FISE">CI M2 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_INFO_FISA">CI M2 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_GENERALISTE_FISA">CI M2 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_BTP_FISA">CI M2 BTP FISA</label>
								</div>
       			 				<div>
									<input type="radio" id="CI_M2_S3E_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M2_S3E_FISA">CI M2 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_INFO_FISE">CI M3 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_GENERALISTE_FISE">CI M3 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_BTP_FISE">CI M3 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISE" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_S3E_FISE">CI M3 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_INFO_FISA">CI M3 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_GENERALISTE_FISA">CI M3 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_BTP_FISA">CI M3 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISA" name="Promo" onchange="updateCate4(this)">
									<label for="CI_M3_S3E_FISA">CI M3 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_INFO" name="Promo" onchange="updateCate4(this)">
									<label for="Diplome_ING_INFO">Diplômé ING INFO</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_GEN" name="Promo" onchange="updateCate4(this)">
									<label for="Diplome_ING_GEN">Diplômé ING GEN</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_BTP" name="Promo" onchange="updateCate4(this)">
									<label for="Diplome_ING_BTP">Diplômé ING BTP</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_S3E" name="Promo" onchange="updateCate4(this)">
									<label for="Diplome_ING_S3E">Diplômé ING S3E</label>
								</div>
        						<div>
									<input type="radio" id="aucune_selectionpromo" name="Promo"  onchange="updateCate4(this)">
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
        						<textarea id="Entreprises" placeholder="Entreprises ?" name="Nom"></textarea>
    						</div>
   	 						<button type="submit"  onclick="validation()">Aller !</button>
						</div>
    					<div class="input-group">
    						<div class="text-area-container">
        						<label for="Ou" id="ou">📍Où ?</label>
        						<textarea id="textarea_O" placeholder="Ville, Adresse, CP ?" name="Ou"></textarea>
    						</div>
   	 						<button type="submit"  onclick="validation()">Aller !</button>
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
		<script src='Assets/JS/Accueil.js'></script>
		{$content_footer}
	</body>
</html>