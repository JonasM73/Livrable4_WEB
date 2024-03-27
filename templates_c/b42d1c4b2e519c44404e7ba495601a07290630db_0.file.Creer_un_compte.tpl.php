<?php
/* Smarty version 4.3.2, created on 2024-03-27 11:04:08
  from 'C:\xampp\htdocs\Livrable4_WEB\Template\Creer_un_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6603ef187a3086_56898816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b42d1c4b2e519c44404e7ba495601a07290630db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Livrable4_WEB\\Template\\Creer_un_compte.tpl',
      1 => 1711533846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603ef187a3086_56898816 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Créer un compte</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
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
			<form id="créer_compte">
				<fieldset>
					<h1>Créer un compte</h1>
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
					<label>Promotion</label><br>
					<select name="Centre" id="center">
						<option value="def">Promotion 1</option>
						<option value="2">Promotion 2</option>
						<option value="3">Promotion 3</option>
						<option value="4">Promotion 4</option>
						<option value="5">Promotion 5</option>
					</select><br><br>
					<label>Type de compte</label><br>
					<select name="Centre" id="center">
						<option value="def">Etudiant</option>
						<option value="2">Pilote</option>
						<option value="3">Administrateur</option>
					</select><br><br>
					<label>Adresse mail</label><br><br>
					<input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required><br>
					<span id="emailMessage" class="TextRed"></span><br><br>
					<label>Mot de passe</label><br><br>
					<input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" oninput="verifierMotsDePasse()" required><br>
					<span id="MotDePasse" class="TextRed"></span><br><br>
					<label>Confirmation du mot de passe</label><br><br>
					<input type="password" id="confirmpassword" name="confirmpassword" oninput="verifierMotsDePasse()" placeholder="Confirmez votre mot de passe" required><br>
					<span id="confirmMDP" class="TextRed"></span><br><br>
					<table>
						<td>
							<input type="submit" value="Créer"><br><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset>
			</form>
			<fieldset type="cadre">
				<p>Un mot de passe doit remplir les critères suivants :</p>
				<ul>
					<li>Il doit contenir au moins une lettre majuscule.</li>
					<li>Il doit contenir au moins un chiffre.</li>
					<li>Il doit contenir au moins un caractère spécial parmi @ $ ! % * ? &.</li>
					<li>Il doit avoir une longueur d'au moins huit caractères.</li>
				</ul>
				<p>Voici un exemple de mot de passe qui satisfait ces critères : <strong>Passw0rd!</strong></p>
			</fieldset>
		</main>

		<?php echo '<script'; ?>
 src="Assets/JS/Connexion.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="Assets/JS/Creer_compte.js"><?php echo '</script'; ?>
>
		<p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;~&nbsp;&nbsp;</p>
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
</html><?php }
}