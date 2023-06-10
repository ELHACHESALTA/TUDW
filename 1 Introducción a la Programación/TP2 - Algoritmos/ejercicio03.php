<?php
    /* PROGRAMA CalculoR */
    /* Calcula y muestra el diámetro y perímetro de la circunferencia de radio R */
    /* FLOAT $radio, $diametro, $perimetro */
    /* FLOAT $superficieC */
    /* FLOAT $volumen, $superficieE */
    echo "Ingrese el radio: ";
    $radio = trim(fgets(STDIN));
    $diametro = 2 * $radio;
    $perimetro = 2 * 3.14 * $radio;
    echo "El diámetro de la circunferencia es: " . $diametro . " y su perímetro es de: " . $perimetro . "\n";
    /* Calcula y muestra la superficie del círculo de radio R */
    $superficieC = 3.14 * $radio * $radio;
    echo "La superficie del círculo es: " . $superficieC . "\n";
    /* Calcula y muestra el volumen y la superficie de la esfera de radio R */
    $volumen = ( 4 * 3.14 * $radio * $radio * $radio ) / 3;
    $superficieE = 4 * 3.14 * $radio * $radio;
    echo "El volumen de la esfera es: " . $volumen . " y su superficie es de: " . $superficieE;
?>