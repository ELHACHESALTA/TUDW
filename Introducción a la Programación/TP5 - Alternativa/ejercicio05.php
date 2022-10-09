<?php
    /**
    * Comprueba si un número es múltiplo de otro
    * @param int numA
    * @param int numB
    * @return boolean
    */
    function esMultiplo($numA, $numB) {
        /* boolean $resultado */
        if (($numA % $numB) == 0) {
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }
?>