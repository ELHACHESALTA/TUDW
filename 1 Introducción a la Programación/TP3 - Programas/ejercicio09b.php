<?php
    /* PROGRAMA Velocidad */
    /* Calcula y muestra la velocidad de un vehículo a partir de la distancia y tiempo recorrido */
    /* INT $distancia, $tiempo, $velocidad */
    echo "Ingrese la distancia recorrida en kilómetros: ";
    $distancia = trim(fgets(STDIN));
    echo "Ingrese el tiempo que duró el recorrido en horas: ";
    $tiempo = trim(fgets(STDIN));
    $velocidad = $distancia / $tiempo;
    echo "El vehículo viajó a " . $velocidad . " km/h";
?>