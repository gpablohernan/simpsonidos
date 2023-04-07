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
    <title>Simpsonidos - Temporada 9</title>
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
            <div class="bloqueTemporadas capitulos T9">
            <div class="tapas-temporadas">
                <h1>temporada 9</h1>
                <img src="img/tapas/tapatemp09.jpg" alt="tapa temporada 9">
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
                    <td><a href="#T09E01">T09E01</a></td>
                    <td><a href="#T09E01">La ciudad de Nueva York contra Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E02">T09E02</a></td>
                    <td><a href="#T09E02">Vida prestada</a></td>
                </tr>    
                <tr>
                    <td><a href="#T09E03">T09E03</a></td>
                    <td><a href="#T09E03">El sax de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E04">T09E04</a></td>
                    <td><a href="#T09E04">Especial de noche de Brujas VIII</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E05">T09E05</a></td>
                    <td><a href="#T09E05">Familia peligrosa</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E06">T09E06</a></td>
                    <td><a href="#T09E06">Bart se convierte en estrella</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E07">T09E07</a></td>
                    <td><a href="#T09E07">Las dos señoras Nahasapeemapetilon</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E08">T09E08</a></td>
                    <td><a href="#T09E08">La escéptica Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E09">T09E09</a></td>
                    <td><a href="#T09E09">La cruda realidad</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E10">T09E10</a></td>
                    <td><a href="#T09E10">Milagro en la avenida Siempreviva</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E11">T09E11</a></td>
                    <td><a href="#T09E11">Todos cantan, todos bailan</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E12">T09E12</a></td>
                    <td><a href="#T09E12">Bart en la feria</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E13">T09E13</a></td>
                    <td><a href="#T09E13">La secta Simpson</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T09E14">T09E14</a></td>
                    <td><a href="#T09E14">El autobús de la muerte</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E15">T09E15</a></td>
                    <td><a href="#T09E15">La última tentación de Krusty</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E16">T09E16</a></td>
                    <td><a href="#T09E16">El bueno, la mala y el feo</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E17">T09E17</a></td>
                    <td><a href="#T09E17">Lisa, Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E18">T09E18</a></td>
                    <td><a href="#T09E18">Gorgorito</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E19">T09E19</a></td>
                    <td><a href="#T09E19">Mi querido capitán Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E20">T09E20</a></td>
                    <td><a href="#T09E20">Misión deducible</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E21">T09E21</a></td>
                    <td><a href="#T09E21">Lisa Comentarista</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E22">T09E22</a></td>
                    <td><a href="#T09E22">Basura de titanes</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E23">T09E23</a></td>
                    <td><a href="#T09E23">El rey de la colina</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E24">T09E24</a></td>
                    <td><a href="#T09E24">Hemos perdido a nuestra Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T09E25">T09E25</a></td>
                    <td><a href="#T09E25">Marge, ¿Puedo dormir con el peligro?</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T09E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x01.jpg" alt="La ciudad de Nueva York contra Homero" onmouseover="src='img/temporada09/09x01b.jpg'"onmouseout="src='img/temporada09/09x01.jpg'">
                <h3> T09E01 - La ciudad de Nueva York contra Homero</h3>
                <p>Cuando Barney es elegido conductor designado, deja el auto de Homero mal estacionado en el 'World Trade Center' de Nueva York. Homero tiene que recuperarlo y esperar que llegue un policía que le saque el cepo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/s53meqtpbdh5k4d/09x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T09E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada09/09x02.jpg" alt="Vida prestada" onmouseover="src='img/temporada09/09x02b.jpg'"onmouseout="src='img/temporada09/09x02.jpg'">
                    <h3> T09E02 - Vida prestada</h3>
                    <p>En la fiesta del vigésimo aniversario de Seymour Skinner como director de la escuela primaria de Springfield, aparece un hombre que dice ser el verdadero Seymour Skinner. La ciudad se consterna al saber que el hombre que todos conocíamos era en realidad un impostor.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/sx93wa2xve1xpd5/09x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T09E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada09/09x03.jpg" alt="El sax de Lisa" onmouseover="src='img/temporada09/09x03b.jpg'"onmouseout="src='img/temporada09/09x03.jpg'">
                    <h3> T09E03 - El sax de Lisa</h3>
                    <p>Cuando el saxo de Lisa se rompe, Marge recuerda cómo obtuvo Lisa su primer saxofón en el año 1990.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/7p7je4unixst6pc/09x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T09E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x04.jpg" alt="Especial de noche de Brujas VIII" onmouseover="src='img/temporada09/09x04b.jpg'"onmouseout="src='img/temporada09/09x04.jpg'">
                <h3> T09E04 - Especial de noche de Brujas VIII</h3>
                <p>El hombre Homega: Cuando una bomba de neutrones francesa explota en Springfield, el único sobreviviente parece ser Homero. - Mosca blanca contra mosca negra: Bart accidentalmente mezcla su ADN con el de una mosca. - Pacto sustancioso: en Sprynge-Fielde en 1649, es la temporada de caza de brujas. Y van por Marge.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ixoi7e9cmm1xjzk/09x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T09E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x05.jpg" alt="Familia peligrosa" onmouseover="src='img/temporada09/09x05b.jpg'"onmouseout="src='img/temporada09/09x05.jpg'">
                <h3> T09E05 - Familia peligrosa</h3>
                <p>Después de una pelea en una cancha de fútbol, Homero compra una pistola para defender a su familia, para disgusto de Marge.</p>
                <audio src="https://dl.dropboxusercontent.com/s/er3dotbv60do45r/09x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T09E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada09/09x06.jpg" alt="Bart se convierte en estrella" onmouseover="src='img/temporada09/09x06b.jpg'"onmouseout="src='img/temporada09/09x06.jpg'">
            <h3> T09E06 - Bart se convierte en estrella</h3>
            <p>Flanders es el entrenador de un equipo infantil de fútbol americano, pero Homero está obsesionado porque se vaya. Finalmente lo cansa y Flanders le deja su puesto. Como nuevo entrenador, lo único que hace es 'cortar' jugadores y tratar de estimular a Bart.</p>
            <audio src="https://dl.dropboxusercontent.com/s/eoy4hq9syvqqj3a/09x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T09E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x07.jpg" alt="Las dos señoras Nahasapeemapetilon" onmouseover="src='img/temporada09/09x07b.jpg'"onmouseout="src='img/temporada09/09x07.jpg'">
        <h3> T09E07 - Las dos señoras Nahasapeema-petilon</h3>
        <p>Se le anuncia a Apu que ha llegado la hora de hacer efectivo su casamiento arreglado.</p>
        <audio src="https://dl.dropboxusercontent.com/s/fwqmvczb1qxpvqf/09x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x08.jpg" alt="La escéptica Lisa" onmouseover="src='img/temporada09/09x08b.jpg'"onmouseout="src='img/temporada09/09x08.jpg'">
        <h3> T09E08 - La escéptica Lisa</h3>
        <p>Cuando Lisa encuentra un esqueleto que toda la ciudad cree que es de un ángel, ella está resuelta a probar que se equivocan.</p>
        <audio src="https://dl.dropboxusercontent.com/s/bwrn0yotfsji8lf/09x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x09.jpg" alt="La cruda realidad" onmouseover="src='img/temporada09/09x09b.jpg'"onmouseout="src='img/temporada09/09x09.jpg'">
        <h3> T09E09 - La cruda realidad</h3>
        <p>Marge acepta un trabajo de vendedora de bienes raíces, pero tiene problemas con su uso de la verdad.</p>
        <audio src="https://dl.dropboxusercontent.com/s/s1q804qblzm7v2i/09x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x10.jpg" alt="Milagro en la avenida Siempreviva" onmouseover="src='img/temporada09/09x10b.jpg'"onmouseout="src='img/temporada09/09x10.jpg'">
        <h3> T09E10 - Milagro en la avenida Siempreviva</h3>
        <p>Bart accidentalmente quema todos los regalos de navidad de la familia junto con el árbol. Pero dice que un ladrón se los llevó. Toda la ciudad se apiada de la familia hasta que se descubre la mentira.</p>
        <audio src="https://dl.dropboxusercontent.com/s/nrlywcy9usju5xc/09x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x11.jpg" alt="Todos cantan, todos bailan" onmouseover="src='img/temporada09/09x11b.jpg'"onmouseout="src='img/temporada09/09x11.jpg'">
        <h3> T09E11 - Todos cantan, todos bailan</h3>
        <p>Cuando Homero descubre que la película que alquiló es musical, todos rememoran los momentos musicales de capítulos anteriores.</p>
        <audio src="https://dl.dropboxusercontent.com/s/h0uzkkphexqis7o/09x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x12.jpg" alt="Bart en la feria" onmouseover="src='img/temporada09/09x12b.jpg'"onmouseout="src='img/temporada09/09x12.jpg'">
        <h3> T09E12 - Bart en la feria</h3>
        <p>Homero y Bart se hacen amigos de unos empleados de una feria, quienes les roban la casa.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ujp9ttu1o4xfxwt/09x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T09E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada09/09x13.jpg" alt="La secta Simpson" onmouseover="src='img/temporada09/09x13b.jpg'"onmouseout="src='img/temporada09/09x13.jpg'">
        <h3> T09E13 - La secta Simpson</h3>
        <p>Una nueva congregación religiosa se establece en Springfield prometiendo a sus integrantes una vida más feliz y próspera en un lejano planeta. La mayoría de los ciudadanos de Springfield, incluidos los Simpson, caen en sus garras y sólo Marge es capaz de abrirles los ojos ante los auténticos fines de esta secta.</p>
        <audio src="https://dl.dropboxusercontent.com/s/22qrph30ccuy1kx/09x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T09E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada09/09x14.jpg" alt="El autobús de la muerte" onmouseover="src='img/temporada09/09x14b.jpg'"onmouseout="src='img/temporada09/09x14.jpg'">
            <h3> T09E14 - El autobús de la muerte</h3>
            <p>Los chicos de la escuela primaria de Springfield se van a hacer un modelo de las Naciones Unidas, pero el micro se cae al agua y todos quedan atrapados en una isla desierta. Mientras, Homero quiere poner un servicio de Internet.</p>
            <audio src="https://dl.dropboxusercontent.com/s/rd5dh5wuwowenpk/09x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T09E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada09/09x15.jpg" alt="La última tentación de Krusty" onmouseover="src='img/temporada09/09x15b.jpg'"onmouseout="src='img/temporada09/09x15.jpg'">
            <h3> T09E15 - La última tentación de Krusty</h3>
            <p>Cuando ve que su estilo está atrasado, Krusty decide abandonar la comedia. Pero en cuanto los demás consideran sus quejas graciosas cambia de idea.</p>
            <audio src="https://dl.dropboxusercontent.com/s/2w33b0m19pyzwdb/09x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T09E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x16.jpg" alt="El bueno, la mala y el feo" onmouseover="src='img/temporada09/09x16b.jpg'"onmouseout="src='img/temporada09/09x16.jpg'">
                <h3> T09E16 - El bueno, la mala y el feo</h3>
                <p>Moe se cansa de estar solo y necesita una mujer. Cuando la encuentra, gasta todo su dinero para agasajarla, por lo que pide a Homero que robe su auto para poder cobrar el seguro. Esto causa a Homero muchos problemas.</p>
                <audio src="https://dl.dropboxusercontent.com/s/73sdcwqgfd7fxzf/09x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T09E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x17.jpg" alt="Lisa, Simpson" onmouseover="src='img/temporada09/09x17b.jpg'"onmouseout="src='img/temporada09/09x17.jpg'">
                <h3> T09E17 - Lisa, Simpson</h3>
                <p>Cuando Lisa no puede resolver un acertijo que todos los demás sí, le empieza a preocupar si no estará actuando en ella el gen de los Simpson, que los vuelve estúpidos a partir de los 9 años</p>
                <audio src="https://dl.dropboxusercontent.com/s/1jd483xbz8j87lf/09x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T09E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x18.jpg" alt="Gorgorito" onmouseover="src='img/temporada09/09x18b.jpg'"onmouseout="src='img/temporada09/09x18.jpg'">
                <h3> T09E18 - Gorgorito</h3>
                <p>Después de ver que Rafa no tiene amigos, Marge decide invitarlo para que juegue con Bart. Al principio, Bart no está muy contento pasando su tiempo junto a él, pero todo cambia cuando descubre que su padre, el jefe Gorgory, tiene una llave maestra que abre todas las puertas de Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/5ilmmi24rq56678/09x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T09E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x19.jpg" alt="Mi querido capitán Simpson" onmouseover="src='img/temporada09/09x19b.jpg'"onmouseout="src='img/temporada09/09x19.jpg'">
                <h3> T09E19 - Mi querido capitán Simpson</h3>
                <p>Homero es despedido y entra a la marina. Mientras, Milhouse se pone un aro y estimula a toda la escuela a hacer lo mismo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/lbltn2q7llr2gr4/09x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T09E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x20.jpg" alt="Misión deducible" onmouseover="src='img/temporada09/09x20b.jpg'"onmouseout="src='img/temporada09/09x20.jpg'">
                <h3> T09E20 - Misión deducible</h3>
                <p>Cuando una auditoria revela los fraudes que Homero comete con sus impuestos, se le obliga a trabajar para el FBI si no quiere ir a la cárcel.</p>
                <audio src="https://dl.dropboxusercontent.com/s/seu0v47gu8kep9z/09x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T09E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x21.jpg" alt="Lisa Comentarista" onmouseover="src='img/temporada09/09x21b.jpg'"onmouseout="src='img/temporada09/09x21.jpg'">
                <h3> T09E21 - Lisa Comentarista</h3>
                <p>Lisa consigue un espacio para hacer un noticiero infantil por televisión, pero Bart le roba protagonismo con notas supuestamente sensibles. Mientras, Homero consigue un mono ayudante.</p>
                <audio src="https://dl.dropboxusercontent.com/s/0jq3zj73t6bb1wj/09x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T09E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x22.jpg" alt="Basura de titanes" onmouseover="src='img/temporada09/09x22b.jpg'"onmouseout="src='img/temporada09/09x22.jpg'">
                <h3> T09E22 - Basura de titanes</h3>
                <p>Cuando Homero se pelea con los basureros, decide postularse como encargado de sanidad de Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ud7rjzd5suatpdb/09x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T09E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x23.jpg" alt="El rey de la colina" onmouseover="src='img/temporada09/09x23b.jpg'"onmouseout="src='img/temporada09/09x23.jpg'">
                <h3> T09E23 - El rey de la colina</h3>
                <p>Después de avergonzar a Bart, Homero decide hacer gimnasia y una dieta de barras energéticas de manzana. Esto lo lleva a intentar escalar la montaña más alta de Springfield en un movimiento publicitario para la barra energética.</p>
                <audio src="https://dl.dropboxusercontent.com/s/54phhd0ik8qmu53/09x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T09E24">
            <div class="bloqueCapitulos">
                <img src="img/temporada09/09x24.jpg" alt="Hemos perdido a nuestra Lisa" onmouseover="src='img/temporada09/09x24b.jpg'"onmouseout="src='img/temporada09/09x24.jpg'">
                <h3> T09E24 - Hemos perdido a nuestra Lisa</h3>
                <p>Es el último día en la exposición de los Tesoros de Isis, y Lisa no se la quiere perder. Consigue el permiso de Homero para ir en colectivo, pero se pierde.</p>
                <audio src="https://dl.dropboxusercontent.com/s/81uug1vg8n5nd4i/09x24.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>
        <div class="contenedorCapitulos" id="T09E25">
                <div class="bloqueCapitulos">
                    <img src="img/temporada09/09x25.jpg" alt="Marge, ¿Puedo dormir con el peligro?" onmouseover="src='img/temporada09/09x25b.jpg'"onmouseout="src='img/temporada09/09x25.jpg'">
                    <h3> T09E25 - Marge, ¿Puedo dormir con el peligro?</h3>
                    <p>Homero y Marge tienen encuentros románticos en lugares públicos, estimulados por el miedo a ser atrapados. Y lo son. Mientras, Bart y Lisa, usando un detector de metales del Abuelo, encuentran el final alternativo de Casablanca.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/1nnbhoqshxmdwop/09x25.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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