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

		$turno = new ParseObject("Turnos", "vZFV0A9SH0", true);
		$user->set("Turno_FK", $turno);

		//comprobación del tipo de usuario ingresado
		if ($obj["tipo"] == "alumno") {

			$usuario = new ParseObject("Tipo_de_Usuario", "UgTuNHEQEZ", true);
			$user->set("TipoUsuario", $usuario);

		} else if ($obj["tipo"] == "mentor") {
			
			$usuario = new ParseObject("Tipo_de_Usuario", "FLAdvaR13B", true);
			$user->set("TipoUsuario", $usuario);

		} else {

			echo "Tipo de usuario ingresado no válido";

		}

		//comprobación de la sede asignada
		if ($obj["sede"] == "palermo") {

			$sede = new ParseObject("Sedes", "JNMeQHySaD", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "baldomero") {

			$sede = new ParseObject("Sedes", "7nXbEOqT20", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "cortazar") {

			$sede = new ParseObject("Sedes", "xuasyHhTez", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "usuaria") {

			$sede = new ParseObject("Sedes", "SPWDWNpNFX", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "cmd") {

			$sede = new ParseObject("Sedes", "0CQXZyBeai", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "accenture") {

			$sede = new ParseObject("Sedes", "laLuPbJAYT", true);
			$user->set("NombreSede_FK", $sede);	

		} else if ($obj["sede"] == "boca") {

			$sede = new ParseObject("Sedes", "aFhJvV7lHz", true);
			$user->set("NombreSede_FK", $sede);	

		} else {

			echo "Sede ingresada no válida";

		}
		
		try {
		  	$user->signUp();
		  	echo "Guardado exitoso";
		} catch (ParseException $ex) {
		  	// Show the error message somewhere and let the user try again.
		  	echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
		}
	}
}