<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuxiliarComentario
 *
 * @author sergio
 */
class AuxiliarComentario {

    public static function insertarComentarioInput() {
        session_start();
        if (count($_SESSION)) {
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $urldb = $_SERVER['REQUEST_URI'];
            echo "
                <script language='JavaScript'>
                function maximaLongitud(texto,maxlong) {
                  var tecla, in_value, out_value;

                  if (texto.value.length > maxlong) {
                    alert('Has superado los caracteres permitidos');
                    in_value = texto.value;
                    out_value = in_value.substring(0,maxlong);
                    texto.value = out_value;
                    return false;
                  }
                  return true;
                }
                </script> 
                <section id = \"comentarios\">
                <p id = \"PresentacioComentarios\">Comentarios</p>
                <form action= ../Auxiliar/auxiliarNoticias.php method=POST>
                <p class = \"input\">Comentario: 
                    <textarea id = \"inputComentario\" name = \"comentario\" type = \"text\" required = \"true\" onKeyUp=\"return maximaLongitud(this,254)\"></textarea>
                </p>
                <input hidden type=\"text\" name=\"urlhidden\" value=\"$url\">
                <input hidden type=\"text\" name=\"urlhiddendb\" value=\"$urldb\">
                <section id = \"boton\">
                <input type = \"submit\" id = \"button1\" value = \"Enviar\"/>
                <input type = \"reset\" id = \"button2\" value = \"Borrar todo\" />
                </section>
                </form>
                </section>
                ";
        }
    }

    public static function insertarComentarios() {
        require_once '../../DB/configuracion.php';
        $url = $_SERVER['PHP_SELF'];
        try {
            $db = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        $consulta = "SELECT * FROM comentario WHERE atajoNoticia='$url'";
        $resultados = $db->query($consulta);
        foreach ($resultados as $fila) {
            echo '
                <article class = "comentarios">
                    <p class = "Autorcomentario">' . $fila['usuario'] . '<article class = "fechaComentario">' . $fila['fecha'] . '</article></p>
                    <p class = "comentario">' . $fila['cuerpo_comentario'] . '</p>
                </article>
                    ';
        }
    }

}

?>
