<?php
    //funcion que devuelve la suma total del array asociativo que se pase
    function totalArticulos_02($listaArticulos_02){
        $sumatotal_02=0; // se inicializa la variable que va a acumular los precios
        foreach ($listaArticulos_02 as $articulo_02 => $precio_02) { //se recorre el array asociativo
            $sumatotal_02+=$precio_02; //se suma cada precio a la variable con el total
        }
        return $sumatotal_02; //devuelve la variable con el total
    }

    //funcion que recibe un precio y un descuento y devuelve el precio con el descuento aplicado
    function PrecioConDescuento_02($precio_02,$descuento_02) {
        $auxiliar_02=($precio_02*$descuento_02)/100; // se calcula el precio que se ha de sumar (del descuento)
        $preciocondescuento_02=$precio_02-$auxiliar_02; //se le quita al precio original el descuento
        return $preciocondescuento_02; //devuelve el precio con el descuento aplicado
    }

    //funcion que recibe el tiempo que tarda el envío en dias y devuelve la fecha estimada de entrega
    function fechaEntrega_02($tiempoEnvio_02) {
        setlocale(LC_ALL,"spanish"); //se pone la hora local
        $fechaentrega_02=strtotime(date('d-m-Y') . "+$tiempoEnvio_02 days"); //se le añaden los dias de envio
        $fechaentregaFormat_02=strftime("%A, %d de %B del %Y",$fechaentrega_02); //se formatea la hora
        return $fechaentregaFormat_02; //devuelve la hora formateada
    }