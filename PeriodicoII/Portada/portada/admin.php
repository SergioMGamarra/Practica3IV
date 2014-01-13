<!DOCTYPE html>
<html>
    <head>
        <title>News for Dummies - Administración de noticas</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="portada.css"/>
        <link href='../img/icono.png' rel='shortcut icon' type='image/png'>
    </head>
    <body id="body">
        <?php
        require_once '../../DB/configuracion.php';
        require_once '../../DB/DataObject.php';
        require_once '../../DB/Noticias.php';

        if (isset($_POST["inTitulo"]) && isset($_POST["inCuerpo"])) {
            Noticias::insertarNoticia($_POST["inTitulo"], $_POST["inCuerpo"]);
        }

        if (isset($_POST["Seleccionadas"])) {
            foreach ($_POST["Seleccionadas"] as $id) {
                Noticias::eliminarNoticia($id);
            }
        }
        ?>

        <section id="publicidadIzquierda">
            <a href="http://www.ideal.es/">
                <img src="../img/banner-izq.jpg"/>
            </a>
        </section>
        <section id="publicidadDerecha">
            <a href="http://www.ideal.es/">
                <img src="../img/banner-izq.jpg"/>
            </a>
        </section>
        <section id="seccionCentral">

            <a href="http://www.epic.net/">
                <img id="epic" src="../img/imagenEpic.jpg">
            </a>
            <section id="barraMenu">
                <section id="Etiquetas">
                    <a href="portada.php"><img id="banner" src="../img/banner.png"/></a>
                </section>
                <section id="SeccionInicio">
                    <form class="formDatos" action="admin.php" method="POST">
                        <fieldset>
                            <legend style="color: white"> Gestión de noticias de última hora </legend>
                            <section class="sectionform">
                                <?php
                                require_once '../../DB/Noticias.php';
                                require_once '../../DB/DataObject.php';
                                require_once '../../DB/configuracion.php';
                                $resultados = Noticias::obtenerNoticias();

                                foreach ($resultados[0] as $fila) {
                                    echo "<p style='color: white'>";
                                    $id = $fila->datos["id"];
                                    echo "<input type=\"checkbox\" value=\"$id\" name=\"Seleccionadas[]\">";
                                    echo $fila->datos["id"];
                                    echo " - ";
                                    echo $fila->datos["nombre"];
                                    echo " - ";
                                    echo $fila->datos["fecha"];
                                    echo "</p>";
                                }
                                ?>
                            </section>
                            <article class="botonEnviar"/>
                            <input  style="float: right" type="submit" name="Borrar" value="Eliminar noticias" />
                            </article>
                        </fieldset>
                    </form>
                    <br>
                    <form class="formDatos" action="admin.php" method="POST">
                        <fieldset>
                            <legend style="color: white">Inserción de noticias</legend>
                            <section class="sectionform">
                                <label class="inputInicioSesion">Titulo</label>
                                <article class="inputNoticias">
                                    <input type="text" name="inTitulo" size="40" />
                                </article>
                            </section>
                            <section class="sectionform">
                                <label class="inputInicioSesion">Cuerpo noticia</label>
                                <article class="inputNoticias">
                                    <textarea name="inCuerpo" cols="56" rows="10"></textarea>
                                </article>
                            </section>
                            <article class="botonEnviar"/>
                            <input style="float: right" type="submit" name="Submit" value="Enviar noticia" />
                            </article>
                        </fieldset>
                    </form>

                </section>
            </section>
        </section>
        <footer>
            <section id="footerIzquierda">
                <p class="tituloNoticiaFooter">Contacto</p>
                <p class="presentacionFooter"> Epic Agent S.L</p>
                <address class="presentacionFooter">
                    C/Cañaveral nº5
                    Granada
                </address>
                <p class="presentacionFooter">(958) 402030</p>
            </section>
            <section id="footerDerecha">
                <a href="../Formulario/formulario.html">
                    <img id="suscripcion" src="../Portada/img/suscripiciones.png"/>
                </a>
            </section>
        </footer>
    </body>
</html>

