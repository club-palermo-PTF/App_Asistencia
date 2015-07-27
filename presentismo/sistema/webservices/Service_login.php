<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'POST') {

 	//decodificamos la información recibida desde el formulario de login	
 	$json = file_get_contents('php://input');
	$obj = json_decode($json, true);

	require('QueryManager.php');
	
	//logueamos al usuario	
	$loginManager = new LoginManager();
	$loginManager->login($obj);
		
	//según el tipo de usuario logueado, se realizan diferentes operaciones
	switch ($_SESSION["userType"]) {
		case 'UgTuNHEQEZ':
			die ("No tenés permisos para utilizar esta aplicación.");
			break;

		case 'o8hdPDhJDE':
			header("Location:Administrador.php");
			break;

		default:
			$queryManager = new QueryManager;
			$queryManager->query();
			break;
	}

} else {

 	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: POST');
}