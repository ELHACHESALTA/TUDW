<?php
    /* PROGRAMA ConversionFahrenheit */
    /* Calcula y muestra la temperatura en grados Fahrenheit a partir de una temperatura en Grados Centígrados */
    /* INT $tempC, $tempF */
    echo "Ingrese la temperatura en grados centígrados: ";
    $tempC = trim(fgets(STDIN));
    $tempF = ( ( 9 / 5 ) * $tempC ) + 32;
    echo $tempC . "°C es igual a " . $tempF . "°F";
?>