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
    <title>Simpsonidos - Temporada 7</title>
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
            <div class="bloqueTemporadas capitulos T7">
            <div class="tapas-temporadas">
                <h1>temporada 7</h1>
                <img src="img/tapas/tapatemp07.jpg" alt="tapa temporada 7">
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
                    <td><a href="#T07E01">T07E01</a></td>
                    <td><a href="#T07E01">Quien mató al Sr. Burns? - Segunda parte</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E02">T07E02</a></td>
                    <td><a href="#T07E02">El hombre radioactivo</a></td>
                </tr>    
                <tr>
                    <td><a href="#T07E03">T07E03</a></td>
                    <td><a href="#T07E03">Hogar, dulce hogarcirijillo</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E04">T07E04</a></td>
                    <td><a href="#T07E04">Bart vende su alma</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E05">T07E05</a></td>
                    <td><a href="#T07E05">Lisa la vegetariana</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E06">T07E06</a></td>
                    <td><a href="#T07E06">Especial de noche de brujas VI</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E07">T07E07</a></td>
                    <td><a href="#T07E07">Homero tamaño familiar</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E08">T07E08</a></td>
                    <td><a href="#T07E08">Mamá Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E09">T07E09</a></td>
                    <td><a href="#T07E09">La Última Carcajada de Bob Patiño</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E10">T07E10</a></td>
                    <td><a href="#T07E10">El episodio espectacular 138 de Los Simpson</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E11">T07E11</a></td>
                    <td><a href="#T07E11">El bebé de Mamá</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E12">T07E12</a></td>
                    <td><a href="#T07E12">El Equipo de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E13">T07E13</a></td>
                    <td><a href="#T07E13">El Mal Vecino</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T07E14">T07E14</a></td>
                    <td><a href="#T07E14">Lucha de Clases en Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E15">T07E15</a></td>
                    <td><a href="#T07E15">Bart el soplón</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E16">T07E16</a></td>
                    <td><a href="#T07E16">Lisa, la Iconoclasta</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E17">T07E17</a></td>
                    <td><a href="#T07E17">Homero el Smithers</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E18">T07E18</a></td>
                    <td><a href="#T07E18">El día que murió la violencia</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E19">T07E19</a></td>
                    <td><a href="#T07E19">El sueño de amor de Selma</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E20">T07E20</a></td>
                    <td><a href="#T07E20">Bart recorre el mundo</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E21">T07E21</a></td>
                    <td><a href="#T07E21">22 Películas Cortas Sobre Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E22">T07E22</a></td>
                    <td><a href="#T07E22">Mi Héroe, el Abuelo</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E23">T07E23</a></td>
                    <td><a href="#T07E23">Y Dónde Está el Inmigrante?</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E24">T07E24</a></td>
                    <td><a href="#T07E24">Reventón!</a></td>
                </tr>
                <tr>
                    <td><a href="#T07E25">T07E25</a></td>
                    <td><a href="#T07E25">Yo amo a Lisa</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T07E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x01.jpg" alt="Quien mató al Sr. Burns? - Segunda parte" onmouseover="src='img/temporada07/07x01b.jpg'"onmouseout="src='img/temporada07/07x01.jpg'">
                <h3> T07E01 - Quien mató al Sr. Burns? - Segunda parte</h3>
                <p>Con Burns herido, el jefe de policía hace una prueba de ADN que lo lleva hasta la puerta de los Simpson. Homero es acusado de intento de homicidio pero escapa justo antes de que lo encarcelen. Es una carrera a ver quién llega primero a la habitación de Burns en el hospital.</p>
                <audio src="https://dl.dropboxusercontent.com/s/jfsklu6kojruysi/07x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T07E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada07/07x02.jpg" alt="El hombre radioactivo" onmouseover="src='img/temporada07/07x02b.jpg'"onmouseout="src='img/temporada07/07x02.jpg'">
                    <h3> T07E02 - El hombre radioactivo</h3>
                    <p>Unos ejecutivos de Hollywood deciden rodar la nueva película del Hombre Radioactivo en Springfield. Realizan un casting para el papel del Niño Fisión, el joven compañero del héroe, y Milhouse resulta ser el elegido, aunque no está muy convencido de querer convertirse en actor.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/qj6z6feeyx5x8w7/07x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T07E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada07/07x03.jpg" alt="Hogar, dulce hogarcirijillo" onmouseover="src='img/temporada07/07x03b.jpg'"onmouseout="src='img/temporada07/07x03.jpg'">
                    <h3> T07E03 - Hogar, dulce hogarcirijillo</h3>
                    <p>Bart, Lisa y Maggie son puestos por el Estado bajo cuidado de la familia Flanders cuando Homero y Marge son acusados de no tener capacidad para ser padres. Homero y Marge deben probar su capacidad ante las autoridades antes de tener a sus hijos de vuelta.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/6u20u0gf7t8arap/07x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T07E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x04.jpg" alt="Bart vende su alma" onmouseover="src='img/temporada07/07x04b.jpg'"onmouseout="src='img/temporada07/07x04.jpg'">
                <h3> T07E04 - Bart vende su alma</h3>
                <p>Convencido de que el alma no existe, Bart se la vende a Milhouse por cinco dólares. Más tarde, sintiendo que de verdad le falta algo, comienza una dura lucha para recuperar lo que es suyo. Mientras tanto, Moe transforma su triste bar en un restaurante familiar que atrae a un mayor número de personas.</p>
                <audio src="https://dl.dropboxusercontent.com/s/earkeo3zhnj50kg/07x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T07E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x05.jpg" alt="Lisa la vegetariana" onmouseover="src='img/temporada07/07x05b.jpg'"onmouseout="src='img/temporada07/07x05.jpg'">
                <h3> T07E05 - Lisa la vegetariana</h3>
                <p>Una visita a una aldea recreativa hace que Lisa se convierta en vegetariana, lo que la lleva a enfrentarse con Homero, ya que ella no puede tolerar el comportamiento carnívoro de su padre.</p>
                <audio src="https://dl.dropboxusercontent.com/s/zxy7exfvy97znn3/07x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T07E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada07/07x06.jpg" alt="Especial de noche de brujas VI" onmouseover="src='img/temporada07/07x06b.jpg'"onmouseout="src='img/temporada07/07x06.jpg'">
            <h3> T07E06 - Especial de noche de brujas VI</h3>
            <p>El ataque de los anuncios: Los carteles gigantes toman vida durante una tormenta eléctrica. - Pesadilla en la avenida siempre viva: Después de un accidente, Willie jura vengar su muerte matando a los alumnos de la escuela en sus sueños. - Homero al cubo: Homero descubre la tercera dimensión en su intento de esconderse de Patty y Selma.</p>
            <audio src="https://dl.dropboxusercontent.com/s/6i3zluqe6dqifk7/07x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T07E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x07.jpg" alt="Homero tamaño familiar" onmouseover="src='img/temporada07/07x07b.jpg'"onmouseout="src='img/temporada07/07x07.jpg'">
        <h3> T07E07 - Homero tamaño familiar</h3>
        <p>Un fuerte deseo de trabajar en la casa le da a Homero la idea de aumentar mucho de peso para poder declararse discapacitado.</p>
        <audio src="https://dl.dropboxusercontent.com/s/vx8qz3ldlp68lim/07x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x08.jpg" alt="Mamá Simpson" onmouseover="src='img/temporada07/07x08b.jpg'"onmouseout="src='img/temporada07/07x08.jpg'">
        <h3> T07E08 - Mamá Simpson</h3>
        <p>Por un malentendido, Homero descubre a su madre viva, pero con un pasado oscuro y el FBI buscándola.</p>
        <audio src="https://dl.dropboxusercontent.com/s/zgizwlp0fz81o5c/07x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x09.jpg" alt="La Última Carcajada de Bob Patiño" onmouseover="src='img/temporada07/07x09b.jpg'"onmouseout="src='img/temporada07/07x09.jpg'">
        <h3> T07E09 - La Última Carcajada de Bob Patiño</h3>
        <p>Bob Patiño se escapa de la prisión, roba una bomba atómica y amenaza con detonarla si la ciudad de Springfield no abole la televisión.</p>
        <audio src="https://dl.dropboxusercontent.com/s/jir5gtc3cn42bzn/07x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x10.jpg" alt="El episodio espectacular 138 de Los Simpson" onmouseover="src='img/temporada07/07x10b.jpg'"onmouseout="src='img/temporada07/07x10.jpg'">
        <h3> T07E10 - El episodio espectacular 138 de Los Simpson</h3>
        <p>Troy McClure presenta un programa especial en el que se repasa la historia de Los Simpson con imágenes de capítulos anteriores.</p>
        <audio src="https://dl.dropboxusercontent.com/s/pcc1sdzkwpgp33p/07x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x11.jpg" alt="El bebé de Mamá" onmouseover="src='img/temporada07/07x11b.jpg'"onmouseout="src='img/temporada07/07x11.jpg'">
        <h3> T07E11 - El bebé de Mamá</h3>
        <p>Bart logra mantener un robo en un supermercado secreto ante Marge y Homero. Pero se dan cuenta cuando la familia va al mismo supermercado a sacarse la foto de navidad.</p>
        <audio src="https://dl.dropboxusercontent.com/s/81kuvlaafv6tchc/07x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x12.jpg" alt="El Equipo de Homero" onmouseover="src='img/temporada07/07x12b.jpg'"onmouseout="src='img/temporada07/07x12.jpg'">
        <h3> T07E12 - El Equipo de Homero</h3>
        <p>Gracias a una alucinación de Burns con éter, Homero consigue el dinero para formar un equipo de bolos. Pero Burns ahora quiere entrar. Mientras, una remera de Bart causa una rebelión en la escuela, con lo que Skinner decide incorporar uniformes escolares.</p>
        <audio src="https://dl.dropboxusercontent.com/s/zewtciogmkrzn1g/07x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T07E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada07/07x13.jpg" alt="El Mal Vecino" onmouseover="src='img/temporada07/07x13b.jpg'"onmouseout="src='img/temporada07/07x13.jpg'">
        <h3> T07E13 - El Mal Vecino</h3>
        <p>Los celos de Homero ante la atención que reciben los nuevos vecinos, George y Barbara Bush, se convierte en rabia cuando el ex presidente nalguea a Bart.</p>
        <audio src="https://dl.dropboxusercontent.com/s/alowmo85mulkplo/07x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T07E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada07/07x14.jpg" alt="Lucha de Clases en Springfield" onmouseover="src='img/temporada07/07x14b.jpg'"onmouseout="src='img/temporada07/07x14.jpg'">
            <h3> T07E14 - Lucha de Clases en Springfield</h3>
            <p>La familia Simpson se codea con la alta sociedad cuando una compañera de la escuela de Marge los invita al Springfield Country Club.</p>
            <audio src="https://dl.dropboxusercontent.com/s/6igflh8p91fcgmr/07x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T07E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada07/07x15.jpg" alt="Bart el soplón" onmouseover="src='img/temporada07/07x15b.jpg'"onmouseout="src='img/temporada07/07x15.jpg'">
            <h3> T07E15 - Bart el soplón</h3>
            <p>Bart tratando de conseguir un autógrafo de Krusty hace que se descubra la cuenta secreta ilegal que el payaso tenía para ahorrar impuestos defraudando a la Hacienda. Krusty es embargado y decide fingir su suicidio.</p>
            <audio src="https://dl.dropboxusercontent.com/s/i12k0htdka1nzm9/07x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T07E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x16.jpg" alt="Lisa, la Iconoclasta" onmouseover="src='img/temporada07/07x16b.jpg'"onmouseout="src='img/temporada07/07x16.jpg'">
                <h3> T07E16 - Lisa, la Iconoclasta</h3>
                <p>Mientras investiga el pasado de Jeremías Springfield, Lisa descubre que el fundador de la ciudad no fue el héroe que todos piensan.</p>
                <audio src="https://dl.dropboxusercontent.com/s/dfiq8jb92o3gj9p/07x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T07E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x17.jpg" alt="Homero el Smithers" onmouseover="src='img/temporada07/07x17b.jpg'"onmouseout="src='img/temporada07/07x17.jpg'">
                <h3> T07E17 - Homero el Smithers</h3>
                <p>Smithers se toma unas muy necesitadas vacaciones y, para asegurar su posición en la planta nuclear, da a Homero la tarea de reemplazarlo temporariamente.</p>
                <audio src="https://dl.dropboxusercontent.com/s/cou8udy91qzk8et/07x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T07E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x18.jpg" alt="El día que murió la violencia" onmouseover="src='img/temporada07/07x18b.jpg'"onmouseout="src='img/temporada07/07x18.jpg'">
                <h3> T07E18 - El día que murió la violencia</h3>
                <p>Con la ayuda de Lionel Hutz, Bart lleva al estudio de Tomy y Daly a la bancarrota cuando prueba que la idea de Daly fue robada hace unos 70 u 80 años.</p>
                <audio src="https://dl.dropboxusercontent.com/s/b99ail2sjlyobas/07x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T07E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x19.jpg" alt="El sueño de amor de Selma" onmouseover="src='img/temporada07/07x19b.jpg'"onmouseout="src='img/temporada07/07x19.jpg'">
                <h3> T07E19 - El sueño de amor de Selma</h3>
                <p>La carrera de Troy McClure tiene posibilidades de sobrevivir cuando es visto con una mujer. Y para mantenerse en la prensa, Troy tiene que hacer más que salir con esa mujer, que casualmente es Selma.</p>
                <audio src="https://dl.dropboxusercontent.com/s/8dc6lky96atwrce/07x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T07E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x20.jpg" alt="Bart recorre el mundo" onmouseover="src='img/temporada07/07x20b.jpg'"onmouseout="src='img/temporada07/07x20.jpg'">
                <h3> T07E20 - Bart recorre el mundo</h3>
                <p>Con una licencia de conductor falsa, Bart se lleva a Martin, Milhouse y Nelson de viaje. Mientras, Lisa pasa tiempo con Homero en la planta nuclear.</p>
                <audio src="https://dl.dropboxusercontent.com/s/cizzw2lxnmf04rr/07x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T07E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x21.jpg" alt="22 Películas Cortas Sobre Springfield" onmouseover="src='img/temporada07/07x21b.jpg'"onmouseout="src='img/temporada07/07x21.jpg'">
                <h3> T07E21 - 22 Películas Cortas Sobre Springfield</h3>
                <p>En una tarde aburrida, Bart y Milhouse se preguntan si alguna vez pasa algo interesante en Springfield. Esto lleva a una serie de clips sobre la ciudad.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7qrt6e85bmltcjf/07x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T07E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x22.jpg" alt="Mi Héroe, el Abuelo" onmouseover="src='img/temporada07/07x22b.jpg'"onmouseout="src='img/temporada07/07x22.jpg'">
                <h3> T07E22 - Mi Héroe, el Abuelo</h3>
                <p>Un tesoro enterrado de la segunda guerra mundial es el precio de una tontina, en la que el Abuelo y Burns son los únicos sobrevivientes. Pero Burns quiere asegurarse de ser él quien obtenga el tesoro.</p>
                <audio src="https://dl.dropboxusercontent.com/s/z7wsfipf8pdqg1l/07x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T07E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x23.jpg" alt="Y Dónde Está el Inmigrante?" onmouseover="src='img/temporada07/07x23b.jpg'"onmouseout="src='img/temporada07/07x23.jpg'">
                <h3> T07E23 - Y Dónde Está el Inmigrante?</h3>
                <p>La fiebre de la anti-inmigración llega a Springfield y también a Homero hasta que descubre que Apu es un inmigrante ilegal.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ren9aj0p6mb5822/07x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T07E24">
            <div class="bloqueCapitulos">
                <img src="img/temporada07/07x24.jpg" alt="Reventón!" onmouseover="src='img/temporada07/07x24b.jpg'"onmouseout="src='img/temporada07/07x24.jpg'">
                <h3> T07E24 - Reventón!</h3>
                <p>Homero se gana un lugar en el festival Lollapalooza, como parte de una gira de fenómenos. Su número consiste en contener balas de cañón con su panza.</p>
                <audio src="https://dl.dropboxusercontent.com/s/koj4j7otlzj4mm6/07x24.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>
        <div class="contenedorCapitulos" id="T07E25">
                <div class="bloqueCapitulos">
                    <img src="img/temporada07/07x25.jpg" alt="Yo amo a Lisa" onmouseover="src='img/temporada07/07x25b.jpg'"onmouseout="src='img/temporada07/07x25.jpg'">
                    <h3> T07E25 - Yo amo a Lisa</h3>
                    <p>Lisa quiere hacer amigos en las vacaciones, por lo que decide dejar su personalidad de lado.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/d2olv3xpmneis8k/07x25.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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