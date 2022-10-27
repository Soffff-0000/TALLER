<?php
    $N = $_POST ['N'];
    $A = $_POST ['A'];
    $N1 = $_POST ['N1'];
    $N2 = $_POST ['N2'];
    $N3 = $_POST ['N3'];
    $total1 = $N1*0.3; 
    $total2 = $N2*0.3;
    $total3 = $N3*0.4;  
    $totalf = $total3 + $total2 + $total1;
    
    if($totalf>=4){
        echo "Aprobado";
    }else{
        echo "Desaprobado";
    }

?>