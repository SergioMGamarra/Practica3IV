<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

class Comentario extends DataObject {

    public $datos = array(
        "usuario" => "",
        "atajoNoticia" => "",
        "fecha" => "",
        "cuerpo_comentario" => ""
    );



    public static function insertarComentario($usu, $atajo, $cuerpo) {
        $db = parent::conectar();
        $consulta = "INSERT INTO comentario(usuario, atajoNoticia, cuerpo_comentario) VALUES('$usu', '$atajo', '$cuerpo')";
        try {
            $st = $db->prepare($consulta);
            $st->execute();
            parent::desconectar($db);
        } catch (Exception $exc) {
            parent::desconectar($db);
            echo $exc->getTraceAsString();
        }
    }

}

?>
