<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del día</title>
</head>
<body>
    <?php
        include "datosRestaurante.php";
        include "cocina.php";
        include "funcionesRestaurante.php";
        echo "Rte. ->> " . NOMBRE_RESTAURANTE . " <---<br>"; // imprime el nombre del restaurante
        $dia=date("w");
        // no me ha dado tiempo al case para el dia y que muestre hora segun el día
        switch ($dia) {
            case 1:
                $d="lunes";
                break;
            case 2:
                $d="martes";
                break;
            case 3:
                $d="miércoles";
                break;
        }

        echo "Menu de hoy $d <br>";
        echo "<hr>";
        foreach ($primeros as $plato => $precio) {
            echo "$plato => $precio <br>";
        }
        echo "<hr>";
        $clavesprimeros=array_keys($primeros); // se cogen las claves del array
        shuffle($clavesprimeros); // se barajan
        $primeros_seccion=array_slice($clavesprimeros,0,rand(2,count($clavesprimeros))); // se divide en un array que contenga de 2 a X platos
        $m_primeros=[]; // array con los primeros escogidos y sus precios

        function barajarArray($array) {
            $clavesarray=array_keys($array); // se cogen las claves del array
            shuffle($clavesarray); // se barajan
            $array_seccion=array_slice($clavesarray,0,rand(2,count($clavesarray))); // se seleccionan los deseados 2-max
            return $array_seccion;
        }
        function crearMenu($array,$arrayoriginal) {
            $m_array=[]; // se crea un array que tendrá los nuevos + precios
            foreach ($array as $clave) { // se recorren ambos arrays
                foreach ($arrayoriginal as $c => $valor) {
                    if ($clave == $c) {
                        $m_array["$clave"]=$valor; //se añade al nuevo array
                    }
                }
            }
            return $m_array;
        }

        $primeros_seccion=barajarArray($primeros); // se baraja 
        $primeros_menu=implode(" - ",$primeros_seccion); //se crea el menu con la impresion

        $segundos_seccion=barajarArray($segundos);
        $segundos_menu=implode(" * ",$segundos_seccion);

        $postres_seccion=barajarArray($postres);
        $postres_menu=implode(" ~ ", $postres_seccion);

        // impresion de los primeros platos
        echo "PRIMEROS <br>";
        echo "$primeros_menu <br><br>";
        // impresion de los segundos platos
        echo "SEGUNDOS <br>";
        echo "$segundos_menu <br><br>";
        // impresion de los postres
        echo "POSTRES <br>";
        echo "$postres_menu <br>";

        echo "<hr>";

        //calcular la media
        $menu_p=crearMenu($primeros_seccion,$primeros);
        $totalprimeros=mediaPrecios($menu_p);
        $menu_s=crearMenu($segundos_seccion,$segundos);
        $totalsegundos=mediaPrecios($menu_s);
        $menu_pos=crearMenu($postres_seccion,$postres);
        $totalpostres=mediaPrecios($menu_pos);
        $preciototal=$totalprimeros+$totalsegundos+$totalpostres;

        echo "PRECIO MENU $preciototal € $IVA IVA incluido";
        echo "<hr>";
        echo "Abierto de $hora_apertura a $hora_cierre <br>";
        echo "¡Gracias por su visita!";
    ?>
</body>
</html>