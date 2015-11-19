<?php
//solicitamos el archivo que contiene la clase LoginManager que loguea al usuario
require ("../processes/Connect.php");
//caragamos la clase ParseQuery
use Parse\ParseQuery;

class ToExcelManager {

	public function toExcel() {

		$con = new Connect();
        $var = $con->connect_to_db();

		//iniciamos una consulta para recibir todos los usuarios ausentes de la sede del mentor logueado
		$query = new ParseQuery("Asistencia");
		$query->limit(1000);
		$query->includeKey('Usuario_FK');
		$results = $query->find();

		$listado = array();

		for ($i = 0; $i < count($results); $i++) { 
		   	$object = $results[$i];
		   	$usuario = $object->get('Usuario_FK');
		   	$sede = $object->get('Sede');
		   
		   	$persona = array('Nombre' => $usuario->get("Nombre"), "Apellido" => $usuario->get("Apellido"), "Presente" => $object->get("Presente"));
		   	array_push($listado, $persona);
		}

		//"Fecha" => $object->get("fecha"),

		//definimos una función para ordenar el array con nuestros parámetros
		function custom_sort($a,$b) {
        	return $a['Nombre']>$b['Nombre'];
     	}

		//ordenamos el array
    	usort($listado, "custom_sort");

    	//transformamos a json
		//$json = json_encode($listado);
		
		//echo $json;
		$filename = "asistencia.csv";
		$delimiter=";";
	    header('Content-Type: application/csv');
	    header('Content-Disposition: attachment; filename="'.$filename.'";');

	    // open the "output" stream
	    // see http://www.php.net/manual/en/wrappers.php.php#refsect2-wrappers.php-unknown-unknown-unknown-descriptioq
	    $f = fopen('php://output', 'w');

	    foreach ($listado as $line) {
	        fputcsv($f, $line, $delimiter);
	    }

	}  
}

//TODO LO QUE SIGUE ES UNA QUERY PARA HACER A LA TABLA HISTORIAL ASISTENCIA.
//SE DEBE ARREGLAR LA FECHA (DATE-TIME) Y QUE MUESTRE SOLO LOS ALUMNOS DE LA SEDE DEL MENTOR QUE HACE LA CONSULTA

// $query = new ParseQuery("Historial_asistencia");
// 		$query->limit(1000);
// 		$query->includeKey('usuario');
// 		$query->includeKey('Sede');
// 		//$query->equalTo('Sede', array("__type" => "Pointer", "className" => "Sedes", "objectId" => $_SESSION['sede']));
// 		$results = $query->find();

// 		$listado = array();

// 		for ($i = 0; $i < count($results); $i++) { 
// 		   	$object = $results[$i];
// 		   	$usuario = $object->get('usuario');
// 		   	$sede = $object->get('Sede');
		   
// 		   	$persona = array('Nombre' => $usuario->get("Nombre"), "Apellido" => $usuario->get("Apellido"), "Presente" => $object->get("Presente"), "Sede" => $sede->get("Nombre_Sede"));
// 		   	array_push($listado, $persona);
// 		}

// 		//"Fecha" => $object->get("fecha"),

// 		//definimos una función para ordenar el array con nuestros parámetros
// 		function custom_sort($a,$b) {
//         	return $a['Nombre']>$b['Nombre'];
//      	}

// 		//ordenamos el array
//     	usort($listado, "custom_sort");

//     	//transformamos a json
// 		$json = json_encode($listado);
		
// 		//echo $json;
// 		$filename = "historial_asistencia.csv";
// 		$delimiter=";";
// 	    header('Content-Type: application/csv');
// 	    header('Content-Disposition: attachment; filename="'.$filename.'";');

// 	    // open the "output" stream
// 	    // see http://www.php.net/manual/en/wrappers.php.php#refsect2-wrappers.php-unknown-unknown-unknown-descriptioq
// 	    $f = fopen('php://output', 'w');

// 	    foreach ($listado as $line) {
// 	        fputcsv($f, $line, $delimiter);
// 	    }