<!DOCTYPE html>
<html>
    <head>
        <title>News for Dummies</title>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="portada.css"/>
        <link href='../img/icono.png' rel='shortcut icon' type='image/png'>
    </head>
    <body id="body">
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
            <?php
            require_once '../../PhpAuxiliar/auxiliar.php';
            session_start();
            if (count($_SESSION) == 0) {
                auxiliar::InsertarIniciarSesion();
            } else {
                if ($_SESSION["admin"]) {
                    auxiliar::insertarBienvenidaAdmin();
                } else {
                    auxiliar::insertarBienvenida();
                }
            }
            ?>
            <img id="epic" src="../img/imagenEpic.jpg">
            </a>
            <section id="barraMenu">
                <section id="Etiquetas">
                    <ul>
                        <li class="etiqueta">
                            <small>Locales</small>
                            <a class="itemA" href="../../Secciones/Nacional/nacional.html">
                                NACIONAL
                            </a>
                        <li class="etiqueta">
                            <small>Actualidad</small>
                            <a class="itemA" href="../../Secciones/Mundiales/recientes.html">
                                MUNDIAL
                            </a>
                        </li>
                        <li class="etiqueta">
                            <small>Noticias</small>
                            <a class="itemA" href="../../Secciones/Deportes/deportes.html">
                                DEPORTES
                            </a>
                        </li>
                        </li>
                        <li class="etiqueta">
                            <small>Ayudanos</small>
                            <a class="itemA" href="../../Secciones/Contacto/contacto.html">
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                    <img id="banner" src="../img/banner.png"/>
                </section>
                <section id="seccionIzquierda">
                    <section class="articulo">
                        <p class="presentacion">Escandalo PP</p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/Juez_Ruz_imputa_donantes_PP.php">
                            <p class="tituloNoticia">El juez Ruz imputa a los empresarios 'donantes' del PP</p>
                        </a>
                        <p class="cuerpoNoticia">   El juez de la Audiencia Nacional Pablo Ruz, instructor del ‘caso papeles de Barcenas ha imputado a nueve de los empresarios que aparecen como supuestos donantes del PP en los asientos contables que se atribuyen al extesorero del PP.</p>
                        <img src="../img/luisderivero.JPG"/>
                    </section>                   
                    <section class="articulo">
                        <p class="presentacion">Italia</p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/napolitano_acepta_presidente_italia.php">
                            <p class="tituloNoticia">Napolitano acepta ser reelegido como presidente de Italia</p>
                        </a>
                        <p class="cuerpoNoticia">El actual presidente de la República aceptó la petición que le hicieron los partidos para intentar salir de la parálisis política en la que se encuentran.</p>
                        <img src="../img/Napolitano.jpg"/>
                    </section>                    
                    <section class="articulo">
                        <p class="presentacion">Atentado de Boston</p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/padre_atentado_boston_trampa.php">
                            <p class="tituloNoticia">El padre de los dos sospechosos del atentado de Boston: "A mis hijos les han tendido una trampa"</p>
                        </a>
                        <p class="cuerpoNoticia">Zubeidat Tsarnaeva defiende a sus hijos, los hermanos Tsarnaev, de su implicación en lo ocurrido. Asegura que Dzhokhar le habría contado la verdad "si su hermano hubiese sido un líder extremista".</p>
                        <img src="../img/padreTerroristas.jpg"/>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> Crisis </p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/patrimonio_aflorado_amnistia_fiscal_solo_250_millones.php">
                            <p class="tituloNoticia">La amnistía fiscal sólo permitirá recaudar 250 millones este año</p>
                        </a>
                        <p class="cuerpoNoticia">El importe aflorado alcanzó los 40.000 millones de euros. El Gobierno ha enviado a Bruselas el Programa Nacional de Reformas 2013. La amnistía fiscal permitió recaudar 1.200 millones de euros.</p>
                        <img src="../img/montoro.jpg"/>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> Alemania </p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/Ministro_Educacion_aleman_tira_ordenadores_virus.php">
                            <p class="tituloNoticia">El Ministerio de Educación alemán tira a la basura 190.000€ en ordenadores porque tenían virus</p>
                        </a>
                        <p class="cuerpoNoticia">Al parecer los equipos pertenecientes a un instituto de la localidad de Schweri presentaban tal nivel de proliferación de virus informáticos que no solo hacían inmanejables los ordenadores sino que resultaba prácticamente imposible proceder a una desinfección. O por puntualizar, podía llevarse a cabo pero a cambio de una importante cantidad. Se encargó a una empresa especializada un estudio y cifró el coste en 130.000€.</p>
                    </section>
                </section>
                <section id="seccionDerecha">  
                    <!--section class="articulo">
                        <p class="presentacion"> Siria </p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/al_menos_13_muertos_70_heridos_atentado_damasco.html">
                            <p class="tituloNoticia">Al menos 13 muertos y 70 heridos en un atentado en Damasco</p>
                        </a>
                        <p class="cuerpoNoticia">Un coche bomba hace explosión en la plaza de Al Marya, en pleno centro histórico de la capital siria.</p>
                        <img src="../img/atentadoDamasco.jpg"/>
                    </section-->
                    <section class="articulo">
                        <p class="presentacionII"> Noticias Ultima hora </p>   

                        <section id="noticiasUltimaHora">
                            <?php
                            require_once '../../DB/configuracion.php';
                            try {
                                $db = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
                            } catch (Exception $exc) {
                                echo $exc->getTraceAsString();
                            }

                            $consulta = "SELECT * FROM noticia ORDER BY id DESC";
                            $resultados = $db->query($consulta);
                            foreach ($resultados as $fila) {
                                echo '
                                    <section class="articuloScroll">
                                    <p class="tituloNoticiaScroll">' . $fila['nombre'] . '</p>
                                    <p class="fechaUltimaHora">' . date('d/m/Y', strtotime($fila['fecha'])) . ' a las ' . date('H:i:s', strtotime($fila['fecha'])) . '</p>
                                    <p class="cuerpoNoticiaScroll">' . $fila['cuerpo'] . '</p>
                                    </section>
                                ';
                            }
                            ?>
                        </section>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> Mayo </p>   
                        <a class="tituloNoticia" href="../../Noticias/Portada/sindicatos_reclaman_cambio_politica_economica.php">
                            <p class="tituloNoticia">Los sindicatos reclaman este Primero de Mayo un cambio radical en la política económica </p>
                        </a>
                        <p class="cuerpoNoticia">No tienen límite. Lucha por tus derechos', es el lema de CC OO y UGT para la celebración del Día Internacional del Trabajo. La manifestación de Madrid saldrá a las 12.00 horas desde Neptuno.</p>>
                        <img src="../img/sindicatos.jpg"/>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> EEUU </p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/EEUU_confirma_uso_armas_quimicas_siria.php">
                            <p class="tituloNoticia">EE.UU. confirma el uso de armas químicas en Siria, pero no sabe quién las llegó a emplear </p>
                        </a>
                        <p class="cuerpoNoticia">El presidente Barack Obama insiste en que se trata de una «línea roja», pero rechaza tomar medidas hasta que se conozcan más detalles</p>
                        <img src="../img/obama.jpg"/>
                    </section>
                    <section id="articuloMundoToday" class="articulo">
                        <section id="MundoToday">
                            <p id="presentacionMundoToday"> MUNDO TODAY </p>
                            <img id="imgMundoToday" src="../img/mundotodayEstudiante.jpg"/>
                            <a href="http://www.elmundotoday.com/2013/04/un-licenciado-en-arquitectura-construye-una-hamburguesa-de-cinco-pisos-en-un-mcdonalds/" id="tituloMundoToday">
                                <p>Un licenciado en arquitectura construye una hamburguesa de cinco pisos en un Burger King</p> 
                            </a>
                            <p class="cuerpoNoticia">"mi obra es un ejemplo de arte efímero", asegura</p>
                        </section>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> Internet </p>
                        <a class="tituloNoticia" href="../../Noticias/Portada/google_pone_a_trabajar.php">
                            <p class="tituloNoticia"> Google se pone a trabajar </p>
                        </a>
                        <p class="cuerpoNoticia">El buscador más usado del mundo celebra la fiesta del Primero de Mayo</p>
                        <img src="../img/google.png"/>
                    </section>
                    <section class="articulo">
                        <p class="presentacion"> Humor </p>
                        <img src="../img/foreverdai.png"/>
                    </section>
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
                <a href="../../Formulario/formulario.html">
                    <img id="suscripcion" src="../img/suscripiciones.png"/>
                </a>
            </section>
        </footer>
    </body>
</html>
