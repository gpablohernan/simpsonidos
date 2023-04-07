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
    <title>Simpsonidos - Temporada 2</title>
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
            <div class="bloqueTemporadas capitulos T2">
            <div class="tapas-temporadas">
                <h1>temporada 2</h1>
                <img src="img/tapas/tapatemp02.jpg" alt="tapa temporada 2">
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
                    <td><a href="#T02E01">T02E01</a></td>
                    <td><a href="#T02E01">Bart Reprueba</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E02">T02E02</a></td>
                    <td><a href="#T02E02">Simpson y Dalila</a></td>
                </tr>    
                <tr>
                    <td><a href="#T02E03">T02E03</a></td>
                    <td><a href="#T02E03">El Especial de Noche de Brujas de los Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E04">T02E04</a></td>
                    <td><a href="#T02E04">Dos Autos en Cada Cochera Y Tres Ojos en Cada Pez</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E05">T02E05</a></td>
                    <td><a href="#T02E05">Homero, el Animador</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E06">T02E06</a></td>
                    <td><a href="#T02E06">La Sociedad de los Golfistas Muertos</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E07">T02E07</a></td>
                    <td><a href="#T02E07">Bart Contra el Día de Gracias</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E08">T02E08</a></td>
                    <td><a href="#T02E08">Bart el Temerario</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E09">T02E09</a></td>
                    <td><a href="#T02E09">Tomy, Daly y Marge</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E10">T02E10</a></td>
                    <td><a href="#T02E10">Bart es Atropellado</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E11">T02E11</a></td>
                    <td><a href="#T02E11">Aviso de Muerte</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E12">T02E12</a></td>
                    <td><a href="#T02E12">Los Años que Vivimos</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E13">T02E13</a></td>
                    <td><a href="#T02E13">No Robarás</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T02E14">T02E14</a></td>
                    <td><a href="#T02E14">El Último Tren</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E15">T02E15</a></td>
                    <td><a href="#T02E15">Dónde Estás Hermano Mío</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E16">T02E16</a></td>
                    <td><a href="#T02E16">El Perro de Bart Reprueba</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E17">T02E17</a></td>
                    <td><a href="#T02E17">Nuestros Años Felices</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E18">T02E18</a></td>
                    <td><a href="#T02E18">Pinceles con Alma</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E19">T02E19</a></td>
                    <td><a href="#T02E19">El Sustituto de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E20">T02E20</a></td>
                    <td><a href="#T02E20">La Guerra de los Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E21">T02E21</a></td>
                    <td><a href="#T02E21">Tres Hombres y una Historieta</a></td>
                </tr>
                <tr>
                    <td><a href="#T02E22">T02E22</a></td>
                    <td><a href="#T02E22">Sangre Nueva</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T02E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x01.jpg" alt="Bart Reprueba" onmouseover="src='img/temporada02/02x01b.jpg'"onmouseout="src='img/temporada02/02x01.jpg'">
                <h3> T02E01 - Bart Reprueba</h3>
                <p>Después de reprobar el examen de historia, Bart llega a un acuerdo con Martin Prince para convertirlo en un chico popular a cambio de ayudarlo a estudiar. Bart logra transformar a Martin en un chico normal, pero Martin no cumple su parte del trato y Bart, una vez más, está en peligro de reprobar.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qi1ihcxnu74rpos/02x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T02E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada02/02x02.jpg" alt="Simpson y Dalila" onmouseover="src='img/temporada02/02x02b.jpg'"onmouseout="src='img/temporada02/02x02.jpg'">
                    <h3> T02E02 - Simpson y Dalila</h3>
                    <p>Homero prueba un nuevo producto para el crecimiento del cabello, y le crecerá una abundante cabellera. El Señor Burns confunde a su incompetente empleado con un joven hambriento de triunfar y le da un ascenso. Como parte de su nuevo puesto, Homero tendrá a un colaborador muy atento, llamado Karl, que se asegurará que cada paso dado sea correcto y que todas sus acciones sean un éxito.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/4wich4ytsbvquy2/02x02.mp3 preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T02E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada02/02x03.jpg" alt="El Especial de Noche de Brujas de los Simpson" onmouseover="src='img/temporada02/02x03b.jpg'"onmouseout="src='img/temporada02/02x03.jpg'">
                    <h3> T02E03 - El Especial de Noche de Brujas de los Simpson</h3>
                    <p>Bart y Lisa se cuentan historias de horror en la casa del árbol: - La casa de las Pesadillas: La familia se muda a una casa encantada. – Los malditos Hambrientos: Los Simpson son secuestrados por extraterrestres, y piensan que van a ser comidos. – El Cuervo: Adaptación del clásico de Edgar Allan Poe con Homero como protagonista.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/z4hyo29o2rk2w87/02x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T02E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x04.jpg" alt="Dos Autos en Cada Cochera Y Tres Ojos en Cada Pez" onmouseover="src='img/temporada02/02x04b.jpg'"onmouseout="src='img/temporada02/02x04.jpg'">
                <h3> T02E04 - Dos Autos en Cada Cochera Y Tres Ojos en Cada Pez</h3>
                <p>Bart y Lisa atrapan un pez de tres ojos en un arroyo contaminado, cercano a la planta de energía nuclear de Springfield, lo que provocará una oleada de publicidad negativa para el Señor Burns. A fin de enfrentar a los medios, Burns decide buscar la candidatura como gobernador.</p>
                <audio src="https://dl.dropboxusercontent.com/s/omy83d6b8pxzwvj/02x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T02E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x05.jpg" alt="Homero, el Animador" onmouseover="src='img/temporada02/02x05b.jpg'"onmouseout="src='img/temporada02/02x05.jpg'">
                <h3> T02E05 - Homero, el Animador</h3>
                <p>Al verlo bailar en un partido de béisbol, Homero atrae la atención del propietario del equipo, quien lo contrata para convertirse en la mascota de los Capitales de Ciudad Capital. Homero descubre que sus movimientos no son recibidos en Ciudad Capital tan bien como en Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/pje2wipwdugbdlf/02x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T02E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada02/02x06.jpg" alt="La Sociedad de los Golfistas Muertos" onmouseover="src='img/temporada02/02x06b.jpg'"onmouseout="src='img/temporada02/02x06.jpg'">
            <h3> T02E06 - La Sociedad de los Golfistas Muertos</h3>
            <p>Para saber quién es el mejor del barrio, Homero y Ned Flanders colocan a Bart y a Todd frente a frente en una competencia de mini-golf. Los chicos entrenan sin cesar para el gran día, pero el torneo es más importante para Homero y para Ned, quienes han apostado que el padre del perdedor deberá podar el jardín de su vecino, usando el vestido de su esposa.</p>
            <audio src="https://dl.dropboxusercontent.com/s/aadin0iofz6nv6e/02x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T02E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x07.jpg" alt="Bart Contra el Día de Gracias" onmouseover="src='img/temporada02/02x07b.jpg'"onmouseout="src='img/temporada02/02x07.jpg'">
        <h3> T02E07 - Bart Contra el Día de Gracias</h3>
        <p>Lisa se prepara para el Día de Acción de Gracias, haciendo un centro de mesa dedicado a las heroínas de la historia de los Estados Unidos. Bart pelea con Lisa y accidentalmente arroja el centro de mesa de Lisa a la chimenea, destruyéndolo.</p>
        <audio src="https://dl.dropboxusercontent.com/s/kggmzew9fs03bb4/02x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x08.jpg" alt="Bart el Temerario" onmouseover="src='img/temporada02/02x08b.jpg'"onmouseout="src='img/temporada02/02x08.jpg'">
        <h3> T02E08 - Bart el Temerario</h3>
        <p>En la competencia de camiones monstruo, Bart ve al capitán Lance Murdock, un piloto que tratará de saltar con su motocicleta, sobre un tanque repleto de enormes tiburones blancos, anguilas eléctricas, pirañas, lagartos y un feroz león. Inspirado por Murdock, Bart intenta saltos más arriesgados con su patineta, hasta que pone la mira en el desfiladero de Springfield.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ykkln2h3aj4twgx/02x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x09.jpg" alt="Tomy, Daly y Marge" onmouseover="src='img/temporada02/02x09b.jpg'"onmouseout="src='img/temporada02/02x09.jpg'">
        <h3> T02E09 - Tomy, Daly y Marge</h3>
        <p>Convencida de que las imágenes del programa de Tomy y Daly son una pésima influencia para los niños, Marge inicia una solitaria campaña en contra del programa, lo que obliga a su creador, Roger Meyers Jr. a modificar la violencia por tramas suaves y amorosas.</p>
        <audio src="https://dl.dropboxusercontent.com/s/1ujbbtrmywr64rq/02x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x10.jpg" alt="Bart es Atropellado" onmouseover="src='img/temporada02/02x10b.jpg'"onmouseout="src='img/temporada02/02x10.jpg'">
        <h3> T02E10 - Bart es Atropellado</h3>
        <p>El Señor Burns atropella a Bart con su auto, dejándolo inconsciente. Después de consultar al corrupto abogado, Lionel Hutz, Homero y Marge intentan demandar al Señor Burns por un millón de dólares.</p>
        <audio src="https://dl.dropboxusercontent.com/s/pe78aitba82b2jb/02x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x11.jpg" alt="Aviso de Muerte" onmouseover="src='img/temporada02/02x11b.jpg'"onmouseout="src='img/temporada02/02x11.jpg'">
        <h3> T02E11 - Aviso de Muerte</h3>
        <p>Homero descubre las maravillas del sushi, al probar cada uno de los pescados que aparecen en el menú del restaurante japonés. Pero es envenenado cuando come Pez globo. Luego de consultar al Doctor Hibbert, éste le da 24 horas restantes de vida.</p>
        <audio src="https://dl.dropboxusercontent.com/s/b7asthdkxbspvxq/02x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x12.jpg" alt="Los Años que Vivimos" onmouseover="src='img/temporada02/02x12b.jpg'"onmouseout="src='img/temporada02/02x12.jpg'">
        <h3> T02E12 - Los Años que Vivimos</h3>
        <p>Cuando se descompone el televisor, Marge aprovecha la oportunidad para compartir con Bart y Lisa la historia de cómo conoció a Homero.</p>
        <audio src="https://dl.dropboxusercontent.com/s/9xybqn65cdknok2/02x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T02E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada02/02x13.jpg" alt="No Robarás" onmouseover="src='img/temporada02/02x13b.jpg'"onmouseout="src='img/temporada02/02x13.jpg'">
        <h3> T02E13 - No Robarás</h3>
        <p>Homero se convierte en el sujeto más popular de la ciudad cuando se conecta ilegalmente a un servicio de televisión por cable. Pero Lisa no lo aprueba y teme que Homero vaya al infierno por violar el octavo mandamiento.</p>
        <audio src="https://dl.dropboxusercontent.com/s/7ckr35tafdmciya/02x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
