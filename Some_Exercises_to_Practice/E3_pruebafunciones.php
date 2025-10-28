<?php
require './E3_funcionesrapidas.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        1. Funcion esPar($numero) <br>
        <?php
        echo "4 es " . esPar(4) . "<br>";
        echo "5 es " . esPar(5) . "<br>";
        echo "67.8 es " . esPar(67.8) . "<br>";
        echo "pepelu es " . esPar("pepelu") . "<br>";
        ?>
        <br>
        2. Funcion ordenaDos($valorA, $valorB) <br>
        <?php
        echo '8 y 7 dan ' . ordenaDos(8, 7) . "<br>";
        echo "'HOLA' y 'JUAN' dan " . ordenaDos('HOLA', 'JUAN') . "<br>";
        echo "'HOLA' y 8 dan '" . ordenaDos("HOLA", 8) . "<br>";
        echo 'TRUE Y FALSE dan ' . ordenaDos(TRUE, FALSE) . "<br>";
        ?>
        <br>
        
                3. Función cuentaLetra <br>
        <?php
        echo "la 'x' se repite en 'extramadurax' " . cuentaLetra("extramadurax", "x") . "<br>";
        echo "la 'a' se repite en 'Granada' " . cuentaLetra("Granada", "a") . "<br>";
        echo "la '' se repite en 'vaya por dios' " . cuentaLetra("vaya por dios", "") . "<br>";
        echo "la 'hola' se repite en 'hola como estas' " . cuentaLetra("hola como estas", "hola") . "<br>";
        ?>
                <br>
                4. Funcion sumaPares($array) <br>
        <?php
        $arrayASumar = Array(1, 2, 3, 4, 5, 6, 7);
        echo "la sumaPares de " . implode("-",$arrayASumar) . " es " . sumaPares($arrayASumar) . "<br>";
        $arrayASumar = Array(0.5, -2, 3, 0.4, -3.5, 6);
        echo "la sumaPares de " . implode("#", $arrayASumar) . " es " . sumaPares($arrayASumar) . "<br>";
        ?>
               <br>
        
    </body>
</html>