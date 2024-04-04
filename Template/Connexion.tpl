<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Connexion</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/Connexion.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de connexion.">
		<link rel='apple-touch-icon' sizes='180x180' href='Images/icon-180x180.webp'/>
		<meta name='theme-color' content='#f3f3f3'>
	</head>

	<header>
		{$header}
	</header><br><br>

	<body>
		<img class="banière_1" src="Images/B.webp" alt="logo Stage Cesi Link">
		<main>
			<br><br>
			<form method="POST">
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
					{if $erreur}
						<p class='erreur_connexion'>{$erreur}</p>
					{/if}
					<span id="soumission" class="TextRed"></span><br><br>
					<hr class="horizontal">
					<p class="connectext">Vous n'avez pas encore de compte ? <a href="index.php?page=Creer_un_compte" class="link">Créez-en un !</a></p>
				</fieldset>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/JS/Connexion.js"></script>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>