
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
                <a href="#cafecolombia" rel="noopener">
                    <img class=" imag producto__imagen" src="img/cafe_bolsa_1.jpeg" alt="imagen café Avellana colombia ">
                    <div class="producto__informacion">
                        <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#cafecolombia" >Colombia</a></p>  
                    </div> 
                    <div class="informacion" id="cafecolombia">
                        <div class="informacion-inner scroll">
                            <h3>Café Colombia</h3>
                            <img class=" imag producto__imagen" src="img/cafe_bolsa_1.jpeg" alt="imagen café Avellana colombia ">
                            <p>
                                Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                Cosechado entre 1800 y 2000 msnm.
                            </p>
                            <a href="index.php#producto" class="button">cerrar</a>
                        </div>
                    </div>   
                </a>
            </div>  <!--.producto-->

            <div class="producto">
                <a href="#caferuanda">
                    <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg" alt="imagen café Avellana ruanda ">
                    <div class="producto__informacion">
                        <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#caferuanda" >Ruanda</a></p>  
                    </div> 
                    <div class="informacion" id="caferuanda">
                        <div class="informacion-inner scroll">
                            <h3>Café Ruanda</h3>
                            <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg" alt="imagen café Avellana Ruanda ">
                            <p>
                                Café de grano en formato 250 grs, Con notas de sabor a té negro.cosechado entre 1650 y 1805 msnm.
                            </p>
                            <a href="index.php#producto" class="button">cerrar</a>
                        </div>
                    </div>   
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="#cafeguatemala">
                    <img class=" imag producto__imagen" src="img/cafe_bolsa_3.jpeg" alt="imagen café Avellana guatemala ">
                    <div class="producto__informacion">
                        <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#cafeguatemala" >Guatemala</a></p>  
                    </div> 
                    <div class="informacion" id="cafeguatemala">
                        <div class="informacion-inner scroll">
                            <h3>Café Guatemala</h3>
                            <img class=" imag producto__imagen" src="img/cafe_bolsa_2.jpeg" alt="imagen café Avellana guatemala ">
                            <p>
                                Café en grano en formato de 250 grs., con notas de sabor a caramelo, ciruela, chocolate amargo. Cosechado a 1380 msnm.
                            </p>
                            <a href="index.php#producto" class="button">cerrar</a>
                        </div>
                    </div>   
                </a>
            </div>  <!--.producto-->
      </div>       
    </main>

    <section id ="accesorio" class="contenedor">
            <h2 class="titulo centrar-texto mayuscula">Accesorios</h2>
            <div class="grid">
                <div class="producto">
                    <a href="#cafeteras">
                        <img class=" imag producto__imagen" src="img/cafetera_1.jpeg" alt="imagen Accesorios Avellana ">
                        <div class="producto__informacion">
                            <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#cafeteras" >Cafeteras</a></p>  
                        </div> 
                        <div class="informacion" id="cafeteras">
                            <div class="informacion-inner scroll">
                                <h3>Cafeteras</h3>
                                <img class=" imag producto__imagen" src="img/cafetera_1.jpeg" alt="imagen Accesorios Avellana ">
                                <p>
                                    Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                    Cosechado entre 1800 y 2000 msnm.
                                </p>
                                <img class=" imag producto__imagen" src="img/cafetera_2.jpeg" alt="imagen Accesorios Avellana ">
                                <p>
                                    Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                    Cosechado entre 1800 y 2000 msnm.
                                </p>
                                <a href="index.php#accesorio" class="button">cerrar</a>
                            </div>
                            
                        </div>   
                    </a>
                </div>  <!--.accesorio-->
                <div class="producto">
                    <a href="#prensas">
                        <img class=" imag producto__imagen" src="img/prensa_1.jpeg" alt="imagen Accesorios Avellana ">
                        <div class="producto__informacion">
                            <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#prensas" >Prensas</a></p>  
                        </div> 
                        <div class="informacion" id="prensas">
                            <div class="informacion-inner scroll">
                                <h3>Prensas</h3>
                                <img class=" imag producto__imagen" src="img/prensa_1.jpeg" alt="imagen Accesorios Avellana ">
                                <p>
                                    Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                    Cosechado entre 1800 y 2000 msnm.
                                </p>
                                <img class=" imag producto__imagen" src="img/prensa_2.jpeg" alt="imagen Accesorios Avellana ">
                                <p>
                                    Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                    Cosechado entre 1800 y 2000 msnm.
                                </p>
                                <a href="index.php#accesorio" class="button">cerrar</a>
                            </div>
                            
                        </div>   
                    </a>
                </div><!--.accesorio-->
                <div class="producto">
                    <a href="#shakers">
                        <img class=" imag producto__imagen" src="img/shaker_1.jpeg" alt="imagen Accesorios Avellana ">
                        <div class="producto__informacion">
                            <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#shakers" >Shakers</a></p>  
                        </div> 
                        <div class="informacion" id="shakers">
                            <div class="informacion-inner scroll">
                                <h3>Shakers</h3>
                                <img class=" imag producto__imagen" src="img/shaker_1.jpeg" alt="imagen Accesorios Avellana ">
                                <p>
                                    Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                    Cosechado entre 1800 y 2000 msnm.
                                </p>
                                
                                <a href="index.php#accesorio" class="button">cerrar</a>
                            </div>
                            
                        </div>   
                    </a>
                </div>
                    <div class="producto">
                        <a href="#moledor">
                            <img class=" imag producto__imagen" src="img/moledor.jpeg" alt="imagen Accesorios Avellana ">
                            <div class="producto__informacion">
                                <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#moledor" >Moledores</a></p>  
                            </div> 
                            <div class="informacion" id="moledor">
                                <div class="informacion-inner scroll">
                                    <h3>Moledor</h3>
                                    <img class=" imag producto__imagen" src="img/moledor.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        Cosechado entre 1800 y 2000 msnm.
                                    </p>
                                    
                                    <a href="index.php#accesorio" class="button">cerrar</a>
                                </div>
                                
                            </div>   
                        </a>
                    </div><!--.accesorio-->
                    <div class="producto">
                        <a href="#tetera">
                            <img class=" imag producto__imagen" src="img/tetera_1.jpeg" alt="imagen Accesorios Avellana ">
                            <div class="producto__informacion">
                                <p class="producto__nombre titulo_producto centrar-texto"><a class= "color_titulo" href="#tetera" >Teteras</a></p>  
                            </div> 
                            <div class="informacion" id="tetera">
                                <div class="informacion-inner scroll">
                                    <h3>Teteras</h3>
                                    <img class=" imag producto__imagen" src="img/tetera_1.jpeg" alt="imagen Accesorios Avellana ">
                                    <p>
                                        Café en grano en formato 250 grs, que te deja ricas notas de sabor a chocolate, toffee, membrillo.
                                        Cosechado entre 1800 y 2000 msnm.
                                    </p>
                                    
                                    <a href="index.php#accesorio" class="button">cerrar</a>
                                </div>
                                
                            </div>   
                        </a>
                    </div><!--.accesorio-->
             </div>
    </section>
    
    <div>
        <h2 class="titulo centrar-texto mayuscula">Contáctanos</h2>  
    </div>

   <section id="contacto" class="contenedor">   
        <div class="contacto-bg"></div>
    
        <form class="formulario" action="correos.php" method="POST" autocomplete="off">
            <div class="campo">
                <label class="titulo_alternativo color_titulo campo__label"  for="nombre">Nombre</label>
                <input 
                    type="text" 
                    class="campo__field titulo_alternativo "
                    id="nombre"
                    name = "nombre" 
                    placeholder="Tu Nombre" 
                    required 

                >
            </div>
            <div class="campo">
                <label class="titulo_alternativo color_titulo  campo__label" for="email">E-mail</label>
                <input 
                    type="email" 
                    class="campo__field titulo_alternativo "
                    id="email"
                    name="email"
                    placeholder="Tu E-mail" 
                    required
                >
            </div>
            <div class="campo">
                <label class="titulo_alternativo color_titulo campo__label" for="mensaje">Mensaje</label>
                <textarea 
                    class="campo__field campo__field--textarea titulo_alternativo  "
                    name="mensaje"
                    id="mensaje"
                    required
                ></textarea>
            </div>
    
            <div class="campo">
                <button type="submit" name = " submit" value="Enviar" class="boton boton--primario">enviar</button>
            </div>
        </form>
    </section>
   
<?php  incluirTemplate('footer'); ?>
    
    
</body>