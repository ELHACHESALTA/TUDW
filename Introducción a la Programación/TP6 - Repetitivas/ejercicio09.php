<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el factorial del número ingresado */
    /* int $num, $factorial, $i */
    echo "Ingrese un número para obtener el factorial: ";
    $num = trim(fgets(STDIN));
    $num = $num + 1;
    $factorial = 1;
    for ($i = 2; $i < $num; $i++) {
        $factorial = $factorial * $i;
    }
    echo "El factorial es: " . $factorial;
?>
