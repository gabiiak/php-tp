<?php
/*
1)	Mantener la estructura brindada de 3 elementos principales.
2)	Estos 3 elementos ahora ser�n destinos tur�sticos, pudiendo repetir la informaci�n del ejercicio 2, pero agregando la informaci�n necesaria como Precio y Cuotas. 
3)	Usar variables y constantes donde consideren necesario. 
4)	Usar distintas im�genes donde consideren.

*/
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8"/> 
        <title>TituloPagina</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <span class="brand">TituloPagina</span>
                    </div>
                </div>
            </div>
        </div>




        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/Imagen1" alt="">

                        <div class="caption">
                            <h3>Titulo Destino1</h3>

                            <p>Descripcion Destino1</p>
                            <h4>Precio: $ Precio1</h4>
                            <p><strong>Cantidad Cuotas </strong> cuotas de <strong>$ PrecioCuota1</strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/Imagen2" alt="">

                        <div class="caption">
                            <h3>Titulo Destino2</h3>

                            <p>Descripcion Destino2</p>
                            <h4>Precio: $ Precio2</h4>
                            <p><strong>Cuotas2 </strong> cuotas de <strong>$ PrecioCuota2</strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/Imagen3" alt="">

                        <div class="caption">
                            <h3>Titulo Destino3</h3>
                            <p>Descripcion Destino3</p>
                            <h4>Precio: $ Precio3</h4>
                            <p><strong>Cuotas3 </strong> cuotas de <strong>$ PrecioCuota3</strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <hr />

        <footer align="center">
            <p>Programaci&oacute;n con <strong>PHP</strong></p>
        </footer>


    </body>
</html>