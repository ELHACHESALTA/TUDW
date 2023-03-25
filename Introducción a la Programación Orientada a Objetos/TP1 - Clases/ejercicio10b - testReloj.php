<?php
    include 'ejercicio10b - reloj.php';

    $rolex = new Reloj();

    $rolex -> setHh(9);
    $rolex -> setMm(23);
    $rolex -> setSs(46);

    echo $rolex . "\n";

    $rolex -> incremento();

    echo $rolex . "\n";

    $rolex -> puesta_a_cero();

    echo $rolex . "\n";

?>