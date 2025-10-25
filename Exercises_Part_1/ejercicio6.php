<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        // Devuelve la suma de los números del 1 al 100
        $suma=0;
        for ($x=1; $x<=100; $x++)
            $suma=$suma+$x;
        echo "La suma de los números del 1 al 100 es: " , $suma;
    ?>
</body>
</html>