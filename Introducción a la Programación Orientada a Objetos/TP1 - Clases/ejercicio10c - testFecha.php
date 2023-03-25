<?php
    include 'ejercicio10c - fecha.php';

    $f = new Fecha();

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    $f -> setDia(29);
    $f -> setMes(10);
    $f -> setAnio (1991);

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    $f -> incremento(365, "22/03/2023");

    echo $f -> stringAbreviado() . "\n";

    echo $f -> stringExtendido() . "\n";

    echo $f . "\n";

?>