<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $digito, $n */
    echo "Ingrese cantidad: ";
    $n = trim(fgets(STDIN));
    $digito = $n;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $digito; $j > 0; $j--) {
            echo $i;
        }
        $digito = $digito - 1;
        echo "\n";
    }
?>