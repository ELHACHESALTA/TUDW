<?php
    include 'ejercicio12 - Linea.php';

    $linea1 = new Linea();

    echo $linea1 -> __toString() . "\n";

    print_r ($linea1 -> mueveDerecha(2));

    echo $linea1 -> __toString() . "\n";

    print_r ($linea1 -> mueveIzquierda(2));

    echo $linea1 -> __toString() . "\n";

    print_r ($linea1 -> mueveArriba(2));

    echo $linea1 -> __toString() . "\n";

    print_r ($linea1 -> mueveAbajo(2));

    echo $linea1 -> __toString() . "\n";

?>