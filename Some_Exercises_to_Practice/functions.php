<?php
    function mediaArray($array) {
        $suma=0;
        foreach ($array as $valor) {
            $suma+=$valor;
        }
        $media=$suma/count($array);
        return $media;
    }

    function horaAMinuto($hora) {
        $horasyminutos=implode(":",$hora);
        $minutos=(($horasyminutos[0]*60) + $horasyminutos[1]);
        return $minutos;
    }

    function esPar($num) {
        if ($num%2 == 0) {
            return true
        } else {
            return false
        }
    }