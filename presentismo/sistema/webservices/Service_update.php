<?php
header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

switch($METHOD) {

    case 'POST':
        
        $json = file_get_contents('php://input');
        $obj = json_decode($json, true);

        require("UpdateManager.php");
        session_start();

        $usuarioautorizado = $_SESSION["userType"];

        if ($usuarioautorizado === "FLAdvaR13B" or $usuarioautorizado === "o8hdPDhJDE") {
        
            $updateManager = new UpdateManager();
            $updateManager ->update($obj);

        } else {
            die("No esta Autorizado, por favor abandone el sitio");    
        }
        
        break;

    default:
        header('HTTP/1.1 405 Method Not Allowed');
        header('Allow: GET, PUT, DELETE');
    break;
}