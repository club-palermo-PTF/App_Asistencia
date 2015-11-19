<?php
require ("../processes/Connect.php");
use Parse\ParseQuery;
use Parse\ParseException;

class DeleteManager {

    public function delete($obj) {

        if (empty($obj)) {
            die ("No hay asistentes para borrar.");
        }
       
        $con = new Connect();
        $var = $con->connect_to_db();

        $query = new ParseQuery("_User");
        $query->equalTo("username", $obj["username"]);
        $results = $query->find();

        try {
            
            $results[0]->destroy();
            echo 'El usuario fue borrado: ' . $results[0]->getObjectId();
        } catch (ParseException $ex) { 
            echo 'Fallo al borrar, mensaje de error: ' . $ex->getMessage();
        }
    }
}