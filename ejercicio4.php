<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        // dados dos números, devuelve un mensaje para mostrarlos ordenados de menor a mayor
        $x=rand(-100,100);
        $y=rand(-100,100);
        if ($x == $y) {
            echo "¡Ambos números son iguales!" , $x , "  " , $y;
        } elseif ($x > $y) {
            echo "Los números ordenados son: " , $x , "  " , $y;
        } else {
            echo "Los números ordenados son: " , $y , "  " , $x;
        }
    ?>
</body>
</html>