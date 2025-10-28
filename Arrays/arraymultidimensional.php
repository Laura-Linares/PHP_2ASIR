<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <?php
        $temperaturas = array (
            array(1,12,26),
            array(2,11,24),
            array(3,15,24)
        );
        echo "<table><caption>Tabla de temperaturas</caption>";
        echo "<tr><th>Día</th><th>Mínima</th><th>Máxima</th></tr>";
        for ($dia = 0; $dia < 3; $dia++) {
            echo "<tr>";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>", $temperaturas[$dia][$col] , "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Utiliza el código anterior para generar un mensaje en el que se indique el último día que tuvo la temperatura máxima más alta del mes.
        $temp_max=0;
        $dia_temp_max=0;
        for ($dia = 0; $dia < count($temperaturas); $dia++) {
            if ($temperaturas[$dia][2] > $temp_max) {
                $temp_max=$temperaturas[$dia][2];
                $dia_temp_max=$temperaturas[$dia][0];
            }
        }
        echo "<h2>El día del mes con la temperatura más alta fue el " . $dia_temp_max . " alcanzando temperaturas de " . $temp_max . "ºC.</h2>";
    ?>
</body>
</html>