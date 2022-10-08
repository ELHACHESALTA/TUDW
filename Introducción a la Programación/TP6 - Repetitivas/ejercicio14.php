<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el porcentaje de números leídos que fueron múltiplos del primer número ingresado */
    /* int $multiplo, $num, $contador, $multiploConfirmado */
    /* string $respuesta */
    /* float $porcentaje */
    echo "Ingrese un número para evaluar sus múltiplos: ";
    $multiplo = trim(fgets(STDIN));
    echo "¿Desea ingresar un número de la secuencia?(s/n): ";
    $respuesta = trim(fgets(STDIN));
    if ($respuesta == "s") {
        $contador = 0;
        $multiploConfirmado = 0;
        while ($respuesta == "s") {
            echo "Número de la secuencia: ";
            $num = trim(fgets(STDIN));
            $contador = $contador + 1;
            if ($num % $multiplo == 0) {
                $multiploConfirmado = $multiploConfirmado + 1;
            }    
        echo "¿Desea ingresar otro número de la secuencia?(s/n): ";
        $respuesta = trim(fgets(STDIN));
        }
        $porcentaje = ($multiploConfirmado / $contador) * 100;
        echo "El porcentaje de multiplos es: " . $porcentaje . "%";
    } else {
        echo "No se ingresaron nros en la secuencia";
    }  
?>