<?php
 // tengo un array con 5 nombres, quiero mostrar 4 aleatorios separados por guines

    $nombres=["Laura","Irene","Maria","Chantel","Lucas"];
    $nombresaleatorios=shuffle($nombres);
    $n=array_slice($nombresaleatorios,0,3);
    echo implode(" - ", $n);

    
    