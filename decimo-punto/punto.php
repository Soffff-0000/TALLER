<?php
    $T = $_POST ['T'];
    $TD = $T*0.2;

    if($T>20.000){
        echo " debe pagar $ ".$TD;
    }else{
        echo "no tiene descuento, debe pagar $ ".$T;
    }

?>