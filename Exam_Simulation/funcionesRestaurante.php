<?php
    // funcion que devuelve el precio medio del array asociativo que se pase
    function mediaPrecios($array) {
        $suma=0; //variable para ir almacenando la suma
        // bucle para ir recorriendo el array y sumando los precios
        foreach ($array as $plato => $precio) {
            $suma+=$precio;
        }
        $precio_medio=$suma/count($array); // hace la media con la suma y el total de platos del array
        return $precio_medio; // devuelve ese precio medio
    }

    //funcion que recibe un string en el formato "HH:MM" y devuelve el total de minutos
    function horaAMinutos($hora) {
        $total_minutos=0; //variable para ir sumando los minutos
        $horasyminutos=explode(":",$hora); //se separa el string por los :
        if ($horasyminutos[0] > 0) {
            $total_minutos+=($horasyminutos[0]*60); // si las horas son más de 0, se suma
        }
        if ($horasyminutos[1] > 0) {
            $total_minutos+=$horasyminutos[1]; // si los minutos son más de cero, se suman
        }
        return $total_minutos; // devuelve el total de minutos
    }

    //funcion que recibe un entero con minutos y devuelve un string en el formato "HH:MM"
    function minutosAHora($minutos) {
        $horasyminutos=$minutos/60; //variable auxiliar para dividir los minutos en minutos y horas
        $horasyminutos=explode(".", $horasyminutos); //dividimos el numero por el punto para quedarnos con las horas
        $horas=$horasyminutos[0]; // almacena el numero de horas en una variable
        $minutos=$minutos-($horas*60); // se calculan los minutos haciendo el cálculo con las horas *60 menos los minutos ya proporcionados
        $horaformateada=$horas . ":" . $minutos; // se formatea la hora
        return $horaformateada;
    }