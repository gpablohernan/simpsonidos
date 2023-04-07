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
    <title>Simpsonidos - Temporada 8</title>
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
            <div class="bloqueTemporadas capitulos T8">
            <div class="tapas-temporadas">
                <h1>temporada 8</h1>
                <img src="img/tapas/tapatemp08.jpg" alt="tapa temporada 8">
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
                    <td><a href="#T08E01">T08E01</a></td>
                    <td><a href="#T08E01">Especial de noche de brujas VII</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E02">T08E02</a></td>
                    <td><a href="#T08E02">Solo se muda dos veces</a></td>
                </tr>    
                <tr>
                    <td><a href="#T08E03">T08E03</a></td>
                    <td><a href="#T08E03">Homero por el campeonato</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E04">T08E04</a></td>
                    <td><a href="#T08E04">Papi Burns</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E05">T08E05</a></td>
                    <td><a href="#T08E05">Bart de noche</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E06">T08E06</a></td>
                    <td><a href="#T08E06">Milhouse dividido</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E07">T08E07</a></td>
                    <td><a href="#T08E07">El soso romance de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E08">T08E08</a></td>
                    <td><a href="#T08E08">Huracán Neddy</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E09">T08E09</a></td>
                    <td><a href="#T08E09">El viaje misterioso de nuestro Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E10">T08E10</a></td>
                    <td><a href="#T08E10">Los expedientes secretos de Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E11">T08E11</a></td>
                    <td><a href="#T08E11">El turbio y oscuro mundo de Marge Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E12">T08E12</a></td>
                    <td><a href="#T08E12">La montaña de la locura</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E13">T08E13</a></td>
                    <td><a href="#T08E13">Simpsoncalifragilisticoexpialidoso</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T08E14">T08E14</a></td>
                    <td><a href="#T08E14">El espectáculo de Tomy, Daly y Poochie</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E15">T08E15</a></td>
                    <td><a href="#T08E15">La fobia de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E16">T08E16</a></td>
                    <td><a href="#T08E16">El hermano de otra serie</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E17">T08E17</a></td>
                    <td><a href="#T08E17">Niñera y hermana</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E18">T08E18</a></td>
                    <td><a href="#T08E18">Homero contra la prohibición</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E19">T08E19</a></td>
                    <td><a href="#T08E19">Amor en la escuela</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E20">T08E20</a></td>
                    <td><a href="#T08E20">Motín canino</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E21">T08E21</a></td>
                    <td><a href="#T08E21">El viejo y la Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E22">T08E22</a></td>
                    <td><a href="#T08E22">Pregúntale a Marge</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E23">T08E23</a></td>
                    <td><a href="#T08E23">El enemigo de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E24">T08E24</a></td>
                    <td><a href="#T08E24">El repertorio de refritos de Los Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T08E25">T08E25</a></td>
                    <td><a href="#T08E25">La guerra secreta de Lisa Simpson</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T08E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x01.jpg" alt="Especial de noche de brujas VII" onmouseover="src='img/temporada08/08x01b.jpg'"onmouseout="src='img/temporada08/08x01.jpg'">
                <h3> T08E01 - Especial de noche de brujas VII</h3>
                <p>La casa y yo: Bart descubre a su diabólico hermano siamés en el desván de la casa. - La bandeja del génesis: Lisa hace un experimento disolviendo un diente en gaseosa. De ahí sale una civilización en miniatura. - Ciudadano Kang: Cuando se acercan las elecciones, Kang y Kodos secuestran a y asumen los roles de Bill Clinton y Bob Dole.</p>
                <audio src="https://dl.dropboxusercontent.com/s/xv8a72h45rfccx4/08x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T08E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada08/08x02.jpg" alt="Solo se muda dos veces" onmouseover="src='img/temporada08/08x02b.jpg'"onmouseout="src='img/temporada08/08x02.jpg'">
                    <h3> T08E02 - Solo se muda dos veces</h3>
                    <p>Homero hace que la familia se mude a otra ciudad cuando recibe una oferta para un trabajo en una planta nuclear mejor. Pero, mientras Homero no se da cuenta de la magnitud de los problemas de su jefe con el Gobierno, la familia tiene dificultades para adaptarse a la nueva ciudad.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/cmexyxgney82xo8/08x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T08E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada08/08x03.jpg" alt="Homero por el campeonato" onmouseover="src='img/temporada08/08x03b.jpg'"onmouseout="src='img/temporada08/08x03.jpg'">
                    <h3> T08E03 - Homero por el campeonato</h3>
                    <p>Moe convence a Homero de convertirse en boxeador, después de descubrirse que puede sufrir muchos golpes en la cabeza sin ser tumbado. Pero Marge se preocupa cuando Homero va a boxear contra Dreaderick Tatum, el campeón pesado.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/tqnrpvlwou6pf28/08x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T08E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x04.jpg" alt="Papi Burns" onmouseover="src='img/temporada08/08x04b.jpg'"onmouseout="src='img/temporada08/08x04.jpg'">
                <h3> T08E04 - Papi Burns</h3>
                <p>Burns descubre su hijo ilegítimo de 60 años perdido, Larry, quien es vago e insultante, y no quiere tener nada que ver con él. Homero piensa que un falso secuestro es todo lo que necesita para cambiar el punto de vista de Burns.</p>
                <audio src="https://dl.dropboxusercontent.com/s/612v09w0u6z7scb/08x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T08E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x05.jpg" alt="Bart de noche" onmouseover="src='img/temporada08/08x05b.jpg'"onmouseout="src='img/temporada08/08x05.jpg'">
                <h3> T08E05 - Bart de noche</h3>
                <p>Como un castigo por destruir una propiedad privada, Bart es forzado a trabajar con la dueña de la casa, sin saber que la casa es un burdel secreto.</p>
                <audio src="https://dl.dropboxusercontent.com/s/b12zjkenigkfijz/08x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T08E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada08/08x06.jpg" alt="Milhouse dividido" onmouseover="src='img/temporada08/08x06b.jpg'"onmouseout="src='img/temporada08/08x06.jpg'">
            <h3> T08E06 - Milhouse dividido</h3>
            <p>Homero teme que su matrimonio esté en peligro cuando los padres de Milhouse, Kirk y Luann, anuncian su divorcio en una fiesta organizada por Marge.</p>
            <audio src="https://dl.dropboxusercontent.com/s/4s7n1vt0j4hnoym/08x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T08E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x07.jpg" alt="El soso romance de Lisa" onmouseover="src='img/temporada08/08x07b.jpg'"onmouseout="src='img/temporada08/08x07.jpg'">
        <h3> T08E07 - El soso romance de Lisa</h3>
        <p>Lisa entra en un romance turbulento cuando trata de cambiar a Nelson. Mientras, Homero descubre dinero rápido en el fraude de telemarketing.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ptfobx17wgkngd0/08x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x08.jpg" alt="Huracán Neddy" onmouseover="src='img/temporada08/08x08b.jpg'"onmouseout="src='img/temporada08/08x08.jpg'">
        <h3> T08E08 - Huracán Neddy</h3>
        <p>Ned Flanders se interna en un hospital mental porque sufre una crisis de nervios cuando su casa es destruída por un huracán.</p>
        <audio src="https://dl.dropboxusercontent.com/s/vbzcz1wuxwu4z19/08x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x09.jpg" alt="El viaje misterioso de nuestro Homero" onmouseover="src='img/temporada08/08x09b.jpg'"onmouseout="src='img/temporada08/08x09.jpg'">
        <h3> T08E09 - El viaje misterioso de nuestro Homero</h3>
        <p>Cuando Homero come mucho chile con carne, tiene visiones que le dicen que busque a su alma gemela.</p>
        <audio src="https://dl.dropboxusercontent.com/s/v668tc242e4f10e/08x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x10.jpg" alt="Los expedientes secretos de Springfield" onmouseover="src='img/temporada08/08x10b.jpg'"onmouseout="src='img/temporada08/08x10.jpg'">
        <h3> T08E10 - Los expedientes secretos de Springfield</h3>
        <p>Homero ve un extraterrestre en el bosque de Springfield, pero nadie le cree, ni siquiera los agentes del FBI Fox Mulder y Dana Scully (de la serie Los Expedientes Secretos X), quienes vienen a investigar el incidente.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ory9dcclgsja49m/08x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x11.jpg" alt="El turbio y oscuro mundo de Marge Simpson" onmouseover="src='img/temporada08/08x11b.jpg'"onmouseout="src='img/temporada08/08x11.jpg'">
        <h3> T08E11 - El turbio y oscuro mundo de Marge Simpson</h3>
        <p>Marge entra en el negocio de los pretzels y le va mal hasta que Homero hace un trato con el Gordo Tony, mafioso local.</p>
        <audio src="https://dl.dropboxusercontent.com/s/uhc04lwxbnyb6xm/08x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x12.jpg" alt="La montaña de la locura" onmouseover="src='img/temporada08/08x12b.jpg'"onmouseout="src='img/temporada08/08x12.jpg'">
        <h3> T08E12 - La montaña de la locura</h3>
        <p>Para promover el trabajo de equipo entre sus empleados, Burns los hace ir a un retiro en las montañas para encontrar una cabaña escondida.</p>
        <audio src="https://dl.dropboxusercontent.com/s/d0dnoplf89fumuc/08x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T08E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada08/08x13.jpg" alt="Simpsoncalifragilistico-expialidoso" onmouseover="src='img/temporada08/08x13b.jpg'"onmouseout="src='img/temporada08/08x13.jpg'">
        <h3> T08E13 - Simpsoncalifragilistico-expialidoso</h3>
        <p>Para suavizar el stress de Marge, la familia contrata a Shary Bobbins, una niñera que se encarga del trabajo casero y de los niños al compás de sus canciones.</p>
        <audio src="https://dl.dropboxusercontent.com/s/r3qf2khiirkoc9c/08x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T08E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada08/08x14.jpg" alt="El espectáculo de Tomy, Daly y Poochie" onmouseover="src='img/temporada08/08x14b.jpg'"onmouseout="src='img/temporada08/08x14.jpg'">
            <h3> T08E14 - El espectáculo de Tomy, Daly y Poochie</h3>
            <p>En el episodio número 167 de la serie, Homero hace la voz de Poochie, un personaje agregado al show de Tomy y Daly en una medida desesperada para elevar los ratings.</p>
            <audio src="https://dl.dropboxusercontent.com/s/x9f8k3eq0c6aytm/08x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T08E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada08/08x15.jpg" alt="La fobia de Homero" onmouseover="src='img/temporada08/08x15b.jpg'"onmouseout="src='img/temporada08/08x15.jpg'">
            <h3> T08E15 - La fobia de Homero</h3>
            <p>Un vendedor se hace amigo de la familia Simpson, pero luego de descubrir que es homosexual Homero teme que Bart siga sus pasos.</p>
            <audio src="https://dl.dropboxusercontent.com/s/lvcmkqcqpd57w07/08x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T08E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x16.jpg" alt="El hermano de otra serie" onmouseover="src='img/temporada08/08x16b.jpg'"onmouseout="src='img/temporada08/08x16.jpg'">
                <h3> T08E16 - El hermano de otra serie</h3>
                <p>Bart sospecha un motivo siniestro cuando Bob Patiño se reúne con su hermano Cecilio, quien lo pone a cargo de supervisar la construcción de un dique en Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/163078voipgxa80/08x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T08E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x17.jpg" alt="Niñera y hermana" onmouseover="src='img/temporada08/08x17b.jpg'"onmouseout="src='img/temporada08/08x17.jpg'">
                <h3> T08E17 - Niñera y hermana</h3>
                <p>La reputación de Lisa como niñera es puesta a prueba cuando se le pide que cuide a Bart y a Maggie, mientras Bart decide hacer la vida de Lisa, por esa noche, un infierno.</p>
                <audio src="https://dl.dropboxusercontent.com/s/q6evcsonpyxcoj1/08x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T08E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x18.jpg" alt="Homero contra la prohibición" onmouseover="src='img/temporada08/08x18b.jpg'"onmouseout="src='img/temporada08/08x18.jpg'">
                <h3> T08E18 - Homero contra la prohibición</h3>
                <p>Cuando se prohíbe el alcohol en Springfield, Homero se convierte en traficante con la ayuda de Bart.</p>
                <audio src="https://dl.dropboxusercontent.com/s/33389mnjr37mmsv/08x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T08E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x19.jpg" alt="Amor en la escuela" onmouseover="src='img/temporada08/08x19b.jpg'"onmouseout="src='img/temporada08/08x19.jpg'">
                <h3> T08E19 - Amor en la escuela</h3>
                <p>Bart descubre al director Skinner y a su maestra, Edna Krabappel, besándose y obtiene un ventajoso trato para mantenerlo en secreto. Pero este trato se le puede volver en contra.</p>
                <audio src="https://dl.dropboxusercontent.com/s/09b4a3s3omz97d1/08x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T08E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x20.jpg" alt="Motín canino" onmouseover="src='img/temporada08/08x20b.jpg'"onmouseout="src='img/temporada08/08x20.jpg'">
                <h3> T08E20 - Motín canino</h3>
                <p>Bart compra un perro nuevo con una tarjeta fraudulenta. Cuando lo van a embargar, entrega a Ayudante de Santa en su lugar.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ly2sm6i0gm13yec/08x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T08E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x21.jpg" alt="El viejo y la Lisa" onmouseover="src='img/temporada08/08x21b.jpg'"onmouseout="src='img/temporada08/08x21.jpg'">
                <h3> T08E21 - El viejo y la Lisa</h3>
                <p>Burns pierde su fortuna y pide ayuda a Lisa para recuperarla con medios ecológicos.</p>
                <audio src="https://dl.dropboxusercontent.com/s/bwuhqpf9f29thje/08x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T08E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x22.jpg" alt="Pregúntale a Marge" onmouseover="src='img/temporada08/08x22b.jpg'"onmouseout="src='img/temporada08/08x22.jpg'">
                <h3> T08E22 - Pregúntale a Marge</h3>
                <p>Marge es la 'Señora que Escucha' en la iglesia cuando la gente de Springfield le pide consejos a ella en lugar de al reverendo Alegría, quien no tiene interés en escuchar problemas. Mientras tanto, Homero trata de descubrir por qué su cara está en la caja de un detergente japonés.</p>
                <audio src="https://dl.dropboxusercontent.com/s/jv41svdhb5x1oot/08x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T08E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x23.jpg" alt="El enemigo de Homero" onmouseover="src='img/temporada08/08x23b.jpg'"onmouseout="src='img/temporada08/08x23.jpg'">
                <h3> T08E23 - El enemigo de Homero</h3>
                <p>Frank Grimes, el nuevo empleado de la planta nuclear, se indigna con los malos hábitos y falta de profesionalismo que dan a Homero éxito.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qpbswzq2g8s5owm/08x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T08E24">
            <div class="bloqueCapitulos">
                <img src="img/temporada08/08x24.jpg" alt="El repertorio de refritos de Los Simpson" onmouseover="src='img/temporada08/08x24b.jpg'"onmouseout="src='img/temporada08/08x24.jpg'">
                <h3> T08E24 - El repertorio de refritos de Los Simpson</h3>
                <p>Troy McClure presenta tres historias de Los Simpson: - Oficial Gorgory P.I.: El jefe Gorgory se hace detective y se muda a Nueva Orleans. - El abuelo, la maquina del amor: El alma del Abuelo queda atrapada dentro de la máquina de Prueba del Amor de Moe. - Animación de Show de la familia Simpson: Los Simpson animan un show de variedades de los '70.</p>
                <audio src="https://dl.dropboxusercontent.com/s/8nhxdcbw7g4o8hk/08x24.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>
        <div class="contenedorCapitulos" id="T08E25">
                <div class="bloqueCapitulos">
                    <img src="img/temporada08/08x25.jpg" alt="La guerra secreta de Lisa Simpson" onmouseover="src='img/temporada08/08x25b.jpg'"onmouseout="src='img/temporada08/08x25.jpg'">
                    <h3> T08E25 - La guerra secreta de Lisa Simpson</h3>
                    <p>Bart es enviado como castigo a una escuela militar, pero Lisa quiere ir también, con lo que es la única mujer en la escuela.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/behbldtw67af420/08x25.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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