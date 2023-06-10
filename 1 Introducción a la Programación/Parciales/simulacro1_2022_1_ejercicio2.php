<?php
    /**
    * Calcula el costo de un aviso clasificado a partir de la cantidad de líneas que lo componen
    * @param int $cantLineasCosto
    * @return float
    */
    function costoClasificado($cantLineasCosto) {
        /* float $costoC */
        if (0 < $cantLineasCosto && $cantLineasCosto <= 3) {
            $costoC = 150.00;
        } else {
            $costoC = 150.00 + ($cantLineasCosto - 3) * 25.00;
        }
        return $costoC;
    }

    /**
    * Calcula el costo de un aviso publicidad a partir de la cantidad de letras que lo componen y su tipo de color
    * @param int $cantLetrasCosto\
    * @param string $tipoColorCosto
    * @return float
    */
    function costoPublicidad($cantLetrasCosto, $tipoColorCosto) {
        /* float $costoP */
        if ($cantLetrasCosto <= 300) {
            $costoP = 556.50;
        } elseif (300 < $cantLetrasCosto && $cantLetrasCosto <= 500) {
            $costoP = 950.00;
        } else {
            $costoP = 2300.00;
        }
        if ($tipoColorCosto == "color") {
            $costoP = $costoP * 1.10;
        }
        return $costoP;
    }

    /** Comprueba si el aviso es de tipo publicidad o no
    * @param string $tipoAvisoEsPublicidad)
    * @return boolean
    */
    function esPublicidad($tipoAvisoEsPublicidad) {
        /* boolean $resultado */
        if ($tipoAvisoEsPublicidad == "publicidad") {
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }

    /* PROGRAMA Principal */
    /* Muestra el costo del aviso según su tipo y caracteristicas */
    /* string $tipoAviso, $tipoColor */
    /* int $cantLetras, $cantLineas */
    /* float $costo */
    echo "Ingrese el tipo de aviso (publicidad o clasificado): ";
    $tipoAviso = trim(fgets(STDIN));
    if (esPublicidad($tipoAviso) == true) {
        echo "Ingrese la cantidad de letras de su publicidad: ";
        $cantLetras = trim(fgets(STDIN));
        echo "Ingrese el tipo de color de su publicidad (negro o color): ";
        $tipoColor = trim(fgets(STDIN));
        $costo = costoPublicidad($cantLetras, $tipoColor);
        echo "El costo del aviso es: " . $costo;
    } else {
        echo "Ingrese la cantidad de líneas de su clasificado: ";
        $cantLineas = trim(fgets(STDIN));
        $costo = costoClasificado($cantLineas);
        echo "El costo del aviso es: " . $costo;
    }
?>