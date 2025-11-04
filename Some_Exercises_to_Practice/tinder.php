<?php
    /*Se quiere un php tindeerrr.php que cada vez que se llame genere una cita con una persona, a azar, 
    en un día de la semana al azar, en una hora entre las 8 y las 22  (con periodos de media hora como mucho) y 
    en un lugar al azar de una lista de lugares, debe salir algo así como:
    Tiene usted cita con Antonio el jueves a las 13:30h en el parque del retiro. 
    La lista de personas y lugares debe contener al menos 5 elementos ( se rellenan en el programa). */

    $personas=["Mario","Luis","Lidia","Maite","Olivia","Juan","Daniel","Inés"];
    $lugares=["Plaza Einstein","Bar Manolo","Librería Sueños","Cafetería Dulces","Parque García Lorca"];
    $dias=["lunes","martes","miércoles","jueves","viernes","sabado","domingo"];
    $horas=[];
    for ($i=8;$i<=22;$i++) {
        if ($i == 22) {
            $horas[]=sprintf("%02d:00", $i);
        } else {
            $horas[]=sprintf("%02d:00", $i);
            $horas[]=sprintf("%02d:30", $i);
        } 
    }

    $p=array_rand($personas,1);
    $l=array_rand($lugares,1);
    $d=array_rand($dias,1);
    $h=array_rand($horas,1);

    echo "Tiene usted una cita con " . $personas[$p] . " el " . $dias[$d] . " a las " . $horas[$h] . " en " . $lugares[$l];

?>