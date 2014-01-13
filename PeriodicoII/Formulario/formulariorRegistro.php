<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario suscripción - New for Dummies</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="formulario.css"/>
        <link href='../Portada/img/icono.png' rel='shortcut icon' type='image/png'>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
            $(function() {
                $("#Nacimiento").datepicker({dayNamesMin: ["Dom", "Lun", "Mar", "Mier", "Jue", "Vie", "Sab"], monthNamesShort: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    defaultDate: new Date(1995, 1 - 1, 1), dateFormat: "yy-mm-dd", yearRange: "1930:1996", changeYear: true, changeMonth: true, maxDate: new Date(1996, 1 - 1, 1)});

            });



            function validar_Nombre(nombre) {
                if (nombre.length == 0) {
                    alert("Rellene el nombre");
                    return false;
                }
                return true;
            }

            function validar_Apellido(apellido) {
                if (apellido.length == 0) {
                    alert("Rellene el apellido");
                    return false;
                }
                return true;
            }

            function validar_Email(email) {
                if (email.length == 0) {
                    alert("Rellene el campo Email");
                    return false;
                }
                var ERcorreo = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
                if (!(ERcorreo.test(email))) {
                    alert("El correo electronico no es correcto");
                    return false;
                }
                return true;
            }

            function validar_telefono(telefono) {
                if (!(telefono.length) == 0) {
                    var ERtelefono = /^[6]\d{8}$/;
                    if (!(ERtelefono.test(telefono))) {
                        alert("El numero introducido no es correcto");
                        return false;
                    }
                }
                return true;
            }

            function validar_contraseña(p1) {
                var ERpass = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;

                if (!(ERpass.test(p1))) {
                    alert("La contraseña debe tener 8 dígitos, al menos un caracter albético, otro númerico y no debe contener caracteres especiales");
                    return false;
                }

                return true;
            }

            function confirmarContraseña(p1, p2) {
                p1 = document.forms["form"].pass1.value;
                p2 = document.forms["form"].pass2.value;
                if (p1 != p2) {
                    alert("Las contraseñas no coinciden");
                    return false;
                }
                return true;
            }

            function UsuarioRepetido() {
                alert("El nombre de usuario ya esta en uso, por favor,elija otro");
            }

            function ValidaFormulario() {
                if (validar_Email(document.forms["form"].Email.value) && validar_telefono(document.forms["form"].Telefono.value)
                        && confirmarContraseña(document.forms["form"].pass1.value, document.forms["form"].pass2.value) && validar_contraseña(document.forms["form"].pass1.value)) {
                    return true;
                } else
                    return false;
            }

        </script>
    </head>

    <body id="body">
        <?php
        ini_set('display_errors', true);
        error_reporting(E_ALL);
        require_once '../DB/configuracion.php';
        require_once '../DB/DataObject.php';
        require_once '../DB/usuario.php';

        if ($_POST['Nombre'] && $_POST['Apellido1'] && $_POST['Nacimiento'] && $_POST['Email'] && $_POST['Usuario'] && $_POST['pass1']) {
            try {
                $db = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }

            $consulta = "SELECT * FROM usuario";
            $resultados = $db->query($consulta);
            foreach ($resultados as $fila) {
                if ($fila['nombreUsuario'] == $_POST['Usuario']) {
                    echo('<script language="JavaScript" type="text/javascript">UsuarioRepetido();</script>');
                    header('Location: formulario.html');
                }
            }
            usuario::insertarUsuario($_POST['Usuario'], $_POST['pass1'], $_POST['Nombre'], $_POST['Apellido1'], $_POST['Apellido2'], $_POST['Nacimiento'], $_POST['Telefono'], $_POST['Email']);
            header("Location: ../Sesion/iniciarSesion.php");
        }
        ?>
        <section id="publicidadIzquierda">
            <a href="http://www.nespresso.com/">
                <img src="../Portada/img/banner-izq.jpg"/>
            </a>
        </section>
        <section id="publicidadDerecha">
            <a href="http://www.nespresso.com/">
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
                        </li>
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
                        <li class="etiqueta">
                            <small>Ayudanos</small>
                            <a class="itemA" href="../Secciones/Contacto/contacto.html">
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                </section>
            </section>
            <section class="sectionBasico">
                <a href="../Portada/portada/portada.php">
                    <img id="banner" src="../Portada/img/banner.png"/>
                </a>
            </section>
            <section class="sectionBasico">
                <form method="POST" action="formulario.html" name="form" id="fieldsetForm" onsubmit="javascript:return ValidaFormulario()">
                    <fieldset id="fieldsetFor">
                        <legend class="tituloNoticia">Datos personales</legend>
                        <section class="divIzq"> 
                            <p class="input">Nombre* <input name="Nombre" type="text" placeholder="Nombre" required="true" onblur="validar_Nombre(this.value);"/></p>
                            <p class="input">Primer apellido* <input name="Apellido1" type="text" placeholder="Primer apellido" required="true" onblur="validar_Apellido(this.value);"/></p>
                            <p class="input">Segundo apellido <input name="Apellido2" type="text" placeholder="Segundo apellido"/></p>
                        </section>
                        <section class="divDer">
                            <p class="input">Fecha nac.* <input type="text" id="Nacimiento" name="Nacimiento" /></p>
                            <p class="input">Email* <input name="Email" type="email" placeholder="Email" required="true" onblur="validar_Email(this.value);"/></p>
                            <p class="input">Teléfono <input name="Telefono" type="tel" placeholder="Telefono" onblur="validar_telefono(this.value);"/></p>
                        </section>
                    </fieldset>
                    <fieldset>
                        <legend class="tituloNoticia"> DATOS DE USUARIO</legend>
                        <section class="divIzq"> 
                            <p class="input">Nombre usuario <input name="Usuario" placeholder="Usuario" required="true" class="InputUsuario"/></p>
                            <p class="input">contraseña <input name="pass1" placeholder="Contraseña" type="password" class="InputUsuario" required="true" onblur="validar_contraseña(this.value);"/></p>
                            <p class="input">Repita password <input name="pass2" placeholder="Contraseña" type="password" class="InputUsuario" required="true" onblur="confirmarContraseña(this.value);"/></p>
                        </section>
                        <article id="usuarioDer">

                        </article>
                    </fieldset>
                    <section id="boton">
                        <input type = "submit" id = "button1" value = "Procesar datos"/> 
                        <input type = "reset" id = "button2" value = "Reiniciar formulario" /> 
                    </section>
                </form>
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
                <!--section id="social-icons">
                    <a href="http://feeds.feedburner.com/YOUR_FEED_URL"><img src="../img/flickr.png" width="48" height="48" alt="RSS" /></a>
                    <a href="http://www.linkedin.com/in/YOUR_DISPLAY_NAME"><img src="../img/linkedin.png" width="48" height="48" alt="LinkedIn" /></a>
                    <a href="http://www.facebook.com/YOUR_FB_IDENTIFIER"><img src="../img/facebook.png" width="48" height="48" alt="Facebook" /></a>
                </section-->
            </section>
        </footer>
    </body>