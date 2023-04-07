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
    <title>Simpsonidos - Temporada 3</title>
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
            <div class="bloqueTemporadas capitulos T3">
            <div class="tapas-temporadas">
                <h1>temporada 3</h1>
                <img src="img/tapas/tapatemp03.jpg" alt="tapa temporada 3">
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
                    <td><a href="#T03E01">T03E01</a></td>
                    <td><a href="#T03E01">Papá está Loco</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E02">T03E02</a></td>
                    <td><a href="#T03E02">El Patriotismo de Lisa</a></td>
                </tr>    
                <tr>
                    <td><a href="#T03E03">T03E03</a></td>
                    <td><a href="#T03E03">El Día que Cayó Flanders</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E04">T03E04</a></td>
                    <td><a href="#T03E04">El Pequeño Padrino</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E05">T03E05</a></td>
                    <td><a href="#T03E05">Homero al Diccionario</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E06">T03E06</a></td>
                    <td><a href="#T03E06">De Tal Padre, Tal Payaso</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E07">T03E07</a></td>
                    <td><a href="#T03E07">Especial de Noche de Brujas II</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E08">T03E08</a></td>
                    <td><a href="#T03E08">El Pony de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E09">T03E09</a></td>
                    <td><a href="#T03E09">Tardes de Trueno</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E10">T03E10</a></td>
                    <td><a href="#T03E10">Llamarada Moe</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E11">T03E11</a></td>
                    <td><a href="#T03E11">Burns y Los Alemanes</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E12">T03E12</a></td>
                    <td><a href="#T03E12">Me Casé con Marge</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E13">T03E13</a></td>
                    <td><a href="#T03E13">Bart y la Radio</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T03E14">T03E14</a></td>
                    <td><a href="#T03E14">Los Pronósticos de Lisa</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E15">T03E15</a></td>
                    <td><a href="#T03E15">Homero se Queda Solo</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E16">T03E16</a></td>
                    <td><a href="#T03E16">Bart, el Amante</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E17">T03E17</a></td>
                    <td><a href="#T03E17">Homero al Bat</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E18">T03E18</a></td>
                    <td><a href="#T03E18">Vacaciones Distintas</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E19">T03E19</a></td>
                    <td><a href="#T03E19">Nuestro Mejor Amigo</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E20">T03E20</a></td>
                    <td><a href="#T03E20">Homero el Campirano</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E21">T03E21</a></td>
                    <td><a href="#T03E21">El Viudo Negro</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E22">T03E22</a></td>
                    <td><a href="#T03E22">El Rock de Otto</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E23">T03E23</a></td>
                    <td><a href="#T03E23">Milhouse se Enamora</a></td>
                </tr>
                <tr>
                    <td><a href="#T03E24">T03E24</a></td>
                    <td><a href="#T03E24">Él es mi Hermano</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T03E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x01.jpg" alt="Papá está Loco" onmouseover="src='img/temporada03/03x01b.jpg'"onmouseout="src='img/temporada03/03x01.jpg'">
                <h3> T03E01 - Papá está Loco</h3>
                <p>Bart deja su gorra roja en el lavarropas, por lo que todas las camisas de Homero se tiñen de rosa. Homero usa una de esas camisas rosas en la planta nuclear. Se lo toma por loco y se lo manda a un manicomio, donde conoce a un hombre que habla y camina como Michael Jackson.</p>
                <audio src="https://dl.dropboxusercontent.com/s/rpv1q8t5n09n295/03x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T03E02">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x02.jpg" alt="El Patriotismo de Lisa" onmouseover="src='img/temporada03/03x02b.jpg'"onmouseout="src='img/temporada03/03x02.jpg'">
                <h3> T03E02 - El Patriotismo de Lisa</h3>
                <p>Lisa gana un viaje para toda la familia a Washington en un concurso de ensayos patrióticos del Reading Digest. Pero su fe en la democracia es severamente afectada cuando ve a un legislador aceptar un soborno.</p>
                <audio src="https://dl.dropboxusercontent.com/s/9brrn61oq3f0zah/03x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T03E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada03/03x03.jpg" alt="El Día que Cayó Flanders" onmouseover="src='img/temporada03/03x03b.jpg'"onmouseout="src='img/temporada03/03x03.jpg'">
                    <h3> T03E03 - El Día que Cayó Flanders</h3>
                    <p>El deseo de Homero de ver a Flanders arruinado se hace realidad cuando el religioso vecino de los Simpson deja su trabajo para poner una tienda de artículos para zurdos que no tiene éxito entre los ciudadanos de Springfield.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/s9ulilfu59qjxst/03x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T03E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x04.jpg" alt="El Pequeño Padrino" onmouseover="src='img/temporada03/03x04b.jpg'"onmouseout="src='img/temporada03/03x04.jpg'">
                <h3> T03E04 - El Pequeño Padrino</h3>
                <p>Después de un día de escuela particularmente malo, Bart cae dentro de un club de mafiosos. Se hace cantinero, pero cuando llega tarde después de que Skinner lo castigara, Skinner desaparece.</p>
                <audio src="https://dl.dropboxusercontent.com/s/zo5fwk6l4dg8n3b/03x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T03E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x05.jpg" alt="Homero al Diccionario" onmouseover="src='img/temporada03/03x05b.jpg'"onmouseout="src='img/temporada03/03x05.jpg'">
                <h3> T03E05 - Homero al Diccionario</h3>
                <p>Cuando Homero salva por accidente a dos plantas nucleares se convierte en un héroe y es admirado por Lisa. El problema es que lo ha hecho sin saber cómo y siente que es un impostor mentiroso que no merece ningún reconocimiento. Mientras tanto, Bart y Milhouse han dejado de ser amigos porque la Sra. Van Houten considera que Bart es una mala influencia para su hijo.</p>
                <audio src="https://dl.dropboxusercontent.com/s/096t8qhq9hc366c/03x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T03E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada03/03x06.jpg" alt="De Tal Padre, Tal Payaso" onmouseover="src='img/temporada03/03x06b.jpg'"onmouseout="src='img/temporada03/03x06.jpg'">
            <h3> T03E06 - De Tal Padre, Tal Payaso</h3>
            <p>Krusty va a cenar de una vez por todas para agradecer a Bart por creer en él, y revela un secreto: su verdadero nombre es Krustofsky, y no ve a su padre desde hace más de veinte años, cuando decidió hacerse payaso en lugar de rabino. Ahora, Bart y Lisa tratan de reunir al payaso y al rabino.</p>
            <audio src="https://dl.dropboxusercontent.com/s/ygibjbn983rgz6w/03x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T03E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x07.jpg" alt="Especial de Noche de Brujas II" onmouseover="src='img/temporada03/03x07b.jpg'"onmouseout="src='img/temporada03/03x07.jpg'">
        <h3> T03E07 - Especial de Noche de Brujas II</h3>
        <p>Los Simpson tienen pesadillas: - Pesadilla de Lisa: Compran una garra de mono que concede deseos, pero con efectos secundarios. - Pesadilla de Bart: La gente de Springfield tiene que ser feliz, sino el chico con poderes mentales les hará daño. - Pesadilla de Homero: A Homero lo des-piden de la planta nuclear y trabaja cavando tumbas. Se duerme en una de ellas y es elegido experimentar con él.</p>
        <audio src="https://dl.dropboxusercontent.com/s/lvsuaywjicofmto/03x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x08.jpg" alt="El Pony de Lisa" onmouseover="src='img/temporada03/03x08b.jpg'"onmouseout="src='img/temporada03/03x08.jpg'">
        <h3> T03E08 - El Pony de Lisa</h3>
        <p>Después de decepcionar a Lisa por enésima vez, Homero decide que la mejor forma de recuperar su amor es comprándole lo que ella siempre ha anhelado, un pony. El problema para Homero es que necesita más dinero para mantener los gastos del animal y ese dinero lo consigue trabajando de noche en el Kwik-E-Mart.</p>
        <audio src="https://dl.dropboxusercontent.com/s/89b0r4oa63s2jzh/03x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x09.jpg" alt="Tardes de Trueno" onmouseover="src='img/temporada03/03x09b.jpg'"onmouseout="src='img/temporada03/03x09.jpg'">
        <h3> T03E09 - Tardes de Trueno</h3>
        <p>Para relacionarse con Bart, Homero lo ayuda a construir un auto de carreras 'de caja de jabón'. Martin se accidenta durante las pruebas de clasificación y Bart tiene que decidir entre darle la espalda a su padre y ser el conductor suplente de Martin, o correr en su caja de jabón y resignarse a que Nelson gane.</p>
        <audio src="https://dl.dropboxusercontent.com/s/piqtera6b1z3ola/03x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x10.jpg" alt="Llamarada Moe" onmouseover="src='img/temporada03/03x10b.jpg'"onmouseout="src='img/temporada03/03x10.jpg'">
        <h3> T03E10 - Llamarada Moe</h3>
        <p>Homero inventa la bebida de moda en Springfield. Pero cuando Moe le roba la receta y produce con ella el suceso de su taberna, Homero busca venganza.</p>
        <audio src="https://dl.dropboxusercontent.com/s/qn6exjfmrcp2lxy/03x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x11.jpg" alt="Burns y Los Alemanes" onmouseover="src='img/temporada03/03x11b.jpg'"onmouseout="src='img/temporada03/03x11.jpg'">
        <h3> T03E11 - Burns y Los Alemanes</h3>
        <p>La decisión de Burns de vender la Planta Nuclear a unos empresarios alemanes por $ 100.000.000 provoca varios cambios en la compañía, empezando por el despido del inspector de seguridad, Homero Simpson.</p>
        <audio src="https://dl.dropboxusercontent.com/s/99cca0hf1i5y6ki/03x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x12.jpg" alt="Me Casé con Marge" onmouseover="src='img/temporada03/03x12b.jpg'"onmouseout="src='img/temporada03/03x12.jpg'">
        <h3> T03E12 - Me Casé con Marge</h3>
        <p>La posibilidad de que Marge vuelva a estar embarazada, hace que Homero recuerde los días en que él y Marge esperaban el nacimiento de Bart, allá por el año 1980. Eran unos días difíciles para la feliz pareja que, después de engendrar a su hijo antes del matrimonio, luchaban por conseguir un poco de estabilidad familiar, cosa que Homero encontró en la Planta de Energía Nuclear.</p>
        <audio src="https://dl.dropboxusercontent.com/s/k8j9ncxkh4yszf0/03x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T03E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada03/03x13.jpg" alt="Bart y la Radio" onmouseover="src='img/temporada03/03x13b.jpg'"onmouseout="src='img/temporada03/03x13.jpg'">
        <h3> T03E13 - Bart y la Radio</h3>
        <p>Es el décimo cumpleaños de Bart. Recibe un micrófono de radio, con el que empieza a hacer bromas a todo el mundo, incluyendo hacerse pasar por un tal Timmy O Toole, quien se cayó en un pozo.</p>
        <audio src="https://dl.dropboxusercontent.com/s/sp0qv2wgo6hga6u/03x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
    </div>
    <div class="contenedorCapitulos" id="T03E14">
        <div class="bloqueCapitulos">
            <img src="img/temporada03/03x14.jpg" alt="Los Pronósticos de Lisa" onmouseover="src='img/temporada03/03x14b.jpg'"onmouseout="src='img/temporada03/03x14.jpg'">
            <h3> T03E14 - Los Pronósticos de Lisa</h3>
            <p>Lisa descubre que sabe predecir los resultados de los partidos de fútbol americano, lo que la acerca a Homero. Pero Lisa se da cuenta de que su relación puede terminar con la temporada.</p>
            <audio src="https://dl.dropboxusercontent.com/s/yef520zgkq27iac/03x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T03E15">
        <div class="bloqueCapitulos">
            <img src="img/temporada03/03x15.jpg" alt="Homero se Queda Solo" onmouseover="src='img/temporada03/03x15b.jpg'"onmouseout="src='img/temporada03/03x15.jpg'">
            <h3> T03E15 - Homero se Queda Solo</h3>
            <p>Marge se rebela contra sus días de amas de casa y se toma unas vacaciones sola en Rancho Relaxo, dejando a Bart y Lisa con Patty y Selma y a Maggie con Homero. Pero Maggie la extraña y se va en su búsqueda.</p>
            <audio src="https://dl.dropboxusercontent.com/s/u1d7fttns5fwddq/03x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T03E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x16.jpg" alt="Bart, el Amante" onmouseover="src='img/temporada03/03x16b.jpg'"onmouseout="src='img/temporada03/03x16.jpg'">
                <h3> T03E16 - Bart, el Amante</h3>
                <p>Tiene el nombre del 23º presidente de EE. UU, la cara de Gordie Howe y habla como un francés. Es el nuevo amante por carta de la señora Krabappel, o la nueva broma de Bart. Mientras, Homero hace una cucha para el perro y aprende a no decir groserías.</p>
                <audio src="https://dl.dropboxusercontent.com/s/e332uyh07yijz64/03x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T03E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x17.jpg" alt="Homero al Bat" onmouseover="src='img/temporada03/03x17b.jpg'"onmouseout="src='img/temporada03/03x17.jpg'">
                <h3> T03E17 - Homero al Bat</h3>
                <p>Burns apuesta $ 1.000.000 a que el equipo de su compañía puede ganarle al de una planta competidora. Para hacerlo, reemplaza su equipo regular de la compañía con Roger Clemens, Wade Boggs, Ken Griffey Jr., Steve Sax, Don Mattingly, Ozzie Smith, Darryl Strawberry, Jose Canseco, Mike Scoscia, todos profesionales del softball.</p>
                <audio src="https://dl.dropboxusercontent.com/s/iugr8hju98c5185/03x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T03E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x18.jpg" alt="Vacaciones Distintas" onmouseover="src='img/temporada03/03x18b.jpg'"onmouseout="src='img/temporada03/03x18.jpg'">
                <h3> T03E18 - Vacaciones Distintas</h3>
                <p>Luego de hacer el test CANT (Career Aptitude Normalization Test), Lisa descubre que su destino es ser ama de casa, mientras que el de Bart es ser policía. Mientras Bart disfruta de su autoridad, Lisa se deprime y se rebela robando los libros para maestros de toda la escuela.</p>
                <audio src="https://dl.dropboxusercontent.com/s/4z8u0utxgb6qjtj/03x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T03E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x19.jpg" alt="Nuestro Mejor Amigo" onmouseover="src='img/temporada03/03x19b.jpg'"onmouseout="src='img/temporada03/03x19.jpg'">
                <h3> T03E19 - Nuestro Mejor Amigo</h3>
                <p>Cuando Ayudante de Santa tiene el estómago torcido, los Simpson se sacrifican para poder pagar la operación que le salva la vida. Pero cuando la actitud de la familia cambia por los sacrificios el perro se escapa y se convierte en uno de los perros de combate de Burns.</p>
                <audio src="https://dl.dropboxusercontent.com/s/2jjno4f60kb5xxs/03x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T03E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x20.jpg" alt="Homero el Campirano" onmouseover="src='img/temporada03/03x20b.jpg'"onmouseout="src='img/temporada03/03x20.jpg'">
                <h3> T03E20 - Homero el Campirano</h3>
                <p>Después de una mala experiencia en el cine, Homero va a un bar donde descubre a una cantante llamada Lurleen Lumpkin. Ahora, el Coronel Homero es su representante, para disgusto de Marge.</p>
                <audio src="https://dl.dropboxusercontent.com/s/5q0mzqo0dpjbc7m/03x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T03E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x21.jpg" alt="El Viudo Negro" onmouseover="src='img/temporada03/03x21b.jpg'"onmouseout="src='img/temporada03/03x21.jpg'">
                <h3> T03E21 - El Viudo Negro</h3>
                <p>Se le concede a Bob Patiño la libertad condicional, y se casa con Selma. Pero Bart sospecha que Bob tiene otras intenciones.</p>
                <audio src="https://dl.dropboxusercontent.com/s/364f7frh3p6ka16/03x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T03E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x22.jpg" alt="El Rock de Otto" onmouseover="src='img/temporada03/03x22b.jpg'"onmouseout="src='img/temporada03/03x22.jpg'">
                <h3> T03E22 - El Rock de Otto</h3>
                <p>Otto pierde su trabajo de conductor del micro de la escuela, parcialmente porque no tiene licencia, y, después de que lo echaran de su departamento, se va a vivir con los Simpson.</p>
                <audio src="https://dl.dropboxusercontent.com/s/wy8gukbr09pa3l7/03x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T03E23">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x23.jpg" alt="Milhouse se Enamora" onmouseover="src='img/temporada03/03x23b.jpg'"onmouseout="src='img/temporada03/03x23.jpg'">
                <h3> T03E23 - Milhouse se Enamora</h3>
                <p>La amistad entre Bart y Milhouse está en peligro cuando Milhouse dale con una chica, sin que el padre de ella lo sepa. Mientras, Homero trata de perder peso escuchando una cinta subliminal.</p>
                <audio src="https://dl.dropboxusercontent.com/s/249y535a5et46gr/03x23.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T03E24">
            <div class="bloqueCapitulos">
                <img src="img/temporada03/03x24.jpg" alt="Él es mi Hermano" onmouseover="src='img/temporada03/03x24b.jpg'"onmouseout="src='img/temporada03/03x24.jpg'">
                <h3> T03E24 - Él es mi Hermano</h3>
                <p>Herbert Powell vuelve, y pide a los Simpson ayuda para llevar a cabo una idea que tuvo para un invento, usando el dinero que Homero ganó en el Premio Montgomery Burns por Logros Destacados en el Campo de la Excelencia.</p>
                <audio src="https://dl.dropboxusercontent.com/s/gpsyaxc1h9a1ies/03x24.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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