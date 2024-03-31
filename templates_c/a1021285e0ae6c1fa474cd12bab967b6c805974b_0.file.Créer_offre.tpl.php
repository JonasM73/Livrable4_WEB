<?php
/* Smarty version 4.3.2, created on 2024-03-30 20:15:01
  from 'C:\www\Livrable4_WEB\Template\Créer_offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660864b56b97b1_48173515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1021285e0ae6c1fa474cd12bab967b6c805974b' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Créer_offre.tpl',
      1 => 1711751836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660864b56b97b1_48173515 (Smarty_Internal_Template $_smarty_tpl) {
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
			<form id="creer_offre">
				<fieldset>
					<h1>Créer une offre</h1>
					<label>Nom de l'entreprise</label><br><br>
					<input type="text" id="enterprise" name="enterprise" placeholder="Entrez le nom d'entreprise" required><br><br>
					<label>Places disponibles</label><br><br>
					<input type="number" name="number" id="num_add" placeholder="Entrez le nombre de places" required min="1"><br><br>
					<label>Date de publication</label><br><br>
					<input type="date" id="date_input" name="date_input" required><br><br>
					<label>Date de début du stage</label><br><br>
					<input type="date" id="date_debut" name="date_debut" required><br><br>
					<label>Date de fin du stage</label><br><br>
					<input type="date" id="date_fin" name="date_fin" required><br><br>
					<label>Base de rémunération en euros</label><br><br>
					<input type="number" id="remuneration" name="remuneration" min="0" placeholder="Entrez la rémunération" required><br><br>

					<fieldset>
						<h3>Localisation de l'adresse</h3>
						<label>Code postal</label><br><br>
						<input name='CP' placeholder='CP' id='CP' oninput="fetchCities(this.value)" required><br>
						<span id='errorCP' class='error'></span><br><br>
						<label>Ville</label><br>
						<select name='ville' class='selecity' id='city'></select><br>
						<span id='error' class='error'></span><br><br>
						<label>Adresse</label><br><br>
						<input type='text' id='address' name='address' placeholder='Entrez votre adresse' oninput='validateAddress(this)' required><br>
						<span id='erroraddress' class='TextRed'></span><br><br>
					</fieldset><br><br>
					
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
				<fieldset>
				<h1>Compétences</h1>
				<label>Nombre de compétences requises</label><br><br>
				<input type="number" id="num_compétence" min="0" placeholder="Entrez le nombre de compétences" required><br><br>
				</fieldset><br><br>
				<fieldset>
				<h1>Promotions concernées</h1>
				</fieldset><br><br>
			</form>
		</main>
		<?php echo '<script'; ?>
 src="Assets/JS/Creer_entreprise.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="Assets/JS/Creer_offre.js"><?php echo '</script'; ?>
>
	</body>

	<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

</html><?php }
}
