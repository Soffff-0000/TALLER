<?php
    /* operadores de comparacion 

    == igualdad
    < menor que 
    > mayor que 
    <= menor o igual que 
    >= mayor o igual que 

    operadores de anidamiento
    && operador y
    or operador o 

    */

    $n1 = 5;
    $n2 = 2;
    $n3 = 10;

    if ($n1>$n2){
        if($n1>$n3){
            echo $n1." es mayor que".$n2." y ".$n3;
        }else{
            echo $n3. " es mayor que ".$n1." y ".$n2;
        }
    }

    /* if ($n1>$n2){
        echo $n1." es mayor que ".$n2;
    }else{
        echo $n2." es mayor que ".$n1;
    } */
     
    
?>