</div>
    <div class="contenedorCapitulos" id="T02E14">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x14.jpg" alt="El Último Tren" onmouseover="src='img/temporada02/02x14b.jpg'"onmouseout="src='img/temporada02/02x14.jpg'">
                <h3> T02E14 - El Último Tren</h3>
                <p>Marge solicita la ayuda de Homero para encontrarle esposo a Selma. Luego de buscar a varios, se decide por Skinner, y lo invita a una cena con la familia, pero se enamora de Patty, provocando que Selma se sienta más deprimida.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ljjue5pkqqpxk2b/02x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
    
    <div class="contenedorCapitulos" id="T02E15">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x15.jpg" alt="Dónde Estás Hermano Mío" onmouseover="src='img/temporada02/02x15b.jpg'"onmouseout="src='img/temporada02/02x15.jpg'">
                <h3> T02E15 - Dónde Estás Hermano Mío</h3>
                <p>Tras sufrir un ataque cardíaco, el abuelo Simpson le confiesa a Homero que tiene un hermano desconocido. Homero investiga y encuentra a su hermanastro perdido, Herb Powell, que resulta ser un millonario, presidente de una compañía automovilística.</p>
                <audio src="https://dl.dropboxusercontent.com/s/nwygj6npu99n41i/02x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T02E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x16.jpg" alt="El Perro de Bart Reprueba" onmouseover="src='img/temporada02/02x16b.jpg'"onmouseout="src='img/temporada02/02x16.jpg'">
                <h3> T02E16 - El Perro de Bart Reprueba</h3>
                <p>Ayudante de Santa, el perro de la familia, es enviado a una escuela de obediencia luego de comer varios objetos de gran valor sentimental para la familia.</p>
                <audio src="https://dl.dropboxusercontent.com/s/acedvp2qhz9xfxv/02x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T02E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x17.jpg" alt="Nuestros Años Felices" onmouseover="src='img/temporada02/02x17b.jpg'"onmouseout="src='img/temporada02/02x17.jpg'">
                <h3> T02E17 - Nuestros Años Felices</h3>
                <p>El abuelo Simpson tiene un apasionado romance con Bea Simmons, una compañera del geriátrico, hasta que ella muere. Abraham hereda una importante suma de dinero y decide donarla a quien más la necesite en Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qdydztrv1af0f1v/02x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T02E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x18.jpg" alt="Pinceles con Alma" onmouseover="src='img/temporada02/02x18b.jpg'"onmouseout="src='img/temporada02/02x18.jpg'">
                <h3> T02E18 - Pinceles con Alma</h3>
                <p>Mientras Homero intenta bajar de peso luego de un avergonzante episodio en el Monte Splashmore, Marge decide, motivada por una respuesta de Ringo Starr a su carta de 1966, volver a la pintura. Le es comisionado un retrato del señor Burns.</p>
                <audio src="https://dl.dropboxusercontent.com/s/v7j4rjo2st8nqi5/02x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T02E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x19.jpg" alt="El Sustituto de Lisa" onmouseover="src='img/temporada02/02x19b.jpg'"onmouseout="src='img/temporada02/02x19.jpg'">
                <h3> T02E19 - El Sustituto de Lisa</h3>
                <p>La maestra de Lisa se enferma, y en su reemplazo llega el señor Bergstrom, quien le enseña que vale la pena vivir. Mientras, Bart y Martin disputan la presidencia de su clase.</p>
                <audio src="https://dl.dropboxusercontent.com/s/o7jr8h1avnniydh/02x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T02E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x20.jpg" alt="La Guerra de los Simpson" onmouseover="src='img/temporada02/02x20b.jpg'"onmouseout="src='img/temporada02/02x20.jpg'">
                <h3> T02E20 - La Guerra de los Simpson</h3>
                <p>Después de que Homero se emborrachara en una fiesta, Marge decide asistir a un fin de semana de reconstrucción de parejas auspiciado por la iglesia, en el que Homero planea aprovechar para pescar. Mientras, dejan la casa a cargo del abuelo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/bo9zyf5vrdd9rtr/02x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T02E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x21.jpg" alt="Tres Hombres y una Historieta" onmouseover="src='img/temporada02/02x21b.jpg'"onmouseout="src='img/temporada02/02x21.jpg'">
                <h3> T02E21 - Tres Hombres y una Historieta</h3>
                <p>Bart, Milhouse y Martin compran entre los tres el número 1 del Hombre Radioactivo, pero encuentran problemas a la hora de compartirlo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/mgg1i8e7aiw4o8t/02x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T02E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada02/02x22.jpg" alt="Sangre Nueva" onmouseover="src='img/temporada02/02x22b.jpg'"onmouseout="src='img/temporada02/02x22.jpg'">
                <h3> T02E22 - Sangre Nueva</h3>
                <p>El Señor Burns necesita sangre del tipo 0 negativo, que Bart tiene. Homero está dispuesto a hacer que Bart se la done, pero no sin una buena recompensa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/kjdekmty14prwf6/02x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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