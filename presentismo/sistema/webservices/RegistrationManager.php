<?php

require("../processes/Connect.php");
use Parse\ParseUser;
use Parse\ParseObject;

class RegistrationManager {

	public function registration($obj) {

		$conn = new Connect();
		$var = $conn->connect_to_db();

		$user = new ParseUser();
		$user->set("username", $obj["email"]);
		$user->set("password", $obj["nombre"]);
		$user->set("Nombre", $obj["nombre"]);
		$user->set("Apellido", $obj["apellido"]);

		$usuario = new ParseObject("Tipo_de_Usuario", "UgTuNHEQEZ", true);
		$user->set("TipoUsuario", $usuario);

		$sede = new ParseObject("Sedes", "JNMeQHySaD", true);
		$user->set("NombreSede_FK", $sede);

		$turno = new ParseObject("Turnos", "vZFV0A9SH0", true);
		$user->set("Turno_FK", $turno);		

		try {
		  	$user->signUp();
		  	echo "Guardado exitoso";
		} catch (ParseException $ex) {
		  	// Show the error message somewhere and let the user try again.
		  	echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
		}
	}
}