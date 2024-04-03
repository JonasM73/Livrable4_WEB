<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Créer une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_entreprise.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page d'accueil.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>
	
	<header>
		{$header}
	</header><br><br>

	<body>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
			<form id="creer_offre">
				<fieldset>
					<h1>Créer une offre</h1>
					<label>Nom de l'entreprise</label><br><br>
					<input type="text" id="enterprise" name="enterprise" placeholder="Entrez le nom d'entreprise" required><br><br>
					<label>Places disponibles</label><br><br>
					<input type="number" name="number" id="num_add" placeholder="Entrez le nombre de places" required min="1"><br><br>
					<label>Date de publication</label><br><br>
					<input type="date" id="date_input" name="date_input" required><br><br>
					<label>Date de début du stage</label><br><br>
					<input type="date" id="date_debut" name="date_debut" required><br><br>
					<label>Date de fin du stage</label><br><br>
					<input type="date" id="date_fin" name="date_fin" required><br><br>
					<label>Base de rémunération en euros</label><br><br>
					<input type="number" id="remuneration" name="remuneration" min="0" placeholder="Entrez la rémunération" required><br><br>

					<fieldset>
						<h3>Localisation de l'adresse</h3>
						<label>Code postal</label><br><br>
						<input name='CP' placeholder='CP' id='CP' oninput="fetchCities(this.value)" required><br>
						<span id='errorCP' class='error'></span><br><br>
						<label>Ville</label><br>
						<select name='ville' class='selecity' id='city'></select><br>
						<span id='error' class='error'></span><br><br>
						<label>Adresse</label><br><br>
						<input type='text' id='address' name='address' placeholder='Entrez votre adresse' oninput='validateAddress(this)' required><br>
						<span id='erroraddress' class='TextRed'></span><br><br>
					</fieldset><br><br>
					
					<table>
						<td>
							<input type="submit" value="Créer"><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
				<fieldset>
				<h1>Compétences</h1>
				<label>Nombre de compétences requises</label><br><br>
				<input type="number" id="num_compétence" min="0" placeholder="Entrez le nombre de compétences" required><br><br>
				</fieldset><br><br>
				<fieldset>
				<h1>Promotions concernées</h1>
				</fieldset><br><br>
			</form>
		</main>
		<script src="Assets/JS/Creer_entreprise.js"></script>
		<script src="Assets/JS/Creer_offre.js"></script>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>