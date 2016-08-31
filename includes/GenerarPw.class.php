<?php 

class GenerarPw {
	private $cadena;
	private $longitud;
	private $pw;

	public function __construct(){
		$this->cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$this->pw = '';

	}

	public function nvoPw($long) {
		$longCadena = strlen($this->cadena);
		$this->longitud = $long;

		for ($i=1; $i <= $this->longitud ; $i++) { 
			$aleatorio = mt_rand(0, $longCadena-1);
			$this->pw .= substr($this->cadena, $aleatorio, 1);
		}

		return $this->pw;
	}
}

?>