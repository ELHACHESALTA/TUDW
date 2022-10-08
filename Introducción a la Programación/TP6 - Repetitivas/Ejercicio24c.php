<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $digito, $N */
    echo "Ingrese cantidad: ";
    $N = trim(fgets(STDIN));
    $digito = $N;
    for ($i = 1; $i <= $N; $i++) {
        for ($j = $digito; $j > 0; $j--) {
            echo $i;
        }
        $digito = $digito - 1;
        echo "\n";
    }
?>