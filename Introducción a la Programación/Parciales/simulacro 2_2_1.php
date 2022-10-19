<?php
    /**
     * @param int $num
     * @return boolean
     */
    function esNroElegido1($num) {
        /* int $umbral, $i, boolean $bandera */
        $umbral = ( (int) ($num / 2) ) + 1;
        $bandera = true;
        for ($i = 2; $i < $umbral; $i++) {
            if ($num % $i == 0) {
                $bandera = false;
            }
        }
        return $bandera;
    }

    /**
     * @param int $num
     * @return boolean
     */
    function esNroElegido2($num) {
        /* int $umbral, $i, boolean $bandera */
        $umbral = ( (int) ($num / 2) ) + 1;
        $bandera = true;
        $i = 2;
        while ($bandera && $i < $umbral) {
            $bandera = !($num % $i == 0);
            $i = $i + 1;
        }
        return $bandera;
    }

    /**
     * Suma los números naturales elegidos menores o iguales al número ingresado
     * @param int $numSEM
     * @return int
     */
    function sumaElegidosMenores ($numSEM) {
        /* int $iSEM, $sumaSEM, boolean $resultado */
        $sumaSEM = 0;
        for ($i = 1; $i <= $numSEM; $i++) {
            $resultado = esNroElegido1 ($i);
            if ($resultado == true) {
                $sumaSEM = $sumaSEM + $i;
            } else {
                $sumaSEM = $sumaSEM + 0;
            }
        }
        return $sumaSEM;
    }
?>