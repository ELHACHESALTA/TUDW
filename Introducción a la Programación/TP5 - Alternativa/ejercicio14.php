<?php
    /**
    * Convierte a segundos un horario del día en horas, minutos y segundos
    * @param int $horaAS
    * @param int $minutoAS
    * @param int $segundoAS
    * @param string $tipoHoraAS
    * @return int
    */
    function aSegundos ($horaAS, $minutoAS, $segundoAS, $tipoHoraAS) {
        /* int $segundosTotalAS, $conversionASegundos */
        $conversionASegundos = $horaAS * 3600 + $minutoAS * 60 + $segundoAS;
        if ($tipoHoraAS == "AM") {
            $segundosTotalAS = $conversionASegundos;
        } else {
            $segundosTotalAS = $conversionASegundos + 43200;
        }
        return $segundosTotalAS;
    }

    /**
    * Convierte a horas, minutos y segundos los segundos ingresados
    * @param int $segundosFH
    * @return string
    */
    function formatoHora($segundosFH) {
        /* string $horarioFH, $horaFH, $minutoFH, $segundoFH */
        $horaFH = (int) ($segundosFH / 3600) . "h";
        $minutoFH = (int) (($segundosFH % 3600)/60) . "m";
        $segundoFH = (int) (($segundosFH % 3600) % 60) . "s";
        $horarioFH = $horaFH . ":" . $minutoFH . ":" . $segundoFH;
        return $horarioFH;
    }

    /**
    * Determina si una hora es menor que otra
    * @param int $hora1EM
    * @param int $hora2EM
    * @return boolean
    */
    function esMenor ($hora1EM, $hora2EM) {
        /* boolean $resultado */
        if ($hora1EM < $hora2EM) {
            $resultadoEM = true;
        } else {
            $resultadoEM = false;
        }
        return $resultadoEM;
    }

    /**
    * Calcula la diferencia entre dos horarios en segundos y lo devuelve en horas, minutos y segundos
    * @param int $hora1DH
    * @param int $hora2DH
    * @return string
    */
    function difHoras ($hora1DH, $hora2DH) {
        /* string $diferenciaDH */
        /* int $diferenciaEntre1y2DH */
        /* boolean $horaMenorDH */
        $horaMenorDH = esMenor ($hora1DH, $hora2DH);
        if ($horaMenorDH == true) {
            $diferenciaEntre1y2DH = $hora2DH - $hora1DH;
        } else {
            $difenreciaEntre1y2DH = $hora1DH - $hora2DH;
        }
        $diferenciaDH = formatoHora ($diferenciaEntre1y2DH);
        return $diferenciaDH;
    }

    /* PROGRAMA Principal */
    /* A partir de dos horarios los muestra ordenados de mayor a menor junto a la cantidad de segundos que representan y calcula y muestra la diferencia entre ambas en horas, minutos y segundos */
    /* int $hora1, $minuto1, $segundo1, $hora2, $minuto2, $segundo2, $horario1EnSeg, $horario2EnSeg */
    /* string $tipoHora1, $tipoHora2, $horario1ConFormato, $horario2ConFormato, $diferencia */
    /* boolean $horaMenorPP */
    echo "Ingrese una cantidad de horas (0 a 12): ";
    $hora1 = trim(fgets(STDIN));
    echo "Ingrese una cantidad de min (0 a 59): ";
    $minuto1 = trim(fgets(STDIN));
    echo "Ingrese una cantidad de seg (0 a 59): ";
    $segundo1 = trim(fgets(STDIN));
    echo "Ingrese un tipo (AM/PM): ";
    $tipoHora1 = trim(fgets(STDIN));
    echo "Ingrese otra cantidad de horas (0 a 12): ";
    $hora2 = trim(fgets(STDIN));
    echo "Ingrese otra cantidad de min (0 a 59): ";
    $minuto2 = trim(fgets(STDIN));
    echo "Ingrese otra cantidad de seg (0 a 59): ";
    $segundo2 = trim(fgets(STDIN));
    echo "Ingrese un tipo (AM/PM): ";
    $tipoHora2 = trim(fgets(STDIN));
    $horario1EnSeg = aSegundos($hora1, $minuto1, $segundo1, $tipoHora1);
    $horario2EnSeg = aSegundos($hora2, $minuto2, $segundo2, $tipoHora2);
    $horaMenorPP = esMenor($horario1EnSeg, $horario2EnSeg);
    $horario1ConFormato = formatoHora($horario1EnSeg);
    $horario2ConFormato = formatoHora($horario2EnSeg);
    echo "Las horas ordenadas de mayor a menor son: " . "\n";
    if ($horaMenorPP == true) {
        echo $horario2ConFormato . " son " . $horario2EnSeg . " seg." . "\n";
        echo $horario1ConFormato . " son " . $horario1EnSeg . " seg." . "\n";
    } else {
        echo $horario1ConFormato . " son " . $horario1EnSeg . " seg." . "\n";
        echo $horario2ConFormato . " son " . $horario2EnSeg . " seg." . "\n";
    }
    $diferencia = difHoras($horario1EnSeg, $horario2EnSeg);
    echo "La diferencia es: " . $diferencia;
?>