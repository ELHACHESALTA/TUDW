<?php
    /**
    * Calcula la superficie del cuadro a partir de su ancho y largo
    * @param float $anchoCS
    * @param float  $largoCS
    * @return float
    */
    function calcularSuperficie ($anchoCS, $largoCS) {
        /* float $superficieCS */
        $superficieCS = $anchoCS * $largoCS;
        return $superficieCS;
    }

    /**
    * Calcula el precio final del cuadro a partir de su clasificación
    * @param string $clasificacionCP
    * @param float $superficieCP
    * @param float $precioBaseCP
    * @return float
    */
    function calcularPrecio ($clasificacionCP, $superficieCP, $precioBaseCP) {
        /* float $precioFinalCP */
        if ($clasificacionCP == "P" || $clasificacionCP == "M") {
            $precioFinalCP = $precioBaseCP * 1.15;
        } elseif ($clasificacionCP == "E") {
            $precioFinalCP = $precioBaseCP * 1.05;
        } else {
            $precioFinalCP = $precioBaseCP * 1.02;
        }
        if ($superficieCP > 2) {
            $precioFinalCP = $precioFinalCP * 1.10;
        } elseif (1 < $superficieCP && $superficieCP < 2) {
            $precioFinalCP = $precioFinalCP * 1.08;
        } else {
            $precioFinalCP = $precioFinalCP;
        }
        return $precioFinalCP;
    }

    /* PROGRAMA Principal */
    /* Muestra la superficie y el precio final de un cuadro a partir de su ancho, largo, clasificación y precio base */
    /* float $ancho, $largo, $precioBase, $superficie, $precioFinal */
    /* string $clasificacion */
    echo "Ingrese el ancho del cuadro en metros: ";
    $ancho = trim(fgets(STDIN));
    echo "Ingrese el largo del cuadro en metros: ";
    $largo = trim(fgets(STDIN));
    echo "Ingrese la clasificación del cuadro (P, M, E ó B): ";
    $clasificacion = trim(fgets(STDIN));
    echo "Ingrese el precio base del cuadro: ";
    $precioBase = trim(fgets(STDIN));
    $superficie = calcularSuperficie($ancho, $largo);
    $precioFinal = calcularPrecio ($clasificacion, $superficie, $precioBase);
    echo "El cuadro tiene una superficie de: " . $superficie . " m^2 y su precio final es de: " . $precioFinal;
?>