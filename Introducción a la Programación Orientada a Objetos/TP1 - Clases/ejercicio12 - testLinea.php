<?php
    include 'ejercicio12 - Linea.php';

    $linea1 = new Linea();

    echo $linea1 . "\n";

    ($linea1 -> mueveDerecha(2));

    echo $linea1 . "\n";

    ($linea1 -> mueveIzquierda(2));

    echo $linea1 . "\n";

    ($linea1 -> mueveArriba(2));

    echo $linea1 . "\n";

    ($linea1 -> mueveAbajo(2));

    echo $linea1 . "\n";

?>