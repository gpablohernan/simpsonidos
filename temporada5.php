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
    <title>Simpsonidos - Temporada 5</title>
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
                <h1>temporada 5</h1>
                <img src="img/tapas/tapatemp05.jpg" alt="tapa temporada 5">
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
                    <td><a href="#T05E01">T05E01</a></td>
                    <td><a href="#T05E01">El Cuarteto de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E02">T05E02</a></td>
                    <td><a href="#T05E02">Cabo de miedosos</a></td>
                </tr>    
                <tr>
                    <td><a href="#T05E03">T05E03</a></td>
                    <td><a href="#T05E03">Homero va a la universidad</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E04">T05E04</a></td>
                    <td><a href="#T05E04">El oso de Burns</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E05">T05E05</a></td>
                    <td><a href="#T05E05">Especial de noche de brujas IV</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E06">T05E06</a></td>
                    <td><a href="#T05E06">Marge la rebelde</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E07">T05E07</a></td>
                    <td><a href="#T05E07">Filosofía Bartiana</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E08">T05E08</a></td>
                    <td><a href="#T05E08">Exploradores a fuerza</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E09">T05E09</a></td>
                    <td><a href="#T05E09">La última tentación de Homero</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E10">T05E10</a></td>
                    <td><a href="#T05E10">Springfield próspero o el problema del juego</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E11">T05E11</a></td>
                    <td><a href="#T05E11">Homero Detective</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E12">T05E12</a></td>
                    <td><a href="#T05E12">Bart se hace famoso</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E13">T05E13</a></td>
                    <td><a href="#T05E13">Homero y Apu</a></td>
                 </tr>
                 <tr>
                    <td><a href="#T05E14">T05E14</a></td>
                    <td><a href="#T05E14">Lisa contra la Stacy Malibu</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E15">T05E15</a></td>
                    <td><a href="#T05E15">Homero en el espacio profundo</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E16">T05E16</a></td>
                    <td><a href="#T05E16">Homero ama a Flanders</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E17">T05E17</a></td>
                    <td><a href="#T05E17">Bart gana un elefante</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E18">T05E18</a></td>
                    <td><a href="#T05E18">El Heredero de Burns</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E19">T05E19</a></td>
                    <td><a href="#T05E19">La Canción de Skinner</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E20">T05E20</a></td>
                    <td><a href="#T05E20">El Niño que Sabía Demasiado</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E21">T05E21</a></td>
                    <td><a href="#T05E21">El Amante de Jackie Bouvier</a></td>
                </tr>
                <tr>
                    <td><a href="#T05E22">T05E22</a></td>
                    <td><a href="#T05E22">Secretos de un Buen Matrimonio</a></td>
                </tr>
             </tbody>
         </table>
        </div>

        <div class="contenedorCapitulos" id="T05E01">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x01.jpg" alt="El Cuarteto de Homero" onmouseover="src='img/temporada05/05x01b.jpg'"onmouseout="src='img/temporada05/05x01.jpg'">
                <h3> T05E01 - El Cuarteto de Homero</h3>
                <p>Vemos lo que sucedía en 1985, cuando Homero, Apu, el director Skinner y el jefe Gorgory (reemplazado por Barney) formaban un cuarteto de barbería exitoso.</p>
                <audio src="https://dl.dropboxusercontent.com/s/8htg7oooama4n1c/05x01.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T05E02">
                <div class="bloqueCapitulos">
                    <img src="img/temporada05/05x02.jpg" alt="Cabo de miedosos" onmouseover="src='img/temporada05/05x02b.jpg'"onmouseout="src='img/temporada05/05x02.jpg'">
                    <h3> T05E02 - Cabo de miedosos</h3>
                    <p>Bob Patiño sale de prisión y su único objetivo esta vez es acabar con la vida de Bart. Para proteger su existencia, la familia se muda y se cambia el apellido a Thompson.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/xfav7wvi3jw0yb9/05x02.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
             </div>
        </div>
        <div class="contenedorCapitulos" id="T05E03">
                <div class="bloqueCapitulos">
                    <img src="img/temporada05/05x03.jpg" alt="Homero va a la universidad" onmouseover="src='img/temporada05/05x03b.jpg'"onmouseout="src='img/temporada05/05x03.jpg'">
                    <h3> T05E03 - Homero va a la universidad</h3>
                    <p>Para conservar su puesto de trabajo en la Planta Nuclear, Homero necesita tener un titulo universitario, así que empieza a asistir a las clases y allí conoce a tres nerds que le ayudan a aprobar mientras Homero les ayuda a ellos a ser expulsados de la universidad.</p>
                    <audio src="https://dl.dropboxusercontent.com/s/ardl316n526ru9h/05x03.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
                </div>
        
        </div>
        <div class="contenedorCapitulos" id="T05E04">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x04.jpg" alt="El oso de Burns" onmouseover="src='img/temporada05/05x04b.jpg'"onmouseout="src='img/temporada05/05x04.jpg'">
                <h3> T05E04 - El oso de Burns</h3>
                <p>Cuando el Señor Burns era joven, dejó a su oso de peluche Bobo por una vida de millonario. Ahora quiere a su oso de vuelta, y el problema es que Maggie también.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7y2zloc2h05qmg8/05x04.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
        </div>
        <div class="contenedorCapitulos" id="T05E05">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x05.jpg" alt="Especial de noche de brujas IV" onmouseover="src='img/temporada05/05x05b.jpg'"onmouseout="src='img/temporada05/05x05.jpg'">
                <h3> T05E05 - Especial de noche de brujas IV</h3>
                <p>Bart presenta tres historias de horror, ilustradas por cuadros. - El diablo y Homero Simpson: Homero entrega su alma por una rosquilla y ahora, el diablo la quiere. - El terror a 5 1/2 pies: Bart tiene una pesadilla sobre un choque con el micro de la escuela. Y su pesadilla está por hacerse realidad. - Dracula: Bart Simpson: Burns es un vampiro, quiere sangre, y convierte a Bart en vampiro también.</p>
                <audio src="https://dl.dropboxusercontent.com/s/di3gy46p69hqvz0/05x05.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
    
    </div>
    <div class="contenedorCapitulos" id="T05E06">
        <div class="bloqueCapitulos">
            <img src="img/temporada05/05x06.jpg" alt="Marge la rebelde" onmouseover="src='img/temporada05/05x06b.jpg'"onmouseout="src='img/temporada05/05x06.jpg'">
            <h3> T05E06 - Marge la rebelde</h3>
            <p>Cuando Homero no puede acompañarla al ballet, Marge va con su vecina Ruth. Ruth le devuelve el favor y la saca la noche siguiente. Pero lo que Marge no sabe es que el auto de Ruth es robado.</p>
            <audio src="https://dl.dropboxusercontent.com/s/qsp7tytgfqy8hmt/05x06.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
        </div>

    </div>
    <div class="contenedorCapitulos" id="T05E07">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x07.jpg" alt="Filosofía Bartiana" onmouseover="src='img/temporada05/05x07b.jpg'"onmouseout="src='img/temporada05/05x07.jpg'">
        <h3> T05E07 - Filosofía Bartiana</h3>
        <p>Marge se da cuenta de que no es divertida por regañar continuamente y busca ayuda de un gurú llamado Brad Goodman, quien luego utiliza la actitud de Bart como un nuevo ejemplo de cómo debería comportarse la gente. Todos los ciudadanos de Springfield comienzan a actuar como Bart.</p>
        <audio src="https://dl.dropboxusercontent.com/s/t3ytygba4508ue5/05x07.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E08">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x08.jpg" alt="Exploradores a fuerza" onmouseover="src='img/temporada05/05x08b.jpg'"onmouseout="src='img/temporada05/05x08.jpg'">
        <h3> T05E08 - Exploradores a fuerza</h3>
        <p>Cuando Bart encuentra $ 20, los gasta en una malteada, hecha puramente con jarabe. Después de una noche agitada, se despierta y se da cuenta que se unió a un grupo de boy scouts dirigido por Ned Flanders.</p>
        <audio src="https://dl.dropboxusercontent.com/s/8xva3z2nqqhv6m0/05x08.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E09">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x09.jpg" alt="La última tentación de Homero" onmouseover="src='img/temporada05/05x09b.jpg'"onmouseout="src='img/temporada05/05x09.jpg'">
        <h3> T05E09 - La última tentación de Homero</h3>
        <p>Homero se enamora de una nueva compañera de trabajo que es igual que él. Pero se siente culpable. Mientras, Bart sufre de varios tratamientos médicos a la vez.</p>
        <audio src="https://dl.dropboxusercontent.com/s/ug3rk2egnvi4m03/05x09.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E10">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x10.jpg" alt="Springfield próspero o el problema del juego" onmouseover="src='img/temporada05/05x10b.jpg'"onmouseout="src='img/temporada05/05x10.jpg'">
        <h3> T05E10 - Springfield próspero o el problema del juego</h3>
        <p>Para solucionar una crisis económica en Springfield, se legaliza el juego. Burns abre un casino, en el que Homero es croupier de blackjack y Marge se hace adicta a las máquinas tragamonedas.</p>
        <audio src="https://dl.dropboxusercontent.com/s/dktfb28g5wt2zut/05x10.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E11">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x11.jpg" alt="Homero Detective" onmouseover="src='img/temporada05/05x11b.jpg'"onmouseout="src='img/temporada05/05x11.jpg'">
        <h3> T05E11 - Homero Detective</h3>
        <p>Una ola de pequeños robos pone en alerta a los ciudadanos de Sprinfield, que deciden poner fin a la situación formando una patrulla de barrio encabezada por Homero.</p>
        <audio src="https://dl.dropboxusercontent.com/s/zucvfukc4adhji2/05x11.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E12">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x12.jpg" alt="Bart se hace famoso" onmouseover="src='img/temporada05/05x12b.jpg'"onmouseout="src='img/temporada05/05x12.jpg'">
        <h3> T05E12 - Bart se hace famoso</h3>
        <p>Después de escaparse de una excursión a una fábrica de cajas, Bart se mete en el estudio de Krusty, y se convierte en su asistente. Pero cuando accidentalmente tira abajo un decorado y dice 'Yo no fui' se convierte en una celebridad.</p>
        <audio src="https://dl.dropboxusercontent.com/s/zie3mvx0vsdpvch/05x12.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>

    </div>
    <div class="contenedorCapitulos" id="T05E13">
    <div class="bloqueCapitulos">
        <img src="img/temporada05/05x13.jpg" alt="Homero y Apu" onmouseover="src='img/temporada05/05x13b.jpg'"onmouseout="src='img/temporada05/05x13.jpg'">
        <h3> T05E13 - Homero y Apu</h3>
        <p>Cuando es envenenado por comida del Kwik-E-Mart de Apu, Homero consigue que sea despedido. Pero se arrepiente y lo ayuda a conseguir su trabajo de vuelta.</p>
        <audio src="https://dl.dropboxusercontent.com/s/32njeo2j4468w4x/05x13.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
    </div>
