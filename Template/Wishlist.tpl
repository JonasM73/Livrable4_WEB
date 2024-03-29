<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
	</head>
	
	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		{$header}
		</header><br><br>
		
		<main>
			<form action="/search" method="get">
				<label for="search">Rechercher :</label><br>
				<input type="text" id="search" name="q" placeholder="Entrez votre recherche ici">
			</form>
		</main>
		<script src="Assets/JS/Connexion.js"></script>
		{$content_footer}
	</body>
</html>