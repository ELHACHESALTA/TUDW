<?php
    include 'ejercicio10c_Fecha.php';

    $f = new Fecha(29, 10, 1991);

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    $f -> setDia(31);
    $f -> setMes(12);
    $f -> setAnio (1991);

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    $f -> incremento(365, "22/03/2023");

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    echo $f . "\n";

?>