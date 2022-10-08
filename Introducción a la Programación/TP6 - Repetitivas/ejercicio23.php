<?php
    /* PROGRAMA dibujoRep */
    /* int $i, $j, $digito, $N */
    echo "Ingrese cantidad: ";
    $N = trim(fgets(STDIN));
    for ($i = 1; $i <= $N; $i++) {
        $digito = $i % 2;
        for ($j = 1; $j <= $i; $j++) {
            echo $digito;
        }
        echo "\n";
    }
    echo "\nFin bidujo";
?>