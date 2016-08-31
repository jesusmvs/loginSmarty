<?php
/* Smarty version 3.1.30, created on 2016-08-30 04:10:15
  from "C:\wamp\www\PHP\PHPNvo\smartyphpoo\style\templates\publics\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c50727af0aa9_54926160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9eca5a0773094e9c19ec8c9c799ef7951349dd0' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\PHPNvo\\smartyphpoo\\style\\templates\\publics\\index.tpl',
      1 => 1472530207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c50727af0aa9_54926160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
</head>
<body>

	<h1>Login</h1>

	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user" required>
		<label>Pass: </label><input type="password" name="pw" required>
		<input type="hidden" name="login" value="1">
		<input type="submit" value="Iniciar Sesion">
	</form>

</body>
</html><?php }
}
