<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta del Restaurante</title>
</head>
<body>
    <?php
        include "datosRestaurante.php";
        include "cocina.php";
        include "funcionesRestaurante.php";
        echo "Rte. ->> " . NOMBRE_RESTAURANTE . " <---<br>"; // imprime el nombre del restaurante
        echo "lista de precios";
        echo "<hr>";
        echo "PRIMEROS PLATOS <br>";
        foreach ($primeros as $plato => $precio) {
            $plat=str_pad($plato,25,"-",2); //se formatea el como se ve el plato
            $prec=number_format($precio,2,","); //se formatea como se ve el precio
            echo $plat . $prec . "€ <br>";
        }

        echo "<br><br>";
        echo "SEGUNDOS PLATOS <br>";
        foreach ($segundos as $plato => $precio) {
            $plat=str_pad($plato,25,"-",2); //se formatea el como se ve el plato
            $prec=number_format($precio,2,","); //se formatea como se ve el precio
            echo $plat . $prec . "€ <br>";
        }

        echo "<br><br>";
        echo "POSTRES <br>";
        foreach ($postres as $plato => $precio) {
            $plat=str_pad($plato,25,"-",2); //se formatea el como se ve el plato
            $prec=number_format($precio,2,","); //se formatea como se ve el precio
            echo $plat . $prec . "€ <br>";
        }

        echo "$IVA % IVA incluido";
        echo "<hr>";
        echo "Abierto de lunes a jueves de $hora_apertura a $hora_cierre <br>"; // imprime la hora de entre semana
        $apertura=horaAMinutos($hora_apertura); // se pasa la hora a minutos para poder restarle 30
        $apertura=$apertura-30;
        $apertura=minutosAHora($apertura); //se vuelve a formato HH:MM
        // ahora se hace lo mismo pero con la hora de cierre
        $cierre=horaAMinutos($hora_cierre); // se pasa la hora a minutos para poder sumarle 45
        $cierre=$cierre+45;
        $cierre=minutosAHora($cierre); //se vuelve a formato HH:MM
        echo "Fines de semana, incluidos viernes, de $apertura a $cierre <br>"; // imprime la hora de los findes
        echo "¡Gracias por su visita!";
    ?>
</body>
</html>