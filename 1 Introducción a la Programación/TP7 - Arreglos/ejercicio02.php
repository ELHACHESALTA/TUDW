<?php
    /**
     * b) Calcula la suma de los valores de todos los celulares
     * @param array $valorSV
     * @return float 
     */
    function sumaValores ($valorSV) {
        /* int $iSV, float $sumaSV */
        $sumaSV = 0;
        for ($iSV = 0; $iSV < count($valorSV); $iSV++) {
            $sumaSV = $sumaSV + $valorSV[$iSV];
        }
        return $sumaSV;
    }

    /* PROGRAMA Principal */
    /* Arreglo indexado de tipo string */
    $celulares = ["Moto G6", "Samsung J7", "LG K9", "iPhone SE", "Galaxy A9"];
    /* Arreglo indexado de tipo float */
    $valor = [22030.90, 10500.00, 27999.00, 38105.00, 17000.80];
    /* a) Muestra el nombre y valor del celular indicado */
    /* int $n, $i, string $modelo, float $precio */
    echo "Ingrese un celular (opción 1 a 5): ";
    $n = trim(fgets(STDIN));
    if ($n >=1 && $n <= 5) {
        $i = $n - 1;
        $modelo = $celulares[$i];
        $precio = $valor[$i];
        echo "El celular " . $modelo . " tiene un valor de " . $precio;
    } else {
        echo "Ha ingresado una opción incorrecta";
    }
    /* c) Muestra el valor total de todos los celulares */
    $total = sumaValores($valor);
    echo "\nEl valor total de todos los celulares es: " . $total;
?>