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
        1) Realizar nueva encuesta.
        2) Muestra la cantidad de personas encuestadas.
        3) Muestra la cantidad de personas encuestadas que conocen ambos destinos turisticos.
        4) Muestra la persona que más a viajado a cada destino turistico.
        5) Muestra el promedio de inversion en las próximas vacaciones.
        6) Salir.
        ¿Qué desea hacer? Seleccione una opcion: ";
        $resultadoSO = solicitarNumeroEntre (1, 6);
        return $resultadoSO;
    }

    $arregloEncuestas [0] = [
        "nombre"            => "Fede",
        "dinero"            => 50000,
        "cantsanmartin"     => 1,
        "cantbariloche"     => 4,
        "mediotransporte"   => "Colectivo"
    ];

    $arregloEncuestas [1] = [
        "nombre"            => "Giany",
        "dinero"            => 30000,
        "cantsanmartin"     => 1,
        "cantbariloche"     => 3,
        "mediotransporte"   => "Colectivo"
    ];

    $arregloEncuestas [2] = [
        "nombre"            => "Ariel",
        "dinero"            => 90000,
        "cantsanmartin"     => 3,
        "cantbariloche"     => 2,
        "mediotransporte"   => "Auto"
    ];

    $arregloEncuestas [3] = [
        "nombre"            => "Ale",
        "dinero"            => 70000,
        "cantsanmartin"     => 1,
        "cantbariloche"     => 3,
        "mediotransporte"   => "Auto"
    ];

    $arregloEncuestas [4] = [
        "nombre"            => "Agus",
        "dinero"            => 70000,
        "cantsanmartin"     => 6,
        "cantbariloche"     => 0,
        "mediotransporte"   => "Auto"
    ];

    /**
     * Realiza una encuesta y devuelve un arreglo con la información de las respuestas.
     * @param array $arregloEncuestasRE
     * @return array
     */
    function registrarEncuesta() {
        echo "¿Cuál es su nombre?: ";
        $nuevaEncuesta["nombre"] = trim(fgets(STDIN));
        echo "¿Cantidad aproximada de dinero que piensa invertir en sus próximas vacaciones?: ";
        $nuevaEncuesta["dinero"] = trim(fgets(STDIN));
        echo "¿Cuántas veces viajó a San Martín?: ";
        $nuevaEncuesta["cantsanmartin"] = trim(fgets(STDIN));
        echo "¿Cuántas veces viajó a Bariloche?: ";
        $nuevaEncuesta["cantbariloche"] = trim(fgets(STDIN));
        echo "¿Cuál es el medio de transporte por excelencia que utiliza para sus vacaciones: Auto o Colectivo?: ";
        $nuevaEncuesta["mediotransporte"] = trim(fgets(STDIN));
        return $nuevaEncuesta;
    }

    /**
     * A partir del arreglo de encuestas devuelve la cantidad de personas encuestadas.
     * @param array $arregloEncuestasPE
     * @return int
     */
    function cantidadPersonasEncuestadas($arregloEncuestasPE) {
        $cantidadPE = count($arregloEncuestasPE);
        return $cantidadPE;
    }

    /**
     * A partir del arreglo de encuestas devuelve el porcentaje de personas que conocen ambos destinos.
     * @param array $arregloEncuestasPAD
     * @return float
     */
    function porcentajeAmbosDestinos($arregloEncuestasPAD) {
        $contadorAmbos = 0;
        for ($i = 0; $i < count($arregloEncuestasPAD); $i++) {
            if ($arregloEncuestasPAD[$i]["cantsanmartin"] != 0 && $arregloEncuestasPAD[$i]["cantbariloche"] != 0) {
                $contadorAmbos++;
            }
        }
        $promedio = 0;
        $promedio = ($contadorAmbos / count($arregloEncuestasPAD)) * 100;
        return $promedio;
    }

    /**
     * A partir del arreglo de encuestas devuelve las personas que mas viajaron a cada destino y su medio de transporte.
     * @param array $arregloEncuestasIP
     * @return array
     */
    function infoPersona($arregloEncuestasIP) {
        $contadorMaxVisitas = -10000;
        $maximasVisitas = [];
        for ($i = 0; $i < count($arregloEncuestasIP); $i++) {
            if ($arregloEncuestasIP[$i]["cantsanmartin"] > $contadorMaxVisitas) {
                $contadorMaxVisitas = $arregloEncuestasIP[$i]["cantsanmartin"];
                $maximasVisitas["sanmartin"]["nombre"] = $arregloEncuestasIP[$i]["nombre"];
                $maximasVisitas["sanmartin"]["mediotransporte"] = $arregloEncuestasIP[$i]["mediotransporte"];
            }
        }
        $contadorMaxVisitas = -10000;
        for ($i = 0; $i < count($arregloEncuestasIP); $i++) {
            if ($arregloEncuestasIP[$i]["cantbariloche"] > $contadorMaxVisitas) {
                $contadorMaxVisitas = $arregloEncuestasIP[$i]["cantbariloche"];
                $maximasVisitas["bariloche"]["nombre"] = $arregloEncuestasIP[$i]["nombre"];
                $maximasVisitas["bariloche"]["mediotransporte"] = $arregloEncuestasIP[$i]["mediotransporte"];
            }
        }
        return $maximasVisitas;
    }

    /**
     * A partir del arreglo de encuestas devuelve el promedio de inversion en las próximas vacaciones
     * @param array $arregloEncuestasDP
     * @return float
     */
    function darPromedio($arregloEncuestasDP) {
        $sumaProm = 0;
        for($i = 0; $i < count($arregloEncuestasDP); $i++) {
            $sumaProm = $sumaProm + $arregloEncuestasDP[$i]["dinero"];
        }
        $promedio = 0;
        $promedio = ($sumaProm / count($arregloEncuestasDP));
        return $promedio;
    }

    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1:
                $arregloEncuestas[count($arregloEncuestas)] = registrarEncuesta();
                break;
            case 2:
                echo "Hasta el momento se encuestaron  " . cantidadPersonasEncuestadas($arregloEncuestas) . " personas en total. \n";
                break;
            case 3:
                echo "Ambos destinos son conocidos por el " . porcentajeAmbosDestinos($arregloEncuestas) . "% del total de personas encuestadas. \n";
                break;
            case 4:
                echo "A continuación se muestran las personas que más han viajado a cada destino turistico: ";
                print_r (infoPersona($arregloEncuestas));
                break;
            case 5:
                echo "El promedio de inversión en las próximas vacaciones será de " . darPromedio($arregloEncuestas) . ".\n";
                break;
            case 6:
                echo "El programa há finalizado.\n";
                break;
        }
    } while ($opcion != 6);
    
?>