<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

class usuario extends DataObject {

    public $datos = array(
        "nombre" => "",
        "primer_apellido" => "",
        "segundo_apellido" => "",
        "email" => "",
        "telefono" => "",
        "password" => "",
        "nombreUsuario" => "",
    );

    public static function obtenerUsuarios() {
        try {
            $db = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        $consulta = "SELECT * FROM usuario";
        $resultados = $db->query($consulta);
        return $resultados;
    }

    public static function obtenerUsuario($username) {
        $conexion = parent::conectar();
        $sql = "SELECT * FROM " . TABLA_USUARIO . " WHERE nombreUsuario = :username";
        try {
            $st = $conexion->prepare($sql);
            $st->bindValue(":username", $username, PDO::PARAM_STR);
            $st->execute();
            $fila = $st->fetch();
            parent::desconectar($conexion);
            if ($fila)
                return new Usuario($fila);
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallada: " . $e->getMessage());
        }
    }

    
    public static function insertarUsuario($nombreUsuario, $password, $nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $telefono, $email) {
        $db = parent::conectar();
        $consulta = "INSERT INTO usuario(nombreUsuario, password, nombre, primer_apellido, segundo_apellido, fecha_nacimiento, telefono, email) VALUES('$nombreUsuario', '$password', '$nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$telefono', '$email')";
        try {
            $st = $db->prepare($consulta);
            $st->execute();
            parent::desconectar($db);
        } catch (Exception $exc) {
            parent::desconectar($db);
            echo $exc->getTraceAsString();
        }
    }

    public static function login($nomUsuario, $passwd) {
        $consultasql = "SELECT * FROM 'usuario' WHERE 'nombreUsuario' = " . $nomUsuario . " AND `password` = " . $passwd . "";
        $conectar = mysql_connect(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
        mysql_selectdb('usuario', $conectar);
        $resultado = mysql_query($consultasql);

        if (mysql_num_rows($resultado) != 0) {
            session_start();
            $_SESSION['usuario'] = $nomUsuario;
            return true;
        }
        else
            return false;
    }

}

?>
