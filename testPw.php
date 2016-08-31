<?php 

echo strlen('string');
echo '<br>';
echo substr("string", 0, 1);


$cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.,#*=+-_@%^&(){}[]~|/?!><';
$lg = strlen($cadena);
$pw = '';
$longitud = mt_rand(10,16);
echo 'la longitud de esta contrasena es: ', $longitud, '<br> Y la contrasena es: ';

for ($i=1; $i <= $longitud ; $i++) { 
	$aleatorio = mt_rand(0, $lg-1);
	$pw .= substr($cadena, $aleatorio,mt_rand(1,2));
}

echo $pw;



?>