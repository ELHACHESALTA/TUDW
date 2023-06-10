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
        1) Calcula el factorial de un número.
        2) Comprueba si el número es par o no.
        3) Comprueba la divisibilidad entre dos números.
        4) Determinar el máximo, mínimo y la posición donde se encuentran.
        5) Lee nombres y crea un arreglo con estos.
        6) Retorna un arreglo con los años bisiestos menores.
        7) Combina los arreglos ingresados.
        8) Retorna los arreglos que no estén repetidos.
        9) Salir.
        ¿Qué desea hacer? Seleccione una opcion: ";
        $resultadoSO = solicitarNumeroEntre (1, 9);
        return $resultadoSO;
    }

    /**
     * Solicita una cantidad n de nombres y devuelve el arreglo con esa cantidad de nombres ingresados
     * @param int $n
     * @return array
     */
    function leerNombres($n) {
        $arregloNombres = [];
        for ($i = 0; $i < $n; $i++) {
            echo "Ingrese un nombre: ";
            $arregloNombres[$i] = trim(fgets(STDIN));
        }
        return $arregloNombres;
    }

    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1:
                echo "Ingrese un número para obtener su factorial: ";
                $num = trim(fgets(STDIN));
                $num = $num + 1;
                $factorial = 1;
                for ($i = 2; $i < $num; $i++) {
                    $factorial = $factorial * $i;
                }
                echo "El factorial es: " . $factorial . "\n";
                break;
            case 2:
                echo "Ingrese un número: ";
                $num = trim(fgets(STDIN));
                if ((($num % 2) == 0) == true) {
                    $comprobacion = " es: par";
                } else {
                    $comprobacion = " es: impar";
                }
                echo "El número " . $num . $comprobacion . "\n";
                break;
            case 3:
                echo "Ingrese un número: ";
                $num = trim(fgets(STDIN));
                echo "Ingrese otro número: ";
                $num2 = trim(fgets(STDIN));
                if (($num-($num2*((int)($num/$num2)))) == 0) {
                    echo "El número " . $num . " es divisible por " . $num2 . "\n";
                } else {
                    echo "El número " . $num . " NO es divisible por " . $num2 . "\n";
                }
                break;
            case 4:
                $arregloNum = [ 2, 31, 15, 20, 7 ];
                $numMax = -10000;
                $posicionMax = -10000;
                for ($i = 1; $i <= count($arregloNum); $i++) {
                    if ($arregloNum[$i-1] > $numMax) {
                    $numMax = $arregloNum[$i-1];
                    $posicionMax = $i;
                    }
                }
                echo "El máximo número del arrelgo es " . $numMax . " que se encuentra en la posición " . $posicionMax . ".\n";
                $numMin = 10000;
                $posicionMin = 10000;
                for ($i = count($arregloNum); $i >= 1; $i--) {
                    if ($arregloNum[$i-1] < $numMin) {
                    $numMin = $arregloNum[$i-1];
                    $posicionMin = $i;
                    }
                }
                echo "El minimo número del arrelgo es " . $numMin . " que se encuentra en la posición " . $posicionMin . ".\n";
                break;
            case 5:
                print_r (leerNombres(5));
                break;
            case 6:
                $anio = 0;
                echo "Ingrese un año: ";
                $anio = trim(fgets(STDIN));
                $arregloBis = [];
                $posicion = 0;
                for ($i = 0; $i < $anio; $i++) {
                    if ($i%4 == 0) {
                        if (!($i%100 == 0)){
                            $arregloBis[$posicion] = $i;
                            $posicion++;
                        } elseif ($i%100 == 0 && $i%400 == 0) {
                            $arregloBis[$posicion] = $i;
                            $posicion++;
                        }
                    }
                }
                print_r($arregloBis);
                break;
            case 7:
                $arregloA = [3, 6, 9, 12];
                $arregloB = [2, 4, 6, 8, 10, 12];
                $arregloC = [];
                $posicion = 0;
                for ($i = 0; $i < count($arregloA); $i++) {
                    $arregloC[$posicion] = $arregloA[$i];
                    $posicion++;
                }
                for ($i = 0; $i < count($arregloB); $i++) {
                    $arregloC[$posicion] = $arregloB[$i];
                    $posicion++;
                }
                print_r($arregloC);

                // Otra forma de realizarlo con array_push

                /*
                for ($i = 0; $i < count($arregloA); $i++) {
                    array_push ($arregloC, $arregloA[$i]);
                }
                for ($i = 0; $i < count($arregloB); $i++) {
                    array_push ($arregloC, $arregloB[$i]);
                }
                print_r($arregloC);
                */

                break;
            case 8:
                $arregloA = [3, 6, 9, 12];
                $arregloB = [2, 4, 6, 8, 10, 12];
                $arregloC = [];
                $posicion = 0;
                foreach($arregloA as $key => $value) {
                    if (!(in_array ($value, $arregloB))){
                        $arregloC[$posicion] = $arregloA[$key];
                        $posicion++;
                    }
                }
                print_r($arregloC);
                break;
            case 9:
                echo "El programa há finalizado.\n";
                break;
        }
    } while ($opcion != 9);
    
?>