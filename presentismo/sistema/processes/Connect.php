<?php
//solicitamos el archivo que contiene la clase Config con los datos de la DB
require('Config.php');
//cargamos la clase ParseClient
use Parse\ParseClient;

class Connect {
	
	public function connect_to_db() {

		//almacenamos en variables los datos obtenidos desde la clase Config	
		$app_id = Config::appId;	
		$rest_key = Config::restKey;
		$master_key = Config::masterKey;
		//establecemos la conexión a la DB
		$connection = ParseClient::initialize($app_id, $rest_key, $master_key);
	}
}