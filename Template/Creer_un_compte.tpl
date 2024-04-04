<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Créer un compte</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de création de compte.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>
	
	<header>
		{$header}
	</header><br><br>
	
	<body>
	<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
			<form method="POST">
				<fieldset>
						{if isset($sucess_cree)}
							{$sucess_cree}
						{/if}
						<br>
						
						
					<h1>Créer un compte</h1>
					<label>Nom</label><br><br>
					<input type="name" id="name" name="name" placeholder="Entrez votre nom" oninput="MAJ(this)" required><br><br>
					<label>Prénom</label><br><br>
					<input type="surname" id="surname" name="surname" placeholder="Entrez votre prénom" oninput="firstMAJ(this)" required><br><br>
					<label>Centre</label><br>
					<select name="Centre" id="center">
						<option value="Paris">Paris</option>
						<option value="Marseille">Marseille</option>
						<option value="Lyon">Lyon</option>
						<option value="Toulouse">Toulouse</option>
						<option value="Nice">Nice</option>
						<option value="Nantes">Nantes</option>
						<option value="Strasbourg">Strasbourg</option>
						<option value="Montpellier">Montpellier</option>
						<option value="Bordeaux">Bordeaux</option>
						<option value="Lille">Lille</option>
						<option value="Rennes">Rennes</option>
						<option value="Reims">Reims</option>
						<option value="Le Havre">Le Havre</option>
						<option value="Saint-Étienne">Saint-Étienne</option>
						<option value="Toulon">Toulon</option>
						<option value="Grenoble">Grenoble</option>
						<option value="Dijon">Dijon</option>
						<option value="Angers">Angers</option>
						<option value="Nîmes">Nîmes</option>
						<option value="Villeurbanne">Villeurbanne</option>
						<option value="Saint-Denis">Saint-Denis</option>
						<option value="Le Mans">Le Mans</option>
						<option value="Clermont-Ferrand">Clermont-Ferrand</option>
						<option value="Aix-en-Provence">Aix-en-Provence</option>
						<option value="Brest">Brest</option>
						<option value="Limoges">Limoges</option>
						<option value="Tours">Tours</option>
						<option value="Amiens">Amiens</option>
						<option value="Perpignan">Perpignan</option>
						<option value="Metz">Metz</option>
						<option value="Besançon">Besançon</option>
						<option value="Orléans">Orléans</option>
						<option value="Argenteuil">Argenteuil</option>
						<option value="Rouen">Rouen</option>
						<option value="Montreuil">Montreuil</option>
						<option value="Mulhouse">Mulhouse</option>
						<option value="Caen">Caen</option>
						<option value="Nancy">Nancy</option>
						<option value="Saint-Paul">Saint-Paul</option>
					</select><br><br>
					<label>Promotion</label><br>
					<select name="promo" id="promo">
						<option value="CPI A1">CPI A1</option>
						<option value="CPI A2 INFO">CPI A2 INFO</option>
						<option value="CPI A2 GENERALISTE">CPI A2 GENERALISTE</option>
						<option value="CPI A2 BTP">CPI A2 BTP</option>
						<option value="CPI A2 S3E">CPI A2 S3E</option>
						<option value="CI M1 INFO FISE">CI M1 INFO FISE</option>
						<option value="CI M1 GENERALISTE FISE">CI M1 GENERALISTE FISE</option>
						<option value="CI M1 BTP FISE">CI M1 BTP FISE</option>
						<option value="CI M1 S3E FISE">CI M1 S3E FISE</option>
						<option value="CI M1 INFO FISA">CI M1 INFO FISA</option>
						<option value="CI M1 GENERALISTE FISA">CI M1 GENERALISTE FISA</option>
						<option value="CI M1 BTP FISA">CI M1 BTP FISA</option>
						<option value="CI M1 S3E FISA">CI M1 S3E FISA</option>
						<option value="CI M2 INFO FISE">CI M2 INFO FISE</option>
						<option value="CI M2 GENERALISTE FISE">CI M2 GENERALISTE FISE</option>
						<option value="CI M2 BTP FISE">CI M2 BTP FISE</option>
						<option value="CI M2 S3E FISE">CI M2 S3E FISE</option>
						<option value="CI M2 INFO FISA">CI M2 INFO FISA</option>
						<option value="CI M2 GENERALISTE FISA">CI M2 GENERALISTE FISA</option>
						<option value="CI M2 BTP FISA">CI M2 BTP FISA</option>
						<option value="CI M2 S3E FISA">CI M2 S3E FISA</option>
						<option value="CI M3 INFO FISE">CI M3 INFO FISE</option>
						<option value="CI M3 GENERALISTE FISE">CI M3 GENERALISTE FISE</option>
						<option value="CI M3 BTP FISE">CI M3 BTP FISE</option>
						<option value="CI M3 S3E FISE">CI M3 S3E FISE</option>
						<option value="CI M3 INFO FISA">CI M3 INFO FISA</option>
						<option value="CI M3 GENERALISTE FISA">CI M3 GENERALISTE FISA</option>
						<option value="CI M3 BTP FISA">CI M3 BTP FISA</option>
						<option value="CI M3 S3E FISA">CI M3 S3E FISA</option>
						<option value="Diplômé ING INFO">Diplômé ING INFO</option>
						<option value="Diplômé ING GEN">Diplômé ING GEN</option>
						<option value="Diplômé ING BTP">Diplômé ING BTP</option>
						<option value="Diplômé ING S3E">Diplômé ING S3E</option>
					
					</select><br><br>
					<label>Type de compte</label><br>
					<select name="type" id="type">
						<option value="Etudiant">Etudiant</option>
						<option value="Pilote">Pilote</option>
						{if $compte_type == 'Admin'}
							<option value="3">Administrateur</option>
						{/if}
					</select><br><br>
					<label>Adresse mail</label><br><br>
					<input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required><br>
					<span id="emailMessage" class="TextRed"></span><br><br>
					<label>Mot de passe</label><br><br>
					<input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" oninput="verifierMotsDePasse()" required><br>
					<span id="MotDePasse" class="TextRed"></span><br><br>
					<label>Confirmation du mot de passe</label><br><br>
					<input type="password" id="confirmpassword" name="confirmpassword" oninput="verifierMotsDePasse()" placeholder="Confirmez votre mot de passe" required><br>
					<span id="confirmMDP" class="TextRed"></span><br><br>
					<table>
						<td>
							<input type="submit" name="créer_compte" value="Créer"><br><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					{if isset($erreur_cree)}
						<p>{$erreur_cree}</p>
					{/if}
					
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset>
		
			</form>
			<fieldset type="cadre">
				<p>Un mot de passe doit remplir les critères suivants :</p>
				<ul>
					<li>Il doit contenir au moins une lettre majuscule.</li>
					<li>Il doit contenir au moins un chiffre.</li>
					<li>Il doit contenir au moins un caractère spécial parmi @ $ ! % * ? &.</li>
					<li>Il doit avoir une longueur d'au moins huit caractères.</li>
				</ul>
				<p>Voici un exemple de mot de passe qui satisfait ces critères : <strong>Passw0rd!</strong></p>
			</fieldset>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/JS/Creer_compte.js"></script>
		<script src="Assets/JS/Connexion.js"></script>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>