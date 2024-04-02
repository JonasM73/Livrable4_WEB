<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_postulation.css">
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
					<label for="pdfFile">Déposez votre CV (PDF)</label><br><br>
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
		<script src="Assets/JS/Postuler.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>