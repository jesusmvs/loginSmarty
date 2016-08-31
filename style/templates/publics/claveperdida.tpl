<!DOCTYPE html>
<html>
<head>
	<title>Recuperar Contraseña</title>
</head>
<body>

	<h1>Recuperar Contraseña</h1>
	{if isset($error)}
		{$error}
	{/if}

	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email" required><br><br>
		<input type="submit" value="Recuperar Contraseña">
		
	</form>

</body>
</html>