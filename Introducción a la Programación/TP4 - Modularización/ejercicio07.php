<?php
    /**
    *Pasa el tiempo en horas, minutos y segundos a segundos
    *@param int $horaS
    *@param int $minutosS
    *@param int $segundosS
    *@return int
    */
    function calculaSegundos ($horaS, $minutosS, $segundosS) {
        /* int $tiempoFinal */
        $horaASeg = $horaS * 3600;
        $minutosASeg = $minutosS * 60;
        $tiempoFinal = $horaASeg + $minutosASeg + $segundosS;
        return $tiempoFinal;
    }

    /**
    * Calcula la velocidad en m/s
    * @param float $metros
    * @param float $hora
    * @param float $minutos
    * @param float $seg
    */
    function calculaVelocidadFinal ($metros, $hora, $minutos, $seg) {
        /* float $VelocidadFinal */
        $velocidadFinal = $metros / calculaSegundos ($hora, $minutos, $seg);
        return $velocidadFinal;
    }

    /* PROGRAMA PRINCIPAL */
    /* Muestra la velocidad en m/s */
    /* int $hora1, $minutos1, $seg1, $metros1, $resultado1, $resultado2 */

    /* Calcular la velocidad del primer puesto */
    echo "Ingrese las horas que le tomó al 1 puesto: ";
    $hora1 = trim(fgets(STDIN));
    echo "Ingrese los minutos: ";
    $minutos1 = trim(fgets(STDIN));
    echo "Ingrese los segundos: ";
    $seg1 = trim(fgets(STDIN));
    echo "Ingrese los metros: ";
    $metros1 = trim(fgets(STDIN));
    $resultado1 = calculaVelocidadFinal ($metros1, $hora1, $minutos1, $seg1);
    echo "La velocidad del 1 puesto fue de: " . $resultado1 . "m/s";
    echo "\n";

    /* Calcular la velocidad del segundo puesto */
    echo "Ingrese las horas que le tomó al 2 puesto: ";
    $hora1 = trim(fgets(STDIN));
    echo "Ingrese los minutos: ";
    $minutos1 = trim(fgets(STDIN));
    echo "Ingrese los segundos: ";
    $seg1 = trim(fgets(STDIN));
    echo "Ingrese los metros: ";
    $metros1 =trim(fgets(STDIN));
    $resultado1 = calculaVelocidadFinal ($metros1, $hora1, $minutos1, $seg1);
    echo "La velocidad del 2 puesto fue de: " . $resultado2 . "m/s";
?>