</div>
    <div class="contenedorCapitulos" id="T05E14">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x14.jpg" alt="Lisa contra la Stacy Malibu" onmouseover="src='img/temporada05/05x14b.jpg'"onmouseout="src='img/temporada05/05x14.jpg'">
                <h3> T05E14 - Lisa contra la Stacy Malibu</h3>
                <p>Después de ver lo que dice la nueva muñeca Stacy Malibu que habla, Lisa encuentra a la creadora y juntas hacen una muñeca con frases no sexistas.</p>
                <audio src="https://dl.dropboxusercontent.com/s/z84zkintan3i5yn/05x14.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>            
   
    <div class="contenedorCapitulos" id="T05E15">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x15.jpg" alt="Homero en el espacio profundo" onmouseover="src='img/temporada05/05x15b.jpg'"onmouseout="src='img/temporada05/05x15.jpg'">
                <h3> T05E15 - Homero en el espacio profundo</h3>
                <p>Después de ver que sus ratings están muy bajos, la NASA decide mandar al espacio a un hombre común. Ese hombre común es Homero Simpson.</p>
                <audio src="https://dl.dropboxusercontent.com/s/e8oikylkg6zte7y/05x15.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
   
    <div class="contenedorCapitulos" id="T05E16">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x16.jpg" alt="Homero ama a Flanders" onmouseover="src='img/temporada05/05x16b.jpg'"onmouseout="src='img/temporada05/05x16.jpg'">
                <h3> T05E16 - Homero ama a Flanders</h3>
                <p>Después de que Ned Flanders le da a Homero una entrada para el partido de fútbol americano que quiere ver, Homero se convierte en el mejor amigo de Flanders.</p>
                <audio src="https://dl.dropboxusercontent.com/s/m5ybs3dng7k1cky/05x16.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>          
    
    <div class="contenedorCapitulos" id="T05E17">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x17.jpg" alt="Bart gana un elefante" onmouseover="src='img/temporada05/05x17b.jpg'"onmouseout="src='img/temporada05/05x17.jpg'">
                <h3> T05E17 - Bart gana un elefante</h3>
                <p>Cuando Bart gana el concurso 'KBBL me va a dar algo estúpido', Bart rechaza $10.000 en efectivo por un elefante. Pero el elefante causa algunos problemas mayores.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ledjx5germrlqua/05x17.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T05E18">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x18.jpg" alt="El Heredero de Burns" onmouseover="src='img/temporada05/05x18b.jpg'"onmouseout="src='img/temporada05/05x18.jpg'">
                <h3> T05E18 - El Heredero de Burns</h3>
                <p>Cuando Burns tiene un encuentro cercano con la muerte, decide encontrar un heredero. Bart es el elegido y Burns trata de convencerlo para que viva con él.</p>
                <audio src="https://dl.dropboxusercontent.com/s/qm980x68oi7cm70/05x18.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T05E19">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x19.jpg" alt="La Canción de Skinner" onmouseover="src='img/temporada05/05x19b.jpg'"onmouseout="src='img/temporada05/05x19.jpg'">
                <h3> T05E19 - La Canción de Skinner</h3>
                <p>Bart lleva al perro de la familia a la escuela, pero el perro se escapa e indirectamente causa que Skinner sea despedido. La vida en la escuela con Flanders como director no es lo mismo y Bart trata de hacer que Skinner vuelva a su antiguo puesto.</p>
                <audio src="https://dl.dropboxusercontent.com/s/lkvh6csbdj0hcjx/05x19.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
    
    <div class="contenedorCapitulos" id="T05E20">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x20.jpg" alt="El Niño que Sabía Demasiado" onmouseover="src='img/temporada05/05x20b.jpg'"onmouseout="src='img/temporada05/05x20.jpg'">
                <h3> T05E20 - El Niño que Sabía Demasiado</h3>
                <p>Bart se escapa de la escuela y ve a un mozo lesionarse seriamente. Cuando es sobrino del alcalde es acusado de golpearlo, sólo Bart sabe que es inocente. Pero revelar eso significaría reconocer que se escapó de la escuela.</p>
                <audio src="https://dl.dropboxusercontent.com/s/ulzmf4gdvs8kwfn/05x20.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
  
    <div class="contenedorCapitulos" id="T05E21">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x21.jpg" alt="El Amante de Jackie Bouvier" onmouseover="src='img/temporada05/05x21b.jpg'"onmouseout="src='img/temporada05/05x21.jpg'">
                <h3> T05E21 - El Amante de Jackie Bouvier</h3>
                <p>El Abuelo se enamora de la madre de Marge, Jackie Bouvier, pero el Señor Burns se la saca. Al Abuelo se le rompe el corazón cuando se entera de que Jackie se va a casar con Burns.</p>
                <audio src="https://dl.dropboxusercontent.com/s/j3ga105lxe3xfgb/05x21.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
            </div>
        </div>        
   
    <div class="contenedorCapitulos" id="T05E22">
            <div class="bloqueCapitulos">
                <img src="img/temporada05/05x22.jpg" alt="Secretos de un Buen Matrimonio" onmouseover="src='img/temporada05/05x22b.jpg'"onmouseout="src='img/temporada05/05x22.jpg'">
                <h3> T05E22 - Secretos de un Buen Matrimonio</h3>
                <p>Preocupado por ser lento, Homero decide dar un curso de Cómo Tener un Buen Matrimonio. Pero no tiene éxito como maestro hasta que empieza a contar intimidades de Marge.</p>
                <audio src="https://dl.dropboxusercontent.com/s/7cp2o6agefbknsl/05x22.mp3" preload="metadata" controls controlsList="nodownload" type="audio/mpeg"></audio>
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