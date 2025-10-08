<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
        function saludo($nombre,$lugar_nacimiento,$anyo_nacimiento) {
            echo "<div> $nombre nació en $lugar_nacimiento en el año $anyo_nacimiento </div>";
        }
        //persona1
        $nombre="Irene";
        $lugar_nacimiento="Granada";
        $anyo_nacimiento=1988;
        saludo($nombre,$lugar_nacimiento,$anyo_nacimiento);
        
        //persona2
        $nombre="Laura";
        $lugar_nacimiento="Granada";
        $anyo_nacimiento=1996;
        saludo($nombre,$lugar_nacimiento,$anyo_nacimiento);
    ?>
</body>
</html>