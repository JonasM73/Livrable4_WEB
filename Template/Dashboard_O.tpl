<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Accueil</title>
		<link rel="stylesheet" type="text/css" href="Assets\CSS\style_site.css">
		<link rel="stylesheet" type="text/css" href="Assets\CSS\Accueil.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Dashboard Offres.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<header>
		{$header}
	</header><br><br>

	<body>
		<h1>Répartition des offres par compétences</h1>
		<canvas id="Chart_COM" width="400" height="400"></canvas>
		<h1>Répartition des offres par localité</h1>
		<canvas id="Chart_LOC" width="400" height="400"></canvas>
		<h1>Répartition des offres par promotions</h1>
		<canvas id="Chart_PRO" width="400" height="400"></canvas>
		<h1>Répartition des offres par durée de stage</h1>
		<canvas id="Chart_DUR" width="400" height="400"></canvas>
		<h1>Top des offres en WishList</h1>
		<canvas id="Chart_WIS" width="400" height="400"></canvas>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<script src="Assets/PWA/script.js"></script>
    </body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>