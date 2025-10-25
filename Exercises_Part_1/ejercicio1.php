<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        // dado un número, devuelve su valor absoluto como resultado
        $x=rand(-100,100);
        $absoluto=abs($x);
        echo "El valor absoluto del número " , $x , " es: " , $absoluto;
    ?>
</body>
</html>