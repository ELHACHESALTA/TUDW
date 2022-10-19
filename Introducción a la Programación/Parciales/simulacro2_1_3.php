<?php
    /**
     * @param int $num
     * ∅
     */
    function dibujo ($num) {
        /* int $i, $j, $blancos, $asteriscos */
        for ($i = 1; $i <= $num; $i++) {
            $blancos = $num - $i;
            for ($j = 1; $j <= $blancos; $j++) {
                echo "_";   /* espacio en blanco */
            }
            $asteriscos = $i;
            for ($j = 1; $j <= $asteriscos; $j++) {
                echo "*";   /* asterisco */
            }
            echo "\n";      /* salto de linea */
        }
        echo "FIN";
    }
    echo dibujo(1) . "\n";
    echo "-----\n";
    echo dibujo(3) . "\n";
    echo "-----\n";
    echo dibujo(0) . "\n";
    echo "-----\n";
?>