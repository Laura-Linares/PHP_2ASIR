<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 4</title>
</head>
<body>
    <?php
       // array de los modulos
       $modulos=array("Implantación Aplicaciones Web","Servicios de Red e Internet","Administración de Sistemas Gestores de Bases de Datos","Administración de Sistemas Operativos","Seguridad y Alta Disponibilidad","Python","Inglés","IPE 2","Proyecto");

       // bucle foreach
       echo "<h2>Los " . count($modulos) . " módulos de 2 ASIR son: </h2>";
       echo "<ol>";
       foreach ($modulos as $mod) {
        echo "<li>" . $mod . "</li>";
       }
       echo "</ol>";

       // bucle for
       echo "<h2>Los " . count($modulos) . " módulos de 2 ASIR son: </h2>";
       echo "<ol>";
       for ($x=0; $x<=count($modulos)-1; $x++) {
        echo "<li>" . $modulos[$x] . "</li>";
       }
       echo "</ol>";        
    ?>
</body>
</html>