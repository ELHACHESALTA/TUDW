<?php
    /**
    * Calcula el costo por cantidad de líneas de código escritas por programadores Senior
    * @param float $cantProgSenior
    * @param int $cantLineasSenior
    * @return float
    */
    function costoTotalSenior($cantProgCostoSenior, $cantLineasCostoSenior) {
        /* float $costoSenior */
        if ($cantLineasCostoSenior <= 10000) {
            $costoSenior = 155000.00 * $cantProgCostoSenior + 2.00 * $cantLineasCostoSenior;
        } elseif (10000 < $cantLineasCostoSenior && $cantLineasCostoSenior <= 90000) {
            $costoSenior = 155000.00 * $cantProgCostoSenior + 1.50 * $cantLineasCostoSenior;
        } elseif (90000 < $cantLineasCostoSenior && $cantLineasCostoSenior <= 200000) {
            $costoSenior = 155000.00 * $cantProgCostoSenior + 1.00 * $cantLineasCostoSenior;
        } else {
            $costoSenior = 155000.00 * $cantProgCostoSenior + 0.75 * $cantLineasCostoSenior;
        }
        return $costoSenior;
    }

    /**
    * Calcula la cantidad de líneas por funcionalidad y tipo de tecnología
    * @param int $cantFuncPorFunc
    * @param string tipoFuncPorFunc
    * @return int
    */
    function cantLineasPorFunc($cantFuncPorFunc, $tipoTecPorFunc) {
        /* int $cantLineasFunc */
        if ($tipoTecPorFunc == "desktop") {
            $cantLineasFunc = $cantFuncPorFunc * 1000 + $cantFuncPorFunc * 50;
        } elseif ($tipoTecPorFunc == "web") {
            $cantLineasFunc = $cantFuncPorFunc * 1000 + $cantFuncPorFunc * 100;
        } else {
            $cantLineasFunc = $cantFuncPorFunc * 1000 + $cantFuncPorFunc * 200;
        }
        return $cantLineasFunc;
    }

    /**
    * Calcula a cuántos programadores Senior equivales los programadores Junior ingresados
    * @param int $cantProgJuniorASenior
    * @return float
    */
    function igualarASenior($cantProgJuniorASenior) {
        /* float $cantProgSeniorDeJunior */
        $cantProgSeniorDeJunior = $cantProgJuniorASenior / 3;
        return $cantProgSeniorDeJunior;
    }

    /* PROGRAMA Principal */
    /* Calcula y muestra el costo del sistema desarrollado */
    /* int $cantFunc, $cantProgSenior, $cantProgJunior, $cantLineas */
    /* string $tipoTec */
    /* float $costo, $cantProgSeniorTotal */
    echo "Ingrese la cantidad de funciones del sistema: ";
    $cantFunc = trim(fgets(STDIN));
    echo "Ingrese la cantidad de programadores Senior: ";
    $cantProgSenior = trim(fgets(STDIN));
    echo "Ingrese la cantidad de programadores Junior: ";
    $cantProgJunior = trim(fgets(STDIN));
    echo "Ingrese el tipo de tecnología utilizada en el sistema (desktop, web o embebido): ";
    $tipoTec = trim(fgets(STDIN));
    $cantProgSeniorTotal = $cantProgSenior + igualarASenior($cantProgJunior);
    $cantLineas = cantLineasPorFunc($cantFunc, $tipoTec);
    $costo = costoTotalSenior($cantProgSeniorTotal, $cantLineas);
    echo "El costo total del sistema desarrollado es: " . $costo;
?>