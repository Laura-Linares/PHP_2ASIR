<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Jornada</title>
    <style>
        table, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 20px;
        text-align: center;
        }
    </style>
</head>
<body>
    <?php
        // Partiendo de esta variable (un array con 20 elementos)
        $equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
        "Villarreal", "FC Barcelona", "Sevilla", "Getafe", "Valencia",
        "Cádiz", "Granada", "Osasuna", "Atlético de Madrid", "Celta de
        Vigo", "Eibar", "Huesca", "Elche", "Alavés", "Levante",
        "Athletic Club", "Real Valladolid"];

        /* Apartado A:
        Generar dos arrays al azar 10 elementos cada uno $locales y $visitantes, con
        los nombres de los equipos para hacer los emparejamientos de una jornada. */
            // se barajan los equipos
        shuffle($equipos);
            // se llenan los locales
        $locales=array_slice($equipos,0,10);
            // se llenan los visitantes
        $visitantes=array_slice($equipos,10,10);

        echo '--------------APARTADO A) -------------';
        echo "<h5> LOCALES </h5>";
        var_dump($locales);
        echo "<h5> VISITANTES </h5>";
        var_dump($visitantes);

        echo "<br><br>";
        /* Apartado B
        Generar dos arrays al azar de 10 elementos cada uno, $golesLocales y $golesVisitantes, de
        0 a 6 goles */
        $golesLocales=array();
        $golesVisitantes=array();
        for ($i=0;$i<10;$i++) {
            $golesLocales[]=rand(0,6);
            $golesVisitantes[]=rand(0,6);
        }
        echo '<br><br>--------------APARTADO B) -------------';
        echo "<h5> GOLES LOCALES </h5> ";
        var_dump($golesLocales);
        echo "<h5> GOLES VISITANTES </h5> ";
        var_dump($golesVisitantes);

        echo "<br><br>";
        /* Apartado C
        Mostrar en pantalla los resultados de la jornada generada */
        echo "<table>";
        echo "<caption>RESULTADOS JORNADA</caption>";
        for ($i=0;$i<=9;$i++) {
            echo "<tr>";
            echo "<td>" . $locales[$i] . "</td>";
            echo "<td>" . $golesLocales[$i] . " - " . $golesVisitantes[$i] . "</td>";
            echo "<td>" . $visitantes[$i] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br><br>";
        /* Apartado D
        Mostrar en pantalla los resultados de la jornada generada en bonito con los escudos */
        echo "<table>";
        for ($i=0;$i<=9;$i++) {
            $equipolocal=$locales[$i];
            $equipovisitante=$visitantes[$i];
            echo "<tr>";
            echo "<td> $equipolocal </td>";
            echo "<td> <img src='../escudosEquipos/$equipolocal.jpg' width='70'> </td>";
            echo "<td>" . $golesLocales[$i] . " - " . $golesVisitantes[$i] . "</td>";
            echo "<td> <img src='../escudosEquipos/$equipovisitante.jpg' width='70'> </td>";
            echo "<td> $equipovisitante </td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>