<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        // Dado un número entero, devuelve todos sus divisores.
        $n=rand(0,100);
        echo "Los divisores de " , $n , " son: <br>";
        for ($x=1; $x<=$n; $x++) {
            if ($n%$x == 0) {
                echo $x , "<br>";
            }
        }
    ?>
</body>
</html>