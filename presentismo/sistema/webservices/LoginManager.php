<?php
//solicitamos el archivo que tiene la clase Connect para establecer la conexión
require("../processes/Connect.php");
//cargamos la clase ParseUser
use Parse\ParseUser;

class LoginManager {

	public function login($obj) {

		//si el objeto recibido desde el FrontEnd está vacío, se interrumpen los procesos
		if (empty($obj)) {
			die ("Falta completar alguno de los campos");
		}

		//instanciamos Connect y llamamos al método necesario para conectarnos a la DB
		$con = new Connect();
		$var = $con->connect_to_db();

		//logueamos al usuario con los datos recibidos desde FrontEnd
		$user = ParseUser::logIn($obj["username"], $obj["password"]);
		session_start();
		//almacenamos dentro de la variable global los datos que nos interesará utilizar luego en otros servicios
		$_SESSION["username"] = $user->get('username');
		$_SESSION["userType"] = $user->get('TipoUsuario')->getObjectId();
		$_SESSION["sede"] = $user->get('NombreSede_FK')->getObjectId();
	}
}