<?php
    /* PROGRAMA Imc */
    /* Calcula y muestra el IMC a partir del peso y altura */
    /* FLOAT $peso, $altura, $imc */
    echo "Ingrese su peso en kilogramos: ";
    $peso = trim(fgets(STDIN));
    echo "Ingrese su altura en metros: ";
    $altura = trim(fgets(STDIN));
    $imc = $peso / $altura;
    echo "Su IMC es: " . $imc;
?>