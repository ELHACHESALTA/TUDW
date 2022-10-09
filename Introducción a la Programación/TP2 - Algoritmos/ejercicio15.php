<?php
    /* PROGRAMA Distancia */
    /* Calcula y muestra la distancia en línea recta desde mi casa hasta lo de un amigo */
    /* FLOAT $distanciaA, $distanciaB, $distanciaLineaRecta */
    echo "Ingrese la distancia desde tu casa hasta la esquina en metros: ";
    $distanciaA = trim(fgets(STDIN));
    echo "Ingrese la distancia desde la esquina hasta lo de tu amigo en metros: ";
    $distanciaB = trim(fgets(STDIN));
    $distanciaLineaRecta = sqrt(($distanciaA * $distanciaA) + ($distanciaB * $distanciaB));
    echo "Si pudiera ir en línea recta hasta lo de mi amigo, la distancia es: " . $distanciaLineaRecta . " metros";
?>