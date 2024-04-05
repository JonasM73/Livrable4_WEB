<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Rechercher un compte pilote</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/rechercher_etudiant.css">

		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de recherche de compte.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<header>
		{$header}
	</header><br><br>

	<body>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
		    <br><br>
			<form method="POST">
				<fieldset>
					<h1>Rechercher un compte Pilotes</h1>
					<label>Nom</label><br><br>
					<input type="texte" id="nom" name="nom" placeholder="Entrez votre nom" oninput="MAJ(this)" required><br><br>
					<label>Prénom</label><br><br>
					<input type="texte" id="prénom" name="prénom" placeholder="Entrez votre prénom" oninput="firstMAJ(this)" required><br><br>
					<label>Centre</label><br>
					<select name="Centre" id="center">
						<option value="%">Aucune</option>
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
					<label>Promotion(s)</label><br>
					<select name="promo" id="promo">
						<option value="%">Aucune</option>
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
					<table>
						<td>
							<input type="submit" name="action" value="rechercher_pilote"><br><br>
						</td>
						<td>
							<input type="submit" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset>
				<br>
				<table class="styled-table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Ville</th>
							<th>Promotion</th>
						</tr>
					</thead>
					<tbody>
						{foreach $etudiant as $user}
							<tr>
								<td>{$user->getnom_utilisateur()}</td>
								<td>{$user->getprenom_utilisateur()}</td>
								<td>{$user->getutilisateur_ville()}</td>
								<td>{$user->getutilisateur_promotion()}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>