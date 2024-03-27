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
			<form id="creer_offre">
				<fieldset>
					<h1>Créer une offre</h1>
					<label>Nom de l'entreprise</label><br><br>
					<input type="text" id="enterprise" name="enterprise" placeholder="Entrez le nom d'entreprise" required><br><br>
					<label>Places disponibles</label><br><br>
					<input type="number" name="number" id="num_add" placeholder="Entrez le nombre de places" required min="1"><br><br>
					<label>Date de publication</label><br><br>
					<input type="date" id="date_input" name="date_input" required><br><br>
					<label>Date de début du stage</label><br><br>
					<input type="date" id="date_debut" name="date_debut" required><br><br>
					<label>Date de fin du stage</label><br><br>
					<input type="date" id="date_fin" name="date_fin" required><br><br>
					<label>Base de rémunération en euros</label><br><br>
					<input type="number" id="remuneration" name="remuneration" min="0" placeholder="Entrez la rémunération" required><br><br>

					<fieldset>
						<h3>Localisation de l'adresse</h3>
						<label>Code postal</label><br><br>
						<input name='CP' placeholder='CP' id='CP' oninput="fetchCities(this.value)" required><br>
						<span id='errorCP' class='error'></span><br><br>
						<label>Ville</label><br>
						<select name='ville' class='selecity' id='city'></select><br>
						<span id='error' class='error'></span><br><br>
						<label>Adresse</label><br><br>
						<input type='text' id='address' name='address' placeholder='Entrez votre adresse' oninput='validateAddress(this)' required><br>
						<span id='erroraddress' class='TextRed'></span><br><br>
					</fieldset><br><br>
					
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
				<fieldset>
				<h1>Compétences</h1>
				<label>Nombre de compétences requises</label><br><br>
				<input type="number" id="num_compétence" min="0" placeholder="Entrez le nombre de compétences" required><br><br>
				</fieldset><br><br>
				<fieldset>
				<h1>Promotions concernées</h1>
				</fieldset><br><br>
			</form>
		</main>
		<script src="Assets/JS/Creer_entreprise.js"></script>
		<script src="Assets/JS/Creer_offre.js"></script>
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