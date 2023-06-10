<?php
    /**
    * Obtiene el valor del factor correspondiente al mes ingresado
    * @param string $mesM
    * @return int
    */
    function factorMes ($mesM) {
        /* int $factor */
        if ($mesM == "enero" || $mesM == "febrero" || $mesM == "marzo") {
            $factor = 15;
        } elseif ($mesM == "abril" || $mesM == "mayo" || $mesM == "junio") {
            $factor = 17;
        } elseif ($mesM == "julio" || $mesM == "agosto") {
            $factor = 19;
        } elseif ($mesM == "septiembre" || $mesM == "octubre" || $mesM == "noviembre") {
            $factor = 20;
        }else {
            $factor = 21;
        }
        return $factor;
    }

    /* PROGRAMA Principal */
    /* Calcular la productividad de un mes */
    /* string $mes */
    /* int $articulos, $productividad, $factorMensual */
    echo "Ingrese un mes: ";
    $mes = trim(fgets(STDIN));
    echo "Ingrese la cantidad de artículos producidos en ese mes: ";
    $articulos = trim(fgets(STDIN));
    $factorMensual = factorMes($mes);
    $productividad = $articulos * $factorMensual;
    echo "En el mes de " . $mes . " se produjeron " . $articulos . " artículos, por lo tanto, la productividad es " . $productividad;
?>