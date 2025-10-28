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

        $listaFrutasPrecio=['Peras'=>2.15,'Limones'=>2.80,'Cerezas'=>3.35,'Naranjas'=>5.31,'Uvas'=>3.42,'Manzanas'=>4.43,'Mango'=>3.90];

        shuffle_asociativo($listaFrutasPrecio);

        $maxKilos=10;
        $maxDinero=20;
        $totalKilos=0;
        $totalDinero=0;

        echo "<h2>Hola, cargo máximo" . $maxKilos . " Kilos y tengo " . $maxDinero . " € </h2>";

        echo "--------Cesta de la compra de LauraLinares--------<br>";

        foreach ($listaFrutasPrecio as $fruta=>$precio) {
            $n_kilos=rand(1,3);
            $dinero=$precio*$n_kilos;
            // comprobacion para que mientras quepan los kilos y el precio, continue sumando a la cesta
            if (($totalKilos+$n_kilos <= $maxKilos) and ($totalDinero+$dinero <= $maxDinero)) {
                //acumula los kilos y el dinero de esta fruta a la variable total
                $totalKilos+=$n_kilos;
                $totalDinero+=$dinero;
                // muestra por pantalla los resultados de lo que se ha añadido a la cesta
                echo $fruta . " con " . $n_kilos . " Kg y un precio total de " . $dinero . " € <br>";    
            }          
        }
        // conclusión final de la lista
        echo "<h2>El total es de: " . $totalKilos . " Kg y un coste de: " . $totalDinero . " €</h2>"; 
    ?>  
</body>
</html>
