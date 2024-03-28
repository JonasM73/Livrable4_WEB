<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Mon compte</title>
		<link rel="stylesheet" href="Assets/CSS/style_mon_compte.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

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
			<form id="créer_compte">
				<fieldset>
					<h1>Mon compte</h1>
					<label>Nom</label><br><br>
					<input type="name" id="name" name="name" placeholder="" oninput="MAJ(this)" required><br><br>
					<label>Prénom</label><br><br>
					<input type="surname" id="surname" name="surname" placeholder="" oninput="firstMAJ(this)" required><br><br>
					<label>Centre</label><br>
					<input type="Centre" id="center" placeholder="" oninput="firstMAJ(this)" required><br><br>
					<label>Promotion(s)</label><br>
					<input type="Promotion" id="promotion" placeholder="" oninput="firstMAJ(this)" required><br><br>
					<label>Type de compte</label><br>
					<input name="Centre" id="center" placeholder="" oninput="firstMAJ(this)" required><br><br>
					<label>Adresse mail</label><br><br>
					<input type="email" id="email" name="email" placeholder="" required><br>
					<span id="emailMessage" class="TextRed"></span><br><br>
					<label>Mot de passe</label><br><br>
					<input type="password" id="password" name="password" placeholder="" oninput="verifierMotsDePasse()" required><br>
					<span id="MotDePasse" class="TextRed"></span><br><br>
				<table>
						<td>
							<input type="submit" value="Modifier"><br><br>
						</td>
						<td>
							<input type="button" value="Supprimer" onclick="resetForm()"><br><br>
						</td>
					</table>
				</fieldset>	
			</form>
		</main>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

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
            		<p>@StageLinkCesi  </p>&nbsp;&nbsp;
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
	</body>
</html>