<?php
    /** 
     * Calcula la cantidad de analgésico a aplicar en mg a partir de los datos de la mascota
     * @param string $tipoCA
     * @param int $edadCA
     * @param float $pesoCA
     * @return float
     */
    function cantAnalg ($tipoCA, $edadCA, $pesoCA) {
        /* float $cantAnalgTotal */
        if ($tipoCA == "perro") {
            if ($pesoCA < 5) {
                $cantAnalgTotal = 100;
            } elseif (5 <= $pesoCA && $pesoCA <= 15) {
                $cantAnalgTotal = 150;
            } else {
                $cantAnalgTotal = 300;
            }
            if (6 < $edadCA) {
                $cantAnalgTotal = $cantAnalgTotal + (($edadCA - 6) * 10);
            }
        } elseif ($tipoCA == "gato") {
            if ($pesoCA < 1) {
                $cantAnalgTotal = 80;
            } elseif (1 <= $pesoCA && $pesoCA <= 3) {
                $cantAnalgTotal = 120;
            } else {
                $cantAnalgTotal = 200;
            }
        } elseif ($tipoCA == "conejo") {
            if ($edadCA <= 2) {
                $cantAnalgTotal = 20;
            } else {
                $cantAnalgTotal = 25;
            }
            if (0.500 < $pesoCA) {
                $cantAnalgTotal = $cantAnalgTotal + (($pesoCA - 0.500) * 10);
            }
        } else {
            $cantAnalgTotal = 0;
        }
        return $cantAnalgTotal;
    }

    /**
     * Calcula el monto total de la consulta a partir de la cantidad de analgésico aplicado en mg
     * @param float $cantAnalgMC
     * @return float
     */
    function montoCons ($cantAnalgMC) {
        /* float $montoConsTotal */
        $montoConsTotal = 1500;
        if (0 < $cantAnalgMC && $cantAnalgMC <= 100) {
            $montoConsTotal = $montoConsTotal + 1000;
        } elseif (100 < $cantAnalgMC) {
            $montoConsTotal = $montoConsTotal + 1000 + (($cantAnalgMC - 100) * 50);
        }
        return $montoConsTotal;
    }

    /* PROGRAMA Principal */
    /* Muestra la cantidad de analgésico a aplicar y el monto total de la consulta a partir de los datos de la mascotra */
    /* string $tipo */
    /* int $edad */
    /* float $peso, $cantAnalg, $montoCons */
    echo "Ingrese el tipo de mascota (perro, gato, conejo, otro): ";
    $tipo = trim(fgets(STDIN));
    echo "Ingrese la edad de la mascota (en años): ";
    $edad = trim(fgets(STDIN));
    echo "Ingrese el peso de la mascota (en kg): ";
    $peso = trim(fgets(STDIN));
    $cantAnalg = cantAnalg($tipo, $edad, $peso);
    $montoCons = montoCons ($cantAnalg);
    echo "A su mascota se le suministrarán " . $cantAnalg . "mg de analgésico y el costo total de la consulta será de $" . $montoCons;
?>