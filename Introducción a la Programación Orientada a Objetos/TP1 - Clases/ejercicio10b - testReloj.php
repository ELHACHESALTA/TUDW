<?php
    include 'ejercicio10b - reloj.php';

    $rolex = new Reloj();

    $rolex -> setHh(9);
    $rolex -> setMm(23);
    $rolex -> setSs(46);

    echo $rolex -> __toString() . "\n";

    $rolex -> incremento();

    echo $rolex -> __toString() . "\n";

    $rolex -> puesta_a_cero();

    echo $rolex -> __toString() . "\n";

?>