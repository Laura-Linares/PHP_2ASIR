<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Grafico Temperaturas</title>
</head>
<body>
    <?php
        // Partiendo de esta variable (un array con 12 elementos con los nombres de los
        // meses, como clave y la temperatura media máxima de cada mes, como valor)
        $temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
        "Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"=> 23, 
        "Noviembre" => 16, "Diciembre" => 13);

        /*Se pide:
        Generar un gráfico como se muestra a continuación, para el cuadrito se usa la imagen
        barraTemp.png (suministrada). */
            echo '<div style="font-family: monospace; font-size: 20px;">';
            echo "<h3>Gráfico Temperaturas Mensuales</h3>";

            foreach ($temperaturas as $mes => $temp) {
                echo str_pad($mes, 15, "-") . "> ";
                // Se muestra cada grado de la temperatura (la imagen)
                for ($i = 1; $i <= $temp; $i++) {
                    echo '<img src="barraTemp.png" style="border: 1px solid black" />';
                }

                echo " " . $temp . "ºC<br>";
            }
            echo "</div>";   

        // Suponiendo que la tabla tenga decimales
        echo "<br><br>";
        $temperaturas = array("Enero" => 12.5, "Febrero" => 13.9, "Marzo" => 14.1, 
        "Abril" => 19, "Mayo" => 25, "Junio" => 31, "Julio" => 34.4, "Agosto" => 34.45, 
        "Septiembre" => 28, "Octubre" => 23, "Noviembre" => 16, "Diciembre" => 13.346);

        echo '<div style="font-family: monospace; font-size: 20px;">';
            echo "<h3>Gráfico Temperaturas Mensuales</h3>";

            foreach ($temperaturas as $mes => $temp) {
                echo str_pad($mes, 15, "-") . "> ";

                // se divide la temperatura en dos arrays
                $temperatura=explode(".","$temp");
                // en caso de que no tenga decimales, se le añade un 0 para que exista el array
                if (count($temperatura) == "1") {
                    $temperatura[1]=0;
                }
                // pinta la parte entera
                for ($i = 1; $i <= $temperatura[0]; $i++) {
                    echo '<img src="barraTemp.png" style="border: 1px solid black" />';
                }
                // pinta los decimales
                for ($i = 1; $i <= $temperatura[1]; $i++) {
                    echo '<img src="decimoBarraTemp.jpg"/>';
                }
                
                echo " " . $temp . "ºC<br>";
            }
            echo "</div>";   
    ?>
</body>
</html>