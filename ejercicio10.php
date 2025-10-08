<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        // Devuelve los primeros 20 términos de la Secuencia de Fibonacci. Esta secuencia comienza por 0 y 1, y el resto de términos se pueden calcular sumando los dos anteriores.
        // a0 = 0, a1 = 1, an = an-1 + an-2

        echo "Los primeros 20 primeros términos de la Secuencia de Fibonacci son: ";

        $contador=2;
        $num1 = 0;
        $num2 = 1;
        echo $num1 , " , " , $num2;
        while ($contador <= 20) {
            $auxiliar = $num1 + $num2; //variable auxiliar para almacenar la suma de ambos números
            $num1 = $num2; // el número 2 es igual al antiguo número 1
            $num2 = $auxiliar; // numero 1 es igual a la nueva suma de ambos
            echo " , " , $auxiliar;
            $contador++;
        }

    ?>
</body>
</html>