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
        1) Muestra el més de mayor ganancia.
        2) Muestra el sueldo a cobrar de cada empleado.
        3) Salir.
        ¿Qué desea hacer? Seleccione una opcion: ";
        $resultadoSO = solicitarNumeroEntre (1, 3);
        return $resultadoSO;
    }

    /**
     * Calcula la ganancia mensual a partir de un arreglo asociativo de balance
     * @param array $balance
     * @param int $mes
     * @return int
     */
    function gananciaMensual($balanceGM, $mes) {
        $ganancia = $balanceGM[$mes]["recaudado"] - $balanceGM[$mes]["costo"];
        return $ganancia;
    }

    /**
     * Calcula el sueldo del empleado a partir de su básico y antiguedad
     * @param array $infoEmpleados
     * @return int
     */
    function calculoSueldo($infoEmpleadosCS, $numEmpleadoCS) {
        if ($infoEmpleadosCS[$numEmpleadoCS]["antiguedad"] > 10) {
            $porcentajeAntiguedadCS = $infoEmpleadosCS[$numEmpleadoCS]["sueldo"] / 2;
        } else {
            $porcentajeAntiguedadCS = $infoEmpleadosCS[$numEmpleadoCS]["sueldo"] / 4;
        }
        $sueldoCS = $infoEmpleadosCS[$numEmpleadoCS]["sueldo"] + $porcentajeAntiguedadCS;
        return $sueldoCS;
    }


    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1:
                $balance [0]  = [ "recaudado" => 1930, "costo" =>  837 ];
                $balance [1]  = [ "recaudado" => 1721, "costo" =>  723 ];
                $balance [2]  = [ "recaudado" => 1482, "costo" =>  138 ];
                $balance [3]  = [ "recaudado" =>  734, "costo" =>  938 ];
                $balance [4]  = [ "recaudado" => 1183, "costo" =>  182 ];
                $balance [5]  = [ "recaudado" =>  102, "costo" =>   10 ];
                $balance [6]  = [ "recaudado" => 1020, "costo" => 1023 ];
                $balance [7]  = [ "recaudado" => 1032, "costo" =>  374 ];
                $balance [8]  = [ "recaudado" =>  928, "costo" =>  255 ];
                $balance [9]  = [ "recaudado" =>  823, "costo" =>  382 ];
                $balance [10] = [ "recaudado" => 2182, "costo" => 1082 ];
                $balance [11] = [ "recaudado" => 1874, "costo" =>  364 ];
                $maxGanancia = -10000;
                $mesMaxGanancia = "";
                for ($i = 0; $i < count($balance); $i++) {
                    if (gananciaMensual($balance, $i) > $maxGanancia) {
                        $maxGanancia = gananciaMensual($balance, $i);
                        if ($i == 0) {
                            $mesMaxGanancia = "Enero";
                        } elseif ($i == 1) {
                            $mesMaxGanancia = "Febrero";
                        } elseif ($i == 2) {
                            $mesMaxGanancia = "Marzo";
                        } elseif ($i == 3) {
                            $mesMaxGanancia = "Abril";
                        } elseif ($i == 4) {
                            $mesMaxGanancia = "Mayo";
                        } elseif ($i == 5) {
                            $mesMaxGanancia = "Junio";
                        } elseif ($i == 6) {
                            $mesMaxGanancia = "Julio";
                        } elseif ($i == 7) {
                            $mesMaxGanancia = "Agosto";
                        } elseif ($i == 8) {
                            $mesMaxGanancia = "Septiembre";
                        } elseif ($i == 9) {
                            $mesMaxGanancia = "Octubre";
                        } elseif ($i == 10) {
                            $mesMaxGanancia = "Noviembre";
                        } elseif ($i == 11) {
                            $mesMaxGanancia = "Diciembre";
                        }
                    }
                }
                echo "El mes de " . $mesMaxGanancia . " tiene la mayor ganancia de " . $maxGanancia . ". \n";
                break;
            case 2:
                $infoEmpleados [0]  = [ "nombre" => "Juan"  , "sueldo" => 1837, "antiguedad" =>  12 ];
                $infoEmpleados [1]  = [ "nombre" => "Andres", "sueldo" => 1723, "antiguedad" =>  10 ];
                $infoEmpleados [2]  = [ "nombre" => "Julio" , "sueldo" => 1138, "antiguedad" =>   3 ];
                $infoEmpleados [3]  = [ "nombre" => "Jazmin", "sueldo" => 1938, "antiguedad" =>  23 ];
                $infoEmpleados [4]  = [ "nombre" => "Arturo", "sueldo" => 1182, "antiguedad" =>   8 ];
                $listaDeSueldos = [];
                for ($i = 0; $i < count($infoEmpleados); $i++) {
                    $listaDeSueldos[$infoEmpleados[$i]["nombre"]] = calculoSueldo($infoEmpleados, $i);
                }
                print_r ($listaDeSueldos);
                break;
            case 3:
                echo "El programa há finalizado.\n";
                break;
        }
    } while ($opcion != 3);
    
?>