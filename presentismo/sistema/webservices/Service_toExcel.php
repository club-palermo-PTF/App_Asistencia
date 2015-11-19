<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'GET') {

 	require('ToExcelManager.php');
	
	$toExcelManager = new ToExcelManager();
	$toExcelManager->toExcel();
	
	
} else {

 	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: GET');

}