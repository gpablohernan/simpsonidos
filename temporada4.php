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
    <title>Simpsonidos - Temporada 4</title>
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
            <div class="bloqueTemporadas capitulos">
            <div class="tapas-temporadas">
                <h1>temporada 4</h1>
                <img src="img/tapas/tapatemp04.jpg" alt="tapa temporada 4">
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
                    <td><a href="#T04E01">T04E01</a></td>
                    <td><a href="#T04E01">Kampo Krusty</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E02">T04E02</a></td>
                    <td><a href="#T04E02">Un Tranvía Llamado Marge</a></td>
                </tr>    
                <tr>
                    <td><a href="#T04E03">T04E03</a></td>
                    <td><a href="#T04E03">Homero Hereje</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E04">T04E04</a></td>
                    <td><a href="#T04E04">La Reina de la Belleza</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E05">T04E05</a></td>
                    <td><a href="#T04E05">Especial Simpson de Noche de Brujas III</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E06">T04E06</a></td>
                    <td><a href="#T04E06">Tomy y Daly: La Película</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E07">T04E07</a></td>
                    <td><a href="#T04E07">Marge consigue Empleo</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E08">T04E08</a></td>
                    <td><a href="#T04E08">La Chica Nueva</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E09">T04E09</a></td>
                    <td><a href="#T04E09">Don Barredora</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E10">T04E10</a></td>
                    <td><a href="#T04E10">La Primera Palabra de Maggie</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E11">T04E11</a></td>
                    <td><a href="#T04E11">El Gran Corazón de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E12">T04E12</a></td>
                    <td><a href="#T04E12">Marge Contra el Monorriel</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E13">T04E13</a></td>
                    <td><a href="#T04E13">La Elección de Selma</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T04E14">T04E14</a></td>
                    <td><a href="#T04E14">Hermano Mayor, Hermano Menor</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E15">T04E15</a></td>
                    <td><a href="#T04E15">Yo Amo a Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E16">T04E16</a></td>
                    <td><a href="#T04E16">La Promesa</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E17">T04E17</a></td>
                    <td><a href="#T04E17">La Última Salida a Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E18">T04E18</a></td>
                    <td><a href="#T04E18">A Esto Hemos Llegado</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E19">T04E19</a></td>
                    <td><a href="#T04E19">El Intermedio</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E20">T04E20</a></td>
                    <td><a href="#T04E20">El Día del Garrote</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E21">T04E21</a></td>
                    <td><a href="#T04E21">Marge en Cadenas</a></td>
                </tr>
                <tr>
                    <td><a href="#T04E22">T04E22</a></td>
                    <td><a href="#T04E22">El Drama de Krusty</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T04E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x01.jpg" alt="Kampo Krusty" onmouseover="src='img/temporada04/04x01b.jpg'"onmouseout="src='img/temporada04/04x01.jpg'">
                <h3> T04E01 - Kampo Krusty</h3>
                <p>Bart y Lisa van a pasar el verano en el campamento Krusty, pero la cosa empieza a complicarse cuando llegan allí y se dan cuenta de que nada es como les habían pensado. Mientras tanto en Springfield, Homero es más feliz que nunca con Bart lejos de casa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/f4de6ar3yohg318/04x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T04E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada04/04x02.jpg" alt="Un Tranvía Llamado Marge" onmouseover="src='img/temporada04/04x02b.jpg'"onmouseout="src='img/temporada04/04x02.jpg'">
                    <h3> T04E02 - Un Tranvía Llamado Marge</h3>
                    <p>Marge participa en una versión musical de Un Tranvía Llamado Deseo, que tiene un extraño parecido con la vida cotidiana de los Simpson.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/vhd1t5dagjvr1fj/04x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T04E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada04/04x03.jpg" alt="Homero Hereje" onmouseover="src='img/temporada04/04x03b.jpg'"onmouseout="src='img/temporada04/04x03.jpg'">
                    <h3> T04E03 - Homero Hereje</h3>
                    <p>Homero, en un sueño, consigue permiso de Dios para no ir a la iglesia, lo que causa disgustos a Marge.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/0cr5vn855jgty95/04x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T04E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x04.jpg" alt="La Reina de la Belleza" onmouseover="src='img/temporada04/04x04b.jpg'"onmouseout="src='img/temporada04/04x04.jpg'">
                <h3> T04E04 - La Reina de la Belleza</h3>
                <p>Homero inscribe a Lisa en un concurso de belleza, y sale segunda. Pero cuando la ganadora sufre un accidente Lisa toma su lugar como Pequeña Miss Springfield.</p>
                <audio src="https://dl.dropboxusercontent.com/s/25rbslzkh1l2okm/04x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T04E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x05.jpg" alt="Especial Simpson de Noche de Brujas III" onmouseover="src='img/temporada04/04x05b.jpg'"onmouseout="src='img/temporada04/04x05.jpg'">
                <h3> T04E05 - Especial Simpson de Noche de Brujas III</h3>
                <p>Historias de terror: - El payaso sin piedad: Bart recibe, como regalo de cumpleaños un muñeco de Krusty que habla pero el muñeco se torna maligno. - King Homero: Adaptación de King Kong con Homero como protagonista. - Marque 'Z' para zombis: Bart trata de volver a la vida a su gato Bola de Nieve I, pero en cambio causa que los muertos se levanten.</p>
                <audio src="https://dl.dropboxusercontent.com/s/bdi3qmrv6afgmi5/04x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T04E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada04/04x06.jpg" alt="Tomy y Daly: La Película" onmouseover="src='img/temporada04/04x06b.jpg'"onmouseout="src='img/temporada04/04x06.jpg'">
            <h3> T04E06 - Tomy y Daly: La Película</h3>
            <p>Cuando Bart falla en cuidar a Maggie y se escapa en el auto, Homero lo castiga: Bart no podrá ver la película de Tomy y Daly que es lo que el más quiere.</p>
            <audio src="https://dl.dropboxusercontent.com/s/yi0rg0vgvr1tup8/04x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T04E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x07.jpg" alt="Marge consigue Empleo" onmouseover="src='img/temporada04/04x07b.jpg'"onmouseout="src='img/temporada04/04x07.jpg'">
        <h3> T04E07 - Marge consigue Empleo</h3>
        <p>La casa de los Simpson necesita una reparación de cimientos de $ 8.000, por lo que Marge consigue un trabajo en la planta nuclear. Pero las cosas se complican cuando Burns se enamora de ella.</p>
        <audio src="https://dl.dropboxusercontent.com/s/5arse03gt9cpjcs/04x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x08.jpg" alt="La Chica Nueva" onmouseover="src='img/temporada04/04x08b.jpg'"onmouseout="src='img/temporada04/04x08.jpg'">
        <h3> T04E08 - La Chica Nueva</h3>
        <p>Bart se enamora profundamente de su nueva vecina, Laura, pero su corazón sufre una gran decepción cuando ella empieza a salir con Jimbo. Mientras tanto, Homero emprende un proceso judicial contra un restaurante por no darle 'todo lo que pueda comer' como prometían.</p>
        <audio src="https://dl.dropboxusercontent.com/s/4n65bt86pkmm5vo/04x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x09.jpg" alt="Don Barredora" onmouseover="src='img/temporada04/04x09b.jpg'"onmouseout="src='img/temporada04/04x09.jpg'">
        <h3> T04E09 - Don Barredora</h3>
        <p>Después de romper los dos autos de la familia durante una tormenta de nieve, Homero compra una barredora y empieza con ella un negocio. Pero cuando Barney también empieza a vender su servicio de barredora su amistad es puesta en peligro.</p>
        <audio src="https://dl.dropboxusercontent.com/s/xhmv6vhrrpjefrh/04x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x10.jpg" alt="La Primera Palabra de Maggie" onmouseover="src='img/temporada04/04x10b.jpg'"onmouseout="src='img/temporada04/04x10.jpg'">
        <h3> T04E10 - La Primera Palabra de Maggie</h3>
        <p>Cuando entre todos tratan de que Maggie diga su primera palabra, Homero recuerda lo que pasó algunos años atrás cuando Lisa nació, la familia se mudó a su casa actual, y cuando Lisa dijo su primera palabra.</p>
        <audio src="https://dl.dropboxusercontent.com/s/sy9heak3jp20z9m/04x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x11.jpg" alt="El Gran Corazón de Homero" onmouseover="src='img/temporada04/04x11b.jpg'"onmouseout="src='img/temporada04/04x11.jpg'">
        <h3> T04E11 - El Gran Corazón de Homero</h3>
        <p>Todos los años de comer cosas ricas en colesterol le causan a Homero un ataque cardíaco. Ahora Homero debe elegir entre gastar $ 40.000 en la operación del Dr. Hibbert, o $ 129,95 en la de Nick Riviera.</p>
        <audio src="https://dl.dropboxusercontent.com/s/aw81k5j8vriorks/04x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada04/04x12.jpg" alt="Marge Contra el Monorriel" onmouseover="src='img/temporada04/04x12b.jpg'"onmouseout="src='img/temporada04/04x12.jpg'">
        <h3> T04E12 - Marge Contra el Monorriel</h3>
        <p>Después de que Burns es multado con 3 millones de dólares por depósitos ilegales de desechos nucleares, la ciudad decide gastar el dinero en un monorriel, construido con materiales baratos.</p>
        <audio src="https://dl.dropboxusercontent.com/s/49f5yqr3m390jm4/04x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T04E13">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x13.jpg" alt="La Elección de Selma" onmouseover="src='img/temporada04/04x13b.jpg'"onmouseout="src='img/temporada04/04x13.jpg'">
                <h3> T04E13 - La Elección de Selma</h3>
                <p>Siguiendo el consejo de su fallecida tía Gladiola, Selma decide que es momento de casarse y tener hijos.</p>
                <audio src="https://dl.dropboxusercontent.com/s/6uqmsujn50yeggy/04x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    </div>

    <div class="contenedorCapitulos" id="T04E14">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x14.jpg" alt="Hermano Mayor, Hermano Menor" onmouseover="src='img/temporada04/04x14b.jpg'"onmouseout="src='img/temporada04/04x14.jpg'">
                <h3> T04E14 - Hermano Mayor, Hermano Menor</h3>
                <p>Bart decide obtener un hermano mayor cuando Homero olvida ir a buscarlo después de un partido de fútbol. Homero reemplaza a Bart con un hermano menor. Mientras, Lisa se hace adicta a una hot-line de Corey.</p>
                <audio src="https://dl.dropboxusercontent.com/s/s4wyrm95bh09n93/04x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    </div>            
    
    <div class="contenedorCapitulos" id="T04E15">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x15.jpg" alt="Yo Amo a Lisa" onmouseover="src='img/temporada04/04x15b.jpg'"onmouseout="src='img/temporada04/04x15.jpg'">
                <h3> T04E15 - Yo Amo a Lisa</h3>
                <p>Es el día de San Valentín y Lisa, sintiendo pena por Rafa le regala una tarjeta amistosa. Esto hace que se enamore de Lisa y la siga a todas partes, hasta que ella explota y le deja claro que no siente ningún interés por él, destrozando su corazón.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qg74tm3ime21b4a/04x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T04E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x16.jpg" alt="La Promesa" onmouseover="src='img/temporada04/04x16b.jpg'"onmouseout="src='img/temporada04/04x16.jpg'">
                <h3> T04E16 - La Promesa</h3>
                <p>Después de ser arrestado por conducir después de beber, Homero promete a Marge dejar la cerveza por un mes. Mientras, cuando Bart arruina el proyecto científico de Lisa, ella decide investigar quién es más inteligente: Bart o un hamster.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7tkf6nald6q6pd2/04x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T04E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x17.jpg" alt="La Última Salida a Springfield" onmouseover="src='img/temporada04/04x17b.jpg'"onmouseout="src='img/temporada04/04x17.jpg'">
                <h3> T04E17 - La Última Salida a Springfield</h3>
                <p>Homero se hace líder del sindicato y negocia un nuevo contrato con la planta nuclear, consciente de que Lisa necesita frenos.</p>
                <audio src="https://dl.dropboxusercontent.com/s/6zpcy1ez6l5b7sr/04x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T04E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x18.jpg" alt="A Esto Hemos Llegado" onmouseover="src='img/temporada04/04x18b.jpg'"onmouseout="src='img/temporada04/04x18.jpg'">
                <h3> T04E18 - A Esto Hemos Llegado</h3>
                <p>Cuando Homero es lesionado seriamente por una broma de Bart, la familia recuerda en el hospital varios momentos de episodios anteriores.</p>
                <audio src="https://dl.dropboxusercontent.com/s/kfgm9lviwkcyr0n/04x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T04E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x19.jpg" alt="El Intermedio" onmouseover="src='img/temporada04/04x19b.jpg'"onmouseout="src='img/temporada04/04x19.jpg'">
                <h3> T04E19 - El Intermedio</h3>
                <p>Después de ver un episodio particularmente malo de Tom y Daly, Lisa y Bart escriben dibujos animados usando el nombre de su abuelo. Mientras, Homero va a la escuela nocturna para recuperar una materia que no había aprobado en la escuela.</p>
                <audio src="https://dl.dropboxusercontent.com/s/isovbvtwite9vhr/04x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T04E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x20.jpg" alt="El Día del Garrote" onmouseover="src='img/temporada04/04x20b.jpg'"onmouseout="src='img/temporada04/04x20.jpg'">
                <h3> T04E20 - El Día del Garrote</h3>
                <p>Cuando la ciudad de Springfield se prepara para el Día del Garrote anual (que Lisa odia), Bart es expulsado de la escuela por avergonzar a Skinner durante una inspección en la escuela.</p>
                <audio src="https://dl.dropboxusercontent.com/s/x5ff9u9504pgfo5/04x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T04E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x21.jpg" alt="Marge en Cadenas" onmouseover="src='img/temporada04/04x21b.jpg'"onmouseout="src='img/temporada04/04x21.jpg'">
                <h3> T04E21 - Marge en Cadenas</h3>
                <p>Cuando el show de Gabbo causa que el programa de Krusty sea cancelado, Krusty rápidamente llega a la pobreza. Pero Bart y Lisa le ayudan a organizar un especial de regreso, con la presencia de Bette Midler, Elizabeth Taylor, Hugh Hefner, Johnny Carson, Luke Perry, los Red Hot Chili Peppers y Barry White.</p>
                <audio src="https://dl.dropboxusercontent.com/s/3o8dwi8p7sqf0zz/04x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T04E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada04/04x22.jpg" alt="El Drama de Krusty" onmouseover="src='img/temporada04/04x22b.jpg'"onmouseout="src='img/temporada04/04x22.jpg'">
                <h3> T04E22 - El Drama de Krusty</h3>
                <p>El Señor Burns necesita sangre del tipo 0 negativo, que Bart tiene. Homero está dispuesto a hacer que Bart se la done, pero no sin una buena recompensa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/gbvr0x5ganx19v3/04x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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