<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'GET') {

 	require('LogoutManager.php');
	
	$logoutManager = new LogoutManager();
	$logoutManager->logout();

} else {

 	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: GET');
}