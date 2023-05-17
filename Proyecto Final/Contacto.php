<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Nunito:wght@800&family=Raleway:wght@200&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <title>Proyecto Final</title>
</head>

<body>
    <header></header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="info.html">Informacion</a>
        <a href="datos.html">Datos</a>
        <a href="novedades.html">Novedades</a>
        <a href="Contacto.php">Contacto</a>
    </nav>
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h3>Contacto</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                    <div class="contact">

                        <form action="guardar.php" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Nombre" type="text" name="nombre" maxlength="60" >
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Telefono" type="text" name="telefono" maxlength="10">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Correo" type="text" name="correo"  maxlength="30">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="textarea" placeholder="Mensaje" type="text" name="mensaje" maxlength="300"></textarea>
                                        
                                </div>
                                <div class="col-sm-12">
                                    <button class="send" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>



    <footer>
        <div id="links">
            <a href="index.html">Inicio</a>
            <a href="info.html">Informacion</a>
            <a href="datos.html">Datos</a>
            <a href="novedades.html">Novedades</a>
            <a href="Contacto.php">Contacto</a>
        </div>
        <div id="sociales">
            <h2 id="titulo-redes">Siguenos en nuestras redes sociales</h2>
            <img src="icon/fb.png" alt="facebook" title="Facebook">
            <img src="icon/instagram.png" alt="instagram" title="Instagram">
            <img src="icon/lin(2).png" alt="linkedin" title="Linkedin">
            <img src="icon/tw.png" alt="Twitter" title="Twitter">
            <br> <br>
            <br><br>
            <div>
               <h3> Trabajo hecho por: Jair Alejandro Rubio Bañuelos  Matricula:209580</h3>
            </div> 
        
          </div>
    </footer>
</body>

</html>