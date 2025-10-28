<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings 2</title>
</head>
<body>
    <?php
        /* Escribe un script que, dadas dos cadenas de caracteres, genere un mensaje que indique 
        el número de veces que la primera está incluida en la segunda */

        $cadena1='la caracola está en la playa';
        $cadena2='la';

        $array=explode(" ",$cadena1);
        $contador=0;
        
        for ($x=0; $x<str_word_count($cadena1);$x++) {
            if ($array[$x] == $cadena2) {
                $contador+=1;
            } elseif (strpos($array[$x],$cadena2)) {
                $contador+=1;
            }
        }

        echo "La cadena '" . $cadena2 . "' aparece " . $contador . " veces en la cadena '" . $cadena1 . "'";
    ?>
</body>
</html>