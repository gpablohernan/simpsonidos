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
    <title>Simpsonidos - Temporada 1</title>
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
        <div class="bloqueTemporadas capitulos T1">
            <div class="tapas-temporadas">
                <h1>temporada 1</h1>
                <img src="img/tapas/tapatemp01.jpg" alt="tapa temporada 1">
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
                    <td><a href="#T01E01">T01E01</a></td>
                    <td><a href="#T01E01">Especial de Navidad</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E02">T01E02</a></td>
                    <td><a href="#T01E02">Bart es un Genio</a></td>
                </tr>    
                <tr>
                    <td><a href="#T01E03">T01E03</a></td>
                    <td><a href="#T01E03">La Odisea de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E04">T01E04</a></td>
                    <td><a href="#T01E04">Una Familia Modelo</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E05">T01E05</a></td>
                    <td><a href="#T01E05">Bart el General</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E06">T01E06</a></td>
                    <td><a href="#T01E06">La Depresión De Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E07">T01E07</a></td>
                    <td><a href="#T01E07">La Llamada de los Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E08">T01E08</a></td>
                    <td><a href="#T01E08">El Héroe Sin Cabeza</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E09">T01E09</a></td>
                    <td><a href="#T01E09">Un Momento De Decisión</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E10">T01E10</a></td>
                    <td><a href="#T01E10">La Correría De Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E11">T01E11</a></td>
                    <td><a href="#T01E11">Intercambio Cultural</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E12">T01E12</a></td>
                    <td><a href="#T01E12">Krusty va a la Cárcel</a></td>
                </tr>
                <tr>
                    <td><a href="#T01E13">T01E13</a></td>
                    <td><a href="#T01E13">Una Noche Encantadora</a></td>
                 </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T01E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada01/01x01.jpg" alt="Especial de Navidad" onmouseover="src='img/temporada01/01x01b.jpg'"onmouseout="src='img/temporada01/01x01.jpg'">
                <h3> T01E01 - Especial de Navidad</h3>
                <p>La navidad está a punto de arruinarse, ya que Marge debe gastar todo el dinero destinado a los obsequios de la familia, para quitar el tatuaje a Bart. Además, Burns decide no darle a sus empleados un bono de navidad, por lo que Homero debe conseguir un trabajo de Santa Claus en el centro comercial, pero termina apostando dinero en el galgódromo, en donde conocen a Ayudante de Santa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/xge4l32glqqmiow/01x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T01E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada01/01x02.jpg" alt="Bart es un Genio" onmouseover="src='img/temporada01/01x02b.jpg'"onmouseout="src='img/temporada01/01x02.jpg'">
                    <h3> T01E02 - Bart es un Genio</h3>
                    <p>Bart hace trampa en su prueba de inteligencia y es tomado por un genio. A fin de ofrecerle más estímulos, Marge y Homero lo inscriben en un colegio para niños talentosos, en donde de a poco, su mentira empieza a salir a la luz cuando no consigue adaptarse al nivel de sus compañeros.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/dhxmqx0qdbu2lq6/01x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T01E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada01/01x03.jpg" alt="La Odisea de Homero" onmouseover="src='img/temporada01/01x03b.jpg'"onmouseout="src='img/temporada01/01x03.jpg'">
                    <h3> T01E03 - La Odisea de Homero</h3>
                    <p>Después de ser despedido de la planta de energía nuclear de Springfield por causar un accidente, Homero intenta suicidarse, pero cambia de opinión y se convierte en defensor de la seguridad pública. Inicia una campaña para colocar 'topes' en las carreteras y poner señales de advertencia, siendo su último objetivo el cierre de la Central donde hasta hace poco había trabajado.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/v02nh633tcqm11h/01x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T01E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada01/01x04.jpg" alt="Una Familia Modelo" onmouseover="src='img/temporada01/01x04b.jpg'"onmouseout="src='img/temporada01/01x04.jpg'">
                <h3> T01E04 - Una Familia Modelo</h3>
                <p>Después de una experiencia vergonzosa en el día de campo de su empresa, Homero empieza a preguntarse si su familia no es demasiado disfuncional. Homero, Marge, Bart, Lisa y Maggie reciben sesiones de terapia familiar con el Doctor Marvin Monroe, un psicoterapeuta poco ortodoxo que utiliza una terapia de descargas eléctricas.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7vawpeuutooc8k9/01x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T01E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada01/01x05.jpg" alt="Bart el General" onmouseover="src='img/temporada01/01x05b.jpg'"onmouseout="src='img/temporada01/01x05.jpg'">
                <h3> T01E05 -Bart el General</h3>
                <p>Después de años de ser acosados por Nelson, Bart decide defenderse. Con la ayuda del abuelo y otros estudiantes de la Escuela Primaria de Springfield, arma un ejército para atacar a Nelson con globos de agua.</p>
                <audio src="https://dl.dropboxusercontent.com/s/k6f6litkg3qj83c/01x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T01E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada01/01x06.jpg" alt="La Depresión De Lisa" onmouseover="src='img/temporada01/01x06b.jpg'"onmouseout="src='img/temporada01/01x06.jpg'">
            <h3> T01E06 - La Depresión De Lisa</h3>
            <p>Después de ser despedido de la planta de energía nuclear de Springfield por causar un accidente, Homero intenta suicidarse, pero cambia de opinión y se convierte en defensor de la seguridad pública. Inicia una campaña para colocar 'topes' en las carreteras y poner señales de advertencia, siendo su último objetivo el cierre de la Central donde hasta hace poco había trabajado.</p>
            <audio src="https://dl.dropboxusercontent.com/s/qj2wqycadk75nkn/01x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T01E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x07.jpg" alt="La Llamada de los Simpson" onmouseover="src='img/temporada01/01x07b.jpg'"onmouseout="src='img/temporada01/01x07.jpg'">
        <h3> T01E07 - La Llamada de los Simpson</h3>
        <p>Homero compra una casa rodante y lleva a acampar a la familia. Pero la casa rodante es destruida, y la familia queda perdida en el bosque. Marge logra regresar a la civilización, pero Homero no, hasta que lo confunden con Pie Grande.</p>
        <audio src="https://dl.dropboxusercontent.com/s/umay9ano4i1u93f/01x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x08.jpg" alt="El Héroe Sin Cabeza" onmouseover="src='img/temporada01/01x08b.jpg'"onmouseout="src='img/temporada01/01x08.jpg'">
        <h3> T01E08 - El Héroe Sin Cabeza</h3>
        <p>Bart trata de impresionar a Jimbo, Dolph y Kearney, robando la cabeza de la estatua de Jeremías Springfield, que se encuentra en la plaza principal. Los habitantes de la ciudad se encuentran agobiados por este acto de vandalismo y Bart al no saber qué hacer, recurre a la ayuda de Homero.</p>
        <audio src="https://dl.dropboxusercontent.com/s/74m5c2xnlpbjw9i/01x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x09.jpg" alt="Un Momento De Decisión" onmouseover="src='img/temporada01/01x09b.jpg'"onmouseout="src='img/temporada01/01x09.jpg'">
        <h3> T01E09 - Un Momento De Decisión</h3>
        <p>Homero compra a Marge una bola de boliche para su cumpleaños, a pesar de que ella nunca ha jugado a los bolos. Enfadada con el regalo de Homero, decide tomar clases de bolos con un encantador instructor francés, llamado Jacques. Al mejorar su juego, Marge y Jacques se van acercando más y más.</p>
        <audio src="https://dl.dropboxusercontent.com/s/46kpy5rujun7lbl/01x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x10.jpg" alt="La Correría De Homero" onmouseover="src='img/temporada01/01x10b.jpg'"onmouseout="src='img/temporada01/01x10.jpg'">
        <h3> T01E10 - La Correría De Homero</h3>
        <p>Utilizando su cámara de juguete para espías, Bart captura a Homero, ebrio y coqueteando con una bailarina llamada la 'Princesa Cachemira'. Cuando revela la fotografía, ésta es fotocopiada y distribuida por toda la ciudad, arruinando la reputación de Homero, hasta que llega a los ojos de Marge que, enfadada por el mal ejemplo que le ha dado a Bart, expulsa a su marido de casa.</p>
        <audio src="https://dl.dropboxusercontent.com/s/vzibh2sx5q3ds4n/01x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x11.jpg" alt="Intercambio Cultural" onmouseover="src='img/temporada01/01x11b.jpg'"onmouseout="src='img/temporada01/01x11.jpg'">
        <h3> T01E11 - Intercambio Cultural</h3>
        <p>Bart es enviado a Francia, como estudiante de intercambio y es obligado a vivir con dos productores de vino francés. En su lugar, la familia Simpson recibe a Adil, un estudiante de Albania, que en realidad es un espía que roba secretos de la planta de energía nuclear de Springfield. Bart descubre que su viaje a Francia no fue tan buena idea.</p>
        <audio src="https://dl.dropboxusercontent.com/s/qra3hfx28fhdjx9/01x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x12.jpg" alt="Krusty va a la Cárcel" onmouseover="src='img/temporada01/01x12b.jpg'"onmouseout="src='img/temporada01/01x12.jpg'">
        <h3> T01E12 - Krusty va a la Cárcel</h3>
        <p>Con la ayuda de Homero como testigo, Krusty el Payaso es detenido por asaltar el Kwik-e-Mart. Convencido de que su héroe ha sido falsamente acusado, Bart se esfuerza por limpiar el nombre de Krusty e inicia una investigación junto a Lisa para desenmascarar al verdadero culpable.</p>
        <audio src="https://dl.dropboxusercontent.com/s/5tkihqyhzo1owup/01x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T01E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada01/01x13.jpg" alt="Una Noche Encantadora" onmouseover="src='img/temporada01/01x13b.jpg'"onmouseout="src='img/temporada01/01x13.jpg'">
        <h3> T01E13 - Una Noche Encantadora</h3>
        <p>Homero y Marge disfrutan de la cena romántica que tanta falta les hace y dejan a Bart, Lisa y Maggie con una niñera. Bart y Lisa descubren que la Señora Botz no es más ni menos que la 'Niñera Ladrona'.</p>
        <audio src="https://dl.dropboxusercontent.com/s/2xdoxh6ygyvdq6q/01x13.mp3" preload="metadata" controls controlsList="nodownload" controlsList="nodownload" type="audio/mpeg"></audio>
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