<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" /> 
    <link rel="stylesheet" href="css/estilos.css">
    <link rel = "icon" type = "image/png" href = "img/icono/iconoB.png">
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <title>Simpsonidos - Temporada 12</title>
</head>
<body>
    <div class="contenedorPopup" id="contenedorPopup">
		<div class="popup" id="popup">
			<h3>Gracias por tu mensaje!</h3>
			<input type="button" id="btnCerrarPopup" value="Cerrar">
		</div>
    </div>

    <?php 
        $para = $nombre = $asunto = $mensaje = $contenido = $header = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $para = 'btcdreamargentina@gmail.com';
            $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $asunto = filter_var($_POST["asunto"], FILTER_SANITIZE_STRING);
            $mensaje = filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);   
            $header = "MIME-Version: 1.0"."\r\n"."Content-Type: text/plain; charset=utf-8\r\n"; 
            $contenido = "Nombre: " . $nombre . "\nEmail: " . $email  . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje; 
            mail($para , "Formulario Simpsonidos", $contenido, $header);
            echo '<script src="js/scripts.js"> abrirPopup();</script>';
            echo '<script> abrirPopup(); </script>';
        }
  
    ?>
    
    <div onclick="irArriba()" id="btnIrArriba" title='"Debo irme, mi planeta me necesita"'></div>
    <header id="inicio">
        <div class="hero">
            <nav class="menuPrincipal visible">
                <a href="index.php">Inicio</a>
                <a href="index.php#temporadas">Temporadas</a>
                <a href="#contacto">Contacto</a>
            </nav>
            <img src="img/logo.png" alt="logotipo Simpsonidos"class="logo">
        </div>
    </header>
    <section class="temporadas">
            <nav id="menuResponsivo" class="menuSecundario menuResp">
                    <p class="nombreMenu">Simp<span>sonidos</span></p>
                    <div class="menuMovil icon" onclick="menuR()">
                        
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a class="visible activo" href="index.php">Inicio</a>
                    <a id="temporadas" href="index.php#temporadas">Temporadas</a>
                    <a class="visible" href="#contacto">Contacto</a>   
                </nav>
        <div class="bloqueTemporadas capitulos T12">
            <div class="tapas-temporadas">
                <h1>temporada 12</h1>
                <img src="img/tapas/tapatemp12.jpg" alt="tapa temporada 12">
            </div>
            <table class="listaCapitulos">
             <thead>
                 <caption class="tit-tabla">Lista de Capítulos</caption>
                <tr>
                 <th>Nro.</th>
                 <th>Nombre del capítulo</th>
                </tr>
            </thead>
             <tbody>
                 
                <tr>
                    <td><a href="#T12E01">T12E01</a></td>
                    <td><a href="#T12E01">Especial de noche de brujas XI</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E02">T12E02</a></td>
                    <td><a href="#T12E02">El cuento de Dos ciudades</a></td>
                </tr>    
                <tr>
                    <td><a href="#T12E03">T12E03</a></td>
                    <td><a href="#T12E03">El payaso demente</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E04">T12E04</a></td>
                    <td><a href="#T12E04">Lisa y su amor por los árboles</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E05">T12E05</a></td>
                    <td><a href="#T12E05">Homero contra la dignidad</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E06">T12E06</a></td>
                    <td><a href="#T12E06">Amenaza Informática</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E07">T12E07</a></td>
                    <td><a href="#T12E07">El gran estafador</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E08">T12E08</a></td>
                    <td><a href="#T12E08">Skinner cubierto por la nieve</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E09">T12E09</a></td>
                    <td><a href="#T12E09">Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E10">T12E10</a></td>
                    <td><a href="#T12E10">Pokemamá</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E11">T12E11</a></td>
                    <td><a href="#T12E11">El peor episodio de la serie</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E12">T12E12</a></td>
                    <td><a href="#T12E12">Juego Limpio</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E13">T12E13</a></td>
                    <td><a href="#T12E13">El día de la muerte de la comedia</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T12E14">T12E14</a></td>
                    <td><a href="#T12E14">Ídolos</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E15">T12E15</a></td>
                    <td><a href="#T12E15">Homero idealista</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E16">T12E16</a></td>
                    <td><a href="#T12E16"> Los motivos del abusón</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E17">T12E17</a></td>
                    <td><a href="#T12E17">Safari Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E18">T12E18</a></td>
                    <td><a href="#T12E18">Trilogía del error</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E19">T12E19</a></td>
                    <td><a href="#T12E19">Veneración a la Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E20">T12E20</a></td>
                    <td><a href="#T12E20">Hijos de segunda clase</a></td>
                </tr>
                <tr>
                    <td><a href="#T12E21">T12E21</a></td>
                    <td><a href="#T12E21">Relatos extraordinarios</a></td>
                </tr>
                
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T12E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x01.jpg" alt="Especial de noche de brujas XI" onmouseover="src='img/temporada12/12x01b.jpg'"onmouseout="src='img/temporada12/12x01.jpg'">
                <h3> T12E01 - Especial de noche de brujas XI</h3>
                <p>El fantasma de papá: Homero muere y debe realizar una buena obra para ir al cielo. – Los cuentos de brujas pueden hacerse realidad: Es una historia que parodia a los cuentos de hadas de los hermanos Grimm. – La noche del delfín: Los delfines se rebelan y tratan de conquistar Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/z5bz3v3kfsdxob6/12x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T12E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada12/12x02.jpg" alt="El cuento de Dos ciudades" onmouseover="src='img/temporada12/12x02b.jpg'"onmouseout="src='img/temporada12/12x02.jpg'">
                    <h3> T12E02 - El cuento de Dos ciudades</h3>
                    <p>Luego de que se cambie la clave de teléfono, Homero divide a la ciudad en el nuevo y el viejo Springfield.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/ym7vmx2p0qxa36v/12x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T12E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada12/12x03.jpg" alt="El payaso demente" onmouseover="src='img/temporada12/12x03b.jpg'"onmouseout="src='img/temporada12/12x03.jpg'">
                    <h3> T12E03 - El payaso demente</h3>
                    <p>Krusty conoce a su hija, se mete en problemas y ésta deja de quererlo. Ahora debe buscar una forma para solucionar todo.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/sywefjzrlrblz7m/12x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T12E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x04.jpg" alt="Lisa y su amor por los árboles" onmouseover="src='img/temporada12/12x04b.jpg'"onmouseout="src='img/temporada12/12x04.jpg'">
                <h3> T12E04 - Lisa y su amor por los árboles</h3>
                <p>Lisa trata de proteger a un árbol que está a punto de ser derribado, luego de conocer a unos manifestantes quienes recriminan a Krusty Burgers por destruir los bosques.</p>
                <audio src="https://dl.dropboxusercontent.com/s/2cp5k2upcb11zl3/12x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T12E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x05.jpg" alt="Homero contra la dignidad" onmouseover="src='img/temporada12/12x05b.jpg'"onmouseout="src='img/temporada12/12x05.jpg'">
                <h3> T12E05 - Homero contra la dignidad</h3>
                <p>Burns le paga a Homero para que lo haga reír molestando a toda la población de Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/g83zq1jek72hze7/12x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T12E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada12/12x06.jpg" alt="Amenaza Informática" onmouseover="src='img/temporada12/12x06b.jpg'"onmouseout="src='img/temporada12/12x06.jpg'">
            <h3> T12E06 - Amenaza Informática</h3>
            <p>Homero crea la página Web del Sr. X, en donde cuenta todos los secretos, chismes y mentiras de Springfield. Pero al enterarse la gente que el Sr. X es Homero, éste se queda sin chismes y comienza a inventarlos.</p>
            <audio src="https://dl.dropboxusercontent.com/s/y46r1pfjl1q01ig/12x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T12E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x07.jpg" alt="El gran estafador" onmouseover="src='img/temporada12/12x07b.jpg'"onmouseout="src='img/temporada12/12x07.jpg'">
        <h3> T12E07 - El gran estafador</h3>
        <p>Homero y Bart comienzan a estafar a la gente en la calle, hasta que deciden estafar a los abuelos del Castillo de Retiro de Springfield con ayuda del abuelo.</p>
        <audio src="https://dl.dropboxusercontent.com/s/tjr0aiokl2r19f1/12x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x08.jpg" alt="Skinner cubierto por la nieve" onmouseover="src='img/temporada12/12x08b.jpg'"onmouseout="src='img/temporada12/12x08.jpg'">
        <h3> T12E08 - Skinner cubierto por la nieve</h3>
        <p>Luego de una tormenta, todos los niños y el director Skinner se quedan encerrados en el colegio, donde Skinner intenta poner orden, pero los niños no le hacen caso.</p>
        <audio src="https://dl.dropboxusercontent.com/s/r0lqiytphf6ffqo/12x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x09.jpg" alt="Homero" onmouseover="src='img/temporada12/12x09b.jpg'"onmouseout="src='img/temporada12/12x09.jpg'">
        <h3> T12E09 - Homero</h3>
        <p>Al ver una radiografía de la cabeza de Homero, se dan cuenta que tiene un crayón clavado en el cerebro, y el cual es la causa de su estupidez.</p>
        <audio src="https://dl.dropboxusercontent.com/s/c4fj0v430sbrdq3/12x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x10.jpg" alt="Pokemamá" onmouseover="src='img/temporada12/12x10b.jpg'"onmouseout="src='img/temporada12/12x10.jpg'">
        <h3> T12E10 - Pokemamá</h3>
        <p>Marge da clases de arte en la prisión, donde descubre a un convicto que es muy buen artista. Lo saca de la cárcel y le consigue trabajo en la Escuela Primaria de Springfield.</p>
        <audio src="https://dl.dropboxusercontent.com/s/y7i6ndjr1bsth2m/12x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x11.jpg" alt="El peor episodio de la serie" onmouseover="src='img/temporada12/12x11b.jpg'"onmouseout="src='img/temporada12/12x11.jpg'">
        <h3> T12E11 - El peor episodio de la serie</h3>
        <p>Al dueño de la tienda de comics le da un ataque al corazón, y deja el negocio a cargo de Bart y Milhouse. Mientras tanto el dueño de la tienda va a un seminario sobre “Como hacer amigos“, en donde conoce a la madre de Seymour Skinner, y de la cual se enamora.</p>
        <audio src="https://dl.dropboxusercontent.com/s/7gtmv0dq0afrtzq/12x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x12.jpg" alt="Juego Limpio" onmouseover="src='img/temporada12/12x12b.jpg'"onmouseout="src='img/temporada12/12x12.jpg'">
        <h3> T12E12 - Juego Limpio</h3>
        <p>La familia construye una cancha de tenis en el jardín de su casa, pero todo Springfield se burla de ellos. Luego Homero se inscribe junto a Marge para un torneo de tenis.</p>
        <audio src="https://dl.dropboxusercontent.com/s/4xrgp81qwfrlf9w/12x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T12E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada12/12x13.jpg" alt="El día de la muerte de la comedia" onmouseover="src='img/temporada12/12x13b.jpg'"onmouseout="src='img/temporada12/12x13.jpg'">
        <h3> T12E13 - El día de la muerte de la comedia</h3>
        <p>Bob Patiño sale de la cárcel y trata de vengarse de Krusty. Para eso hipnotiza a Bart para que mate a Krusty en su último programa.</p>
        <audio src="https://dl.dropboxusercontent.com/s/f4es09do7fs8mul/12x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
