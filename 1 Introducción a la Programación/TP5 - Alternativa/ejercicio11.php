<?php
    /**
    * MODULO que calcula el discriminante a partir de tres valores ingresados
    * @param float $valorA
    * @param float $valorB
    * @param float $valorC
    * @return float
    */
    function calcularDiscriminante ($valorA, $valorB, $valorC){
        // float $valorDiscriminante
        $valorDiscriminante = ($valorB*$valorB)-(4*$valorA*$valorC);
        return $valorDiscriminante;
    }

    /* PROGRAMA principal */
    /* PROGRAMA que pide el ingreso de datos y muestra las raices a partir de calculos */
    /* FLOAT $numA, $numB, $numC, $resultadoDiscriminante, $calculoRaiz1, $calculoRaiz2 */
    $calculoRaiz1 = 0;
    $calculoRaiz2 = 0;
    echo "Ingrese el coeficiente del término cuadratico: ";
    $numA = trim(fgets(STDIN));
    echo "Ingrese el coeficiente del término lineal: ";
    $numB = trim(fgets(STDIN));
    echo "Ingrese el coeficiente del término independiente: ";
    $numC = trim(fgets(STDIN));
    $resultadoDiscriminante = calcularDiscriminante($numA, $numB, $numC);
    if ($resultadoDiscriminante == 0){
        $calculoRaiz1 = (-$numB)/(2*$numA);
        echo "La raiz es: " . $calculoRaiz1;
    } elseif ($resultadoDiscriminante > 0){
        $calculoRaiz1 = ((-$numB)+(sqrt($resultadoDiscriminante)))/(2*$numA);
        $calculoRaiz2 = ((-$numB)-(sqrt($resultadoDiscriminante)))/(2*$numA);
        echo "Las raíces son: " . $calculoRaiz1 . " y " . $calculoRaiz2;
    } else{
        echo "No es posible calcular raíces reales";
    }
?>