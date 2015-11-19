<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'POST') {

 	//decodificamos la información recibida
 	$json = file_get_contents('php://input');
	$obj = json_decode($json, true);

	require('DeleteManager.php');
	
	$deleteManager = new DeleteManager();
	$deleteManager->delete($obj);
	
} else {

 	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: POST');

}