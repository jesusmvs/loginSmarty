<?php 

class Acceso {

	protected $user;
	protected $pw;
	protected $email;

	public function __construct($user, $pw, $email) {
		$mysqli = new Conexion();
		$this->user = $mysqli->real_escape_string(htmlspecialchars($user));
		$this->pw = $mysqli->real_escape_string(htmlspecialchars($pw));
		$this->email = $mysqli->real_escape_string(htmlspecialchars($email));
		$mysqli->close();

	}

	public function login (){
		/*
		 * A continuacion la forma basica de realizar el login
		 */

		/*
		 * Esta es la forma mas basica
		 * 
		 * $db = new Conexion();
		 * $sql = $db->query("SELECT nombreU, pwU FROM usuarios WHERE nombreU ='$this->user' and pwU='$this->pw';");
		 * $dato = $db->recorrer($sql);
		 * if (strtolower($dato['nombreU']) == strtolower($this->user) and $dato['pwU'] == $this->pw) {
		 * 	session_start();
		 * 	$_SESSION['user'] = $dato['nombreU'];
		 * 	//$_SESSION['PW'] = $dato['pwU'];
		 * 	header('location: acceso.php');
		 *  	
		 * } else {
		 * 	header('location: index.php?error=datos_incorrectos');
		 * } 
		 * 
		 */

		/* 
		 * Aca dejo una forma un poco mas avanzada para 
		 * hacer el login
		 */
		$db = new Conexion();
		$sql = $db->query("SELECT nombreU, pwU FROM usuarios WHERE nombreU ='$this->user' and pwU='$this->pw';");
		if ($db->rows($sql) > 0) {
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: acceso.php');
		 	
		} else {
			header('location: index.php?error=datos_incorrectos');
		} 

	}

	public function registro(){
		$db = new Conexion();
		$sql = $db->query("SELECT nombreU, email FROM usuarios where nombreU='$this->user' or email='$this->email'");
		$dato = $db->recorrer($sql);

		if ($db->rows($sql) == 0) {

			$db->query("INSERT INTO usuarios (nombreU, pwU, email) VALUES ('$this->user','$this->pw','$this->email')");

			session_start();
			$_SESSION['user'] = strtolower($this->user);
			header('location: acceso.php');
			
		} else if (strtolower($dato['nombreU']) == strtolower($this->user) and strtolower($dato['email']) != strtolower($this->email)) {
			header('location: index.php?modo=registro&error=usuario_usado');
		} else if (strtolower($dato['email']) == strtolower($this->email) and strtolower($dato['nombreU']) != strtolower($this->user)) {
			header('location: index.php?modo=registro&error=email_usado');
		} else if (strtolower($dato['email']) == strtolower($this->email) and strtolower($dato['nombreU']) == strtolower($this->user)) {
			header('location: index.php?modo=registro&error=email_user_usado');
		}

	}

	public function clavePerdida(){
		$db = new Conexion();
		$sql = $db->query("SELECT email FROM usuarios where email='$this->email'");
		if ($db->rows($sql) > 0) {
			include('includes/GenerarPw.class.php');
			$generar = new GenerarPw();
			$pass = $generar->nvoPw(11);
			$db->query("UPDATE usuarios SET pwU='$pass' WHERE email='$this->email';");
			mail($this->email, 'Recuperacion de Contrasena', "Segun lo requerido hemos actualizado tu contrasena a: $pass");
			header('location: index.php?modo=claveperdida&success=ok');
		} else {
			header('location: index.php?modo=claveperdida&error=email_invalido');
		}


	}
}


?>