<?php

    function fechaEntrega_02($tiempoEnvio_02) {
        setlocale(LC_ALL,"spanish");
        $fechaentrega_02=strtotime(date('d-m-Y') . "+$tiempoEnvio_02 days");
        $fechaentregaFormat_02=strftime("%A, %d de %B del %Y",$fechaentrega_02);
        return $fechaentregaFormat_02;
    }

    $dia=fechaEntrega_02(4);
    echo $dia;