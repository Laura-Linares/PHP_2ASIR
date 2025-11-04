<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido frutas LauraLinares</title>
</head>
<body>
    <?php
        function shuffle_asociativo(&$array) {
        //tomamos solos las claves en un array aparte
            $claves = array_keys($array);
        //barajamos el array de $claves
            shuffle($claves);
        //generamos un nuevo array asociativo con las claves y valores correctos
        $nuevo=array();
            foreach($claves as $clave) {
                $nuevo[$clave] = $array[$clave];
            }
        //sobreescribimos el $array, pues se pasa por referencia
            $array = $nuevo;
        //devolvemos true siempre
            return true;
        }

        $listaFrutasPrecio=["Peras" => 2.15, "Limones" => 2.80, "Cerezas" => 3.35, "Naranjas" => 5.31, "Uvas" => 3.42, "Manzanas" => 4.43, "Mango" => 3.90];
        
        shuffle_asociativo($listaFrutasPrecio);

        echo "Los precios están a: <br>";
        foreach ($listaFrutasPrecio as $fruta => $precio) {
            echo "$fruta => $precio ";
        }
        echo "<br>";

        $precioMAX=20;
        $pesoMAX=10;
        $totalprecio=0;
        $totalpeso=0;

        echo "Hola, cargo máximo $pesoMAX Kilos y tengo $precioMAX € <br>";
        echo "<hr>";
        foreach ($listaFrutasPrecio as $fruta => $precio) {
            $kilos=rand(1,3);
            $dinero=($precio*$kilos);
            if ((($totalpeso+$kilos) > $pesoMAX) or (($totalprecio+$dinero) > $precioMAX)) {
                break;
            }
            $totalpeso+=$kilos;
            $totalprecio+=$dinero;
            echo "$fruta: con $kilos k --> precio original: $precio € --> precio total: $dinero € <br>";
        }
        echo "<hr>";
        echo "El total de kilos es de: $totalpeso y la compra cuesta: $totalprecio €";
    ?>
</body>
</html>
