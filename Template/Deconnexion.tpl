<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Deconnexion</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
        
		<link rel='manifest' href='Assets/PWA/manifest.json'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page d'accueil.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<body>
		<header>
			<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
			{$header}
		</header>
		<main>
		<br>
		<form class="deconnexion-container" method="POST">
            <h1>Attention vous etes sur le point de vous déconnecter</h1>
            <br>
            <button type="submit" name="logout" class="deconnexion-button">Déconnexion</button>
            <br><br>
            {$erreur_deco}
            <br>
            {$btn_connexion}
        </form>
		</main>
		<br><br>
		<footer>
			{$content_footer}
		</footer>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/PWA/script.js"></script>
	</body>
</html>