<?php

class Noticias extends DataObject {

    public $datos = array(
        "nombre" => "",
        "cuerpo" => "",
        "id" => "",
        "fecha" => ""
    );

    public static function obtenerNoticia($idNoticia) {
        $conexion = parent::conectar();
        $consulta = "SELECT * FROM" . TABLA_NOTICIA . "where id = :id";
        try {
            $st = $conexion->prepare($consulta);
            $st->bindValue(":id", $idNoticia, PDO::PARAM_INT);
            $st->execute();
            $noticia = $st->fetch();
            parent::desconectar($conexion);
            if ($noticia) {
                return new Noticias($noticia);
            }
        } catch (Exception $exc) {
            parent::desconectar($conexion);
            echo $exc->getTraceAsString();
        }
    }

    public static function obtenerNoticias() {
        $conexion = parent::conectar();
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM noticia ORDER BY id";
        try {
            $st = $conexion->prepare($sql);
            $st->execute();
            $noticias = array();
            foreach ($st->fetchAll() as $fila) {
                $noticias[] = new Noticias($fila);
            }
            $st = $conexion->query("SELECT found_rows() AS TotalFilas");
            $fila = $st->fetch();
            parent::desconectar($conexion);
            return array($noticias, $fila["TotalFilas"]);
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }

    public static function insertarNoticia($t, $c) {
        $db = parent::conectar();
        $consulta = "INSERT INTO noticia(nombre,cuerpo) VALUES('$t','$c')";
        try {
            $st = $db->prepare($consulta);
            $st->execute();
            parent::desconectar($db);
        } catch (Exception $exc) {
            parent::desconectar($db);
            echo $exc->getTraceAsString();
        }
    }

    public static function eliminarNoticia($identificador) {
        $conexion = parent::conectar();
        $sql = "DELETE FROM noticia WHERE id = '$identificador'";
        try {
            $st = $conexion->prepare($sql);
            $st->execute();
            parent::desconectar($conexion);
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallada: " . $e->getMessage());
        }
    }

}

?>
