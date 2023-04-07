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
    <title>Simpsonidos - Temporada 11</title>
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
            <div class="bloqueTemporadas capitulos T11">
            <div class="tapas-temporadas">
                <h1>temporada 11</h1>
                <img src="img/tapas/tapatemp11.jpg" alt="tapa temporada 11">
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
                    <td><a href="#T11E01">T11E01</a></td>
                    <td><a href="#T11E01">Homero va a Hollywood</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E02">T11E02</a></td>
                    <td><a href="#T11E02">El cambio de Bart</a></td>
                </tr>    
                <tr>
                    <td><a href="#T11E03">T11E03</a></td>
                    <td><a href="#T11E03">Adivina quién viene a criticar</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E04">T11E04</a></td>
                    <td><a href="#T11E04">Especial de Noche de Brujas X</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E05">T11E05</a></td>
                    <td><a href="#T11E05">Homero Granjero</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E06">T11E06</a></td>
                    <td><a href="#T11E06">Hola mamá, hola papá</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E07">T11E07</a></td>
                    <td><a href="#T11E07">Mal Comportamiento</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E08">T11E08</a></td>
                    <td><a href="#T11E08">Llévate a mi esposa</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E09">T11E09</a></td>
                    <td><a href="#T11E09">Un gran embaucador</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E10">T11E10</a></td>
                    <td><a href="#T11E10">La pequeña mamá</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E11">T11E11</a></td>
                    <td><a href="#T11E11">Pérdida de fe</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E12">T11E12</a></td>
                    <td><a href="#T11E12">La familia Mansión</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E13">T11E13</a></td>
                    <td><a href="#T11E13">Jinetes galácticos</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T11E14">T11E14</a></td>
                    <td><a href="#T11E14">Solo nuevamentirijillo</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E15">T11E15</a></td>
                    <td><a href="#T11E15">Misionero: Imposible</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E16">T11E16</a></td>
                    <td><a href="#T11E16"> Pigmoelion</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E17">T11E17</a></td>
                    <td><a href="#T11E17">Bart al futuro</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E18">T11E18</a></td>
                    <td><a href="#T11E18">Días de vino y rosas</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E19">T11E19</a></td>
                    <td><a href="#T11E19">Mata al cocodrilo y huye</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E20">T11E20</a></td>
                    <td><a href="#T11E20">El último Tango en Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E21">T11E21</a></td>
                    <td><a href="#T11E21">La loca, loca, loca Marge</a></td>
                </tr>
                <tr>
                    <td><a href="#T11E22">T11E22</a></td>
                    <td><a href="#T11E22">Detrás de la risa</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T11E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x01.jpg" alt="Homero va a Hollywood" onmouseover="src='img/temporada11/11x01b.jpg'"onmouseout="src='img/temporada11/11x01.jpg'">
                <h3> T11E01 - Homero va a Hollywood</h3>
                <p>Homero consigue dos entradas para el preestreno de la nueva película de Mel Gibson. En las tarjetas de opinión sobre la película, es el único que la critica negativamente, pero Mel considera que tiene razón, así que le pide a Homero consejos para hacer una nueva versión.</p>
                <audio src="https://dl.dropboxusercontent.com/s/0yy2eeipzpyfrn6/11x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T11E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada11/11x02.jpg" alt="El cambio de Bart" onmouseover="src='img/temporada11/11x02b.jpg'"onmouseout="src='img/temporada11/11x02.jpg'">
                    <h3> T11E02 - El cambio de Bart</h3>
                    <p>Luego de que arruinara el gimnasio de la escuela en una de sus bromas, Skinner aconseja que se dé a Bart una droga para modificar su conducta.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/42zxri83xfyqn6i/11x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T11E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada11/11x03.jpg" alt="Adivina quién viene a criticar" onmouseover="src='img/temporada11/11x03b.jpg'"onmouseout="src='img/temporada11/11x03.jpg'">
                    <h3> T11E03 - Adivina quién viene a criticar</h3>
                    <p>Con la ayuda de Lisa, Homero se convierte en el nuevo crítico de cocina del periódico local, ganándose el respeto y la confianza de los lectores. La cosa se complica cuando los dueños de los restaurantes se ven afectados por las malas críticas de Homero y deciden acabar con su vida.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/vpvue2qajd1hqht/11x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T11E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x04.jpg" alt="Especial de Noche de Brujas X" onmouseover="src='img/temporada11/11x04b.jpg'"onmouseout="src='img/temporada11/11x04.jpg'">
                <h3> T11E04 - Especial de Noche de Brujas X</h3>
                <p>Se lo que hicieron, no lo nieguen: Marge mata accidentalmente a Ned Flanders, quien vuelve a la vida para perseguirlos. - Desesperadamente buscando a Xeena: Bart y Lisa adquieren superpoderes mediante radiación y tratan de liberar a Xeena (Lucy Lawless) de las garras del Comic Book Guy. - Una vida difícil y despues la muerte: La desidia de Homero causa problemas con el bug del año 2000.</p>
                <audio src="https://dl.dropboxusercontent.com/s/kvlurf8t3p38fd7/11x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T11E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x05.jpg" alt="Homero Granjero" onmouseover="src='img/temporada11/11x05b.jpg'"onmouseout="src='img/temporada11/11x05.jpg'">
                <h3> T11E05 - Homero Granjero</h3>
                <p>Homero se vuelve obsesivo después de ver una película de El Zorro, y empieza a desafiar a duelo a todo el que lo ofende (o él considera que lo ofende). Cuando alguien finalmente le acepta el desafío, Homero se lleva a la familia a vivir a una granja, donde cultiva el 'Tomacco', una combinación entre el tomate y el tabaco, esto resulta ser desagradable pero a la ves muy adictivo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/r9a4uu6egjax0m7/11x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T11E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada11/11x06.jpg" alt="Hola mamá, hola papá" onmouseover="src='img/temporada11/11x06b.jpg'"onmouseout="src='img/temporada11/11x06.jpg'">
            <h3> T11E06 - Hola mamá, hola papá</h3>
            <p>Homero consigue una partida perfecta (300 puntos) en los bolos y exprime todo lo que puede su momento de fama. Tanto, que acaba haciéndose pesado para la gente. Para animarse decide dedicar más tiempo a estar con sus hijos, pero el caso es que esto tampoco se le da demasiado bien...</p>
            <audio src="https://dl.dropboxusercontent.com/s/40tislfisag1fzs/11x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T11E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x07.jpg" alt="Mal Comportamiento" onmouseover="src='img/temporada11/11x07b.jpg'"onmouseout="src='img/temporada11/11x07.jpg'">
        <h3> T11E07 - Mal Comportamiento</h3>
        <p>Manjula da a luz a ocho hijos, que se convierten luego en atracción del zoológico.</p>
        <audio src="https://dl.dropboxusercontent.com/s/skzmax4dhdcajfr/11x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x08.jpg" alt="Llévate a mi esposa" onmouseover="src='img/temporada11/11x08b.jpg'"onmouseout="src='img/temporada11/11x08.jpg'">
        <h3> T11E08 - Llévate a mi esposa</h3>
        <p>Homero forma un grupo de motociclistas llamado Hells Satans. Cuando los verdaderos 'Hells Satans' secuestran a Marge, Homero debe salvarla.</p>
        <audio src="https://dl.dropboxusercontent.com/s/zpnyp7zex4kij3d/11x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x09.jpg" alt="Un gran embaucador" onmouseover="src='img/temporada11/11x09b.jpg'"onmouseout="src='img/temporada11/11x09.jpg'">
        <h3> T11E09 - Un gran embaucador</h3>
        <p>Luego de que la escuela se quede sin fondos, una compañía de juguetes la compra y usa a los alumnos para diseñar un juguete que tenga mucho éxito para venderlo en Navidad.</p>
        <audio src="https://dl.dropboxusercontent.com/s/8829c9mjzubk1w4/11x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x10.jpg" alt="La pequeña mamá" onmouseover="src='img/temporada11/11x10b.jpg'"onmouseout="src='img/temporada11/11x10.jpg'">
        <h3> T11E10 - La pequeña mamá</h3>
        <p>Después de sufrir un accidente, Marge encarga el cuidado de la casa a Lisa, quien organiza perfectamente las tareas. Pero Homero y Bart no están dispuestos a trabajar y la casa se convierte en una pocilga. Todo cambia cuando Lisa les hace creer que tienen lepra por su falta de higiene.</p>
        <audio src="https://dl.dropboxusercontent.com/s/epuvmncqq8h7t67/11x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x11.jpg" alt="Pérdida de fe" onmouseover="src='img/temporada11/11x11b.jpg'"onmouseout="src='img/temporada11/11x11.jpg'">
        <h3> T11E11 - Pérdida de fe</h3>
        <p>Bart adquiere fama de sanador. Mientras, Homero va a una reunión con sus compañeros de la Universidad de Springfield.</p>
        <audio src="https://dl.dropboxusercontent.com/s/1jh7r9rhdpbz28p/11x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x12.jpg" alt="La familia Mansión" onmouseover="src='img/temporada11/11x12b.jpg'"onmouseout="src='img/temporada11/11x12.jpg'">
        <h3> T11E12 - La familia Mansión</h3>
        <p>La familia Simpson cuida la mansión de Burns cuando él se interna en la clínica Mayo.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ayfu2iyzmcm5yg2/11x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T11E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada11/11x13.jpg" alt="Jinetes galácticos" onmouseover="src='img/temporada11/11x13b.jpg'"onmouseout="src='img/temporada11/11x13.jpg'">
        <h3> T11E13 - Jinetes galácticos</h3>
        <p>Tras rescatar un caballo de la feria, Homero y Bart deciden entrenarlo con la esperanza de ganar el Derby de Springfield.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ss9z6vgdwt0519t/11x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
