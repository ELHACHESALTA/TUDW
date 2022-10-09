<?php
    /* PROGRAMA CambioAHoras */
    /* Calcula y muestra el tiempo en horas, minutos y segundos a partir de un tiempo en segundos */
    /* INT $tiempoInicial, $tiempoH, $tiempoM, $tiempoS */
    echo "Ingrese la cantidad de segundos: ";
    $tiempoInicial = trim(fgets(STDIN));
    $tiempoH = ( int ) ($tiempoInicial / ( 60 * 60 ) );
    $tiempoM = ( int ) ( ( $tiempoInicial / 60 ) - ( $tiempoH * 60 ) );
    $tiempoS = $tiempoInicial - ( $tiempoM * 60 ) - ( $tiempoH *60 * 60 );
    echo $tiempoInicial . " segundos es igual a " . $tiempoH . " hora/s, " . $tiempoM . " minuto/s con " . $tiempoS . " segundo/s";
?>