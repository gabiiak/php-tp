<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwO</title>
</head>
<body>
    <?php 
        $Hola = "HOLA MUNDO";
    ?>
    <p>
    <?php 
        echo $Hola
    ?>
    </p>
    <p>
    <?php 
        define("pi",3.14);
        echo pi;
    ?>
    <!--condicionales-->
    </p>
    <?php  
        $numero = 5;
        if ($numero < 10){
            $mensaje = "el numero ". $numero . " es menor a 10";
        }else{
            $mensaje = "el numero ". $numero . " es mayor a 10";
        }
    ?>
    <!--switch-->
    
    <?php  
        $num_a_letra = 2;
        switch($num_a_letra){
            case 1:
                $texto = "uno";
                break;
            case 2:
                $texto = "dos";
                break;
            case 3:
                $texto = "tres";
                break;
        }
    ?>
    <!--operadores logicos-->
    <?php  
        $x = 2;
        $y = 4;
        $operacion = 9;
        switch($operacion){
            case 1:
                $resultado = $x + $y;
                break;
            case 2:
                $resultado = $x - $y;
                break;
            case 3:
                $resultado = $x * $y;
                break;
            case 4:
                $resultado = $x / $y;
                break;
            case 5:
                $resultado = $x % $y;
                break;
            case 6:
                $resultado = $x ** $y;
                break;
            default:
                $resultado = "NO EXISTE";
        }
    ?>
    <p><?php echo $mensaje ?></p>
    <p><?php echo "el num es " .$texto ?></p>
    <p><?php echo "1: suma <br/> 2: resta <br/> 3: mult <br/> 4: division <br/> 5: modulo <br/> 6: potencia" ?></p>
    <p><?php echo "el resultado es $resultado"?></p>
    <!--operadores logicos-->
    <?php 
        $a = 2;
        $b = 2;
        if ($a == $b){
            echo "<p style='color: green;'>los valores son iguales</p>";
        } else echo "<p style='color: red;'>los valores no son iguales</p>";
    ?>
    <!--arrays-->
    <?php  
        $Dias = array("Lunes","Martes","Miercoles","Jueves","Viernes");
        $cant_dias = count($Dias);
        for($i = 0; $i < $cant_dias;$i++){
                echo $Dias[$i];
                echo "<br/>";
        }

        $Meses[] = "enero";
        $Meses[] = "febrero";
        $Marzo[] = "marzo";
        $cant_meses = count($Meses);
        $i = 0;
        while($i < $cant_meses){
            echo $Meses[$i];
            $i++;
            echo "<br/>";
        }

        $Provincias = array(
            "CBA" => "Cordoba", //CBA es el indice
            "NQN" => "Neuquen",
            "BSAS" => "Buenos aires"
        );
        //echo $Provincias["CBA"];
    ?>
    <style>
        p{
            font-size: 40px;
            font-weight: 100;
            font-family:'Times New Roman', Times, serif;
            border: 2px dotted grey;
        }
    </style>
</body>
</html>