</div>
    <div class="contenedorCapitulos" id="T11E14">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x14.jpg" alt="Solo nuevamentirijillo" onmouseover="src='img/temporada11/11x14b.jpg'"onmouseout="src='img/temporada11/11x14.jpg'">
                <h3> T11E14 - Solo nuevamentirijillo</h3>
                <p>La mujer de Ned Flanders, fallece en un inusual accidente. Ned trata de superar la terrible pérdida e intenta rehacer su vida con la ayuda de Homero.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ghokfn7hj132235/11x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
    
    <div class="contenedorCapitulos" id="T11E15">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x15.jpg" alt="Misionero: Imposible" onmouseover="src='img/temporada11/11x15b.jpg'"onmouseout="src='img/temporada11/11x15.jpg'">
                <h3> T11E15 - Misionero: Imposible</h3>
                <p>Huyendo de las avariciosas garras de la televisión pública, Homero se va de misionero a una isla del Pacífico Sur. Una vez allí, en lugar de cumplir con su labor de misionero enseñando a los nativos lo que es la religión, Homero les construye un Casino de juego con alcohol y aperitivos baratos que corrompe sus mentes y los convierte en pecadores.</p>
                <audio src="https://dl.dropboxusercontent.com/s/g5kz73894spjuwy/11x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T11E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x16.jpg" alt="Pigmoelion" onmouseover="src='img/temporada11/11x16b.jpg'"onmouseout="src='img/temporada11/11x16.jpg'">
                <h3> T11E16 - Pigmoelion</h3>
                <p>Moe se da cuenta de lo feo que es y decide poner solución al problema sometiéndose a una operación de cirugía plástica. Con su nueva cara, Moe es contratado para interpretar un papel en una telenovela, convirtiéndose en un personaje popular y tremendamente atractivo para las mujeres.</p>
                <audio src="https://dl.dropboxusercontent.com/s/n3tm17jm27vq9cw/11x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T11E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x17.jpg" alt="Bart al futuro" onmouseover="src='img/temporada11/11x17b.jpg'"onmouseout="src='img/temporada11/11x17.jpg'">
                <h3> T11E17 - Bart al futuro</h3>
                <p>Un místico le cuenta a Bart sobre su futuro, en el que es un músico que vive con Rafa Gorgory y Lisa es presidenta.</p>
                <audio src="https://dl.dropboxusercontent.com/s/6g4zu33udfv7rcm/11x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T11E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x18.jpg" alt="Días de vino y rosas" onmouseover="src='img/temporada11/11x18b.jpg'"onmouseout="src='img/temporada11/11x18.jpg'">
                <h3> T11E18 - Días de vino y rosas</h3>
                <p>Barney se da cuenta de que no es bien visto y decide dejar el alcohol para ser más productivo para la ciudad.</p>
                <audio src="https://dl.dropboxusercontent.com/s/xkn05fopsqdkyum/11x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T11E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x19.jpg" alt="Mata al cocodrilo y huye" onmouseover="src='img/temporada11/11x19b.jpg'"onmouseout="src='img/temporada11/11x19.jpg'">
                <h3> T11E19 - Mata al cocodrilo y huye</h3>
                <p>La familia se va de viaje a Florida durante el receso de primavera y accidentalmente matan a un cocodrilo que es mascota de la ciudad, por lo que se meten en problemas con la ley.</p>
                <audio src="https://dl.dropboxusercontent.com/s/obwhrcucj1vc56o/11x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T11E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x20.jpg" alt="El último Tango en Springfield" onmouseover="src='img/temporada11/11x20b.jpg'"onmouseout="src='img/temporada11/11x20.jpg'">
                <h3> T11E20 - El último Tango en Springfield</h3>
                <p>Lisa tiene dificultades cuando toma clases de tap. Mientras, Bart y Milhouse recorren un shopping cerrado.</p>
                <audio src="https://dl.dropboxusercontent.com/s/kvnuu2f603v2ct8/11x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T11E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x21.jpg" alt="La loca, loca, loca Marge" onmouseover="src='img/temporada11/11x21b.jpg'"onmouseout="src='img/temporada11/11x21.jpg'">
                <h3> T11E21 - La loca, loca, loca Marge</h3>
                <p>Una mujer que está viviendo temporariamente en la casa de Los Simpson, empieza a relacionarse con la familia y llega a tener más poder sobre la familia que Marge.</p>
                <audio src="https://dl.dropboxusercontent.com/s/1loaqe5b3fef4si/11x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T11E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada11/11x22.jpg" alt="Detrás de la risa" onmouseover="src='img/temporada11/11x22b.jpg'"onmouseout="src='img/temporada11/11x22.jpg'">
                <h3> T11E22 - Detrás de la risa</h3>
                <p>Parodiando a los típicos programas que muestran a los protagonistas de una serie detrás de las cámaras, se nos presenta Los Simpson como si fuera una serie con actores reales y nos dejan ver sus intimidades, sus disputas, su recorrido hasta la fama y las diferencias personales que existen entre los distintos personajes.</p>
                <audio src="https://dl.dropboxusercontent.com/s/gacj1bbw9ik17b7/11x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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