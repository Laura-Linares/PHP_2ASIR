<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
</head>
<body>
    <?php
        include "datosTienda.php"; //se incluye el fichero con los datos de la tienda
        include "almacen.php"; //se incluye el fichero con los arrays de articulos
        include "funcionesTienda.php"; //se incluye el fichero con las funciones de la tienda

        echo "<<" . str_pad(NOMBRECOMERCIAL_02,42,"-",STR_PAD_BOTH) . ">><br>"; //se imprime el nombre del local
        echo "DATE UN CAPRICHO"; //se imprime el lema
        echo "<hr>"; //se imprime una linea de separacion
        echo str_pad("JUEGOS",34,"*",STR_PAD_BOTH) . "<br>";
        foreach ($juegos_02 as $juego_02 => $precio_02) { //se recorre el array de juegos
            echo str_pad($juego_02,42,"-",STR_PAD_BOTH) . number_format($precio_02,2,",") ."<br>"; //se imprime el juego con formato establecido
        }
        echo "<br><br>"; //se imprimen un par de espacios
        echo str_pad("COMICS",34,"*",STR_PAD_BOTH) . "<br>";
        foreach ($comics_02 as $comic_02 => $precio_02) { //se recorren los comics
            echo str_pad($comic_02,42,"-",1) . number_format($precio_02,2,",") ."<br>"; //se imprime el comic con el formato establecido
        }
        echo "<br><br>";
        echo str_pad("NOVELAS",34,"*",STR_PAD_BOTH) . "<br>";
        foreach ($novelas_02 as $novela_02 => $precio_02) { //se recorren las novelas
            echo str_pad($novela_02,42,"-",1) . number_format($precio_02,2,",") ."<br>"; //se imprime cada novela con el formato establecido
        }
        echo "<hr>"; //se imprime una linea de separacion
        echo "Visítanos en: $direccion_02 <br>"; //se imprime la direccion
        echo "O mándanos un email a: $email_02"; //se imprime el correo
    ?>
</body>
</html>