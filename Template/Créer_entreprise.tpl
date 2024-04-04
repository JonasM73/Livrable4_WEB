<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Inscrire mon entreprise</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_entreprise.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de création d'entreprise.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<body>
		<header>
			<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
			{$header}
			<br><br>
		</header>
		<main>
			<form id="créer_entreprise">
				<fieldset>
					<h1>Inscrire mon entreprise</h1>
					<label>Nom de l'entreprise</label><br><br>
					<input type="text" id="enterprise" name="enterprise" placeholder="Entrez le nom d'entreprise" required><br><br>
					<label>Secteur d'activité</label><br><br>
					<input type="text" id="sector" name="sector" placeholder="Entrez un secteur d'activité" required><br><br><br>
					<label>Nombre de centre de l'entreprise</label><br><br>
					<input type="number" name="number" placeholder="Entrez le nombre de centres" id="num_add" oninput="generateAddressFields(this.value)" required min="1"><br><br>
					<div id="addresses"></div>
					<table>
						<tr>
							<td>
								<input type="submit" value="Créer"><br>
							</td>
							<td>
								<input type="button" value="Réinitialiser" onclick="resetForm()"><br>
							</td>
						</tr>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<br><br>
		<footer>
			{$content_footer}
		</footer>
		<script src="Assets/JS/Creer_entreprise.js"></script>
		<script src="Assets/PWA/script.js"></script>
	</body>
</html>