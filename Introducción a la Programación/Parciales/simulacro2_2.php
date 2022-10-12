<?php
    /**
     * Calcula la suma filtrada de los datos ingresados
     * @param int $centinelaSF
     * @return int
     */
    function sumaFiltrada ($centinelaSF) {
        /* int $sumaSF, $numeroSF, $numeroMayorSF */
        $sumaSF = 0;
        $numeroMayorSF = 0;
        echo "Ingrese un número: ";
        $numeroSF = trim(fgets(STDIN));
        while ($numeroSF <> $centinelaSF) {
            if ($numeroSF > $numeroMayorSF) {
                $sumaSF = $sumaSF + $numeroSF;
                $numeroMayorSF = $numeroSF;
            }
            echo "Ingrese otro número: ";
            $numeroSF = trim(fgets(STDIN));
        }
        return $sumaSF;
    }
?>