
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Café y Accesorios Avellana" />
    <meta name="author" content="" />
    <title>Avellana Coffee Store </title>
    <link rel="shortcut icon" href="img/logo.png">
    <meta name="description" content="Página web de blog de café">

    <!-- Prefetch -->
    <link rel="prefetch" href="nosotros.html" as="document">

    <!-- Preload -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    <div class="eslogan">
        
        <?php require 'includes/funciones.php'; incluirTemplate('header'); ?>

        <div class= "titulo_alternativo centrar-texto" >
            <h1 class="logo__bold no-margin centrar-texto mayuscula ">Atrévete <span class="letra no-margin mayuscula">a vivir la experiencia de un buen café.</span></h1>

        </div>
        <div>
            <h2 class=" titulo centrar-texto mayuscula" >nuestros productos</h2>
        </div>
    </div>
    <main id ="producto" class="contenedor">    
       <h2 class="titulo centrar-texto mayuscula" >Tipos de Café</h2> 
      <div class="grid">
                <div class="producto">
                    <div class="card producto__informacion">
                        <img class=" imag producto__imagen" src="img/cafe_bolsa_1.jpeg" alt="imagen café Avellana colombia ">
                        <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#cafecolombia">Colombia</button>

                            <!-- Modal -->
                            <div class="modal fade" id="cafecolombia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Café Colombia</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h3>Café Colombia</h3>
                                        <img class=" imag producto__imagen" src="img/cafe_bolsa_1.jpeg" alt="imagen café Avellana colombia ">
                                        <p>
                                            Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                            Cosechado entre 1800 y 2000 msnm.
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!--.producto--> 
                
                

                <div class="producto">
                    <div class="card producto__informacion">
                        <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg"  alt="imagen café Avellana colombia ">
                        <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#caferuanda">Ruanda</button>

                            <!-- Modal -->
                            <div class="modal fade" id="caferuanda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Café Ruanda</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h3>Café Ruanda</h3>
                                        <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg" alt="imagen café Avellana Ruanda ">
                                        <p>
                                            Café de grano en formato 250 grs, Con notas de sabor a té negro.cosechado entre 1650 y 1805 msnm.
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!--.producto-->    
                
                
                <div class="producto">
                    <div class="card producto__informacion">
                        <img class=" imag producto__imagen" src="img/cafe_bolsa_3.jpeg"   alt="imagen café Avellana colombia ">
                        <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#cafeguatemala">Guatemala</button>

                            <!-- Modal -->
                            <div class="modal fade" id="cafeguatemala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Café Guatemala</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h3>Café Guatemala</h3>
                                        <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg" alt="imagen café Avellana guatemala ">
                                        <p>
                                            Café en grano en formato de 250 grs., con notas de sabor a caramelo, ciruela, chocolate amargo. Cosechado a 1380 msnm.
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!--.producto-->    
        </div>       
    </main>

    <!--. Comienzo Accesorio-->

