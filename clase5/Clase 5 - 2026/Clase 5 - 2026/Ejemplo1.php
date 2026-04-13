<!--Preparar la información de una tabla de empleados en un ARRAY
y completar la siguiente tabla UTILIZANDO FUNCIONES sabiendo que:
Los dias de vacaciones correspondientes son:
Menos de 5 años: 14 días
Entre 5 y 9 años: 21 días
10 años o más: 30 días

Calcular el total a cobrar por horas extras
Calcular el salario total
-->
<?php
require_once("function.php");
require_once("sueldos.php");
require_once("vacaciones.php");
$Empleados = [
    0 => [
        "nombre" => "aña",
        "apellido" => "poroto",
        "antiguedad" => "2",
        "vacaciones" => "10",
        "sueldo" => "5000",
        "hsExtras" => "6",
        "valor" => "100"
    ],
    1 => [
        "nombre" => "negers",
        "apellido" => "antonio",
        "antiguedad" => "67",
        "vacaciones" => "10",
        "sueldo" => "5000",
        "hsExtras" => "67",
        "valor" => "100"
    ],
    2 => [
        "nombre" => "aña",
        "apellido" => "uwu",
        "antiguedad" => "1",
        "vacaciones" => "10",
        "sueldo" => "5000",
        "hsExtras" => "24",
        "valor" => "100"
    ]
]; ?>
<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejemplo 1 - seccionado
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">
        <!-- CSS -->
        <link href="css/structure.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="scripts/wufoo.js"></script>

        <!--[if lt IE 10]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
                  action="">

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos y calcular , segun la antig&uuml;edad, cu&aacute;ntos dias de vacaciones le corresponden (con una funci&oacute;n). </div>
                </header>

                <ul>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Empleado </td>
                                    <td>Antig&uuml;edad</td>
                                    <td><strong>Vacaciones</strong></td>
                                    <td>Sueldo</td>
                                    <td>Hs Extra y Valor</td>
                                    <td><strong>Monto cobrar x Hs Extra</strong></td>
                                    <td><strong>Sueldo Final</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $cant = count($Empleados);
                                for ($i = 0; $i < $cant; $i++) { ?>
                                        <tr>
                                            <td><?php echo $i + 1; ?></td>
                                            <td><?php echo $Empleados[$i]["nombre"]?> <?php echo $Empleados[$i]["apellido"]?></td>
                                            <td><?php echo $Empleados[$i]["antiguedad"]?></td>

                                            <td>
                                                <strong>
                                                Corresponden <?php echo calcularVacaciones($Empleados[$i]["antiguedad"],$Empleados[$i]["vacaciones"])?> dias <!-- Calculo de vacaciones -->
                                                </strong>
                                            </td>

                                            <td>$ 5000</td>
                                            <td>3  hs. <br />[c/u $ 100 ]</td>

                                            <td>
                                                <strong>
                                                $ <?php
                                                $horasExtras = calculoHorasExtras($Empleados[$i]["hsExtras"],$Empleados[$i]["valor"]);
                                                echo $horasExtras;
                                                ?> <!-- Calculo del total por horas  -->
                                                </strong>
                                            </td>

                                        <td>
                                                <strong>
                                                    $ <?php echo calcularSueldoTotal($Empleados[$i]["sueldo"],$horasExtras)?> <!-- Calculo del salario final -->
                                                </strong>
                                            </td>
                                        </tr>
                                    <?php }
                                ?>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </form>

        </div><!--container-->
    </body>
</html>
