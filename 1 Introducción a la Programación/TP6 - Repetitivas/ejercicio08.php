<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la suma de una cantidad de números definidos por el usuario */
    /* int $cantNum, $suma, $i, $num */
    echo "¿Cuántos nros desea sumar?: ";
    $cantNum = trim(fgets(STDIN));
    $cantNum = $cantNum + 1;
    $suma = 0;
    for ($i = 1; $i < $cantNum; $i++) {
        echo "Ingrese el nro " . $i .": ";
        $num = trim(fgets(STDIN));
        $suma = $suma + $num;
    }
    echo "La suma es: " . $suma;
?>