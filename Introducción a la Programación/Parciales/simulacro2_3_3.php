<?php
    $num = 4;
    for ($i = $num; $i >= 1; $i--) {
        if ($i == $num) {
            $digito = "A";
        } elseif ($i == $num - 1) {
            $digito = "2";
        } elseif ($i == $num - 2) {
            $digito = "C";
        } elseif ($i == $num - 3) {
            $digito = "4";
        } elseif ($i == $num - 4) {
            $digito = "E";
        } elseif ($i == $num - 5) {
            $digito = "6";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $digito . " ";
        }
        echo "\n";
    }
?>