<?php
    /**
    * Calcula la distancia entre dos puntos de coordenadas, cada punto está formado por un X e Y
    * @param int $xPto1
    * @param int $yPto1
    * @param int $xPto2
    * @param int $yPto2
    * @return float
    */
    function distanciaPuntos($xPto1, $yPto1, $xPto2, $yPto2) {
        
    }

    /**
    * Comprueba si un punto está dentro o fuera de una circunferencia de radio dado
    * @param int $x1
    * @param int $y1
    * @param int $x2
    * @param int $y2
    * @param float $r
    * @return string
    */
    function estaDentro($x1, $y1, $x2, $y2, $r) {
        /* string $mensaje */
        if ( distanciaPuntos($x1, $y1, $x2, $y2) <= $r ) {
            $mensaje = "dentro";
        } else {
            $mensaje = "fuera";
        }
        return $mensaje;
    }
?>