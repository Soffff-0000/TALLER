<?php
    $nombre = $_POST ['nombre'];
    $asignatura = $_POST ['asignatura'];
    $nota1 = $_POST ['nota1'];
    $nota2 = $_POST ['nota2'];
    $nota3 = $_POST ['nota3'];
    $resultado = ($nota1 + $nota2 + $nota3)/3;

    echo 'nombre '.$nombre;
    echo "<br>";
    echo 'asignatura '.$asignatura;
    echo "<br>";
    echo 'promedio '.$resultado;
?>