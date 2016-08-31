<?php
/* Smarty version 3.1.30, created on 2016-08-30 22:23:11
  from "C:\wamp\www\PHP\PHPNvo\smartyphpoo\style\templates\publics\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c6074fb9c689_39159904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee642d0b46f157ffa916e621c0f63a6f5810273' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\PHPNvo\\smartyphpoo\\style\\templates\\publics\\index.tpl',
      1 => 1472592715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c6074fb9c689_39159904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
</head>
<body>

	<h1>Login</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user" required>
		<label>Pass: </label><input type="password" name="pw" required>
		<input type="hidden" name="login" value="1">
		<input type="submit" value="Iniciar Sesion"><br>
		<a href="index.php?modo=registro">Registrarme</a><br><br>
		<a href="index.php?modo=claveperdida">Recuperar Cuenta</a>
	</form>

</body>
</html><?php }
}
