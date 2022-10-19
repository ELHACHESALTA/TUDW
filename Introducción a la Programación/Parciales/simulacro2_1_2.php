<?php
    /**
     * Calcula la suma filtrada de los datos ingresados
     * @param int $centinelaSF
     * @return int
     */
    function sumaFiltrada ($centinelaSF) {
        /* int $sumaSF, $numeroSF, $numeroAnteriorSF */
        $sumaSF = 0;
        echo "Ingrese un número: ";
        $numeroSF = trim(fgets(STDIN));
        $numeroAnteriorSF = $numeroSF - 1;
        while ($numeroSF <> $centinelaSF) {
            if ($numeroSF > $numeroAnteriorSF) {
                $sumaSF = $sumaSF + $numeroSF;
                $numeroAnteriorSF = $numeroSF;
            } else {
                $b = $numeroAnteriorSF = $numeroSF;
            }
            echo "Ingrese otro número: ";
            $numeroSF = trim(fgets(STDIN));
        }
        return $sumaSF;
    }
?>