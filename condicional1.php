<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple</title>
</head>
<body>
    <?php
        $h = date("H");
        if($h >= "22") {
            echo "Buenas ncohes";
        }
    ?>
</body>
</html>