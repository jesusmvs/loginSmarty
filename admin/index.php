<?php 

include ('../includes/libs/Smarty.class.php');

$template = new Smarty();
/*
 * Los siguientes 2 metodos se usan para poder 
 * darle la direccion correcta del template dependiendo
 * de la carpeta en donde se encuentra
 */
$template->addTemplateDir('../style/templates/publics');  //define el sirectorio del template correctamente al usar ../
$template->setCompileDir('../cache/'); //Se usa para definir donde se renderiza la cache OJO
$template->display('admin.tpl');

?>