<?php
//Funciones rápidas Laura Linares
// Recibe como parámetro $numero, que devuelve “par” si $numero es par o “impar” si es impar, 
// si $numero no es entero devuelve “valor no valido”
function esPar($numero):string {
    if (is_int($numero)) {
        if ($numero%2 == 0) {
            return "es par";
        } else {
            return "es impar";
        }
    } else {
        return "es un valor no válido";
    }
}

// dados dos valores cualesquiera los saca en un string ordenados ascendentemente, 
// separados por coma
function ordenaDos($valorA,$valorB):string {
    if ($valorA > $valorB) {
        return $valorB . "," . $valorA;
    } elseif ($valorB > $valorA) {
        return $valorA . "," . $valorB;
    } else {
        return $valorA . " y " . $valorB . " son iguales";
    }
}

// sin usar funciones externas (excepto la función strlen()), recibe un string con una 
// cadena y un string con una letra, devuelve el número de veces que la letra aparece en 
// la cadena. (pista, cadena se puede tratar como si fuera un array)
function cuentaLetra($cadena,$letra):int {
    $longitud=strlen($cadena);
    $repeticiones=0;
    // se recorre la cadena y acumula las veces que encuentra coincidencias
    for ($x=0;$x<=$longitud-1;$x++) {
        if ($cadena[$x]== $letra) {
            $repeticiones+=1;
        }
    }
    return $repeticiones;
}

// sin usar funciones externas hacer la función sumaPares ($array), devuelve la suma de las 
// posiciones pares del array $array (0 es par!)
function sumaPares($array):float {
    $acumulador=0;
    foreach ($array as $indice => $valor) {
        if ($indice == 0) {
            $acumulador+=$valor;
        } elseif ($indice%2 == 0) {
            $acumulador+=$valor;
        } else {
            continue;
        }
    }
    return $acumulador;
}
?>