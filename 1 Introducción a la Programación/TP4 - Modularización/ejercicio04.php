<?php
    /**
    *Calcula el perímetro de un triángulo equilátero a partir de la longitud de su lado
    *@param int $ladoT
    *@return float
    */
    function perimetro($ladoT) {
        return 3 * $ladoT;
    }

    /**
    *Calcula el valor de la altura de un triángulo equilátero a partir de la longitud de su lado
    *@param float $ladoT
    *@return float
    */
    function altura($ladoT) {
    return sqrt(pow($ladoT, 2) - pow($ladoT/2, 2));
    }

    /**
    *Calcula el valor del área de un triángulo equilátero a partir de la longitud de su lado
    *@param float $ladoT
    *@return float 
    */
    function area($ladoT) {
        return ($ladoT * altura($ladoT))/2;
    }

    /* PROGRAMA Principal */
    /* Calcula el perímetro y área de un triángulo equilátero a partir de la longitud de su lado*/
    /* Float $lado, $perímetro, $altura, $area */
    echo "Escriba la longitud del lado en cm: ";
    $lado = trim(fgets(STDIN));
    $perimetro = perimetro($lado);
    $altura = altura($lado);
    $area = area($lado);
    echo "Dado un triángulo equilátero de lado " . $lado . " cm, su perímetro es " . $perimetro . " cm y su área es " . $area . " cm^2";
?>