<?php
    /**
    * Calcula la longitud de la circunferencia de la base del cilindro
    * @param float $radioLongBase
    * @return float
    */
    function longBase($radioLongBase) {
        return round(2 * M_PI * $radioLongBase, 2);
    }

    /** Calcula la superficie de la base del cilindro
    * @param float $radioSupBase
    * @return float
    */
    function supBase($radioSupBase) {
        return round(M_PI * pow($radioSupBase, 2), 2);
    }

    /** Calcula la superficie lateral del cilindro
    * @param float $radioSupLateral
    * @param float $alturaSupLateral
    * @return float
    */
    function supLateral($radioSupLateral, $alturaSupLateral) {
        return round(2 * M_PI * $radioSupLateral * $alturaSupLateral, 2);
    }

    /** Calcula la superficie total del cilindro
    * @param float $radioSupTotal
    * @param float $alturaSupTotal
    * @return float
    */
    function supTotal($radioSupTotal, $alturaSupTotal) {
        return round(2 * M_PI * $radioSupTotal * $alturaSupTotal + 2 * M_PI * pow($radioSupTotal, 2));
    }

    /** Calcula el volumen del cilindro
    * @param float $radioVolumen
    * @param float $alturaVolumen
    * @return float*/
    function volumen($radioVolumen, $alturaVolumen) {
        return round(M_PI * pow($radioVolumen, 2) * $alturaVolumen, 2);
    }

    /* PROGRAMA Principal */
    /* Muestra en detalle los cálculos geométricos de un cilindro a partir de un radio y una altura */
    /* float $radio, $altura, $longBaseC, $supBaseC, $supLateralC, $supTotalC, $volumenC */
    echo "Ingrese el radio del cilindro en centímetros: ";
    $radio = trim(fgets(STDIN));
    echo "Ingrese la altura del cilindro en centímetros: ";
    $altura = trim(fgets(STDIN));
    $longBaseC = longBase($radio);
    $supBaseC = supBase($radio);
    $supLateralC = supLateral($radio, $altura);
    $supTotalC = supTotal($radio, $altura);
    $volumenC = volumen($radio,$altura);
    echo "Cilindro con altura: " . $altura . " cm/s y radio: " . $radio . " cm/s:" . "\n";
    echo "     Longitud de la circunferencia de la base: " . $longBaseC . " cm/s" . "\n";
    echo "     Superficie de la base: " . $supBaseC . " cm^2" . "\n";
    echo "     Superficie lateral del cilindro: " . $supLateralC . " cm^2" . "\n";
    echo "     Superficie total del cilindro: " . $supTotalC . " cm^2" . "\n";
    echo "     Volumen del cilindro: " . $volumenC . " cm^3" . "\n";
?>