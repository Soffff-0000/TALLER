<?php

    $valor1 = $_POST ['valor1'];
    $valor2 = $_POST ['valor2'];
    $valor3 = $_POST ['valor3'];

    if ($valor1>$valor2){
        if($valor1>$valor2){
            echo $valor1." es mayor que".$valor2." y ".$valor3;
        }else{
            echo $valor3. " es mayor que ".$valor1." y ".$valor2;
        }
    }elseif($valor2>$valor3){
        echo $valor2." es mayor que ".$valor1." y ".$valor3;
    }else{
        echo $valor3." es mayor que ".$valor1." y ".$valor2;
    }

?>