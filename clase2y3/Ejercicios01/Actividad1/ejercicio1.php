<?php
/*

1) Usar constantes para definir:
- el Titulo de la Pagina: Libros de Stephen King
- el sitio web: https://x.com/StephenKing
- la firma de la pagina con el nombre del alumno

2) Usar variables para mostrar 3 o 4 libros de Stephen King
- una variable con el nombre de cada libro, actualizando su valor donde sea necesario
- una variable con el nombre del autor que estamos trabajando aqui
- una variable con el nombre la imagen de cada libro [revisar la carpeta Ejercicio1/images]. La carpeta ya tiene im�genes de libros de King.
*/

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
            define("titulo","Libros de Stephen King");
            echo titulo;
            ?>
        </title>
        <meta http-equiv="Content-Type"  />
        <style type="text/css">
            body{
                font-size: 25px;
            }
            #contenedor {
                display: table;
                border: 2px solid #000;
                width: 350px;
                text-align: center;
                margin: 0 auto;
            }
            #contenidos {
                display: table-row;
            }
            #columna1, #columna2, #columna3 {
                display: table-cell;
                border: 1px solid #000;
                vertical-align: middle;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <div id="contenidos">
                <?php 
                    $libro = "Carrie";
                    $autor = "Stephen King";
                    $portada = "images/Carrie.JPG"
                ?>
                <div id="columna1"><?php echo $libro ?></div>
                <div id="columna2"><?php echo $autor ?></div>
                <div id="columna2"><img src="<?php echo $portada ?>" height="150px"></div>
            </div>

           <div id="contenidos">
               <?php 
                    $libro = "El Resplandor";
                    $autor = "Stephen King";
                    $portada = "images/El_Resplandor.JPG"
                ?>
                <div id="columna1"><?php echo $libro ?></div>
                <div id="columna2"><?php echo $autor ?></div>
                <div id="columna2"><img src="<?php echo $portada ?>" height="150px"></div>
            </div>
			
			<div id="contenidos">
               <?php 
                    $libro = "La Danza";
                    $autor = "Stephen King";
                    $portada = "images/LaDanza.JPG"
                ?>
                <div id="columna1"><?php echo $libro ?></div>
                <div id="columna2"><?php echo $autor ?></div>
                <div id="columna2"><img src="<?php echo $portada ?>" height="150px"></div>
            </div>

           <div id="contenidos">
                <?php 
                    $libro = "Misery";
                    $autor = "Stephen King";
                    $portada = "images/Misery.JPG"
                ?>
                <div id="columna1"><?php echo $libro ?></div>
                <div id="columna2"><?php echo $autor ?></div>
                <div id="columna2"><img src="<?php echo $portada ?>" height="150px"></div>
            </div>
			
        </div>

        <br />
        <div align="center">
            <a href="#" target="_blank" >
                <?php 
                    define("sitio_web","https://x.com/StephenKing");
                    echo sitio_web;
                ?>
            </a>
        </div>
        <footer align="center">
            <p>Copyright &copy;  
                <strong>
                    <?php  
                        define("nombre_alumno","Romero Gabriel");
                        echo nombre_alumno;
                    ?>
                </strong>
            </p>
        </footer>
    </body>
</html>