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
    <title>Simpsonidos - Temporada 10</title>
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
            <div class="bloqueTemporadas capitulos T10">
            <div class="tapas-temporadas">
                <h1>temporada 10</h1>
                <img src="img/tapas/tapatemp10.jpg" alt="tapa temporada 10">
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
                    <td><a href="#T10E01">T10E01</a></td>
                    <td><a href="#T10E01">La sazón del baile</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E02">T10E02</a></td>
                    <td><a href="#T10E02">El mago de la terraza Siempreverde</a></td>
                </tr>    
                <tr>
                    <td><a href="#T10E03">T10E03</a></td>
                    <td><a href="#T10E03">Bart la madre</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E04">T10E04</a></td>
                    <td><a href="#T10E04">Especial de noche de brujas IX</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E05">T10E05</a></td>
                    <td><a href="#T10E05">Cuando se anhela a una estrella</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E06">T10E06</a></td>
                    <td><a href="#T10E06">D'oh en el viento</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E07">T10E07</a></td>
                    <td><a href="#T10E07">Lisa obtiene un 10</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E08">T10E08</a></td>
                    <td><a href="#T10E08">Homero Simpson en problemas renales</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E09">T10E09</a></td>
                    <td><a href="#T10E09">Encuentro con la mafia</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E10">T10E10</a></td>
                    <td><a href="#T10E10">Viva Ned Flanders</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E11">T10E11</a></td>
                    <td><a href="#T10E11">A un Bart Salvaje nadie puede destrozarlo</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E12">T10E12</a></td>
                    <td><a href="#T10E12">Domingo, cruel domingo</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E13">T10E13</a></td>
                    <td><a href="#T10E13">Homero al máximo</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T10E14">T10E14</a></td>
                    <td><a href="#T10E14">Me acompaña cupido</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E15">T10E15</a></td>
                    <td><a href="#T10E15">El submarino amarillo</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E16">T10E16</a></td>
                    <td><a href="#T10E16">Un espacio para Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E17">T10E17</a></td>
                    <td><a href="#T10E17">Homero trabaja demasiado</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E18">T10E18</a></td>
                    <td><a href="#T10E18">Historias de la biblia</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E19">T10E19</a></td>
                    <td><a href="#T10E19">Arte de mamá y papá</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E20">T10E20</a></td>
                    <td><a href="#T10E20">El anciano y el estudiante con malas calificaciones</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E21">T10E21</a></td>
                    <td><a href="#T10E21">Monty no puede comprar mi amor</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E22">T10E22</a></td>
                    <td><a href="#T10E22">Salvaron el cerebro de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T10E23">T10E23</a></td>
                    <td><a href="#T10E23">Treinta minutos sobre Tokio</a></td>
                </tr>
                
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T10E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x01.jpg" alt="La sazón del baile" onmouseover="src='img/temporada10/10x01b.jpg'"onmouseout="src='img/temporada10/10x01.jpg'">
                <h3> T10E01 - La sazón del baile</h3>
                <p>Lisa ayuda a integrarse a la escuela a una nueva alumna, cuyas actitudes pueden ser un poco maduras para su edad. Mientras, Homero y Bart tratan de vender grasa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ehi8jpw8sdz4b69/10x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T10E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada10/10x02.jpg" alt="El mago de la terraza Siempreverde" onmouseover="src='img/temporada10/10x02b.jpg'"onmouseout="src='img/temporada10/10x02.jpg'">
                    <h3> T10E02 - El mago de la terraza Siempreverde</h3>
                    <p>Homero se da cuenta de que desperdició la mitad de su vida e, inspirado por Thomas Edison, decide convertirse en inventor.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/k18jn7q4wd42e9o/10x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T10E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada10/10x03.jpg" alt="Bart la madre" onmouseover="src='img/temporada10/10x03b.jpg'"onmouseout="src='img/temporada10/10x03.jpg'">
                    <h3> T10E03 - Bart la madre</h3>
                    <p>Bart mata accidentalmente a un pájaro y toma la responsabilidad de incubar los dos huevos que había en su nido.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/mt8izqnbhjay0bh/10x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T10E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x04.jpg" alt="Especial de noche de brujas IX" onmouseover="src='img/temporada10/10x04b.jpg'"onmouseout="src='img/temporada10/10x04.jpg'">
                <h3> T10E04 - Especial de noche de brujas IX</h3>
                <p>El bisoñé diabólico: Homero se transplanta el pelo del delincuente recientemente ejecutado Snake. - Terror en Caricatulandia: Bart y Lisa son chupados dentro del televisor, donde tienen que escapar de Tomy y Daly. - Pulpos Galácticos: Cuando a Maggie le crecen tentáculos, se revela que es hija de Kang y no de Homero.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ku3991u8406qawu/10x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T10E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x05.jpg" alt="Cuando se anhela a una estrella" onmouseover="src='img/temporada10/10x05b.jpg'"onmouseout="src='img/temporada10/10x05.jpg'">
                <h3> T10E05 - Cuando se anhela a una estrella</h3>
                <p>Homero consigue trabajo como asistente de Kim Basinger y Alec Baldwin. </p>
                <audio src="https://dl.dropboxusercontent.com/s/63ys6e9nrkf3bmy/10x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T10E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada10/10x06.jpg" alt="D'oh en el viento" onmouseover="src='img/temporada10/10x06b.jpg'"onmouseout="src='img/temporada10/10x06.jpg'">
            <h3> T10E06 - D'oh en el viento</h3>
            <p>Homero quiere saber cuál es su segundo nombre, y acaba convertido en hippie.</p>
            <audio src="https://dl.dropboxusercontent.com/s/o90jxt6or6g12cf/10x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T10E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x07.jpg" alt="Lisa obtiene un 10" onmouseover="src='img/temporada10/10x07b.jpg'"onmouseout="src='img/temporada10/10x07.jpg'">
        <h3> T10E07 - Lisa obtiene un 10</h3>
        <p>Lisa descubre cuán adictivos pueden ser los videojuegos, y se olvida de estudiar para un examen. Siguiendo el consejo de Bart, hace trampa y consigue una nota que le posibilita a la escuela un gran aumento de presupuesto. Mientras, Homero cría una langosta.</p>
        <audio src="https://dl.dropboxusercontent.com/s/kjisvux1r1fa9zf/10x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x08.jpg" alt="Homero Simpson en problemas renales" onmouseover="src='img/temporada10/10x08b.jpg'"onmouseout="src='img/temporada10/10x08.jpg'">
        <h3> T10E08 - Homero Simpson en problemas renales</h3>
        <p>Cuando Homero no quiere parar el auto, los riñones del abuelo explotan, y necesita un transplante. ¿Le donará Homero uno de los suyos o huirá cobardemente?</p>
        <audio src="https://dl.dropboxusercontent.com/s/fs8qadz3w0lqw7u/10x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x09.jpg" alt="Encuentro con la mafia" onmouseover="src='img/temporada10/10x09b.jpg'"onmouseout="src='img/temporada10/10x09.jpg'">
        <h3> T10E09 - Encuentro con la mafia</h3>
        <p>Homero se convierte en guardaespaldas del alcalde, pero descubre algo terrible que pone en riesgo su vida y la del alcalde Diamante.</p>
        <audio src="https://dl.dropboxusercontent.com/s/rzny5mmd15or7ka/10x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x10.jpg" alt="Viva Ned Flanders" onmouseover="src='img/temporada10/10x10b.jpg'"onmouseout="src='img/temporada10/10x10.jpg'">
        <h3> T10E10 - Viva Ned Flanders</h3>
        <p>Homero y Ned Flanders van a Las Vegas, donde sin darse cuenta se casan con dos mozas.</p>
        <audio src="https://dl.dropboxusercontent.com/s/i1s2hrwesmnrk08/10x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x11.jpg" alt="A un Bart Salvaje nadie puede destrozarlo" onmouseover="src='img/temporada10/10x11b.jpg'"onmouseout="src='img/temporada10/10x11.jpg'">
        <h3> T10E11 - A un Bart Salvaje nadie puede destrozarlo</h3>
        <p>Cuando los Isótopos de Springfield ganan un partido, Homero, Barney, Lenny y lo festejan destruyendo la escuela. Pero se culpa a los alumnos y la ciudad incorpora un toque de queda.</p>
        <audio src="https://dl.dropboxusercontent.com/s/vif726nan4qjzzh/10x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x12.jpg" alt="Domingo, cruel domingo" onmouseover="src='img/temporada10/10x12b.jpg'"onmouseout="src='img/temporada10/10x12.jpg'">
        <h3> T10E12 - Domingo, cruel domingo</h3>
        <p>Cuando un agente de viajes llamado Wally le vende a Homero entradas para el Super Bowl, él estimula a todos los notables de Springfield para sumarse al grupo. Pero una vez en el estadio se dan cuenta de que las entradas son falsas. Mientras, Marge y Lisa pintan huevos.</p>
        <audio src="https://dl.dropboxusercontent.com/s/7gzn345ptzbp0ni/10x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T10E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada10/10x13.jpg" alt="Homero al máximo" onmouseover="src='img/temporada10/10x13b.jpg'"onmouseout="src='img/temporada10/10x13.jpg'">
        <h3> T10E13 - Homero al máximo</h3>
        <p>Cuando una nueva serie de televisión convierte a su personaje principal, cuyo nombre no es otro que Homero Simpson, en un bufón, Homero trata de tomar distancia de él cambiando su nombre a Max Power.</p>
        <audio src="https://dl.dropboxusercontent.com/s/yp4gj6dtzl5qhjz/10x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T10E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada10/10x14.jpg" alt="Me acompaña cupido" onmouseover="src='img/temporada10/10x14b.jpg'"onmouseout="src='img/temporada10/10x14.jpg'">
            <h3> T10E14 - Me acompaña cupido</h3>
            <p>Cuando Apu le da a su esposa regalos valiosos para San Valentín, pone a todos los hombres de Springfield en ridículo.</p>
            <audio src="https://dl.dropboxusercontent.com/s/6lc1ydtuxzoen8b/10x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T10E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada10/10x15.jpg" alt="El submarino amarillo" onmouseover="src='img/temporada10/10x15b.jpg'"onmouseout="src='img/temporada10/10x15.jpg'">
            <h3> T10E15 - El submarino amarillo</h3>
            <p>Cuando Homero compra por error la versión femenina del Canyonero, se avergüenza e intercambia su auto con el de Marge. Pero cuando ella se sube a su nuevo auto, se intoxica con el poder del vehículo y se vuelve muy agresiva. Esto inicialmente la mete en problemas con el jefe Gorgory, pero es útil cuando el instinto animal es necesario para salvar a la familia.</p>
            <audio src="https://dl.dropboxusercontent.com/s/fe2r97np8pvr7jw/10x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T10E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x16.jpg" alt="Un espacio para Lisa" onmouseover="src='img/temporada10/10x16b.jpg'"onmouseout="src='img/temporada10/10x16.jpg'">
                <h3> T10E16 - Un espacio para Lisa</h3>
                <p>Lisa tiene stress cuando tiene que compartir el cuarto con Bart. Para aliviarla, Homero la lleva a una tienda New Age donde ambos se sumergen en tanques de privación sensorial. Mientras, Marge descubre que puede escuchar las conversaciones de los demás por sus teléfonos celulares y se obsesiona con dramas personales de extraños.</p>
                <audio src="https://dl.dropboxusercontent.com/s/rh0m1cm0wz4eshh/10x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T10E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x17.jpg" alt="Homero trabaja demasiado" onmouseover="src='img/temporada10/10x17b.jpg'"onmouseout="src='img/temporada10/10x17.jpg'">
                <h3> T10E17 - Homero trabaja demasiado</h3>
                <p>Homero reemplaza a un camionero en su recorrido después de ganarle en un concurso de quién come más carne. Mientras tanto, Marge y Lisa intentan instalar un nuevo timbre en casa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7ge5m3x2mvwddqn/10x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T10E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x18.jpg" alt="Historias de la biblia" onmouseover="src='img/temporada10/10x18b.jpg'"onmouseout="src='img/temporada10/10x18.jpg'">
                <h3> T10E18 - Historias de la biblia</h3>
                <p>Cuando el reverendo da un sermón particularmente aburrido los Simpson se duermen y sueñan que son Adán y Eva, Moisés, y David enfrentando a Goliat.</p>
                <audio src="https://dl.dropboxusercontent.com/s/szc9etltk4l8dze/10x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T10E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x19.jpg" alt="Arte de mamá y papá" onmouseover="src='img/temporada10/10x19b.jpg'"onmouseout="src='img/temporada10/10x19.jpg'">
                <h3> T10E19 - Arte de mamá y papá</h3>
                <p>La comunidad artística de Springfield se interesa en arte externo creado por Homero.</p>
                <audio src="https://dl.dropboxusercontent.com/s/33xbrh22a4kxiid/10x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T10E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x20.jpg" alt="El anciano y el estudiante con malas calificaciones" onmouseover="src='img/temporada10/10x20b.jpg'"onmouseout="src='img/temporada10/10x20.jpg'">
                <h3> T10E20 - El anciano y el estudiante con malas calificaciones</h3>
                <p>Cuando Bart arruina la posibilidad de Springfield de ser sede de los Juegos Olímpicos, es castigado con tareas comunitarias en el geriátrico.</p>
                <audio src="https://dl.dropboxusercontent.com/s/p5tyzbfcrsgah0b/10x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T10E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x21.jpg" alt="Monty no puede comprar mi amor" onmouseover="src='img/temporada10/10x21b.jpg'"onmouseout="src='img/temporada10/10x21.jpg'">
                <h3> T10E21 - Monty no puede comprar mi amor</h3>
                <p>Envidioso por la admiración que muestra la gente hacia el multimillonario Arthur Fortune, el Sr. Burns decide cambiar su imagen pública siguiendo los consejos de Homero, pero cuando esto no funciona, el viejo millonario decide viajar a Escocia para cazar al monstruo del lago Ness.</p>
                <audio src="https://dl.dropboxusercontent.com/s/b372g8hsvczb6z2/10x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T10E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x22.jpg" alt="Salvaron el cerebro de Lisa" onmouseover="src='img/temporada10/10x22b.jpg'"onmouseout="src='img/temporada10/10x22.jpg'">
                <h3> T10E22 - Salvaron el cerebro de Lisa</h3>
                <p>Después de enviar una carta a la ciudad pidiendo que todos dejen de humillarse Lisa es invitada a entrar en MENSA.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ou4pt7k5bu00ohn/10x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T10E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada10/10x23.jpg" alt="Treinta minutos sobre Tokio" onmouseover="src='img/temporada10/10x23b.jpg'"onmouseout="src='img/temporada10/10x23.jpg'">
                <h3> T10E23 - Treinta minutos sobre Tokio</h3>
                <p>Los Simpson viajan a Tokio con la intención de pasar las vacaciones, pero una vez allí, pierden todo su dinero y para poder volver a casa se ven obligados a participar en un salvaje concurso de televisión japonés que tortura a sus participantes.</p>
                <audio src="https://dl.dropboxusercontent.com/s/t70lq1tys0ajezf/10x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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