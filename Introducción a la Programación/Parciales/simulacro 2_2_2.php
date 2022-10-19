<?php
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