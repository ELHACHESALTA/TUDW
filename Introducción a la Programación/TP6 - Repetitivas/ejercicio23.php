<?php
    /* PROGRAMA dibujoRep */
    /* int $i, $j, $digito, $n */
    echo "Ingrese cantidad: ";
    $n = trim(fgets(STDIN));
    for ($i = 1; $i <= $n; $i++) {
        $digito = $i % 2;
        for ($j = 1; $j <= $i; $j++) {
            echo $digito;
        }
        echo "\n";
    }
    echo "\nFin dibujo";
?>