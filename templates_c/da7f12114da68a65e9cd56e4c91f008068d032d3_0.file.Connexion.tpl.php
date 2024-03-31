<?php
/* Smarty version 4.3.2, created on 2024-03-31 17:33:22
  from 'C:\www\Livrable4_WEB\Template\Connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660982422cc5a9_51641482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7f12114da68a65e9cd56e4c91f008068d032d3' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Connexion.tpl',
      1 => 1711751750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660982422cc5a9_51641482 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Connexion</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

		</header><br><br>
		
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

		<?php echo '<script'; ?>
 src="Assets/JS/Connexion.js"><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

	</body>
</html><?php }
}
