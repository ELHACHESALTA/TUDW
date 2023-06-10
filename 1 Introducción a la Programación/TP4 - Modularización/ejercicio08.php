<?php
    /**
    * Calcula la cantidad de agua destilada a partir de dos fármacos
    * @param int $cantLora
    * @param int $cantBeta
    * @return float
    */
    function calcAguaDestilada($cantLora, $cantBeta) {
        return $cantLora*10/100 + $cantBeta*15/100;
    }

    /* PROGRAMA Principal */
    /* Muestra el agua destilada resultante de dos fármacos */
    /* Int $cantLorata, $cantBetame Float $aguaDestilada */
    echo "Ingrese la cantidad de Loratadina: ";
    $cantLorata = trim(fgets(STDIN));
    echo "Ingrese la cantidad de Betametasona: ";
    $cantBetame = trim(fgets(STDIN));
    $aguaDestilada = calcAguaDestilada($cantLorata, $cantBetame);
    echo "La cantidad de agua destilada resultante es de: " . $aguaDestilada;
?>