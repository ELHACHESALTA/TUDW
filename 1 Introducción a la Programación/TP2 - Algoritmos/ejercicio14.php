<?php
    /* PROGRAMA CambioAMinutos */
    /* Calcula y muestra el tiempo en minutos y segundos a partir de un tiempo en segundos */
    /* INT $tiempoInicial, $tiempoM, $tiempoS */
    echo "Ingrese la cantidad de segundos que tardó en realizarse la copia: ";
    $tiempoInicial = trim(fgets(STDIN));
    $tiempoM = ( int ) ( $tiempoInicial / 60 );
    $tiempoS = $tiempoInicial - ( $tiempoM * 60 );
    echo $tiempoInicial . " segundos es igual a " . $tiempoM . " minutos con " . $tiempoS . " segundos";
?>