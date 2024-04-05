<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Rechercher un compte étudiant</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/rechercher_etudiant.css">
		<link rel='manifest' href='Assets/PWA/manifest.json'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Page de recherche de compte étudiant.">
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
					<h1>Rechercher une compte entreprise</h1>
					<label>Nom</label><br><br>
					<input type="texte" id="nom" name="nom" placeholder="Entrez votre nom" oninput="MAJ(this)" ><br><br>
					<label>Secteur activité</label><br><br>
					<input type="texte" id="secteur" name="secteur" placeholder="Entrez votre secteur d'activité" oninput="firstMAJ(this)" ><br><br>
					<label>Ville</label><br><br>
					<input type="texte" id="ville" name="ville" placeholder="Entrez votre ville" oninput="firstMAJ(this)" ><br><br>
					<label>Code Postal</label><br><br>
					<input type="texte" id="CP" name="CP" placeholder="Entrez votre CP" oninput="firstMAJ(this)" ><br><br>
					<label>Adresse postal</label><br><br>
					<input type="texte" id="AP" name="AP" placeholder="Entrez votre AP" oninput="firstMAJ(this)" ><br><br>
					<br><br>
					<table>
						<td>
							<input type="submit" name="action" value="rechercher"><br><br>
						</td>
						<td>
							<input type="submit" value="Réinitialiser" onclick="resetForm()"><br><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset>
				<br>
				<table class="styled-table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Secteur activité</th>
							<th>Code Postal</th>
							<th>Adresse Postal</th>
							<th>Ville</th>
							<th>Note Moyene</th>

						</tr>
					</thead>
					<tbody>
						{foreach $entreprise as $user}
							<tr id = {$user->getID()}>
								<td>{$user->getNom()}</td>
								<td>{$user->getSecteurActivite()}</td>
								<td>{$user->getCP()}</td>
								<td>{$user->getAP()}</td>
								<td>{$user->getVille()}</td>
								<td>{$user->getnote_moyenne()}</td>
                                {if $compte_type == 'Admin'}
                                    <td><input type="submit" name="modif_{$user->getID()}" value="Modifier"><input type="submit" name="Invisible_{$user->getID()}"  value="Invisible"></td>
                                {/if}
                                {if $compte_type == 'Étudiant'}
                                    <td><input type="number" id="Note" name="Note_{$user->getID()}" placeholder="Entrez votre Note" oninput="firstMAJ(this)" ><br><br>
                                    <input type="submit" name="noter_{$user->getID()}" value="Noter"></td>
                                {/if}

							</tr>
						{/foreach}
					</tbody>
				</table>
			</form>
		</main>
		<button id="scrollToTop" title="Revenir en haut de la page">↑</button>
		<script src="Assets/PWA/script.js"></script>
	</body>

	<br><br>
	<footer>
		{$content_footer}
	</footer>
</html>