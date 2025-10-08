<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUCLE FOREACH</title>
</head>
<body>
    <?php
        $ventas = array(1000,2055,1756,144,1785,282,2006,2987,8298,601,1445,237,286,638,597);
        echo "<h2> Total ventas de esta quincena </h2>";
        $suma_ventas = 0;
        foreach ($ventas as $v) {
            $suma_ventas=$suma_ventas+$v;
        }
        echo $suma_ventas , " €";
    ?>
</body>
</html>