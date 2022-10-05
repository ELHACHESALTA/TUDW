<?php
    /* PROGRAMA Principal */
    /* Muestra la suma de los números impares naturales que hay entre dos números ingresados. */
    /* int $num1, $num2, $suma, $i */
    echo "Nro minimo: ";
    $num1 = trim(fgets(STDIN));
    echo "Nro maximo: ";
    $num2 = trim(fgets(STDIN));
    $suma = 0;
    for ($i = $num1; $i < $num2; $i++) {
        if ($i % 2 == 1) {
            $suma = $suma + $i;
        }
    }
    echo "La suma es: " . $suma;
?>
