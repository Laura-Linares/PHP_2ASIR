<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        /* Escribe un script que, dada una cadena de caracteres, genere un mensaje que indique si es, o no, un palíndromo. 
        Se dice que una cadena es un palíndromo si el resultado de leerla de izquierda a derecha y de derecha a izquierda es el mismo.*/

        $cadena='patata';
        $cadenareverso=strrev($cadena);

        if ($cadena == $cadenareverso) {
            echo "¡La cadena " . $cadena . " es un palíndromo!";
        } else {
            echo "¡La cadena " . $cadena . " no es un palíndromo!";
        }
    ?>
</body>
</html>