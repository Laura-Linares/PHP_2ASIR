<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        // Devuelve el factorial de 10
        $factorial=1;
        $num=10;
        for ($x=1; $x<=$num; $x++)
            $factorial=$factorial*$x;
        echo "El factorial de " , $num , " es: " , $factorial;
    ?>
</body>
</html>