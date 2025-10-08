<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        // Dado un número entero, envía un mensaje para señalar si es primo o no
        $n=rand(0,100);
        $contador=0;
        for ($x=1; $x<=$n; $x++) {
            if ($n%$x == 0) {
                $contador++;
            }
        }
        if ($contador > 2) {
            echo "El número " , $n , " no es primo";
        } else {
            echo "El número " , $n , " es primo";
        }
    ?>
</body>
</html>