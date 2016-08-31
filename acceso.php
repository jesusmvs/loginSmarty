<?php 

session_start();

if (isset($_SESSION['user'])) {
	echo 'Bienvenido ', $_SESSION['user'];
	echo '<br><a href="salir.php">Cerrar Sesion</a>';
} else {
	session_start();
	session_destroy();
	header('location: index.php?error=acceso');
}



?>