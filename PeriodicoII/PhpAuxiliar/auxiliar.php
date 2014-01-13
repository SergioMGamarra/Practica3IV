<?php

class auxiliar {

    public static function InsertarIniciarSesion() {
        if (!isset($_SESSION['usuario'])) {
            echo '            
            <a style=" width: 85%; float: left; color: #C7A04A;" href="../../Sesion/iniciarSesion.php"> 
                <p style="float: right; /*border: #C7A04A solid thin*/; margin: auto auto auto auto;">Iniciar Sesion</p>
            </a>
            <a style=" width: 12%; float: right; color: #C7A04A; margin-left: 3%;" href="../../Formulario/formulariorRegistro.php "> 
                <p style="float: right; margin: auto auto auto auto;">Regístrate</p>
            </a>
            <br>';
        } else {
            $res = $_SESSION['usuario'];
            echo '
                <a style=" width: 100%; float: left; color: #C7A04A;"> 
                <p style = "float: right; color= #C7A04A; margin: auto auto auto auto;">Hola, ' . $res . '</p>
                </a>
            ';
        }
    }

    public static function insertarBienvenidaAdmin() {
        $llaves = array_keys($_SESSION);
        $usuario = end($llaves);
        echo "
            <p class='bienvenida'> Bienvenido, $_SESSION[$usuario] </p>
            <input hidden type = \"text\" name=\"cerrarSesion\" value=\"$usuario\"/>
            <form action=\"./admin.php\"> 
                <input type =\"submit\" id=\"botAdmin\" value = \"Administración\"/>
            </form>
            <form action=\"../../DB/InicioSesion.php\" method=\"POST\">
                <input hidden type = \"text\" name=\"cerrarSesion\" value=\"$usuario\"/>
                <input type =\"submit\" id=\"botCerrar\" value = \"Cerrar sesión\"/>
            </form>
   ";
    }

    public static function insertarBienvenida() {
        $llaves = array_keys($_SESSION);
        $usuario = end($llaves);
        echo "
            <p class='bienvenida'> Bienvenido, $_SESSION[$usuario] </p>
            <input hidden type = \"text\" name=\"cerrarSesion\" value=\"$usuario\"/>
            <form action=\"../../DB/InicioSesion.php\" method=\"POST\">
                <input hidden type = \"text\" name=\"cerrarSesion\" value=\"$usuario\"/>
                <input type =\"submit\" id=\"botCerrar\" value = \"Cerrar sesión\"/>
            </form>
   ";
    }

    public static function insertarComentarios($comentarios) {
        foreach ($comentarios as $fila) {
            echo '
            <article id = "comentarios">
            <p class = "Autorcomentario">Javier <article class = "fechaComentario"> 30/3/13 12:34 </article></p>
            <p class = "comentario">A mi no me parece adecuada para el cargo </p>
            </article>
            ';
        }
    }

}

?>