</div>
    <div class="contenedorCapitulos" id="T12E14">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x14.jpg" alt="Ídolos" onmouseover="src='img/temporada12/12x14b.jpg'"onmouseout="src='img/temporada12/12x14.jpg'">
                <h3> T12E14 - Ídolos</h3>
                <p>Bart, Milhouse, Nelson y Rapha forma un grupo de música pop. Pero mientras tanto, Lisa sospecha de algo raro.</p>
                <audio src="https://dl.dropboxusercontent.com/s/5nh2q7bfq19rrst/12x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
    
    <div class="contenedorCapitulos" id="T12E15">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x15.jpg" alt="Homero idealista" onmouseover="src='img/temporada12/12x15b.jpg'"onmouseout="src='img/temporada12/12x15.jpg'">
                <h3> T12E15 - Homero idealista</h3>
                <p>Homero entra en huelga de hambre después de enterarse de que el dueño de los Isótopos tiene planes de mudar al equipo a Alburquerque.</p>
                <audio src="https://dl.dropboxusercontent.com/s/mwpjl6a4l22dtl2/12x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T12E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x16.jpg" alt="Los motivos del abusón" onmouseover="src='img/temporada12/12x16b.jpg'"onmouseout="src='img/temporada12/12x16.jpg'">
                <h3> T12E16 - Los motivos del abusón</h3>
                <p>Lisa trata de entablar amistad con una nueva estudiante, solamente para descubrir que se convertiría en el blanco de los arrebatos de violencia de la niña.</p>
                <audio src="https://dl.dropboxusercontent.com/s/xor7tvwfdv1u0qb/12x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T12E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x17.jpg" alt="Safari Simpson" onmouseover="src='img/temporada12/12x17b.jpg'"onmouseout="src='img/temporada12/12x17.jpg'">
                <h3> T12E17 - Safari Simpson</h3>
                <p>Los Simpson encuentran una vieja caja de galletas, la cual trae un premio: boletos gratis a Africa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/3o5ie8b9daq20ts/12x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T12E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x18.jpg" alt="Trilogía del error" onmouseover="src='img/temporada12/12x18b.jpg'"onmouseout="src='img/temporada12/12x18.jpg'">
                <h3> T12E18 - Trilogía del error</h3>
                <p>Un día en la vida de los Simpson se repite tres veces. Solo que cada vez se ve desde el punto de vista de cada integrante de la familia.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ufxtuhlqmbt3z9z/12x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T12E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x19.jpg" alt="Veneración a la Homero" onmouseover="src='img/temporada12/12x19b.jpg'"onmouseout="src='img/temporada12/12x19.jpg'">
                <h3> T12E19 - Veneración a la Homero</h3>
                <p>Ned Flanders construye el parque de diversiones soñado por su esposa ya muerta. Pero sorpresivamente ocurre un milagro.</p>
                <audio src="https://dl.dropboxusercontent.com/s/32t84iaxygl4rcf/12x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T12E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x20.jpg" alt="Hijos de segunda clase" onmouseover="src='img/temporada12/12x20b.jpg'"onmouseout="src='img/temporada12/12x20.jpg'">
                <h3> T12E20 - Hijos de segunda clase</h3>
                <p>Homero se lastima la rodilla y comienza a cuidar niños en su casa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/685703aesmucant/12x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T12E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada12/12x21.jpg" alt="Relatos extraordinarios" onmouseover="src='img/temporada12/12x21b.jpg'"onmouseout="src='img/temporada12/12x21.jpg'">
                <h3> T12E21 - Relatos extraordinarios</h3>
                <p>Después de que Homero se resiste a pagar un impuesto del aeropuerto, los Simpson tienen que subirse a un tren para ir a sus vacaciones en Delaware. Un vagabundo del tren los entretiene mientras les cuenta historias.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ud0q1osl8tqg72c/12x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
           
    
    
    </section>
    <footer id="contacto">
        <form id='formulario' method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <legend>contacto</legend>
        <div class="formularioDividido izq">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ej: Cosme Fulanito" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Ej: apu@borbotones.com" required>
            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" id="asunto" placeholder="Ej: Cambiar conexión a la red" required>
        </div>
        <div class="formularioDividido der">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="7" placeholder="Ej: Quisiera actualizar mi conexión a la red de 28.8 kilobaudios a una línea T1 de fibra óptica. ¿Tiene usted un servidor con routeador compatible con mi configuración LAN ethernet token ring?" required></textarea>
            <input class="btnEnviar" type="submit" name="enviar" value="Enviar">
        </div>
        </form>
        <p>Aviso legal: "Los Simpson"™ pertenecen a FOX y sus compañías relacionadas. Todos los derechos reservados. Cualquier reproducción, duplicación o distribución de estos materiales de cualquier manera está prohibida.</p>
        <p>Disclaimer: Este sitio web, sus operadores y cualquier contenido de este sitio relacionado con "Los Simpson" no están autorizados por la FOX.</p>
        <p>Simpsonidos - Todos los derechos reservados 2019.</p>
      
    </footer>
    <script src="js/scripts.js"></script>
</body>
</html>