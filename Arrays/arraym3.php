<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional 2</title>
</head>
<body>
    <?php
        /* Escribe un script que registre la audiencia en cada una de las tres sesiones de las cuatro películas que proyectó un cine el sábado pasado y que informe sobre el total de espectadores en cada película y en cada sesión. ¿Es posible hacerlo mediante un array asociativo? */

        $audiencia = array(
            "Kimetsu no Yaiba" => array(25, 24, 26),
            "Los Tipos Malos 2" => array(26, 27, 28),
            "Superman" => array(30, 6, 22),
            "Spiderman" => array(25, 26, 21)
        );

        // Recorrer la audiencia para sumar los espectadores por película
        echo "<h2>Total de espectadores por película</h2>";
        foreach ($audiencia as $pelicula => $sesiones) {
            $total_pelicula = 0;
            for ($i = 0; $i < count($sesiones); $i++) {
                $total_pelicula += $sesiones[$i];
            }
            echo "$pelicula: $total_pelicula espectadores <br>";
        }

        echo "<h2>Total de espectadores por sesión</h2>";
        // Array asociativo para asociar a cada sesion la suma de espectadores por pelicula
        $total_sesion = array(
            "1" => 0,
            "2" => 0,
            "3" => 0
        );

        foreach ($audiencia as $sesiones) {
            $total_sesion["1"] += $sesiones[0];
            $total_sesion["2"] += $sesiones[1];
            $total_sesion["3"] += $sesiones[2];
        }

        foreach ($total_sesion as $num => $total) {
            echo "Sesión $num: $total espectadores<br>";
        }
    ?>
</body>
</html>