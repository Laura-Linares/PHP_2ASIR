<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Múltiple</title>
</head>
<body>
    <?php
        $dia = date("D");
        switch ($dia) {
            case "Mon":
                echo("Hoy es lunes");
            break;
            case "Tue":
                echo("Hoy es martes");
            break;
            case "Wed":
                echo("Hoy es miércoles");
            break;
            case "Thu":
                echo("Hoy es jueves");
            break;
            case "Fri":
                echo("Hoy es viernes");
            break;
            case "Sat":
                echo("Hoy es sábado");
            break;
            case "Sun":
                echo("Hoy es domingo");
            break;
        }
        
    ?>
</body>
</html>