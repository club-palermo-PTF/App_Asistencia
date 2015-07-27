<?php
//solicitamos el archivo que contiene la clase LoginManager que loguea al usuario
require('LoginManager.php');
//caragamos la clase ParseQuery
use Parse\ParseQuery;

class QueryManager {

	public function query() {

		//iniciamos una consulta para recibir todos los usuarios ausentes de la sede del mentor logueado
		$query = new ParseQuery("Asistencia");
		$query->equalTo('Sede', array("__type" => "Pointer", "className" => "Sedes", "objectId" => $_SESSION['sede']));
		$query->includeKey('Usuario_FK');	
		$results = $query->find();
		
		$listado = array();

		for ($i = 0; $i < count($results); $i++) { 
		   	$object = $results[$i];
		   	$usuario = $object->get('Usuario_FK');
		   
		   	$persona = array("ID" => $object->getObjectId(), 'Nombre' => $usuario->get("Nombre"), "Apellido" => $usuario->get("Apellido"), "Presente" => $object->get("Presente"));
		   	array_push($listado, $persona);
		}

		$json = json_encode($listado);
		echo $json;
	}
}