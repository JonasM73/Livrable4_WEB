<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Inscrire mon entreprise</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_entreprise.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		{$header}
		</header><br><br>
		
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
					<table>
						<td>
							<input type="submit" value="Créer"><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
				<div id="addresses"></div>
			</form>
		</main>
		<script src="Assets/JS/Creer_entreprise.js"></script>
	</body>
	
	{$content_footer}
</html>