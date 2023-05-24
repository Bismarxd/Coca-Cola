<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/15b013dc0a.js" crossorigin="anonymous"></script>

    <title>Inicio - Coca Cola</title>
</head>

<body>

    <header>
        <div class="contenedor">
           <a href="index.html">
            <img src="img/logo.svg" alt="" class="logo">

           </a> 

           <nav>
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#servicios">Servicios</a>
            <a href="#galeria">Galeria</a>
            <a href="#contactenos">Contactenos</a>
           </nav>
           <a href="" class="hamb"><i class="fas fa-bars"></i></a>
        </div>

    </header>   
    
    <main>
        <section id="inicio">
            <img src="img/bannerprincipal.jpg" alt="" class="logo">
            <div class="bloque-inicio">
                <h1>Bienvenidos a Coca Cola</h1>
                <p>
                    is simply dummy text of the printing and typesetting industry.
                </p>
                <a href="#nosotros" class="boton boton-rojo">Ver más</a>
            </div>

        </section>

        <section id="nosotros" class="seccion">
            <div class="contenedor">
                <p>
                    It has survived not only five centuries.
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in 
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

        </section>

        <section id="servicios" class="seccion">
            <div class="contenedor">
                <div class="row">
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio1.jpg" alt="">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 1</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Hic accusamus ipsa tempore ex incidunt illo aliquid, ut delectus 
                                autem sequi ea, veniam natus dignissimos quia impedit quibusdam 
                                laboriosam saepe? Sed.
                                </p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio2.jpg" alt="">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 2</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Hic accusamus ipsa tempore ex incidunt illo aliquid, ut delectus 
                                autem sequi ea, veniam natus dignissimos quia impedit quibusdam 
                                laboriosam saepe? Sed.
                                </p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio3.jpg" alt="">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 3</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Hic accusamus ipsa tempore ex incidunt illo aliquid, ut delectus 
                                autem sequi ea, veniam natus dignissimos quia impedit quibusdam 
                                laboriosam saepe? Sed.
                                </p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="contenedor-fluido ">
                <div class="row">
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio1.jpg" alt="">
                            <h4>Imagen1</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio2.jpg" alt="">
                            <h4>Imagen2</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio3.jpg" alt="">
                            <h4>Imagen3</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio1.jpg" alt="">
                            <h4>Imagen4</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio2.jpg" alt="">
                            <h4>Imagen5</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio3.jpg" alt="">
                            <h4>Imagen6</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="contactenos" class="seccion">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bolivia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
            <div class="contenedor">
                <div class="row">
                    <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                        <form action="index.php" method="post">
                            <div class="form-block">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-block">
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-block">
                                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton boton-negro" value="Enviar">
                            </div>
                            <?php 
                                if ($_SERVER["REQUEST_METHOD"] === "POST") 
                                {
                                    $nombre = $_POST["nombre"];
                                    $email = $_POST["email"];
                                    $mensaje = $_POST["mensaje"];

                                    if (isset($nombre)) 
                                    {
                                        if (isset($email)) 
                                        {
                                            if (isset($mensaje)) 
                                            {
                                                $para = "correo@correo.com";
                                                $asunto = "Esto es una prueba";
                                                $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                                $adicional = "From: bismarckmaytatintaya@gmail.com";

                                                mail($para,$asunto,$cuerpo,$adicional); 
                                                ?>
                                                    <p>Envio Exitoso</p>
                                                <?php
                                                    
                                                
                                            }
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
          
        </section>
    </main>

    <footer>
        <div class="contenedor">
            <div class="row">
                <div class="columna columna-25 columna-mobile-100">
                    <img src="img/logo-blanco.png" alt="" class="logo-footer">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Error dolor ratione architecto officia iste, doloribus inventore, 
                        repellendus amet at quas rem distinctio cum nemo tempore nam neque 
                        voluptates. Excepturi, expedita.
                    </p>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Temas Relacionado
                    </h3>
                    <ul>
                        <li><a href="#">Tema 1</a></li>
                        <li><a href="#">Tema 2</a></li>
                        <li><a href="#">Tema 3</a></li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Datos de Contacto
                    </h3>
                    <ul>
                        <li>bismarmayta@gmail.com</li>
                        <li>+59169933860</li>
                        <li>Av. Edurado Avaroa Calle 11 Nro. 10</li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Redes Sociales
                    </h3>
                    <ul class="redes">
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-square-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">                                
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">                              
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

           
        </div>
        <div class="barra-footer">
            &copy; Derechos Reservados - 2022
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>

</body>

</html>