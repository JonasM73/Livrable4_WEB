<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_postulation.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de postulation.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<body>
	<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">

		<header>
		{$header}
		</header><br><br>
		
		<main>
			<form id="postuler">
				<fieldset>
					<h1>Postuler à une offre</h1>
					<label for="CV">Déposez votre CV (PDF)</label><br><br>
					<div class="custom-file-upload">
						<input type="file" id="CV" name="CV" accept="application/pdf" required>
						<label for="CV" id="fileLabel">Choisir un fichier</label>
					</div>
					<span id="ErrorCV" class="TextRed"></span><br><br>
					<label for="LM">Lettre de motivation</label><br><br>
					<textarea id="LM" name="LM" placeholder="Ecrivez votre lettre de motivation ici." required></textarea><br><br>
					<hr class="horizontal_postul"><br>
					<input type="submit" value="Postuler"><br>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/JS/Postuler.js"></script>
		<script src="Assets/PWA/script.js"></script>
		<br><br>
		<footer>
			{$content_footer}
		</footer>
		
        </body>

</html>