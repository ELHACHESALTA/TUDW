<?php
    include_once ("ejercicio12_Linea.php");

    $linea1 = new Linea(0, 0, 5, 5);

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