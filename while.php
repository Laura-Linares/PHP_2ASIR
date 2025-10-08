<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle WHILE</title>
</head>
<body>
    <?php
        //Los numeros pares comprendidos entre 50 y 80
        $x=50;
        while ($x<=80) {
            if ($x == 80) {
                echo $x;
            } else {
                if ($x%2 == 0) {
                    echo $x , " ";
                }
            }
            $x++;
        }
        
        //Los números enteros entre 17 y -17
        echo("<br><br>");
        $y=17;
        while ($y >= -17) {
            if ($y == -17) {
                echo $y;
            } else {
                echo $y , " ";
            }
            $y--;
        }

        //La tabla de multiplicar del número 6
        echo("<br><br>");
        $n=6;
        $z=1;
        echo "TABLA DE MULTIPLICAR DEL " , $n , "<br>";
        while ($z <= 10) {
            echo "$n x $z = " , $n*$z , "<br>";
            $z++;
        }
    ?>
</body>
</html>