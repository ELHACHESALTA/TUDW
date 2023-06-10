<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $n */
    echo "Ingrese cantidad: ";
    $n = trim(fgets(STDIN));
    for ($i = $n; $i > 0; $i--) {
        for ($j = $i; $j > 0; $j--) {
            echo $i;
        }
        echo "\n";
    }
?>