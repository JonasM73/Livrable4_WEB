<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Dashboard entreprises</title>
		<link rel="stylesheet" type="text/css" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" type="text/css" href="Assets/CSS/Accueil.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Dashboard Entreprises.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'>
		<meta name='theme-color' content='#f3f3f3'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
	</head>

	

	<body>
		<header>
			{$header}
		</header><br><br>
		<h1>Répartition des entreprises par secteur d'activité</h1>
		<canvas id="Chart_SEC" width="400" height="400"></canvas>
		<h1>Répartition des entreprises par villes</h1>
		<canvas id="Chart_LOC" width="400" height="400"></canvas>
		<h1>Répartition des entreprises par secteur d'activité</h1>
		<canvas id="Chart_ANN" width="400" height="400"></canvas>
	    <button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<script src="Assets/PWA/script.js"></script>
		<script src="Assets/JS/Dash_Ent.js"></script>
		<br><br>
		<footer>
			{$content_footer}
		</footer>
    </body>
</html>