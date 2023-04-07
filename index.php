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
    <title>Simpsonidos: Capítulos en MP3</title>
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
                <a href="#temporadas">Temporadas</a>
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
            <a class="visible activo" href="#inicio">Inicio</a>
            <a id="temporadas" href="#temporadas">Temporadas</a>
            
            
            <button class="solapasLinks" onclick="solapas(event, '1a4')" id="abiertoPorDefecto">1 a 4</button>
            <button class="solapasLinks" onclick="solapas(event, '5a8')">5 a 8</button>
            <button class="solapasLinks" onclick="solapas(event, '9a12')">9 a 12</button>
            <a class="visible" href="#contacto">Contacto</a>
            
                
        </nav>
        <div id="1a4" class="bloqueTemporadas solapasContenido">
            <div class="tapas-temporadas">
                <a href="temporada1.php">
                <h2>temporada 1</h2></a>
                <a href="temporada1.php"><img src="img/tapas/tapatemp01.jpg" alt="tapa temporada 1"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada2.php">
                <h2>temporada 2</h2></a>
                <a href="temporada2.php"><img src="img/tapas/tapatemp02.jpg" alt="tapa temporada 2"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada3.php">
                <h2>temporada 3</h2></a>
                <a href="temporada3.php"><img src="img/tapas/tapatemp03.jpg" alt="tapa temporada 3"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada4.php">
                <h2>temporada 4</h2></a>
                <a href="temporada4.php"><img src="img/tapas/tapatemp04.jpg" alt="tapa temporada 4"></a>
            </div>
        </div>
        <div id="5a8" class="bloqueTemporadas solapasContenido">
            <div class="tapas-temporadas">
                <a href="temporada5.php">
                <h2>temporada 5</h2></a>
                <a href="temporada5.php"><img src="img/tapas/tapatemp05.jpg" alt="tapa temporada 5"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada6.php">
                <h2>temporada 6</h2></a>
                <a href="temporada6.php"><img src="img/tapas/tapatemp06.jpg" alt="tapa temporada 6"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada7.php">
                <h2>temporada 7</h2></a>
                <a href="temporada7.php"><img src="img/tapas/tapatemp07.jpg" alt="tapa temporada 7"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada8.php">
                <h2>temporada 8</h2></a>
                <a href="temporada8.php"><img src="img/tapas/tapatemp08.jpg" alt="tapa temporada 8"></a>
            </div>
        </div>
        <div id="9a12" class="bloqueTemporadas solapasContenido">
            <div class="tapas-temporadas">
                <a href="temporada9.php">
                <h2>temporada 9</h2></a>
                <a href="temporada9.php"><img src="img/tapas/tapatemp09.jpg" alt="tapa temporada 9"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada10.php">
                <h2>temporada 10</h2></a>
                <a href="temporada10.php"><img src="img/tapas/tapatemp10.jpg" alt="tapa temporada 10"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada11.php">
                <h2>temporada 11</h2></a>
                <a href="temporada11.php"><img src="img/tapas/tapatemp11.jpg" alt="tapa temporada 11"></a>
            </div>
            <div class="tapas-temporadas">
                <a href="temporada12.php">
                <h2>temporada 12</h2></a>
                <a href="temporada12.php"><img src="img/tapas/tapatemp12.jpg" alt="tapa temporada 12"></a>
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