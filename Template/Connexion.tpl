<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Connexion</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
	</head>

	<header>
		{$header}
	</header><br><br>

	<body>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
			<br><br>
			<form id="connexion" action="Connexion.php" method="POST">
				<fieldset>
					<h1>LOGIN</h1>
					<label>Identifiant</label><br><br>
					<input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required><br>
					<span id="emailMessage" class="TextRed"></span><br><br>
					<label>Mot de passe</label><br><br>
					<input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required><br>
					<span id="MotDePasse" class="TextRed"></span><br><br>
					<a href="" class="linkMDP">Mot de passe oublié ?</a><br><br>
					<input type="submit" name="action" value="Connexion"><br>
					<span id="soumission" class="TextRed"></span><br><br>
					<hr class="horizontal">
					<p class="connectext">Vous n'avez pas encore de compte ? <a href="index.php?page=Creer_un_compte" class="link">Créez-en un !</a></p>
				</fieldset>
			</form>
		</main>
		<script src="Assets/JS/Connexion.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>