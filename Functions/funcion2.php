<?php
   //declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones prueba de códigos</title>
</head>
<body>
    <?php
        // prueba de código 1
        function saludo($nombre = "compañero") {
            echo "<div>Encantado de conocerte, ", $nombre, ".</div>"; 
        }
        saludo("Alejandro"); saludo("Patricia"); saludo();
        /* Salida por pantalla:
        Encantado de conocerte, Alejandro
        Encantado de conocerte, Patricia
        Encantado de conocerte, compañero */

        // prueba de código 2
        echo "<br> <br>";
        function suma(int $a, int $b) {
            echo $a + $b; 
        }
        suma(10,15.52); 
        /* Salida por pantalla:
        25
        Puesto que como transforma ambas variables en int, no suma los decimales 
        Sin embargo, al poner 
        <?php
            declare(strict_types=1);
        ?> esto cambia y obliga a que se pase estrictamente el tipo de dato de la funcion */

        // prueba de código 3
        echo "<br> <br>";
        function triple(&$numero) {
            $numero *= 3; 
        }
        $num = 2; 
        triple($num); 
        echo $num;
        /* Salida por pantalla:
        6 
        al poner el & delante de la variable de la funcion, se indica que se va a pasar la referencia
        de la variable y, por lo tanto, al usar la funcion se cambiará el valor de la propia variable
        en sí misma porque lo modifica la funcion. Puede ser que pases una variable vacía y la modifica
        pero hay que tener cuidado porque no siempre se quiere que se modifique las variables, pero 
        hay ocasiones en las que sí se usará 
        si no estuviese pasado por referencia, no se vería nada porque no tiene salida la funcion
        pero como sí está pasado por referencia, sí que lo veremos porque altera el valor de la variable */
    ?>
</body>
</html>