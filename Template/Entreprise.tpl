
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
    				<div class="text-area-container">
        				<label for="Ou" id="ou">Où ?</label>
        				<textarea id="textarea_O" placeholder="Ville, Adresse, CP ?" name="Ou"></textarea>
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
							<input type="checkbox" id="SEC_AC" name="SEC_AC">
							<label for="SEC_AC" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Secteur d'activité :</label>
							&nbsp;
							<div class="submenu">
                    			<div>
									<input type="radio" id="Technologie" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Technologie">Technologie</label>
								</div>
								<div>
									<input type="radio" id="Finance" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Finance">Finance</label>
								</div>	
								<div>
									<input type="radio" id="Industrie" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Industrie">Industrie</label>
								</div>	
								<div>
									<input type="radio" id="Santé" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Santé">Santé</label>
								</div>	
								<div>
									<input type="radio" id="Éducation" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Éducation">Éducation</label>
								</div>	
								<div>
									<input type="radio" id="Commerce" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Commerce">Commerce</label>
								</div>	
								<div>
									<input type="radio" id="Immobilier" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Immobilier">Immobilier</label>
								</div>	
								<div>
									<input type="radio" id="Services" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Services">Services</label>
								</div>	
								<div>
									<input type="radio" id="Marketing" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Marketing">Marketing</label>
								</div>	
								<div>
									<input type="radio" id="Transport" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Transport">Transport</label>
								</div>
								<div>
									<input type="radio" id="Tourisme" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Tourisme">Tourisme</label>
								</div>
								<div>
									<input type="radio" id="Énergie" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Énergie">Énergie</label>
								</div>	
								<div>
									<input type="radio" id="Agroalimentaire" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Agroalimentaire">Agroalimentaire</label>
								</div>	
								<div>
									<input type="radio" id="Consulting" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Consulting">Consulting</label>
								</div>	
								<div>
									<input type="radio" id="Assurance" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Assurance">Assurance</label>
								</div>	
								<div>
									<input type="radio" id="Mode" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Mode">Mode</label>
								</div>	
								<div>
									<input type="radio" id="Artisanat" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Artisanat">Artisanat</label>
								</div>	
								<div>
									<input type="radio" id="Pharmaceutique" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Pharmaceutique">Pharmaceutique</label>
								</div>	
								<div>
									<input type="radio" id="Événementiel" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Événementiel">Événementiel</label>
								</div>
								<div>
									<input type="radio" id="Aucune_pref" name="Secteur_activite" onchange="updateCate(this)">
									<label for="Aucune_pref">Aucune préférence</label>
								</div>	
                			</div>
						</div>
						<input type="hidden" id="Secteur_titre" name="Secteur_titre" value="">

            			<div class="option">
                			<input type="checkbox" id="num_stagiaire" name="num_stagiaire">
                			<label for="num_stagiaire" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Stagiaire ayant postulé :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="AUCUN" name="AUCUN"  value="0" onchange="updateCate2(this)">
									<label for="AUCUN">Aucun</label>
								</div>
                    			<div>
									<input type="radio" id="Entre_1_et_5" name="AUCUN" value="1" onchange="updateCate2(this)">
									<label for="Entre_1_et_5">Entre 1 et 3</label>
								</div>
                   				<div>
									<input type="radio" id="Entre_5_et_10" name="AUCUN" value="5" onchange="updateCate2(this)">
									<label for="Entre_5_et_10">Entre 5 et 10</label>
								</div>
                    			<div>
									<input type="radio" id="Plus_de_10" name="AUCUN" value="10" onchange="updateCate2(this)">
									<label for="Plus_de_10">Plus de 10</label>
								</div>
								<div>
									<input type="radio" id="Aucunepref" name="AUCUN" value="20" onchange="updateCate2(this)">
									<label for="Aucunepref">Aucune préférence</label>
								</div>
                			</div>
            			</div>
						<input type="hidden" id="Postulant_titre" name="Postulant_titre" value="">

            			<div class="option">
                			<input type="checkbox" id="Note" name="Note">
                			<label for="Note" class="stylabel">&nbsp;&nbsp;&nbsp;&nbsp;Note :</label>
                			<div class="submenu">
                    			<div>
									<input type="radio" id="Entre_0_et_5" name="Note" value="0" onchange="updateCate3(this)">
									<label for="Entre_0_et_5">Entre 0 et 5</label>
								</div>
                    			<div>
									<input type="radio" id="Entre_5_et_10" name="Note" value="5" onchange="updateCate3(this)">
									<label for="Entre_5_et_10">Entre 5 et 10</label>
								</div>
                    			<div>
									<input type="radio" id="Entre_10_et_15" name="Note" value="10" onchange="updateCate3(this)">
									<label for="Entre_10_et_15">Entre 10 et 15</label>
								</div>
                    			<div>
									<input type="radio" id="Entre_15_et_20" name="Note" value="15" onchange="updateCate3(this)">
									<label for="Entre_15_et_20">Entre 15 et 20</label>
								</div>
								<div>
									<input type="radio" id="Aucune_prèf" name="Note" value="20" onchange="updateCate3(this)">
									<label for="Aucune_prèf">Aucune préférence</label>
								</div>
                			</div>
            			</div>
						<input type="hidden" id="note_titre" name="notes" value="">
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
									<button type="submit" class="btn-modifier" id="btnModifier" >Modifier</button>
									<button type="submit" name="supprimer_offre_{$offre->getid_offre()}" class="btn-supprimer">Supprimer</button>
									<button type="submit" name="Postuler_offre_{$offre->getid_offre()}" class="btn-invisible" >Invisibilité</button>
								{/if}
								{if $compte_type == 'Étudiant'}
									<button type="submit" class="btn-modifier" id="btnPostuler" >Postuler</button>
								{/if}
								</div>
						</div>
					{/foreach}
				{/if}
			</div>
		</form>
		</main>
		<script src='Assets/JS/Entreprise.js'></script>
		<script src="Assets/PWA/script.js"></script>
	</body>
	
	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>