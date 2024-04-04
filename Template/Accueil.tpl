<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Accueil</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/Accueil.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page d'accueil.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">

	<header>
		{$header}
	</header>

	<body >
		<main>
		<br>
		{if $compte}
			<p class="Utilisateur">Bienvenue {$compte}. Bonne recherche !</p>
		{/if}
		<form method="POST">
			<table>
				<td>
    				<div class="text-area-container">
        				<label for="Nom" id="Nom">Nom ?</label>
        				<textarea id="Entreprises" placeholder="Entreprises ?" name="Nom"></textarea>
    				</div>
				</td>
				<td>
				<div class="entrer">
    				<div class="text-area-container">
        				<label for="Ou" id="ou">Où ?</label>
        				<textarea id="textarea_O" placeholder="Ville, Adresse, CP ?" name="Ou"></textarea>
    				</div>
				</div>
				</td>
				<td>
					<div class="bloc-droite-high">
    					<button type="submit" class="btn-rechercher" name="Rechercher_offre" onclick="validation()">Rechercher</button>
					</div>
				</td>
			</table>
			<div class="bloc-gauche">
    			<div class="menu-container">
        			<div class="menu">
						<div class="option">
							<input type="checkbox" id="Compétence" name="Compétence">
							<label for="Compétence" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Compétences :</label>
							&nbsp;
							<div class="submenu">
								<div>
									<input type="radio" id="finance_et_banque" name="Compétence" value="Programmation" onchange="updateCate(this)">
									<label for="finance_et_banque">Programmation</label>
								</div>	
								<div>
									<input type="radio" id="ingenieur_informatique" name="Compétence" value="Développement web" onchange="updateCate(this)">
									<label for="ingenieur_informatique">Développement web</label>
								</div>
								<div>
									<input type="radio" id="marketing_et_publicite" name="Compétence" value="Base de données" onchange="updateCate(this)">
									<label for="marketing_et_publicite">Base de données</label>
								</div>
								<div>
									<input type="radio" id="ressources_humaines" name="Compétence" value="Analyse de données" onchange="updateCate(this)">
									<label for="ressources_humaines">Analyse de données</label>
								</div>
								<div>
									<input type="radio" id="agriculture" name="Compétence" value="Conception graphique" onchange="updateCate(this)">
									<label for="agriculture">Conception graphique</label>
								</div>
								<div>
									<input type="radio" id="immobilier" name="Compétence" value="Marketing digital" onchange="updateCate(this)">
									<label for="immobilier">Marketing digital</label>
								</div>
								<div>
									<input type="radio" id="aucune_selection" name="Compétence" value='' onchange="updateCate(this)" >
									<label for="aucune_selection">Aucune sélection</label>
								</div>
							</div>
						</div>
						<input type="hidden" id="Compétence_titre" name="Comp" value="">

            			<div class="option">
                			<input type="checkbox" id="durée_stage" name="durée_stage">
                			<label for="durée_stage" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Durée du Stage :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="moins d'un mois" name="durée_stage"  value="30" onchange="updateCate2(this)">
									<label for="moins d'un mois">Moins d'un mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_1_et_3_mois" name="durée_stage" value="30" onchange="updateCate2(this)">
									<label for="entre_1_et_3_mois">Entre 1 et 3 mois</label>
								</div>
                   				<div>
									<input type="radio" id="entre_3_et_6_mois" name="durée_stage" value="90" onchange="updateCate2(this)">
									<label for="entre_3_et_6_mois">Entre 3 et 6 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_6_et_9_mois" name="durée_stage" value="180" onchange="updateCate2(this)">
									<label for="entre_6_et_9_mois">Entre 6 et 9 mois</label>
								</div>
                    			<div>
									<input type="radio" id="entre_9_et_12_mois" name="durée_stage" value="270" onchange="updateCate2(this)">
									<label for="entre_9_et_12_mois">Entre 9 et 12 mois</label>
								</div>
                    			<div>
									<input type="radio" id="plus_d_un_an" name="durée_stage" value="365" onchange="updateCate2(this)">
									<label for="plus_d_un_an">Plus d'un an</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionmois" name="durée_stage" value="0" onchange="updateCate2(this)">
									<label for="aucune_selectionmois">Aucune sélection</label>
								</div>
                			</div>
            			</div>
						<input type="hidden" id="durée_stage_titre" name="durée" value="">

            			<div class="option">
                			<input type="checkbox" id="remuneration" name="remuneration">
                			<label for="remuneration" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Rémunération :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="sans remuneration" name="remuneration" value="0" onchange="updateCate3(this)">
									<label for="sans remuneration">Sans rémunération</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_200_mensuel" name="remuneration" value="200" onchange="updateCate3(this)">
									<label for="minimum_200_mensuel">Au minimum 200€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_500_mensuel" name="remuneration" value="500" onchange="updateCate3(this)">
									<label for="minimum_500_mensuel">Au minimum 500€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="minimum_1000_mensuel" name="remuneration" value="1000" onchange="updateCate3(this)">
									<label for="minimum_1000_mensuel">Au minimum 1000€ mensuelle</label>
								</div>
								<div>
									<input type="radio" id="Au_minimum_2000€_mensuelle" name="remuneration" value="2000" onchange="updateCate3(this)">
									<label for="remuneration_forfaitaire">Au minimum 2000€ mensuelle</label>
								</div>
                    			<div>
									<input type="radio" id="aucune_selectionprix" name="remuneration" value="0" onchange="updateCate3(this)">
									<label for="aucune_selectionprix">Aucune sélection</label>
								</div>
                			</div>
            			</div>
						<input type="hidden" id="remuneration_titre" name="remun" value="">


            			<div class="option">
    						<input type="checkbox" id="Promo" name="Promo">
                			<label for="Promo" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Promotions assignées :</label>
    						<div class="submenu">
        						<div>
									<input type="radio" id="CPI_A1" name="Promo" value="CPI A1" onchange="updateCate4(this)">
									<label for="CPI_A1">CPI A1</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_INFO" name="Promo" value="CPI A2 INFO" onchange="updateCate4(this)">
									<label for="CPI_A2_INFO">CPI A2 INFO</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_GENERALISTE" name="Promo" value="CPI A2 GENERALISTE" onchange="updateCate4(this)">
									<label for="CPI_A2_GENERALISTE">CPI A2 GENERALISTE</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_BTP" name="Promo" value="CPI A2 BTP" onchange="updateCate4(this)">
									<label for="CPI_A2_BTP">CPI A2 BTP</label>
								</div>
        						<div>
									<input type="radio" id="CPI_A2_S3E" name="Promo" value="CPI A2 S3E" onchange="updateCate4(this)">
									<label for="CPI_A2_S3E">CPI A2 S3E</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISE" name="Promo" value="CI M1 INFO FISE" onchange="updateCate4(this)">
									<label for="CI_M1_INFO_FISE">CI M1 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISE" name="Promo" value="CI M1 GENERALISTE FISE" onchange="updateCate4(this)">
									<label for="CI_M1_GENERALISTE_FISE">CI M1 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISE" name="Promo" value="CI M1 BTP FISE" onchange="updateCate4(this)">
									<label for="CI_M1_BTP_FISE">CI M1 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISE" name="Promo" value="CI M1 S3E FISE" onchange="updateCate4(this)">
									<label for="CI_M1_S3E_FISE">CI M1 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_INFO_FISA" name="Promo" value="CI M1 INFO FISA" onchange="updateCate4(this)">
									<label for="CI_M1_INFO_FISA">CI M1 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_GENERALISTE_FISA" name="Promo" value="CI M1 GENERALISTE FISA" onchange="updateCate4(this)">
									<label for="CI_M1_GENERALISTE_FISA">CI M1 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_BTP_FISA" name="Promo" value="CI M1 BTP FISA" onchange="updateCate4(this)">
									<label for="CI_M1_BTP_FISA">CI M1 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M1_S3E_FISA" name="Promo" value="CI M1 S3E FISA" onchange="updateCate4(this)">
									<label for="CI_M1_S3E_FISA">CI M1 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISE" name="Promo" value="CI M2 INFO FISE" onchange="updateCate4(this)">
									<label for="CI_M2_INFO_FISE">CI M2 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISE" name="Promo" value="CI M2 GENERALISTE FISE" onchange="updateCate4(this)">
									<label for="CI_M2_GENERALISTE_FISE">CI M2 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISE" name="Promo" value="CI M2 BTP FISE" onchange="updateCate4(this)">
									<label for="CI_M2_BTP_FISE">CI M2 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_S3E_FISE" name="Promo" value="CI M2 S3E FISE" onchange="updateCate4(this)">
									<label for="CI_M2_S3E_FISE">CI M2 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_INFO_FISA" name="Promo" value="CI M2 INFO FISA" onchange="updateCate4(this)">
									<label for="CI_M2_INFO_FISA">CI M2 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_GENERALISTE_FISA" name="Promo" value="CI M2 GENERALISTE FISA" onchange="updateCate4(this)">
									<label for="CI_M2_GENERALISTE_FISA">CI M2 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M2_BTP_FISA" name="Promo" value="CI M2 BTP FISA" onchange="updateCate4(this)">
									<label for="CI_M2_BTP_FISA">CI M2 BTP FISA</label>
								</div>
       			 				<div>
									<input type="radio" id="CI_M2_S3E_FISA" name="Promo" value="CI M2 S3E FISA" onchange="updateCate4(this)">
									<label for="CI_M2_S3E_FISA">CI M2 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISE" name="Promo" value="CI M3 INFO FISE" onchange="updateCate4(this)">
									<label for="CI_M3_INFO_FISE">CI M3 INFO FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISE" name="Promo" value="CI M3 GENERALISTE FISE" onchange="updateCate4(this)">
									<label for="CI_M3_GENERALISTE_FISE">CI M3 GENERALISTE FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISE" name="Promo" value="CI M3 BTP FISE" onchange="updateCate4(this)">
									<label for="CI_M3_BTP_FISE">CI M3 BTP FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISE" name="Promo" value="CI M3 S3E FISE" onchange="updateCate4(this)">
									<label for="CI_M3_S3E_FISE">CI M3 S3E FISE</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_INFO_FISA" name="Promo" value="CI M3 INFO FISA" onchange="updateCate4(this)">
									<label for="CI_M3_INFO_FISA">CI M3 INFO FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_GENERALISTE_FISA" name="Promo" value="CI M3 GENERALISTE FISA" onchange="updateCate4(this)">
									<label for="CI_M3_GENERALISTE_FISA">CI M3 GENERALISTE FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_BTP_FISA" name="Promo" value="CI M3 BTP FISA" onchange="updateCate4(this)">
									<label for="CI_M3_BTP_FISA">CI M3 BTP FISA</label>
								</div>
        						<div>
									<input type="radio" id="CI_M3_S3E_FISA" name="Promo" value="CI M3 S3E FISA" onchange="updateCate4(this)">
									<label for="CI_M3_S3E_FISA">CI M3 S3E FISA</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_INFO" name="Promo" value="Diplômé ING INFO" onchange="updateCate4(this)">
									<label for="Diplome_ING_INFO">Diplômé ING INFO</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_GEN" name="Promo" value="Diplômé ING GEN" onchange="updateCate4(this)">
									<label for="Diplome_ING_GEN">Diplômé ING GEN</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_BTP" name="Promo" value="Diplômé ING BTP" onchange="updateCate4(this)">
									<label for="Diplome_ING_BTP">Diplômé ING BTP</label>
								</div>
        						<div>
									<input type="radio" id="Diplome_ING_S3E" name="Promo" value="Diplômé ING S3E" onchange="updateCate4(this)">
									<label for="Diplome_ING_S3E">Diplômé ING S3E</label>
								</div>
        						<div>
									<input type="radio" id="aucune_selectionpromo" name="Promo" value="" onchange="updateCate4(this)">
									<label for="aucune_selectionpromo">Aucune sélection</label>
								</div>
    						</div>
						</div>
						<input type="hidden" id="promotion_titre" name="promotion_value" value="">

        			</div>      
    			</div>
			</div>
			<div class="divclasse">
				{if $offres}
					{foreach $offres as $offre}
						<div class="affichage" id_offre="{$offre->getid_offre()}">
							<div class="affichage1">
								<img src="Images/images.webp" alt="logo {$offre->getnom_entreprise()}">
							</div>
							<div class="conteneur-droite">
								<div class="texte_affichage1">{$offre->gettitre_offre_stage()}&nbsp;-&nbsp;{$offre->getnom_entreprise()}</div>
								<div class="presentation_affichage1">
									<div class="texte-presentation">
										<p>{$offre->getdescriptif_offres_stage()}</p>
									</div>  
								</div>
								<p><strong>Durée :</strong> {$offre->getStage_Date()} Semaines &nbsp;&nbsp;&nbsp; <strong>Rémunération : </strong>{$offre->getRemuneration()} €/mois &nbsp;&nbsp;&nbsp; 
								<strong>Places restantes : </strong>{$offre->getNB_places_restantes()}</p>
							</div>
							<div class="lolo">
								{if $compte_type == 'Admin'}
									<button type="submit" name="modifier_offre_{$offre->getid_offre()}" class="btn-modifier"  >Modifier</button>
									<button type="submit" name="supprimer_offre_{$offre->getid_offre()}" class="btn-supprimer">Supprimer</button>
								{/if}
								{if $compte_type == 'Étudiant'}
									<button type="button" class="btn-modifier" id="btnPostuler" onclick="window.location.href='index.php?page=Créer_Offre'">Postuler</button>
								{/if}
							</div>
						</div>
					{/foreach}
				{/if}
			</div>
		</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src='Assets/JS/Accueil.js'></script>
		<script src="Assets/PWA/script.js"></script>
	</body>
	
	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>