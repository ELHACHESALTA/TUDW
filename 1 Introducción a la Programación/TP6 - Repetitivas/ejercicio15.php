<?php
    /* PROGRAMA Principal */
    /* Verifica que el número ingresado pertenezca a la secuencia dada */
    /* int $numAEncontrar, $numSec, $contador1, $contador2 */
    /* string $mensaje */
    /* boolean $comprobacion */
    echo "Ingrese el número a encontrar: ";
    $numAEncontrar = trim(fgets(STDIN));
    $mensaje = $numAEncontrar . " NO fue encontrado!";
    for ($contador1 = 0; $contador < 3; $contador++) {
    echo "Ingrese número para la secuencia: ";
        $numSec = trim(fgets(STDIN));
        for ($contador2 = $numSec; $contador2 > -1; $contador2--) {
            if ($numAEncontrar == $contador2) {
                $comprobacion = true;
            } else {
                $comprobacion = false;
            }
        }
        if ($comprobacion = true) {
            $mensaje = $numAEncontrar . " fue encontrado!";
        }
    }
    echo $mensaje;
?>