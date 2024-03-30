<?php
/* Smarty version 4.3.2, created on 2024-03-30 12:56:29
  from 'C:\www\Livrable4_WEB\Template\Mon_Compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6607fdedeba990_64582021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac71b71ac40ebbce15be1c62e7b7641d1f839b5' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Mon_Compte.tpl',
      1 => 1711799787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6607fdedeba990_64582021 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Mon compte</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_mon_compte.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

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
		<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

	</body>
</html><?php }
}
