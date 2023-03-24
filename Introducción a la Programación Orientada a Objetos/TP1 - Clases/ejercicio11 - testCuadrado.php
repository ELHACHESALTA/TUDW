<?php
    include 'ejercicio11 - cuadrado.php';

    $C = new Cuadrado();

    print_r ($C -> getVertices());

    echo $C -> area();

    $punto["x"] = 2;
    $punto["y"] = 2;

    $C -> desplazar($punto);

    print_r ($C -> getVertices());

    $C -> aumentarTamanio(2);

    print_r ($C -> getVertices());

    echo $C -> __toString();

?>