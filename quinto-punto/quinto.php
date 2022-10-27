<?php
    $EH1 = $_POST['EH1'];
    $EH2 = $_POST['EH2'];
    

    if ($EH1>$EH2){
            $resta = $EH1 - $EH2;
            echo " el hermano 1 es mayor que el hermano 2 ";
            echo "<br>";
            echo " la diferencia entre las dos edades es de ".$resta;
        }else{
            $resta = $EH2- $EH1;
            echo " el hermano 2 es mayor que el hermano 1 ";
            echo "<br>";
            echo " la diferencia entre las dos edades es de ".$resta;
        }
    

?>