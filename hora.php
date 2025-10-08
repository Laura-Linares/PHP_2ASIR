<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Doble 2</title>
</head>
<body>
    <?php
        $hora = date("H");
        if ($hora < "12") {
            echo("Buenos días");
        } else {
            if ($hora >= "12" && $hora < "22") {
                echo("Buenas tardes");
            } else {
                echo("Buenas noches");
            }
        }
    ?>
</body>
</html>