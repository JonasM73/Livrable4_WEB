<?php
/* Smarty version 4.3.2, created on 2024-03-31 17:33:19
  from 'C:\www\Livrable4_WEB\Template\Rechercher_un_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6609823fc7cb77_84192160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5a673838993640d48e37323cd0338c31793a41' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Rechercher_un_compte.tpl',
      1 => 1711752022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6609823fc7cb77_84192160 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Rechercher un compte pilote</title>
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
					<h1>Rechercher un compte pilote</h1>
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
		
		<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

	</body>
</html><?php }
}
