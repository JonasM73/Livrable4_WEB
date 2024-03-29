<?php
/* Smarty version 4.3.2, created on 2024-03-29 23:36:47
  from 'C:\www\Livrable4_WEB\Template\Créer_entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6607427fadc403_91384981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e7281391d1b6974bc43c3239dd18163be6d2ee6' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Créer_entreprise.tpl',
      1 => 1711751800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6607427fadc403_91384981 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Inscrire mon entreprise</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_entreprise.css">
	</head>

	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

		</header><br><br>
		
		<main>
			<form id="créer_entreprise">
				<fieldset>
					<h1>Inscrire mon entreprise</h1>
					<label>Nom de l'entreprise</label><br><br>
					<input type="text" id="enterprise" name="enterprise" placeholder="Entrez le nom d'entreprise" required><br><br>
					<label>Secteur d'activité</label><br><br>
					<input type="text" id="sector" name="sector" placeholder="Entrez un secteur d'activité" required><br><br><br>
					<label>Nombre de centre de l'entreprise</label><br><br>
					<input type="number" name="number" placeholder="Entrez le nombre de centres" id="num_add" oninput="generateAddressFields(this.value)" required min="1"><br><br>
					<table>
						<td>
							<input type="submit" value="Créer"><br>
						</td>
						<td>
							<input type="button" value="Réinitialiser" onclick="resetForm()"><br>
						</td>
					</table>
					<span id="soumission" class="TextRed"></span><br><br>
				</fieldset><br><br>
				<div id="addresses"></div>
			</form>
		</main>
		<?php echo '<script'; ?>
 src="Assets/JS/Creer_entreprise.js"><?php echo '</script'; ?>
>
	</body>
	
	<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

</html><?php }
}
