<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Statistiques étudiant</title>
		<link rel="stylesheet" href="../Assets/CSS/style_site.css">
		<link rel="stylesheet" href="../Assets/CSS/style_creer_compte.css">
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
			<form id="stats_etudiant">
				<fieldset>
					<h1>Statistiques étudiant</h1>
					<label>Nom</label><br><br>
					<input type="name" id="name" name="name" placeholder="Entrez votre nom" oninput="MAJ(this)" required><br><br>
					<label>Prénom</label><br><br>
					<input type="surname" id="surname" name="surname" placeholder="Entrez votre prénom" oninput="firstMAJ(this)" required><br><br>
					<label>Centre</label><br>
					<select name="Centre" id="center">
						<option value="def">Centre 1</option>
						<option value="2">Centre 2</option>
						<option value="3">Centre 3</option>
						<option value="4">Centre 4</option>
						<option value="5">Centre 5</option>
					</select><br><br>
					<label>Promotion(s)</label><br>
					<select name="Centre" id="center">
						<option value="def">Promotion 1</option>
						<option value="2">Promotion 2</option>
						<option value="3">Promotion 3</option>
						<option value="4">Promotion 4</option>
						<option value="5">Promotion 5</option>
					</select><br><br>
					<table>
						<td>
							<input type="submit" value="Rechercher"><br><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
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
            		<img src="../Images/insta.png" alt="logo insta" class="logoinsta">
            		<p>@StageLink_Cesi</p>
            		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            		<img src="../Images/ytb.png" alt="logo ytb" class="logoinsta">
           	 		<p>StageLinkCesi_yt</p>
        		</div>
        		<div class="social-media">
            		<img src="../Images/gmail.png" alt="logo gmail" class="logoinsta">
            		<p>@StageLinkCesi  </p>&nbsp;&nbsp;
            		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            		<img src="../Images/linkedin1.png" alt="logo linkedin" class="logoinsta">
            		<p>StageCesi@link.com</p>
        		</div>
			</footer>
		</div>
		<footer class="basfooter">
    		<div class="social-media">
        		<img src="../Images/logo.png" alt="logo Stage Cesi Link" class="logoCesi">
        		<label for="contacter" id="bas-label">&copy; 2024 - Stage Link Cesi</label>
    		</div>
    	</footer>
	</body>
</html>