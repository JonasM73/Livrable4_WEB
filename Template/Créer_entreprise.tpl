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
		<header>
			<img src="Images/logo.png" alt="logo Stage Cesi Link" class="logo">
			<hr>
			<nav class="navbar">
				<div class="dropdown">
					<a href="index.php?page=Accueil">Accueil </a>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Entreprises </a>
				<div class="dropdown-content">
					<a href="#">Entreprises</a>
					<a href="index.php?page=Créer_entreprise">Inscrire mon Entreprise</a>
					<a href="#">Dashboard Entreprise</a>
				</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Offres </a>
					<div class="dropdown-content">
						<a href="index.php?page=Créer_offre">Créer mon offre </a>
						<a href="#">Dashboard offre</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="dropdown">
					<a href="#">Pilotes / Etudiants </a>
					<div class="dropdown-content">
						<a href="index.php?page=Rechercher_un_compte">Rechercher un compte Pilote</a>
						<a href="index.php?page=Rechercher_un_compte_etudiant">Rechercher un compte Etudiant</a>
						<a href="index.php?page=Statistiques_etudiant">Dashboard Etudiant</a>
					</div>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="index.php?page=Wishlist">Liste de Souhait </a>
			</nav>
			<nav class="moncompte">
				<div class="dropdown">
					<a href="#">&nbsp;Mon&nbsp;Compte</a>
					<div class="dropdown-content">
						<a href="index.php?page=Connexion">S'identifier</a>
						<a href="index.php?page=Creer_un_compte">Créer un compte</a>
						<a href="#">Mon compte</a>
					</div>
				</div>
			</nav>
			<hr>
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
					<div id="addresses"></div>
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
			</form>
		</main>
		<script src="Assets/JS/Creer_entreprise.js"></script>
	</body>
	
	<div class="footer-container">
		<footer class="leftfooter">
			<label for="Navigation" id="navigation-label">Navigation :</label>
			<p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
			<nav class="navbarfooter">
				<a href="#">Accueil </a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Entreprises </a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Offres </a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Pilotes / Etudiants </a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Liste de Souhait </a>  
			</nav>
			<p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
		</footer>
		<footer class="rightfooter">
			<label for="contacter" id="reseaux-label">Suivez-nous ! </label>
			<div class="social-media">
				<img src="Images/insta.png" alt="logo insta" class="logoinsta">
				<p>@StageLink_Cesi</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				<img src="Images/ytb.png" alt="logo ytb" class="logoinsta">
				<p>StageLinkCesi_yt</p>
			</div>
			<div class="social-media">
				<img src="Images/gmail.png" alt="logo gmail" class="logoinsta">
				<a href="https://www.instagram.com/">@StageLinkCesi </a>&nbsp;&nbsp;
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				<img src="Images/linkedin1.png" alt="logo linkedin" class="logoinsta">
				<p>StageCesi@link.com</p>
			</div>
		</footer>
	</div>
	<footer class="basfooter">
		<div class="social-media">
			<img src="Images/logo.png" alt="logo Stage Cesi Link" class="logoCesi">
			<label for="contacter" id="bas-label">&copy; 2024 - Stage Link Cesi</label>
		</div>
	</footer>
</html>