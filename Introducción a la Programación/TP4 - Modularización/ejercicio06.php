<?php
    /**
    *Calcula el área circular de un radio dado
    *@param float $radioArea
    *@return float
    */
    function areaCircular($radioArea) {
        return PI() * pow($radioArea, 2);
    }

    /**
    *Calcula la superficie de corona circular a partir de su radio mayor y menor
    *@param float $radioMayor
    *@param float $radioMenor
    *@return float
    */
    function areaCorona($radioMayorCorona, $radioMenorCorona) {
        return areaCircular($radioMayorCorona) - areaCircular ($radioMenorCorona);
    }

    /* PROGRAMA Principal */
    /* Calcula el área circular a partir de dos radios */
    /* float $radioMayor, $radioMenor */
    echo "Escriba el radio mayor de la corona: ";
    $radioMayor = trim(fgets(STDIN));
    echo "Escriba el radio menor de la corona: ";
    $radioMenor = trim(fgets(STDIN));
    $area = areaCorona($radioMayor, $radioMenor);
    echo "El área de la corona circular de radio mayor " . $radioMayor . " y radio menor " . $radioMenor . " es " . $area;
?>