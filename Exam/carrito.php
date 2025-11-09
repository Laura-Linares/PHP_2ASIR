<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compra</title>
</head>
<body>
    <?php
        include "datosTienda.php"; //se incluye el fichero con los datos de la tienda
        include "almacen.php"; //se incluye el fichero con los arrays de articulos
        include "funcionesTienda.php"; //se incluye el fichero con las funciones de la tienda

        function shuffle_assoc_02(&$array_02) {
            $keys_02 = array_keys($array_02); //coge las claves del array
            shuffle($keys_02); // las baraja
            foreach($keys_02 as $key_02) {
                $new_02[$key_02] = $array_02[$key_02]; //asigna al array original las nuevas claves
            }
            $array_02 = $new_02; // lo asina al array original y lo cambia por el & (referencia)
            return true;
        }

        echo "<<" . str_pad(NOMBRECOMERCIAL_02,42,"-",STR_PAD_BOTH) . ">><br>"; //se imprime el nombre del local
        echo "<hr>"; //linea de separacion
        echo str_pad("TU CARRITO",35,"*",STR_PAD_BOTH) . "<br>"; //se imprime la linea de tu carrito con formato
        echo "<b><u> JUEGOS </u></b> <br>";
        shuffle_assoc_02($juegos_02); //se baraja el array asociativo de juegos usando la funcion suffle_assoc
        $juegosazar_02=array_slice($juegos_02,0,rand(1,3)); //coge de 1 a 3 juegos al azar
        foreach ($juegosazar_02 as $juego_02 => $precio_02) {
            echo str_pad($juego_02,42,"_",1) . number_format($precio_02,2,",") ."€<br>"; //imprime los juegos con el formato especificado
        }

        echo "<br><b><u> COMICS </u></b> <br>";
        shuffle_assoc_02($comics_02); //se baraja el array asociativo de comics usando la funcion suffle_assoc
        $comicsazar_02=array_slice($comics_02,0,rand(1,3)); //coge de 1 a 3 comics al azar
        foreach ($comicsazar_02 as $comic_02 => $precio_02) {
            echo str_pad($comic_02,42,"_",1) . number_format($precio_02,2,",") ."€<br>"; //imprime los juegos con el formato especificado
        }

        echo "<br><b><u> NOVELAS </u></b> <br>";
        shuffle_assoc_02($novelas_02); //se baraja el array asociativo de novelas usando la funcion suffle_assoc
        $novelasazar_02=array_slice($novelas_02,0,rand(1,3)); //coge de 1 a 3 novelas al azar
        foreach ($novelasazar_02 as $novela_02 => $precio_02) {
            echo str_pad($novela_02,42,"_",1) . number_format($precio_02,2,",") ."€<br>"; //imprime las novelas con el formato especificado
        }

        $preciojuegos_02=totalArticulos_02($juegosazar_02); //se suman los articulos de juegos
        $preciocomics_02=totalArticulos_02($comicsazar_02); //se suman los articulos de comics
        $precionovelas_02=totalArticulos_02($novelasazar_02); //se suman los articulos de novelas
        $preciocarrito_02=$preciojuegos_02+$preciocomics_02+$precionovelas_02; //se suman todos

        echo "<br>"; //un espacio para que quede bonito

        echo str_pad("PRECIO CARRITO",42,".") . number_format($preciocarrito_02,2,",") . "€ <br>"; //se imprime el precio del carrito con la suma de los articulos

        echo "<br>"; //un espacio para que quede bonito

        echo str_pad("CON LA PROMOCION $promocion_activa_02",34,"*",STR_PAD_BOTH) . "<br>";
        $preciopromocion_02=PrecioConDescuento_02($preciocarrito_02,$descuento_02); //se calcula el precio con la promocion
        $precioformateado_02=number_format($preciopromocion_02,2,",") . "€"; //se formatea el numero pa que quede bonito
        echo str_pad("PRECIO CARRITO $precioformateado_02",38,"*",STR_PAD_BOTH) . "<br>"; //se imprime

        echo "<br>"; //un espacio para que quede bonito

        echo "La entrega de tu pedido está prevista para el <br>";
        echo fechaEntrega_02($dias_entrega_02); //imprime la fecha de envio - no sé por qué se imprime aquí en ingles si en la funcion la devuelve en español
        
    ?>
</body>
</html>