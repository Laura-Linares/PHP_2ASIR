<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        // Longitud de una circunferencia de 
        // 12 centímetros de radio y área del círculo asociado
        $radio = 12;
        $long = 2 * M_PI * $radio;
        echo "La longitud del círculo es: " , round($long,2) , ".<br>";
        $area = M_PI * ($radio**2);
        echo "El área del círculo es: " , round($area,2) , ". <br>";

        // Resultados de la suma, la resta, el producto, 
        // la división, el módulo y la potencia de 7 y 4
        echo "<br>";
        $x = 7;
        $y = 4;
        echo "Los resultados obtenidos en 7 y 4 son..." , "<br> La suma es: " , $x + $y , 
        ". <br>La resta es : " , $x - $y , ".<br>El producto es: " , $x * $y , 
        ".<br>La división es: " , $x / $y , ".<br>El módulo es: " , $x % $y , 
        ".<br> Y, la potencia es: " , $x ** $y , ".<br>";

        //Un saludo, utilizando dos variables, la primera 
        // contiene “Buenos” y la segunda “días”
        $a = "Buenos ";
        $b = "días";
        echo "<br>" , $a . $b;
    ?>
</body>
</html>