<?php
    /* PROGRAMA CalculoCuotas */
    /* Calcula y muestra el valor de la cuota con interés que debo devolver al banco a partir de la suma de dinero prestada */
    /* FLOAT $sumaDinero, $interes, $montoCuota INT $cuotas */
    echo "Ingrese la suma de dinero prestada: ";
    $sumaDinero = trim(fgets(STDIN));
    echo "Ingrese la cantidad de cuotas a pagar: ";
    $cuotas = trim(fgets(STDIN));
    echo "Ingrese el porcentaje de interés aplicado: ";
    $interes = trim(fgets(STDIN));
    $montoCuota = ( $sumaDinero / $cuotas ) * ( ( $interes / 100) + 1 );
    echo "El valor de la cuota es: " . $montoCuota;
?>