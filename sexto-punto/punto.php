<?php
    $V = $_POST ['V'];
    $P = $_POST ['P'];
    $T = $_POST ['T'];

    $totalv= $V*2000;
    $totalp= $P*2000;
    $totalt= $T*2000;

    $total = ($V*2000) + ($P*2000) + ($T*2000);

    echo "valor volantes ".$totalv;
    echo"<br>";
    echo "valor posters ".$totalp;
    echo"<br>";
    echo "valor tarjetas ".$totalt;
    echo"<br>";
    echo "valor total ".$total;

?>