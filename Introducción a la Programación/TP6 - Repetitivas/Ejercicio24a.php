<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $N */
    echo "Ingrese cantidad: ";
    $N = trim(fgets(STDIN));
    for ($i = 1; $i <= $N; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
?>