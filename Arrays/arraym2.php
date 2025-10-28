<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional 2</title>
</head>
<body>
    <?php
        /* Escribe un script que, dados los valores de una matriz de 5 filas y 5 columnas, haga uso de dos funciones creadas por ti para calcular:
        La matriz traspuesta.
        La suma de ambas matrices. */

        //---Declaracion de funciones---
        function matriz_traspuesta($matriz) {
            $matriz_trasp=array();
            for ($i=0; $i < count($matriz); $i++) {
                for ($j=0; $j < count($matriz[$i]); $j++) {
                    $matriz_trasp[$j][$i]=$matriz[$i][$j];
                }
            }
            return $matriz_trasp;
        }

        function pintar_matriz($matriz) {
            echo "<table>";
            for ($i=0; $i < count($matriz); $i++) {
                echo "<tr>";
                for ($j=0; $j < count($matriz[$i]); $j++) {
                    echo "<td>" . $matriz[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        
        function matriz_suma($matriz1,$matriz2) {
            $suma=array();
            for ($i=0; $i < count($matriz1); $i++) {
                for ($j=0; $j < count($matriz1[$i]); $j++) {
                    $suma[$i][$j]=$matriz1[$i][$j]+$matriz2[$i][$j];
                }
            }
            return $suma;
        }

        //---Inicio del programa---
        $matriz_original=array(
            array(1,2,3,4,5),
            array(6,7,8,9,10),
            array(11,12,13,14,15),
            array(16,17,18,19,20),
            array(21,22,23,24,25)
        );

        // Pintar la matriz original
        echo "<h2>Matriz original</h2>";
        pintar_matriz($matriz_original);

        // Convertir la matriz original en la traspuesta y pintarla
        $traspuesta=matriz_traspuesta($matriz_original);
        echo "<h2>Matriz traspuesta</h2>";
        pintar_matriz($traspuesta);

        // Sumar ambas matrices y pintar la resultante
        $matriz_sumada=matriz_suma($matriz_original,$traspuesta);
        echo "<h2>Matriz resultante de la suma</h2>";
        pintar_matriz($matriz_sumada);

    ?>
</body>
</html>