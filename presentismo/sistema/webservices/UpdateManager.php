<?php
require ("../processes/Connect.php");
use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseException;

class UpdateManager {

    public function update($obj) {
        if (empty($obj)) {
            die ("No hay asistentes para Actualizar.");
        }
       
        $con = new Connect();
        $var = $con->connect_to_db();

        $date = new DateTime();
       
        $resultado = new ParseObject("Asistencia", $obj["IdUsuario"]);
        $resultado->set("Fecha", $date);
        $resultado->set("Presente", $obj["Presente"]);
              
        try{
            $resultado->save();       
            echo 'El objeto fue actualizado: ' . $resultado->getObjectId();
        } catch (ParseException $ex) { 
            echo 'Fallo al actualizar, mensaje de error: ' . $ex->getMessage();
        }
    }
}