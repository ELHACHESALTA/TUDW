<?php 
    /**
    * Comprueba si un número es par o no
    * @param int $numP
    * @return boolean
    */
    function esPar($numP) {
	    /* boolean $resultado */
		if ( ($numP % 2) == 0 ) {
			$resultado = true;
		} else {
			$resultado = false;
		}
		return $resultado;
    }

    /* PROGRAMA Principal */
    /* Muestra si un número es par o no */
    /* int $num string $comprobacion */
    echo "Ingrese un número: ";
    $num = trim(fgets(STDIN));
    if (esPar($num) == true) {
		$comprobacion = " es: par";
	} else {
		$comprobacion = " es: impar";
	}
    echo "El número " . $num . $comprobacion;
?>