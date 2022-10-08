<?php
    /* PROGRAMA Piramide */
    /* int $i, $j, $N */
    echo "Ingrese cantidad: ";
    $N = trim(fgets(STDIN));
    for ($i = $N; $i > 0; $i--) {
        for ($j = $i; $j > 0; $j--) {
            echo $i;
        }
        echo "\n";
    }
?>