<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Statistiques étudiants</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		{$header}
		</header><br><br>
		
		<main>
		    <br><br>
		    <form id="stats_etudiant" action="Statistiques_etudiant.tpl" method="POST">
				<fieldset>
					<h1>Statistiques étudiant</h1>
					<label>Nom</label><br><br>
					<input type="texte" id="nom" name="nom" placeholder="Entrez votre nom" oninput="MAJ(this)" required><br><br>
					<label>Prénom</label><br><br>
					<input type="texte" id="prénom" name="prénom" placeholder="Entrez votre prénom" oninput="firstMAJ(this)" required><br><br>
					<label>Centre</label><br>
					<select name="Centre" id="centre">
						<option value="1">Centre 1</option>
						<option value="2">Centre 2</option>
						<option value="3">Centre 3</option>
						<option value="4">Centre 4</option>
						<option value="5">Centre 5</option>
					</select><br><br>
					<label>Promotion(s)</label><br>
					<select name="Centre" id="centre">
						<option value="1">Promotion 1</option>
						<option value="2">Promotion 2</option>
						<option value="3">Promotion 3</option>
						<option value="4">Promotion 4</option>
						<option value="5">Promotion 5</option>
					</select><br><br>
					<table>
						<td>
							<input type="envoyer" value="Rechercher"><br><br>
						</td>
						<td>
							<input type="bouton" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset>
			</form>
		</main>

		{$content_footer}
	</body>
</html>