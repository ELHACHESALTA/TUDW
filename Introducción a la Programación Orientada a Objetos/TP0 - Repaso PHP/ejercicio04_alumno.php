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
        1) Muestra la cantidad de alumnos que rindieron la materia elegida.
        2) Muestra el porcentaje de alumnos que rindieron cada materia.
        3) Muestra la información del alumno que mayor nota obtuvo por materia.
        4) Muestra la cantidad de alumnos aprobados por materia
        5) Muestra los alumnos que aprobaron la materia elegida.
        6) Muestra el número de legajo de los alumnos que aprobaron mas de cuatro materias.
        7) Muestra las materias aprobadas a partir de un legajo.
        8) Salir.
        ¿Qué desea hacer? Seleccione una opcion: ";
        $resultadoSO = solicitarNumeroEntre (1, 8);
        return $resultadoSO;
    }

    /**
     * Calcula el porcentaje dentro de un arreglo
     * @param array $notasPM
     * @param int $codMateriaPM
     * @return float
     */
    function porcentajeMateria ($notasPM, $codMateriaPM) {
        $porcentajePM = ($codMateriaPM/count($notasPM))*100;
        return $porcentajePM;
    }

    /**
     * Obtiene un arreglo con todos los códigos de materia ordenados y sin repetir
     * @param array $notasLMR
     * @return array
    */
    function listaMateriasRendidas ($notasLMR) {
        $materiasRendidas = [];
        for ($i = 0; $i < count($notasLMR); $i++) {
            if (!(in_array ($notasLMR[$i]["codigoMateria"], $materiasRendidas))) {
                $materiasRendidas[$i] = $notasLMR[$i]["codigoMateria"];
            }
        }
        //print_r($materiasRendidas);
        sort($materiasRendidas);
        //print_r($materiasRendidas);
        return $materiasRendidas;
    }

    $notas [0] = [ "nroLegajo" => 2381  , "codigoMateria" => 3, "notaObtenida" =>   7];
    $notas [1] = [ "nroLegajo" => 9238  , "codigoMateria" => 4, "notaObtenida" =>   5];
    $notas [2] = [ "nroLegajo" => 4285  , "codigoMateria" => 1, "notaObtenida" =>   9];
    $notas [3] = [ "nroLegajo" => 4285  , "codigoMateria" => 3, "notaObtenida" =>   8];
    $notas [4] = [ "nroLegajo" => 7129  , "codigoMateria" => 2, "notaObtenida" =>   2];
    $notas [5] = [ "nroLegajo" => 4285  , "codigoMateria" => 2, "notaObtenida" =>   8];
    $notas [6] = [ "nroLegajo" => 8079  , "codigoMateria" => 1, "notaObtenida" =>   0];
    $notas [7] = [ "nroLegajo" => 7735  , "codigoMateria" => 4, "notaObtenida" =>   8];
    $notas [8] = [ "nroLegajo" => 4285  , "codigoMateria" => 4, "notaObtenida" =>   7];
    $notas [9] = [ "nroLegajo" => 7129  , "codigoMateria" => 3, "notaObtenida" =>  10];

    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1:
                echo "Ingrese el código de una materia: ";
                $codMateria = trim(fgets(STDIN));
                $contador = 0;
                for ($i = 0; $i < count($notas); $i++) {
                    if ($codMateria == $notas[$i]["codigoMateria"]) {
                        $contador++;
                    }
                }
                echo "Un total de " . $contador . " alumno/s rindieron esta materia. \n";
                break;
            case 2:
                $contadorMateria = 0;
                for ($i = 0; $i < count(listaMateriasRendidas($notas)); $i++) {
                    for ($j = 0; $j < count($notas); $j++) {
                        if ($notas[$j]["codigoMateria"] == listaMateriasRendidas($notas)[$i]) {
                            $contadorMateria++;
                        }
                    }
                    echo "El porcentaje de alumnos que rindió la materia " . listaMateriasRendidas($notas)[$i] . " es de " . porcentajeMateria($notas, $contadorMateria) . " %. \n";
                    $contadorMateria = 0;
                }
                break;
            case 3:
                $legajoMax = -1;
                $notaMax = -1;
                for ($i = 0; $i < count(listaMateriasRendidas($notas)); $i++) {
                    for ($j = 0; $j < count($notas); $j++) {
                        if ($notas[$j]["notaObtenida"] > $notaMax && $notas[$j]["codigoMateria"] == listaMateriasRendidas($notas)[$i]) {
                            $legajoMax = $notas[$j]["nroLegajo"];
                            $notaMax = $notas[$j]["notaObtenida"];
                        }
                    }
                    echo "El alumno con legajo " . $legajoMax . " y con puntuación " . $notaMax . " tiene la mayor calificación de la materia " . listaMateriasRendidas($notas)[$i] . ". \n";
                    $legajoMax = -1;
                    $notaMax = -1;
                }
                break;
            case 4:
                $aprobados = 0;
                for ($i = 0; $i < count(listaMateriasRendidas($notas)); $i++) {
                    for ($j = 0; $j < count($notas); $j++) {
                        if ($notas[$j]["notaObtenida"] >= 7 && $notas[$j]["codigoMateria"] == listaMateriasRendidas($notas)[$i]) {
                            $aprobados++;
                        }
                    }
                    echo "En la materia " . listaMateriasRendidas($notas)[$i] . " hay " . $aprobados . " alumnos aprobados. \n";
                    $aprobados = 0;
                }
                break;
            case 5:
                echo "Ingrese el código de una materia: ";
                $codMateria = trim(fgets(STDIN));
                $listaAprobados = [];
                $contadorAP = 0;
                for ($i = 0; $i < count($notas); $i++) {
                        if ($notas[$i]["notaObtenida"] >= 7 && $notas[$i]["codigoMateria"] == $codMateria) {
                            $listaAprobados[$contadorAP] = $notas[$i];
                            $contadorAP++;
                        }
                    }
                print_r ($listaAprobados);
                break;
            case 6:
                $listaLegajos = [];
                for ($i = 0; $i < count($notas); $i++) {
                    if (!(in_array ($notas[$i]["nroLegajo"], $listaLegajos))) {
                        $listaLegajos[$i] = $notas[$i]["nroLegajo"];
                    }
                }
                //print_r($listaLegajos);
                sort($listaLegajos);
                //print_r($listaLegajos);
                $contadorMaterias = 0;
                $legajosCuatroAp = [];
                $contadorCuatroAp = 0;
                for ($i = 0; $i < count($listaLegajos); $i++){
                    for ($j = 0; $j < count($notas); $j++) {
                        if ($notas[$j]["notaObtenida"] >= 7 && $notas[$j]["nroLegajo"] == $listaLegajos[$i]) {
                            $contadorMaterias++;
                        }
                    }
                    if ($contadorMaterias >= 4) {
                        $legajosCuatroAp[$contadorCuatroAp] = $listaLegajos[$i];
                    }
                    $contadorMaterias = 0;
                }
                print_r ($legajosCuatroAp);
                break;
            case 7:
                echo "Ingrese un legajo: ";
                $legajoAlumno = trim(fgets(STDIN));
                $materiasAprobadas = [];
                $contadorMaterias = 0;
                for ($i = 0; $i < count($notas); $i++) {
                        if ($notas[$i]["notaObtenida"] >= 7 && $notas[$i]["nroLegajo"] == $legajoAlumno) {
                            $materiasAprobadas[$contadorMaterias] = $notas[$i]["codigoMateria"];
                            $contadorMaterias++;
                        }
                    }
                print_r ($materiasAprobadas);
                break;
            case 8:
                echo "El programa há finalizado.\n";
                break;
        }
    } while ($opcion != 8);
    
?>