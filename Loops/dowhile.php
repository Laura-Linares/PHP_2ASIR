<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle DO...WHILE</title>
</head>
<body>
    <?php
        //Los números pares comprendidos entre 50 y 80
        $x=50;
        $limite=80;
        do {
            if ($x == $limite) {
                echo $x;
            } else {
                if ($x%2 == 0) {
                    echo $x , " ";
                }
            }
            $x++;
        } while ($x<=$limite);
        
        //Los números enteros entre 17 y -17
        echo("<br><br>");
        $x=17;
        $limite=-17;
        do {
            if ($x == $limite) {
                echo $x;
            } else {
                echo $x , " ";
            }
            $x--;
        } while ($x >= $limite);

        //La tabla de multiplicar del número 6
        echo("<br><br>");
        $n=6;
        $x=1;
        $limite=10;
        echo "TABLA DE MULTIPLICAR DEL " , $n , "<br>";
        do {
            echo "$n x $x = " , $n*$x , "<br>";
            $x++;
        } while ($x <= $limite);
    ?>
</body>
</html>