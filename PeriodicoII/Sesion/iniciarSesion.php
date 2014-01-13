<!DOCTYPE html>
<html>
    <head>
        <title>News for Dummies</title>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="iniciarSesion.css"/>
        <link href='../img/icono.png' rel='shortcut icon' type='image/png'>
    </head>
    <body id="body">
        <section id="publicidadIzquierda">
            <a href="http://www.ideal.es/">
                <img src="../Portada/img/banner-izq.jpg"/>
            </a>
        </section>
        <section id="publicidadDerecha">
            <a href="http://www.ideal.es/">
                <img src="../Portada/img/banner-izq.jpg"/>
            </a>
        </section>
        <section id="seccionCentral">

            <a href="http://www.epic.net/">
                <img id="epic" src="../Portada/img/imagenEpic.jpg">
            </a>
            <section id="barraMenu">
                <section id="Etiquetas">
                    <ul>
                        <li class="etiqueta">
                            <small>Locales</small>
                            <a class="itemA" href="../Secciones/Nacional/nacional.html">
                                NACIONAL
                            </a>
                        <li class="etiqueta">
                            <small>Actualidad</small>
                            <a class="itemA" href="../Secciones/Mundiales/recientes.html">
                                MUNDIAL
                            </a>
                        </li>
                        <li class="etiqueta">
                            <small>Noticias</small>
                            <a class="itemA" href="../Secciones/Deportes/deportes.html">
                                DEPORTES
                            </a>
                        </li>
                        </li>
                        <li class="etiqueta">
                            <small>Ayudanos</small>
                            <a class="itemA" href="../Secciones/Contacto/contacto.html">
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                    <img id="banner" src="../Portada/img/banner.png"/>
                </section>
                <section id="SeccionInicio">
                    <form action="../DB/InicioSesion.php" method="POST">
                        <fieldset>
                            <section class="sectionInicioSesion">
                                <p class="inputInicioSesion">
                                    <label class="inputInicioSesion" for="username">Usuario</label>
                                    <input id="username" type="text" name="username" size="18" />
                                </p>
                                <p class="inputInicioSesion">
                                    <label class="inputInicioSesion" for="password">Contraseña</label>
                                    <input id="passwd" type="password" name="password" size="18"  />
                                </p>
                                <p class="inputInicioSesion">
                                    <input type="submit" name="Submit" class="button" value="Identificarse" />
                                </p>
                            </section>
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

