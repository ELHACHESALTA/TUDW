<?php
    /**
    * Comprueba si un número es múltiplo de otro
    * @param int $numeroM1
    * @param int $numeroM2
    * @return boolean
    */
    function esMultiplo($numeroM1, $numeroM2) {
        return $numeroM1 % $numeroM2 == 0 ? true : false;
    }

    /* PROGRAMA Principal */
    /* Muestra si un número es múltiplo o no de otro */
    /* int $numero1, $numero2 boolean $comprobacion */
    echo "Ingrese el primer número: ";
    $numero1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número: ";
    $numero2 = trim(fgets(STDIN));
    $comprobacion = esMultiplo ($numero1, $numero2);
    echo "El número " . $numero1 . ($comprobacion==true ? " es múltiplo de " : " no es múltiplo de ") . $numero2;
?>