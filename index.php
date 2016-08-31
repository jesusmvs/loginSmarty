<?php 

include ('includes/libs/Smarty.class.php');
require('includes/Conexion.class.php');

$db = new Conexion();

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch ($modo) {
	case 'login':
		if (isset($_POST['login'])) {
			if (!empty($_POST['user']) or !empty($_POST['pw'])) {
				include('includes/Acceso.class.php');
				$login = new Acceso($_POST['user'], $_POST['pw'],'');
				$login->login();

			} else {
				header('location: index.php?error=campos_vacios');
			}
		} else {
			header('location: index.php');
		}
		break;
	case 'registro':

		if (isset($_POST['registro'])) {
			if (!empty($_POST['user']) and !empty($_POST['email']) and !empty($_POST['pw'])) {
				include('includes/Acceso.class.php');
				$registro = new Acceso($_POST['user'],$_POST['pw'],$_POST['email']);
				$registro->registro();
				
			} else {
				header('location: index.php?modo=registro&error=campos_vacios');
			}
		} else {
			if (isset($_GET['error'])) {
				$template = new Smarty();
				if ($_GET['error'] == 'campos_vacios') {
					$template->assign(array('error' => 'ERROR: Debes llenar todo los campos'));
				} else if ($_GET['error'] == 'usuario_usado') {
					$template->assign(array('error' => 'ERROR: Ya existe ese nombre de Usuario'));
				} else if ($_GET['error'] == 'email_usado') {
					$template->assign(array('error' => 'ERROR: Ese email pertenece a un usuario'));
				} else if ($_GET['error'] == 'email_user_usado') {
					$template->assign(array('error' => 'ERROR: Usuario y Email ya existen.<a href="index.php?modo=claveperdida"> Has olvidado tu cuenta?</a>'));
				} else {
					$template->assign(array('error' => 'ERROR'));
				}
				$template->display('publics/registro.tpl');
			} else {
				$template = new Smarty();
				$template->display('publics/registro.tpl');
			}
		}
		break;
	case 'claveperdida':
		if (isset($_POST['email'])) {
			if (!empty($_POST['email'])) {
				include('includes/Acceso.class.php');
				$recuperar = new Acceso('','',$_POST['email']);
				$recuperar->clavePerdida();
			} else {
				header('location: index.php?modo=claveperdida&error=campo_vacio');
			}

		} else {
			if (isset($_GET['error'])) {
				$template = new Smarty();
				if ($_GET['error'] == 'campo_vacio') {
					$template->assign(array('error' => 'ERROR: Debes colocar tu email'));
				} else if ($_GET['error'] == 'email_invalido') {
					$template->assign(array('error' => 'ERROR: Debes colocar un correo valido'));
				} else {
					$template->assign(array('error' => 'ERROR'));
				}
				$template->display('publics/claveperdida.tpl');
			} else if (isset($_GET['success'])) {
				$template = new Smarty();
				if ($_GET['success'] == 'ok') {
					$template->assign(array('error' => 'Contrase;a Restablecida y Enviada, Revisa tu bandeja de correo electronico'));
				} 
				$template->display('publics/claveperdida.tpl');
			} else {
				$template = new Smarty();
				$template->display('publics/claveperdida.tpl');
			}
			
			
		} 
		
		break;
	default:
		if (isset($_GET['error'])) {
			$template = new Smarty();
			if ($_GET['error'] == 'campos_vacios') {
				$template->assign(array('error' => 'ERROR: Debes llenar los campos'));
			} else if ($_GET['error'] == 'datos_incorrectos') {
				$template->assign(array('error' => 'ERROR: Datos Incorrectos'));
			} else if ($_GET['error'] == 'acceso') {
				$template->assign(array('error' => 'Sesion Caducada'));
			} 

			$template->display('publics/index.tpl');
		} else {
			$template = new Smarty();
			$template->display('publics/index.tpl');
		}
		
		
		break;
}

?>