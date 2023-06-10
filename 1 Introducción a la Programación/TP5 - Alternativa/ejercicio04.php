<?php
    /* PROGRAMA Principal */
    /* Muestra si un número de tres cifras es capicúa o no */
    /* int $num, $digitoUno, $digitoDos, $digitoTres */
    echo "Ingrese un número de 3 cifras: ";
    $num = trim(fgets(STDIN));
    if ((100 < $num && $num < 999) || $num == 000) {
        $digitoUno = (int)($num/100);
        $digitoDos = (int)(($num % 100)/10);
        $digitoTres = (int)(($num % 100)% 10);
        if ($digitoUno == $digitoTres) {
            echo "El número " . $num . " es capicúa";
        } else {
            echo "El número " . $num . " no es capicúa";
        }
    } else {
    echo "ERROR! Debe ingresar un número de 3 dígitos";
    }
?>