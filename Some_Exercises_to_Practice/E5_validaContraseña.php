<?php

/*escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */

function validaContraseña($contraseña) {
    $valida=TRUE;
    // Longitud mínima de 8 caracteres
    if (strlen($contraseña) < 8) {
        $valida=FALSE;
    }

    // Al menos una mayus
    if (!preg_match('/[A-Z]/', $contraseña)) {
        $valida=FALSE;
    }

    // Al menos una minus
    if (!preg_match('/[a-z]/', $contraseña)) {
        $valida=FALSE;
    }

    // Al menos un número
    if (!preg_match('/[0-9]/', $contraseña)) {
        $valida=FALSE;
    }

    // Al menos un símbolo especial
    if (!preg_match('/[^A-Za-z0-9]/', $contraseña)) {
        $valida=FALSE;
    }

    return $valida;
}

$listaContraseñas = ['11111111111','Hola_comoEstas',"Mi#contraseña@2"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    }
    else {
        echo 'Mala';
    }
    echo '<br>';
}

// otra forma de hacerlo, con un bucle FOR
function validaContraseña($contraseña) {

    $valida=FALSE;

    if (strlen($contraseña) < 8) {
        $valida=FALSE;
    }

    $mayus=0;
    $minus=0;
    $numeros=0;
    $caractespeciales=0;

    for ($i = 0; $i < strlen($contraseña); $i++) {
        $c = $contraseña[$i];

        if (ctype_upper($c)) $mayus=1;
        else if (ctype_lower($c)) $minus=1;
        else if (ctype_digit($c)) $numeros=1;
        else $caractespeciales=1;
    }

    if (($mayus == 1) and ($minus == 1) and ($numeros == 1) and ($caractespeciales == 1)) {
        $valida=TRUE;
    }
    
    return $valida;
}

$listaContraseñas = ['11111111111','Hola_comoEstas',"Mi#contraseña@2"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    }
    else {
        echo 'Mala';
    }
    echo '<br>';
}