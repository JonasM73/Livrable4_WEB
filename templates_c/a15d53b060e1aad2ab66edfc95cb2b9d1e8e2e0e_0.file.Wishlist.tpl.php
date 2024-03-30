<?php
/* Smarty version 4.3.2, created on 2024-03-29 23:42:05
  from 'C:\www\Livrable4_WEB\Template\Wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660743bdc73601_03523008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15d53b060e1aad2ab66edfc95cb2b9d1e8e2e0e' => 
    array (
      0 => 'C:\\www\\Livrable4_WEB\\Template\\Wishlist.tpl',
      1 => 1711752059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660743bdc73601_03523008 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>StageLinkCesi - Postuler à une offre</title>
		<link rel="stylesheet" href="Assets/CSS/style_site.css">
		<link rel="stylesheet" href="Assets/CSS/style_creer_compte.css">
	</head>
	
	<body>
	<img class="banière_1" src="Images/B.png" alt="logo Stage Cesi Link">

		<header>
		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

		</header><br><br>
		
		<main>
			<form action="/search" method="get">
				<label for="search">Rechercher :</label><br>
				<input type="text" id="search" name="q" placeholder="Entrez votre recherche ici">
			</form>
		</main>
		<?php echo '<script'; ?>
 src="Assets/JS/Connexion.js"><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['content_footer']->value;?>

	</body>
</html><?php }
}
