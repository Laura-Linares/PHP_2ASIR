<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
</head>
<body>
    <?php
        /* Escribe un programa que cree un array asociativo en el que se guarde 
        la cantidad de lluvia (en litros por metro cuadrado) de todos los días 
        de esta semana en Granada y genere, como resultado, un mensaje con l
        a cantidad total. */

        $cantidad_lluvia = array("Lunes" => 15,"Martes" => 50,"Miercoles" => 19,"Jueves" => 80,"Viernes" => 56,"Sabado" => 15,"Domingo" => 85,);
        $suma=0;

        foreach ($cantidad_lluvia as $valor) {
            $suma+=$valor;
        }

        echo "<h2>La cantidad de lluvia total esta semana en Granada ha sido de " . $suma . " litros por metro cuadrado.</h2>";
    ?>
</body>
</html>