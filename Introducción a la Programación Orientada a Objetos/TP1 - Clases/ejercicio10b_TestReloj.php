<?php
    include_once ("ejercicio10b_Reloj.php");

    $rolex = new Reloj(9, 23, 46);

    echo $rolex . "\n";

    $rolex -> incremento();

    echo $rolex . "\n";

    $rolex -> puesta_a_cero();

    echo $rolex . "\n";

?>