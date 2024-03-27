<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="../Assets/CSS/style_site.css">
		<link rel="stylesheet" href="../Assets/CSS/style_postulation.css">
	</head>

	<body>
		<header>
			<img src="../Images/logo.png" alt="logo Stage Cesi Link" class="logo">
			<hr>
			<nav class="navbar">
				<div class="dropdown">
					<a href="../Accueil/Accueil.html">Accueil </a>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Entreprises </a>
				<div class="dropdown-content">
					<a href="#">Entreprises</a>
					<a href="../Entreprises/Créer_entreprise.html">Inscrire mon Entreprise</a>
					<a href="#">Dashboard Entreprise</a>
				</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Offres </a>
					<div class="dropdown-content">
						<a href="../Offres/Créer_offre.html">Créer mon offre </a>
						<a href="#">Dashboard offre</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Pilotes / Etudiants </a>
					<div class="dropdown-content">
						<a href="../Pilotes/Rechercher_un_compte.html">Rechercher un compte Pilote</a>
						<a href="../Etudiants/Rechercher_un_compte_etudiant.html">Rechercher un compte Etudiant</a>
						<a href="../Etudiants/Statistiques_etudiant.html">Dashboard Etudiant</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Liste de Souhait </a>
			</nav>
			<nav class="moncompte">
				<div class="dropdown">
					<a href="#">&nbsp;Mon&nbsp;Compte</a>
					<div class="dropdown-content">
						<a href="../Mon_compte/Connexion.html">S'identifier</a>
						<a href="../Mon_compte/Creer_un_compte.html">Créer un compte</a>
						<a href="#">Mon compte</a>
					</div>
				</div>
			</nav>
			<hr>
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
		<script src="../Assets/JS/Postuler.js"></script>
	</body>
</html>