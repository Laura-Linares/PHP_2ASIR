<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle FOR</title>
</head>
<body>
    <?php
        //Mejorar el código anterior
        for ($x=0; $x <= 10; $x++) {
            if ($x == 10) {
                echo $x;
            } else {
                echo $x, " ";
            }
        }

        //Los numeros pares comprendidos entre 50 y 80
        echo("<br><br>");
        for ($y=50; $y <= 80; $y++) {
            if ($y == 80) {
                echo $y;
            } else {
                if ($y%2 == 0) {
                    echo $y, " ";
                } 
            }        
        }

        //Los números enteros entre 17 y -17
        echo("<br><br>");
        for ($z=17; $z >= -17; $z--) {
            if ($z == -17) {
                echo $z;
            } else {
                echo $z, " ";
            }
        }

        //La tabla de multiplicar del número 6
        echo("<br><br>");
        $n=6;
        echo "TABLA DE MULTIPLICAR DEL " , $n , "<br>";
        for ($t=1; $t<=10; $t++) {
            echo $n , " x " , $t , " = " , $t*$n , "<br>";
        }
    ?>
</body>
</html>