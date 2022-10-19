<?php
    $num = 4;
    for ($i = 1; $i <= $num; $i++) {
        if ($i == 1) {
            $digito = "A";
        } elseif ($i == 2) {
            $digito = "B";
        } elseif ($i == 3) {
            $digito = "C";
        } elseif ($i == 4) {
            $digito = "D";
        } elseif ($i == 5) {
            $digito = "E";
        } elseif ($i == 6) {
            $digito = "F";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $digito . " ";
        }
        echo "\n";
    }
?>