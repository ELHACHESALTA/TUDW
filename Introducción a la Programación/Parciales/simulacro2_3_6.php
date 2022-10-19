<?php
    $num = 4;
    for ($i = $num; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i == $num) {
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
            if ($i % 2 == 0 && $j % 2 == 1) {
                echo $digito . " ";
            } elseif ($i % 2 == 1 && $j % 2 == 0) {
                echo $digito . " ";
            } elseif ($i % 2 == 1 && $j == 1) {
                if ($i == $num) {
                    $digito = "1";
                } elseif ($i == $num - 1) {
                    $digito = "2";
                } elseif ($i == $num - 2) {
                    $digito = "3";
                } elseif ($i == $num - 3) {
                    $digito = "4";
                } elseif ($i == $num - 4) {
                    $digito = "5";
                } elseif ($i == $num - 5) {
                    $digito = "6";
                }
                echo $digito . " ";
            } else {
                echo $j . " ";
            }
        }
        echo "\n";
    }
?>