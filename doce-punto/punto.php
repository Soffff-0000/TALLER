<?php
    $C = $_POST ['C'];
    $tasa1 = $C+($C*0.2);
    $tasa2 = $C+($C*4.5);
    $tasa3 = $C+($C*0.7);

    if($C<500){
        echo "usted debe 2% de intereses y ".$tasa1." de capital";
    }elseif($C>=500){
        echo "usted debe 4.5% de intereses y ".$tasa2." de capital";
    }elseif($C<1500){
        echo "usted debe 4.5% de intereses y ".$tasa2." de capital";
    }elseif($C>=1500){
        echo "usted debe 7% de intereses y".$tasa3." de capital";
    }

?>