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
    <title>Simpsonidos - Temporada 6</title>
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
            <div class="bloqueTemporadas capitulos T6">
            <div class="tapas-temporadas">
                <h1>temporada 6</h1>
                <img src="img/tapas/tapatemp06.jpg" alt="tapa temporada 6">
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
                    <td><a href="#T06E01">T06E01</a></td>
                    <td><a href="#T06E01">El diabólico Bart</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E02">T06E02</a></td>
                    <td><a href="#T06E02">La rival de Lisa</a></td>
                </tr>    
                <tr>
                    <td><a href="#T06E03">T06E03</a></td>
                    <td><a href="#T06E03">Recuerdos de amor</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E04">T06E04</a></td>
                    <td><a href="#T06E04">La tierra de Tomy y Daly</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E05">T06E05</a></td>
                    <td><a href="#T06E05">El regreso de Bob Patiño</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E06">T06E06</a></td>
                    <td><a href="#T06E06">Especial de noche de brujas V</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E07">T06E07</a></td>
                    <td><a href="#T06E07">La novia de Bart</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E08">T06E08</a></td>
                    <td><a href="#T06E08">Lisa y los deportes</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E09">T06E09</a></td>
                    <td><a href="#T06E09">Homero el malo</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E10">T06E10</a></td>
                    <td><a href="#T06E10">El abuelo y la ineficiencia romántica</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E11">T06E11</a></td>
                    <td><a href="#T06E11">Miedo a volar</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E12">T06E12</a></td>
                    <td><a href="#T06E12">Homero el grande</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E13">T06E13</a></td>
                    <td><a href="#T06E13">Y con Maggie son tres</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T06E14">T06E14</a></td>
                    <td><a href="#T06E14">El cometa de Bart</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E15">T06E15</a></td>
                    <td><a href="#T06E15">Homero el payaso</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E16">T06E16</a></td>
                    <td><a href="#T06E16">Bart contra Australia</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E17">T06E17</a></td>
                    <td><a href="#T06E17">Homero contra Patty y Selma</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E18">T06E18</a></td>
                    <td><a href="#T06E18">Una estrella estrellada</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E19">T06E19</a></td>
                    <td><a href="#T06E19">La Boda de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E20">T06E20</a></td>
                    <td><a href="#T06E20">Un galgo llamado Monty</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E21">T06E21</a></td>
                    <td><a href="#T06E21">Lucha educativa</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E22">T06E22</a></td>
                    <td><a href="#T06E22">Por la ciudad de Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E23">T06E23</a></td>
                    <td><a href="#T06E23">Contacto en Springfield</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E24">T06E24</a></td>
                    <td><a href="#T06E24">El limón de Troya</a></td>
                </tr>
                <tr>
                    <td><a href="#T06E25">T06E25</a></td>
                    <td><a href="#T06E25">Quien mató al Sr. Burns? - Primera parte</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T06E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x01.jpg" alt="El diabólico Bart" onmouseover="src='img/temporada06/06x01b.jpg'"onmouseout="src='img/temporada06/06x01.jpg'">
                <h3> T06E01 - El diabólico Bart</h3>
                <p>Los Simpson compran una pileta y disfrutan de una inmediata popularidad. Pero Bart se rompe una pierna, y pasa el verano en la ventana de su pieza, mirando a los vecinos con un telescopio. Se aburre hasta que ve a Ned Flanders matar a su esposa.</p>
                <audio src="https://dl.dropboxusercontent.com/s/wopckna042ivfsj/06x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T06E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada06/06x02.jpg" alt="La rival de Lisa" onmouseover="src='img/temporada06/06x02b.jpg'"onmouseout="src='img/temporada06/06x02.jpg'">
                    <h3> T06E02 - La rival de Lisa</h3>
                    <p>Una nueva compañera de Lisa es más inteligente, más joven y toca mejor el saxo que ella, situación que asusta a Lisa. Mientras, Homero encuentra un camión de azúcar volcado y empieza a vender azúcar.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/stbziaw9lubgt7h/06x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T06E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada06/06x03.jpg" alt="Recuerdos de amor" onmouseover="src='img/temporada06/06x03b.jpg'"onmouseout="src='img/temporada06/06x03.jpg'">
                    <h3> T06E03 - Recuerdos de amor</h3>
                    <p>Después de leer una novela romántica, Marge anima a la familia a recordar sus romances del pasado, lo que sirve como excusa para presentar fragmentos de episodios anteriores.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/rgx8t4s9bmk81mb/06x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T06E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x04.jpg" alt="La tierra de Tomy y Daly" onmouseover="src='img/temporada06/06x04b.jpg'"onmouseout="src='img/temporada06/06x04.jpg'">
                <h3> T06E04 - La tierra de Tomy y Daly</h3>
                <p>El viaje familiar a la tierra de Tomy y Daly, el lugar más violento de la Tierra, es una carga hasta que todos los robots enloquecen y quieren asesinar a la familia.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ow1uk2o1qu0ydbn/06x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T06E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x05.jpg" alt="El regreso de Bob Patiño" onmouseover="src='img/temporada06/06x05b.jpg'"onmouseout="src='img/temporada06/06x05.jpg'">
                <h3> T06E05 - El regreso de Bob Patiño</h3>
                <p>Con la ayuda de un locutor de radio, el alcalde Diamante es presionado para que libere a Bob Patiño. Cuando sale, Bob se postula para alcalde y gana. Ahora, Bart y Lisa deberán probar que no ganó legalmente.</p>
                <audio src="https://dl.dropboxusercontent.com/s/h9vz3iw0yf7kqhv/06x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T06E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada06/06x06.jpg" alt="Especial de noche de brujas V" onmouseover="src='img/temporada06/06x06b.jpg'"onmouseout="src='img/temporada06/06x06.jpg'">
            <h3> T06E06 - Especial de noche de brujas V</h3>
            <p>El resplandor: La familia debe cuidar la mansión del Sr. Burns. Él decide cortar la televisión y llevarse la cerveza, lo que causa que Homero enloquezca. - El castigo del tiempo: Homero logra retroceder en el tiempo. - La cafetería de las pesadillas: Cuando las aulas de detención están llenas, en la cafetería comienzan a cocinar a los alumnos.</p>
            <audio src="https://dl.dropboxusercontent.com/s/is07sch6193vn3p/06x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T06E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x07.jpg" alt="La novia de Bart" onmouseover="src='img/temporada06/06x07b.jpg'"onmouseout="src='img/temporada06/06x07.jpg'">
        <h3> T06E07 - La novia de Bart</h3>
        <p>Bart se enamora de la hija del reverendo Alegría, quien roba el dinero de las limosnas de la iglesia y hace que todos lo culpen a él.</p>
        <audio src="https://dl.dropboxusercontent.com/s/d73eyrrtpi77twj/06x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x08.jpg" alt="Lisa y los deportes" onmouseover="src='img/temporada06/06x08b.jpg'"onmouseout="src='img/temporada06/06x08.jpg'">
        <h3> T06E08 - Lisa y los deportes</h3>
        <p>Para aprobar gimnasia, Lisa forma parte de un equipo infantil de hockey y se convierte en la jugadora más valiosa del grupo siendo tan buena como Bart, lo que hace que los dos hermanos entren en competencia directa, tanto en la cancha como en casa.</p>
        <audio src="https://dl.dropboxusercontent.com/s/8ztbew5ppates3k/06x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x09.jpg" alt="Homero el malo" onmouseover="src='img/temporada06/06x09b.jpg'"onmouseout="src='img/temporada06/06x09.jpg'">
        <h3> T06E09 - Homero el malo</h3>
        <p>La vida de Homero se arruina cuando el simple acto de agarrar una golosina es malinterpretado como acoso sexual por la nueva niñera de la familia.</p>
        <audio src="https://dl.dropboxusercontent.com/s/5bcd1wxgcckpab8/06x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x10.jpg" alt="El abuelo y la ineficiencia romántica" onmouseover="src='img/temporada06/06x10b.jpg'"onmouseout="src='img/temporada06/06x10.jpg'">
        <h3> T06E10 - El abuelo y la ineficiencia romántica</h3>
        <p>El tónico del Abuelo salva la vida sexual de Homero y Marge, pero quiebra la relación entre padre e hijo. Mientras, Bart piensa que Springfield está invadida por ovnis.</p>
        <audio src="https://dl.dropboxusercontent.com/s/9xtthie2n9kg08f/06x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x11.jpg" alt="Miedo a volar" onmouseover="src='img/temporada06/06x11b.jpg'"onmouseout="src='img/temporada06/06x11.jpg'">
        <h3> T06E11 - Miedo a volar</h3>
        <p>Se revela el miedo a volar de Marge cuando Homero consigue un viaje a casi cualquier estado. Para vencerlo, Marge consulta una psicóloga.</p>
        <audio src="https://dl.dropboxusercontent.com/s/4po9g8qklpq044x/06x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x12.jpg" alt="Homero el grande" onmouseover="src='img/temporada06/06x12b.jpg'"onmouseout="src='img/temporada06/06x12.jpg'">
        <h3> T06E12 - Homero el grande</h3>
        <p>Homero se une a una sociedad secreta, en la que su grandeza es revelada, pero sólo después de destruir el pergamino sagrado.</p>
        <audio src="https://dl.dropboxusercontent.com/s/1hgwxr5yee3umpu/06x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T06E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada06/06x13.jpg" alt="Y con Maggie son tres" onmouseover="src='img/temporada06/06x13b.jpg'"onmouseout="src='img/temporada06/06x13.jpg'">
        <h3> T06E13 - Y con Maggie son tres</h3>
        <p>Cuando Lisa se pregunta por qué no hay fotos de Maggie en el álbum familiar, Homero le cuenta la historia de cómo tuvo que dejar su trabajo soñado cuando Maggie nació.</p>
        <audio src="https://dl.dropboxusercontent.com/s/huzdkymh5dt8hrm/06x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T06E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada06/06x14.jpg" alt="El cometa de Bart" onmouseover="src='img/temporada06/06x14b.jpg'"onmouseout="src='img/temporada06/06x14.jpg'">
            <h3> T06E14 - El cometa de Bart</h3>
            <p>Los días de Springfield están contados cuando Bart descubre un cometa que se dirige hacia la ciudad. Ahora hay que decidir quién enfrentará al cometa y quién se quedará en el refugio de Flanders.</p>
            <audio src="https://dl.dropboxusercontent.com/s/l1pluh93ugvjrme/06x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T06E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada06/06x15.jpg" alt="Homero el payaso" onmouseover="src='img/temporada06/06x15b.jpg'"onmouseout="src='img/temporada06/06x15.jpg'">
            <h3> T06E15 - Homero el payaso</h3>
            <p>El nuevo trabajo de Homero como doble de Krusty lo pone en aprietos con la mafia.</p>
            <audio src="https://dl.dropboxusercontent.com/s/bm3bunjnou1pond/06x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T06E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x16.jpg" alt="Bart contra Australia" onmouseover="src='img/temporada06/06x16b.jpg'"onmouseout="src='img/temporada06/06x16.jpg'">
                <h3> T06E16 - Bart contra Australia</h3>
                <p>El gobierno de Australia no se impresiona con una llamada de broma de Bart y quiere que pida perdón en persona.</p>
                <audio src="https://dl.dropboxusercontent.com/s/fj8hgdfvnaffuly/06x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T06E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x17.jpg" alt="Homero contra Patty y Selma" onmouseover="src='img/temporada06/06x17b.jpg'"onmouseout="src='img/temporada06/06x17.jpg'">
                <h3> T06E17 - Homero contra Patty y Selma</h3>
                <p>Homero necesita un préstamo y Patty y Selma son su último recurso. Mientras, Bart hace ballet.</p>
                <audio src="https://dl.dropboxusercontent.com/s/4293ssej2g826jq/06x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T06E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x18.jpg" alt="Una estrella estrellada" onmouseover="src='img/temporada06/06x18b.jpg'"onmouseout="src='img/temporada06/06x18.jpg'">
                <h3> T06E18 - Una estrella estrellada</h3>
                <p>Para incrementar la popularidad de la ciudad, Springfield organiza un festival de cine. Marge invita al crítico Jay Sherman (de The Critic) como jurado.</p>
                <audio src="https://dl.dropboxusercontent.com/s/y0ko64gnc5hvxxn/06x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T06E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x19.jpg" alt="La Boda de Lisa" onmouseover="src='img/temporada06/06x19b.jpg'"onmouseout="src='img/temporada06/06x19.jpg'">
                <h3> T06E19 - La Boda de Lisa</h3>
                <p>Lisa va a la Feria del Renacimiento de Springfield, donde una adivina le cuenta sobre sus futuros planes maritales.</p>
                <audio src="https://dl.dropboxusercontent.com/s/2jegyjspts4zc0m/06x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T06E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x20.jpg" alt="Un galgo llamado Monty" onmouseover="src='img/temporada06/06x20b.jpg'"onmouseout="src='img/temporada06/06x20.jpg'">
                <h3> T06E20 - Un galgo llamado Monty</h3>
                <p>La naturaleza de Huesos da a los Simpson un nuevo perro y 25 cachorros. Cuando Burns roba los cachorros, Bart y Lisa tratan de descubrir para qué los quiere.</p>
                <audio src="https://dl.dropboxusercontent.com/s/nhdf4ek486d991x/06x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T06E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x21.jpg" alt="Lucha educativa" onmouseover="src='img/temporada06/06x21b.jpg'"onmouseout="src='img/temporada06/06x21.jpg'">
                <h3> T06E21 - Lucha educativa</h3>
                <p>Bart consigue que los maestros de la escuela se declaren en huelga. Pero para su sorpresa su maestra suplente es Marge. Mientras, Lisa trata de sobrevivir a la situación.</p>
                <audio src="https://dl.dropboxusercontent.com/s/wfhn404if87ytev/06x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T06E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x22.jpg" alt="Por la ciudad de Springfield" onmouseover="src='img/temporada06/06x22b.jpg'"onmouseout="src='img/temporada06/06x22.jpg'">
                <h3> T06E22 - Por la ciudad de Springfield</h3>
                <p>Cuando visita a Bart en el hospital, Lisa aprende una lección de vida cuando encuentra a Encías Sangrantes Murphy, quien le cuenta su historia por última vez.</p>
                <audio src="https://dl.dropboxusercontent.com/s/h732pmlcbm98lr5/06x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T06E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x23.jpg" alt="Contacto en Springfield" onmouseover="src='img/temporada06/06x23b.jpg'"onmouseout="src='img/temporada06/06x23.jpg'">
                <h3> T06E23 - Contacto en Springfield</h3>
                <p>Hay un nuevo policía en la ciudad y su nombre es Marge Simpson. Su trabajo es limpiar la ciudad de criminales. Pero Marge rápidamente descubre que no todos los criminales están en las calles.</p>
                <audio src="https://dl.dropboxusercontent.com/s/3y3znpptp6eyw01/06x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T06E24">
            <div class="bloqueCapitulos">
                <img src="img/temporada06/06x24.jpg" alt="El limón de Troya" onmouseover="src='img/temporada06/06x24b.jpg'"onmouseout="src='img/temporada06/06x24.jpg'">
                <h3> T06E24 - El limón de Troya</h3>
                <p>Bart dirige un grupo de chicos en un operativo para traer de regreso el amado limonero de la ciudad, que fue robado por chicos de la ciudad de al lado.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qju6q55olmxpkiq/06x24.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>
        <div class="contenedorCapitulos" id="T06E25">
                <div class="bloqueCapitulos">
                    <img src="img/temporada06/06x25.jpg" alt="Quien mató al Sr. Burns? - Primera parte" onmouseover="src='img/temporada06/06x25b.jpg'"onmouseout="src='img/temporada06/06x25.jpg'">
                    <h3> T06E25 - Quien mató al Sr. Burns? - Primera parte</h3>
                    <p>Herbert Powell vuelve, y pide a los Simpson ayuda para llevar a cabo una idea que tuvo para un invento, usando el dinero que Homero ganó en el Premio Montgomery Burns por Logros Destacados en el Campo de la Excelencia.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/s9i3nml6uiazxok/06x25.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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