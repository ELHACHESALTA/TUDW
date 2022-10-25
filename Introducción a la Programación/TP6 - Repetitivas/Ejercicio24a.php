<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $n */
    echo "Ingrese cantidad: ";
    $n = trim(fgets(STDIN));
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
?>