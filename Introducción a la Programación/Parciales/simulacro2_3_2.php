<?php
    $num = 4;
    for ($i = 1; $i <= $num; $i++) {
        if ($i == 1) {
            $digito = "A";
        } elseif ($i == 2) {
            $digito = "2";
        } elseif ($i == 3) {
            $digito = "B";
        } elseif ($i == 4) {
            $digito = "3";
        } elseif ($i == 5) {
            $digito = "C";
        } elseif ($i == 6) {
            $digito = "4";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $digito . " ";
        }
        echo "\n";
    }
?>