<?php

if (!isset($_POST)) {
    die();
}
session_start();

if (isset($_POST["cerrarSesion"])) {
    $userSaliente = $_POST["cerrarSesion"];
    unset($_SESSION["$userSaliente"]);
    header("Location: ../Portada/portada/portada.php");
}

if (isset($_POST["administracion"])) {
    header("Location: ../Portada/portada/admin.php");
}

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $userRecibido = $_POST["username"];
    $passRecibido = $_POST["password"];
    require_once './configuracion.php';
    require_once './DataObject.php';
    require_once './usuario.php';
    $usuario = usuario::obtenerUsuario($userRecibido);
    if ($usuario != "" && $usuario->datos["password"] == $passRecibido) {
        if ($userRecibido == "admin") {
            $_SESSION[$userRecibido] = $usuario->datos["nombre"];
            header("Location: ../Portada/portada/portada.php");
        } else if (!isset($_SESSION[$userRecibido])) {
            $_SESSION[$userRecibido] = $usuario->datos["nombre"];
            header("Location: ../Portada/portada/portada.php");
        }
    } else {
        header("Location: ../Sesion/iniciarSesion.php");
    }
}
?>
