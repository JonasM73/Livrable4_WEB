<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
        <link rel="stylesheet" href="Assets/CSS/Modifier_offre.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_entreprise.css">
		<link rel="stylesheet" href="Assets/CSS/style_postulation.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de postulation.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>
	<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">

	<body>

		<header>
		{$header}
		</header><br><br>
		
		<main>
		{if $compte}
	    	<p class="Utilisateur">Bienvenue {$compte}. POSTULER !</p>
	    {/if}
		{if $Bravo}
	    	{$Bravo}
	    {/if}
		<form method="POST" enctype="multipart/form-data">
            <div class="divclasse">
            {if $offre}
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
              
                    </div>
            {/if}
			</div>
				<fieldset>
					<h1>Postuler à une offre</h1>
					<label for="pdfFile">Déposez votre CV (PDF)</label><br><br>
					<div class="custom-file-upload">
						<input type="file" id="CV" name="CV" accept="application/pdf" required>
						<label for="CV" id="fileLabel">Choisir un fichier</label>
					</div>
					<span id="ErrorCV" class="TextRed"></span><br><br>
					<label for="LM">Lettre de motivation</label><br><br>
					<textarea id="LM" name="LM" placeholder="Ecrivez votre lettre de motivation ici." required></textarea><br><br>
					<hr class="horizontal_postul"><br>
					<input type="submit" name="Postuler_{$offre->getid_offre()}" value="Postuler"><br>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/JS/Postuler.js"></script>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>