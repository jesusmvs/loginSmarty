<?php
/* Smarty version 3.1.30, created on 2016-08-30 21:22:45
  from "C:\wamp\www\PHP\PHPNvo\smartyphpoo\style\templates\publics\claveperdida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c5f9253cc394_24317850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4675df63ff00b959d348acb27c9a26a7788bc197' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\PHPNvo\\smartyphpoo\\style\\templates\\publics\\claveperdida.tpl',
      1 => 1472589742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c5f9253cc394_24317850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recuperar Contraseña</title>
</head>
<body>

	<h1>Recuperar Contraseña</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email" required><br><br>
		<input type="submit" value="Recuperar Contraseña">
		
	</form>

</body>
</html><?php }
}
