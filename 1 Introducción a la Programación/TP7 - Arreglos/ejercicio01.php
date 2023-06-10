<?php
    /**
     * a) Solicita n temperatura y retorna un arreglo con las mismas ingresadas
     * @param int $nLeer
     * @return array
     */
    function leerTemperaturas ($nLeer) {
        /* int $iLeer, array $temperaturasLeer*/
        $temperaturasLeer = [];
        for ($iLeer = 1; $iLeer <= $nLeer; $iLeer++) {
            echo "Ingrese la temperatura " . $iLeer . ": ";
            $temperaturasLeer[$iLeer] = trim(fgets(STDIN));
        }
        return $temperaturasLeer;
    }

    /**
     * b) Muestra en pantalla el listado de temperaturas a partir de un RECORRIDO EXHAUSTIVO del arreglo ingresado
     * @param array $temperaturasListar
     */
    function listarTemperaturas ($temperaturasListar) {
        /* int $iListar */
        for ($iListar = 1; $iListar <= count($temperaturasListar); $iListar++) {
            echo "La temperatura " . $iListar . " es: " . $temperaturasListar[$iListar] . "\n";
        }
    }

    /**
     * c) Calcula y retorna el promedio de temperaturas a partir del arreglo ingresado
     * @param array $temperaturasProm
     * @return float
     */
    function promTemperaturas ($temperaturasProm) {
        /* int $sumaTemperaturasProm, $iProm, float $promedioProm */
        $sumaTemperaturasProm = 0;
        for ($iProm = 1; $iProm <= count($temperaturasProm); $iProm++) {
            $sumaTemperaturasProm = $sumaTemperaturasProm + $temperaturasProm[$iProm];
        }
        $promedioProm = $sumaTemperaturasProm / count($temperaturasProm);
        return $promedioProm;
    }

    /**
     * d) Calcula el porcentaje de temperaturas superiores a partir del arreglo ingresado y una temperatura determinada
     * @param array $temperaturasPorc
     * @return float
     */
    function porcTemperaturasSuperiores ($temperaturasPorc) {
        /* int $tempMaxPorc, $iPorc, $tempSuperiores, float $porcentajePorc */
        echo "Ingrese la temperatura a comparar: ";
        $tempMaxPorc = trim(fgets(STDIN));
        $tempSuperiores = 0;
        for ($iPorc = 1; $iPorc <= count($temperaturasPorc); $iPorc++){
            if ($temperaturasPorc[$iPorc] > $tempMaxPorc) {
                $tempSuperiores = $tempSuperiores + 1;
            }
        }
        $porcentajePorc = ($tempSuperiores / (count($temperaturasPorc)/100));
        return $porcentajePorc;
    }

    /**
     * e) Recorre y muestra la menor temperatura a partir del arreglo ingresado
     * @param array $temperaturasMin
     * @return int
     */
    function minTemperatura ($temperaturasMin) {
        /* int $iMin, $minimaTemperaturaMin */
        $minimaTemperaturaMin = 100000;
        for ($iMin = 1; $iMin <= count($temperaturasMin); $iMin++) {
            if ($temperaturasMin[$iMin] < $minimaTemperaturaMin) {
                $minimaTemperaturaMin = $temperaturasMin[$iMin];
            }
        }
        return $minimaTemperaturaMin;
    }

    /**
     * f) Recorre y muestra la mayor temperatura a partir del arreglo ingresado
     * @param array $temperaturasMax
     * @return int
     */
    function maxTemperatura ($temperaturasMax) {
        /* int $iMax, $maximaTemperaturaMax */
        $maximaTemperaturaMax = -100000;
        for ($iMax = 1; $iMax <= count($temperaturasMax); $iMax++) {
            if ($temperaturasMax[$iMax] > $maximaTemperaturaMax) {
                $maximaTemperaturaMax = $temperaturasMax[$iMax];
            }
        }
        return $maximaTemperaturaMax;
    }

    /**
     * g) Calcula y retorna un arreglo con la temperatura mínima y máxima a partir del arreglo ingresado
     * @param array $temperaturasExtremos
     * @return array
     */
    function extremosTemperatura ($temperaturasExt) {
        /* array $extremosExt */
        $extremosExt = [];
        $extremosExt["min"] = minTemperatura($temperaturasExt);
        $extremosExt["max"] = maxTemperatura($temperaturasExt);
        return $extremosExt;
    }

    /* h) PROGRAMA Principal */
    /* Prueba los algoritmos anteriores a partir de los datos de temperaturas */
    /* int $n, $porcentaje, $minima, $maxima, array $arregloTemperaturas, float $promedio */
    echo "Que cantidad de temperaturas desea ingresar: ";
    $n = trim(fgets(STDIN));
    echo "\n";
    $arregloTemperaturas = leerTemperaturas ($n);
    echo "\nLista de Temperaturas:\n";
    listarTemperaturas ($arregloTemperaturas);
    $promedio = promTemperaturas ($arregloTemperaturas);
    echo "\nLa temperatura promedio es: " . $promedio . "\n";
    echo "\n";
    $porcentaje = porcTemperaturasSuperiores ($arregloTemperaturas);
    echo "El porcentaje de temperaturas mayores la temperatura ingresada es de: " . $porcentaje . "%\n";
    echo "\n";
    $minima = minTemperatura ($arregloTemperaturas);
    echo "La temperatura mínima es: " . $minima . "\n";
    echo "\n";
    $maxima = maxTemperatura ($arregloTemperaturas);
    echo "La temperatura máxima es: " . $maxima . "\n";
    echo "\n";
    $extremos = extremosTemperatura ($arregloTemperaturas);
    print_r ($extremos);
?>