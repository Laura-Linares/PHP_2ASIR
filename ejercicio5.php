<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        // dado un año, envíe un mensaje para señalar si es bisiesto o no. Los años bisiestos son aquellos que son divisibles por 4, excepto los que son divisibles por 100 sin serlo por 400
        $anyo = 2012;
        if ($anyo % 400 == 0 or ($anyo % 4 == 0 and $anyo % 100 != 0)) {
            echo $anyo , " es un año bisiesto";
        } else {
            echo $anyo , " no es un año bisiesto";
        }
    ?>
</body>
</html>