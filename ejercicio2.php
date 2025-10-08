<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2y3</title>
</head>
<body>
    <?php
        // dados dos números, envíe un mensaje que señale el más grande
        $x=rand(-100,100);
        $y=rand(-100,100);
        if ($x > $y) {
            echo "Dados los números " , $x , " y " , $y , " el mayor de ambos es: " , $x;
        } elseif ( $y > $x ) {
            echo "Dados los números " , $x , " y " , $y , " el mayor de ambos es: " , $y;
        } else {
            echo "Ambos números: " , $x , " y " , $y , " son iguales";
        }
    ?>
</body>
</html>