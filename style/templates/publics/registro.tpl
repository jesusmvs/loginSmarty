<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>

	<h1>Registro</h1>
	{if isset($error)}
		{$error}
	{/if}

	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user" required><br><br>
		<label>Email: </label><input type="email" name="email" required><br><br>
		<label>Pass: </label><input type="password" name="pw" required><br><br>
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrarme">
		
	</form>

</body>
</html>