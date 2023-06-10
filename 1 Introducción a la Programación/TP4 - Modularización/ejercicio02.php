<?php
    /**
    *Comprueba que un número es múltiplo de dos
    *@param int $numeroM
    *@return boolean
    */ 
    function esMultiploDe2($numeroM) {
        return $numeroM % 2 == 0 ? true : false;
    }

    /* PROGRAMA Principal */
    /* Comprueba a partir de un número si este es par o no lo es */
    /*  Int $numero Boolean $comprobacion*/
    echo "Ingrese el primer número a comprobar: ";
    $numero = trim(fgets(STDIN));
    $comprobacion = esMultiploDe2($numero);
    echo "El número " . $numero . ($comprobacion == true ? " es múltiplo de 2" : " no es múltiplo de 2") . "\n";
    echo "Ingrese el segundo número a comprobar: ";
    $numero = trim(fgets(STDIN));
    $comprobacion = esMultiploDe2($numero);
    echo "El número " . $numero . ($comprobacion == true ? " es múltiplo de 2" : " no es múltiplo de 2") . "\n";
?>