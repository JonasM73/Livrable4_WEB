<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Wishlist</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
	</head>

	<header>
		{$header}
	</header><br><br>
	
	<body>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
			<form action="/search" method="get">
				<label for="search">Rechercher :</label><br>
				<input type="text" id="search" name="q" placeholder="Entrez votre recherche ici">
			</form>
		</main>
		<script src="Assets/JS/Connexion.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>