<?php
    $arregloJardin [0] = [ "nombre" => "Juan",  "tutor" => "María", "nac" => "7/10/2019", "sexo" => "H"];
    $arregloJardin [1] = [ "nombre" => "Pedro", "tutor" => "Facu",  "nac" => "10/2/2019", "sexo" => "H"];
    $arregloJardin [2] = [ "nombre" => "Mario", "tutor" => "Juana", "nac" => "21/6/2019", "sexo" => "H"];
    $arregloJardin [3] = [ "nombre" => "Sol",   "tutor" => "Lara",  "nac" => "2/12/2018", "sexo" => "M"];
    $arregloJardin [4] = [ "nombre" => "Cecy",  "tutor" => "Anto",  "nac" => "17/5/2019", "sexo" => "M"];

    /**
     * Calcula la edad a partir del ingreso de una fecha.
     * @param string $nacCE
     * @return int
     */
    function calcularEdad($nacCE){
        $fecha = explode("/", $nacCE);
        $dia = $fecha[0];
        $mes = $fecha[1];
        $anio = $fecha[2];
        $diferenciaDia = 21 - $dia;
        $diferenciaMes = 3 - $mes;
        $diferenciaAnio = 2023 - $anio;
        if ($diferenciaDia < 0 || $diferenciaMes < 0) {
            $diferenciaAnio--;
        }
        return $diferenciaAnio;
    }

    /**
     * Selecciona la salida del alumno a partir de su sexo.
     * @param array $arregloJardinES
     * @param int $iES
     * @return string
     */
    function elegirSalita($arregloJardinES, $iES) {
        $resultado = "";
        if ($arregloJardinES[$iES]["sexo"] == "M") {
            $resultado = "S. Verde";
        } elseif ($arregloJardinES[$iES]["sexo"] == "H") {
            $resultado = "S. Roja";
        }
        return $resultado;
    }

    /**
     * A partir de un arreglo con datos de los alumnos me devuelve un arreglo con la asignación de sala de los mismos y su edad.
     * @param array $arregloJardinAS
     * @return array
     */
    function asignarSalitas($arregloJardinAS) {
        for ($i = 0; $i < count($arregloJardinAS); $i++) {
            $ListaSalitas[]["nombre"] = $arregloJardinAS[$i]["nombre"];
            $ListaSalitas[$i]["edad"] = calcularEdad($arregloJardinAS[$i]["nac"]);
            $ListaSalitas[$i]["salida"] = elegirSalita($arregloJardinAS, $i);
        }
        return $ListaSalitas;
    }

    print_r (asignarSalitas($arregloJardin));
?>