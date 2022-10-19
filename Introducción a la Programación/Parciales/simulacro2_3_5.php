<?php
    $num = 4;
    for ($i = $num; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            if ($j % 2 == 1) {
                if ($i == $num){
                    $digito = "A";
                } elseif ($i == $num - 1) {
                    $digito = "B";
                } elseif ($i == $num - 2) {
                    $digito = "C";
                } elseif ($i == $num - 3) {
                    $digito = "D";
                } elseif ($i == $num - 4) {
                    $digito = "E";
                } elseif ($i == $num - 5) {
                    $digito = "F";
                }
            } elseif ($j == 2) {
                $digito = "2";
            } elseif ($j == 4) {
                $digito = "4";
            } elseif ($j == 6) {
                $digito = "6";
            }
            echo $digito . " ";
        }
        echo "\n";
    }
?>