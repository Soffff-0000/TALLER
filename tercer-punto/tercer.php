<?php
    $PG = $_POST ['PG'];
    $PP = $_POST ['PP'];
    $PE = $_POST ['PE'];
    $resultado = ($PE*3) + ($PP*0) + ($PG*1);

    echo 'el resultado de los partidos es  '.$resultado;
?>