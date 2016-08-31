<?php
/* Smarty version 3.1.30, created on 2016-08-30 15:47:09
  from "C:\wamp\www\PHP\PHPNvo\smartyphpoo\style\templates\publics\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c5aa7d60df74_06370056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83fe8dfc0747dd43d970c605043be2b7d3b3da51' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\PHPNvo\\smartyphpoo\\style\\templates\\publics\\registro.tpl',
      1 => 1472572020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c5aa7d60df74_06370056 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>

	<h1>Registro</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user" required><br><br>
		<label>Email: </label><input type="email" name="email" required><br><br>
		<label>Pass: </label><input type="password" name="pw" required><br><br>
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrarme">
		
	</form>

</body>
</html><?php }
}
