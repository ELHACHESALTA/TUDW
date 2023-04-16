<?php
    /**
     *  Corrobora que un número se encuentre entre un mínimo y un máximo 
     * @param int $minSNE
     * @param int $maxSNE
     * @return int
     */
    function solicitarNumeroEntre($minSNE, $maxSNE) {
        $numSNE = (trim(fgets(STDIN)));
        while ((((int)($numSNE) != $numSNE)) || (!($numSNE >= $minSNE && $numSNE <= $maxSNE))) {
        echo "Debe ingresar un número entre " . $minSNE . " y " . $maxSNE . ": ";
        $numSNE = trim(fgets(STDIN));
        }
        return $numSNE;
    }

    /**
     * Muestra el menu de opciones al jugador, le solicita una opcion valida y retorna la misma
     * @return int
     */
    function seleccionarOpcion () {
        echo "        MENÚ DE OPCIONES:
        1) Retorna la cantidad de letras de una cadena.
        2) Cuenta la cantidad de veces que aparece un caracter en un texto.
        3) Comprueba si una cadena esta incluida en otra.
        4) Retorna la longitud de una cadena.
        5) Retorna la cadena de mayor longitud.
        6) Salir.
        ¿Qué desea hacer? Seleccione una opcion: ";
        $resultadoSO = solicitarNumeroEntre (1, 6);
        return $resultadoSO;
    }

    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1:
                $cadena = "Yo soy programador.";
                $contador = 0;
                for ($i = 0; $i < strlen($cadena); $i++) {
                    if ($cadena[$i] != " " && $cadena[$i] != ".") {
                        $contador++;
                    }
                }
                echo "La cadena tiene " . $contador . " letras. \n";
                break;
            case 2:
                $cadena = "Yo soy programador y me gusta php/o";
                $caracter = (strlen($cadena)) - 1;
                $contador = -1;
                for ($i = 0; $i < strlen($cadena); $i++) {
                    if ($cadena[$caracter] == $cadena[$i]) {
                        $contador++;
                    }
                }
                echo "El caracter '" . $cadena[$caracter] . "' aparece " . $contador . " veces en la cadena. \n";
                break;
            case 3:
                $cadena1 = "Yo soy programador";
                $cadena2 = "soy";
                if ((strpos($cadena1, $cadena2)) == true) {
                    echo "La cadena 2 esta incluida en la cadena 1. \n";
                } else {
                    echo "La cadena 2 NO esta incluida en la cadena 1. \n";
                }
                break;
            case 4:
                $cadena = [1,2,3,4,5,6,7];
                $longitud = sizeof($cadena);
                echo "La cadena tiene una longitud de " . $longitud . ". \n";
                break;
            case 5:
                $cadena1 = [1,2,3,4,5,6,7];
                $cadena2 = ["a","e","i","o","u"];
                if (sizeof($cadena1) > sizeof($cadena2)) {
                    echo "La cadena 1 es la de mayor longitud. \n";
                } elseif (sizeof($cadena1) < sizeof($cadena2)) {
                    echo "La cadena 2 es la de mayor longitud. \n";
                } else {
                    echo "Ambas cadenas tienen la misma longitud. \n";
                }
                break;
            case 6:
                echo "El programa há finalizado.\n";
                break;
        }
    } while ($opcion != 6);
    
?>