<section id ="accesorio" class="contenedor">
    <h2 class="titulo centrar-texto mayuscula">Accesorios</h2>
        <div class="grid">
            <div class="producto">  <!--accesorio 1 -->
                <div class="card producto__informacion">
                    <img class=" imag producto__imagen card-img-top" src="img/cafetera_1.jpeg"   alt="imagen Accesorios Avellana ">
                    <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#cafetera">Cafeteras</button>

                    <!-- Modal -->
                    <div class="modal fade" id="cafetera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cafeteras</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Cafeteras</h3>
                                    <img class=" imag producto__imagen" src="img/cafetera_1.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        Cosechado entre 1800 y 2000 msnm.
                                    </p>
                                    <img class=" imag producto__imagen" src="img/cafetera_2.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        cosechado entre 1800 y 2000 msnm.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fin Modal 1 -->
                </div>
            </div><!-- fin accesorio 1-->   


            <div class="producto">  <!--accesorio 2 -->
                <div class="card producto__informacion">
                    <img class=" imag producto__imagen card-img-top" src="img/prensa_1.jpeg" alt="imagen Accesorios Avellana ">
                    <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#prensa">Prensas</button>

                    <!-- Modal 2 -->
                    <div class="modal fade" id="prensa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Prensas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Cafeteras</h3>
                                    <img class=" imag producto__imagen" src="img/prensa_1.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        Cosechado entre 1800 y 2000 msnm.
                                    </p>
                                    <img class=" imag producto__imagen" src="img/prensa_2.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        cosechado entre 1800 y 2000 msnm.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fin Modal 2 -->
                </div>
            </div><!-- fin accesorio 2-->  
           

            <div class="producto">  <!--accesorio 3-->
                <div class="card producto__informacion">
                    <img class=" imag producto__imagen card-img-top" src="img/shaker_1.jpeg" alt="imagen Accesorios Avellana ">
                    <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#shaker">Shakers</button>

                    <!-- Modal 3 -->
                    <div class="modal fade" id="shaker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Shakers</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Shakers</h3>
                                    <img class=" imag producto__imagen" src="img/shaker_1.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        Cosechado entre 1800 y 2000 msnm.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fin Modal 3-->
                </div>
            </div><!-- fin accesorio 3-->  
            
            <div class="producto">

<div class="card producto__informacion">
        <img class=" imag producto__imagen card-img-top" src="img/moledor.jpeg"   alt="imagen Accesorios Avellana ">
        <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#moledor">Moledores</button>

            <!-- Modal -->
            <div class="modal fade" id="moledor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Moledores</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h3>Moledor</h3>
                        <img class=" imag producto__imagen" src="img/moledor.jpeg" alt="imagen Accesorios Avellana ">
                        <p>
                            Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                            Cosechado entre 1800 y 2000 msnm.
                        </p>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
</div>           
</div><!--.accesorio-->
            <div class="producto">
                <div class="card producto__informacion">
                        <img class=" imag producto__imagen card-img-top" src="img/tetera_1.jpeg"  alt="imagen Accesorios Avellana ">
                        <button type=" button " class="btn color_titulo producto__nombre titulo_producto centrar-texto" data-bs-toggle="modal" data-bs-target="#tetera">Teteras</button>

                            <!-- Modal -->
                            <div class="modal fade" id="tetera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Teteras</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h3>Teteras</h3>
                                        <img class=" imag producto__imagen" src="img/tetera_1.jpeg" alt="imagen Accesorios Avellana ">
                                        <p>
                                            Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                            Cosechado entre 1800 y 2000 msnm.
                                        </p>
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div><!--.accesorio-->

        </div>   
    </section>
    
    <div>
        <h2 class="titulo centrar-texto mayuscula">Contáctanos</h2>  
    </div>

   <section id="contacto" class="forma">   
        <div class="contacto-bg"></div>
    
        <form class="formulario" action="correos.php" method="POST" autocomplete="off">
        <div class="mb-3 campo">
                <label for="nombre" class=" titulo_alternativo form-label text-white titulo_alternativo campo__label" for="nombre">Nombre</label>
                <input type="text" class="form-control campo__field titulo_alternativo " id="nombre"  placeholder="Ingrese su Nombre"  aria-describedby="Nombre" required>
            </div>
            <div class="mb-3 campo">
                <label for="correo" class=" titulo_alternativo form-label text-white titulo_alternativo campo__label" for="email">Correo electrónico</label>
                <input type="email" class="titulo_alternativo form-control campo__field titulo_alternativo " id="email" name="email"  aria-describedby="correo electronico" placeholder="Ingrese su E-mail" required>
            </div>
            <div class="mb-3 campo">
                <label for="mensaje" class="form-label text-white titulo_alternativo campo__label">Mensaje</label>
                <textarea class="form-control campo__field campo__field--textarea titulo_alternativo " name="mensaje" id="mensaje" rows="3" required></textarea>
            </div>
            <button type="submit" name = " submit" value="Enviar" class="boton boton--primario ">Enviar</button>
        </form>




    </section>
   
<?php  incluirTemplate('footer'); ?>
    
<script src="js/bootstrap.bundle.min.js"></script>  
</body>