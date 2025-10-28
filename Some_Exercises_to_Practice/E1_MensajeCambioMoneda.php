<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MensajeCambioMoneda LauraLinares</title>
</head>
<body>
    <?php
        // constante EURO_DOLAR con valor 1.05, que es los dólares que vale un euro.
        // variable $nombre con valor “Fulanito Pérez Pérez”
        // variable $entrega con valor 520.5
        // el resto de los datos se calculan (se usa también la función date)
        const EURO_DOLAR=1.05;
        $nombre="Laura Linares López";
        $entrega=520.5;
        $recibe=$entrega*EURO_DOLAR;
        $dia=date("j");
        $mes=date("F");
        $anyo=date("Y");

        echo "<table>";
        echo "<caption>SU RECIBO DE CAMBIO DE EUROS A DOLARES</caption>";
        echo "<tr>";
        echo "<td>SR/A. " . $nombre . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Entrega: " . $entrega . "€ </td>";
        echo "<td>Recibe: " . $recibe . "$ </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>en Granada a " . $dia . " de " . $mes . " de " . $anyo . ".</td>";
        echo "</tr>";
        echo "</table>";

    ?>
</body>
</html>