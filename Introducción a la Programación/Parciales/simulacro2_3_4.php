<?php
    $num = 4;
    for ($i = $num; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            if ($j == 1) {
                $digito = "A";
            } elseif ($j == 2) {
                $digito = "2";
            } elseif ($j == 3) {
                $digito = "C";
            } elseif ($j == 4) {
                $digito = "4";
            } elseif ($j == 5) {
                $digito = "E";
            } elseif ($j == 6) {
                $digito = "6";
            }
            echo $digito . " ";
        }
        echo "\n";
    }
?>