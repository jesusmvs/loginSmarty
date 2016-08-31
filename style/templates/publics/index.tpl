<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
</head>
<body>

	<h1>Login</h1>
	{if isset($error)}
		{$error}
	{/if}

	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user" required>
		<label>Pass: </label><input type="password" name="pw" required>
		<input type="hidden" name="login" value="1">
		<input type="submit" value="Iniciar Sesion"><br>
		<a href="index.php?modo=registro">Registrarme</a><br><br>
		<a href="index.php?modo=claveperdida">Recuperar Cuenta</a>
	</form>

</body>
</html>