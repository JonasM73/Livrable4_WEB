<?php
/* Smarty version 4.3.2, created on 2024-03-29 23:37:55
  from 'C:\www\Livrable4_WEB\Template\Creer_un_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660742c3632351_95666044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefc43192eafe51dc9d0e41048eb950ef32f15a6' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Creer_un_compte.tpl',
      1 => 1711751869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660742c3632351_95666044 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Créer un compte</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

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
		<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

	</body>
</html><?php }
}
