<?php
    /**
    * Calcula el IMC con las masa en kilogramos y la estatura en metros
    * @param float $masaK
    * @param float $estaturaM
    * @return float
    */
    function calculaImc (float $masaK, $estaturaM) {
        /* float $imc */
        $imc = $masaK / ($estaturaM * $estaturaM);
        return $imc;
    }

    /**
    * Brinda la clasificacion de la OMS del estado nutricional de una persona
    * @param float $datosImc
    * @return string
    */
    function estadoNutricionalOms (float $datosImc) {
        /* string $estadoNutricional */
        if ($datosImc < 18.5) {
            $estadoNutricional = "posee bajo peso";
        } elseif (($datosImc > 18.5) && ($datosImc < 24.99)) {
            $estadoNutricional = "posee peso normal";
        } elseif (($datosImc > 25.00) && ($datosImc < 29.99)) {
            $estadoNutricional = "posee sobrepeso";
        } elseif (($datosImc > 30.00) && ($datosImc < 34.99)) {
            $estadoNutricional = "posee obesidad leve";
        } elseif (($datosImc > 35.00) && ($datosImc < 39.99)) {
            $estadoNutricional = "posee obesidad media";
        } else {
            $estadoNutricional = "posee obesidad mórbida";
        }
        return $estadoNutricional;
    }

    /* PROGRAMA Principal */
    /* Indica tu estado nutricional */
    /* float $masa, $estatura, $usuarioImc */
    /* string $resultadoNutricional */
    echo "Ingrese su peso en kilogramos: ";
    $masa = trim(fgets(STDIN));
    echo "Ingrese su estatura en metros: ";
    $estatura = trim (fgets(STDIN));
    $usuarioImc = calculaImc ($masa, $estatura);
    $resultadoNutricional = estadoNutricionalOms ($usuarioImc);
    echo "Usted " . $resultadoNutricional;
?>