<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Statistiques étudiants</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/Stat_offre.css">

		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de statistiques étudiants.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	</head>
	<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">

	<header>
		{$header}
	</header><br><br>

	<body>
	
			<h1>Repartition des Etudiant :</h1>
			<form method="POST">
				<input type="submit" name="afficher_stat" class='btn_stat' value="Afficher les statitistiques de la répartition des Etudiant par promotions"><br><br>
				<input type="submit" name="afficher_stat" class='btn_stat' value="Afficher les statitistiques de la répartition des Etudiant par Centre"><br><br>
				<div>
					<canvas id="myChart"></canvas>
				</div>
			</form>
	
			<script src="Assets/PWA/script.js"></script>
			<script src="Assets/JS/Dash_Off.js"></script>
	
		</body>
		
	{$new}

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>