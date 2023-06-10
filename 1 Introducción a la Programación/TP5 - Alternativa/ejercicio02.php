<?php
    /**
    * Comprueba si un número es mayor que otro
    * @param int $num1
    * @param int $num2
    * @return boolean
    */
    function esMayor($num1, $num2) {
        /* boolean $resultado */
        if ($num1 > $num2) {
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }
?>