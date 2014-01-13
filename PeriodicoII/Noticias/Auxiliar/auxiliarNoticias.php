<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once '../../DB/configuracion.php';
require_once '../../DB/DataObject.php';
require_once '../../DB/Comentario.php';

if ($_POST['comentario']) {
    session_start();
    $llaves = array_keys($_SESSION);
    $usuario = end($llaves);
    $usu = $_SESSION[$usuario];
    Comentario::insertarComentario($usu, $_POST['urlhiddendb'], $_POST['comentario']);
    header("Location:".$_POST[urlhidden]);
}
?>
