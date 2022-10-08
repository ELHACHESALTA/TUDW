<?php
    /**
    * Retorna el número ingresado en orden inverso
    * @param int $numNI
    * @return int
    */
    function numeroInverso ($numNI) {
        /* int $inversoNI, $restoNI */
        $inversoNI = 0;
        do {
            $restoNI = $numNI % 10;
            if ($restoNI <> 0) {
                $inversoNI = ($inversoNI * 10) + $restoNI;
                $numNI = (int) ($numNI / 10);
            }
        } while ($restoNI <> 0);
        return $inversoNI;
    }

    /**
    * Calcula y muestra la suma de dígitos del número ingresado
    * @param int $numSDD
    * @return int
    */
    function sumaDeDigitos ($numSDD) {
        /* int $sumaSDD, $restoSDD */
        $sumaSDD = 0;
        do {
            $restoSDD = $numSDD % 10;
            if ($restoSDD <> 0) {
                $sumaSDD = $sumaSDD + $restoSDD;
                $numSDD = (int) ($numSDD / 10);
            }
        } while ($restoSDD <> 0);
        return $sumaSDD;
    }

    /**
    * Calcula y muestra los divisores del número ingresado
    * @param int $numD
    * @return string
    */
    function divisores ($numD) {
        /* int $iD, $contadorD */
        /* string $dividoresD, $mensajeD */
        $divisoresD = "1";
        $contadorD = 1;
        for ($iD = 2; $iD < $numD; $iD++) {
            if ($numD % $iD == 0) {
                $contadorD = $contadorD + 1;
                $divisoresD = $divisoresD . ", " . $iD;
            }
        }
        $mensajeD = $numD . " tiene " . $contadorD . " divisores (" . $divisoresD . ")";
        return $mensajeD;
}

    /**
    * Comprueba si un número es primo o no
    * @param int numEP
    * @return boolean
    */
    function esPrimo ($numEP) {
        /* boolean $resultadoEP */
        /* int $iEP, $contadorEP */
        $contadorEP = 1;
        for ($iEP = 2; $iEP < $numEP; $iEP++) {
            if ($numEP % $iEP == 0) {
                $contadorEP = $contadorEP + 1;
            }
        }
        if ($contadorEP == 1) {
            $resultadoEP = true;
        } else {
            $resultadoEP = false;
        }
        return $resultadoEP;
}

    /* PROGRAMA Principal */
    /* Calcula y muestra diversas operaciones a partir del número ingresado */
    /* int $opcion, $num, $inverso, $suma */
    /* string $mensaje */
    /* boolean $resultado */
    $opcion = 0;
    do {
        echo "1- Número inverso" . "\n";
        echo "2- Suma de dígitos" . "\n";
        echo "3- Cantidad de divisores" . "\n";
        echo "4- Es primo?" . "\n";
        echo "5- Salir" . "\n";
        $opcion = trim(fgets(STDIN));
        if ($opcion == 1) {
            echo "Ingrese un nro para obtener el inverso: ";
            $num = trim(fgets(STDIN));
            $inverso = numeroInverso($num);
            echo "El inverso es: " . $inverso . "\n";
        } elseif ($opcion == 2) {
            echo "Ingrese un nro para sumar sus digitos: ";
            $num = trim(fgets(STDIN));
            $suma = sumaDeDigitos($num);
            echo "La suma de los dígitos es: " . $suma . "\n";
        } elseif ($opcion == 3) {
            echo "Ingrese un nro para encontrar sus divisores: ";
            $num = trim(fgets(STDIN));
            $mensaje = divisores($num);
            echo $mensaje . "\n";
        } elseif ($opcion == 4) {
            echo "Ingrese un nro para determinar si es primo: ";
            $num = trim(fgets(STDIN));
            $resultado = esPrimo($num);
            if ($resultado == true) {
                echo $num . " es primo." . "\n";
            } else {
                echo $num . " NO es primo." . "\n";
            }
        }
    } while ($opcion <> 5);
?>