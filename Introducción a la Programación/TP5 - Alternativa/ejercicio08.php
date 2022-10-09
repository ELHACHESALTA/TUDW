<?php
    /* PROGRAMA Principal */
    /* Determina a partir de tres personas quienes son contemporáneos */
    /* string $nombreA, $nombreB, $nombreC */
    /* int $edadA, $edadB, $edadC */
    echo "Ingrese el nombre de la primer persona: ";
    $nombreA = trim(fgets(STDIN));
    echo "Ingrese la edad de la primer persona: ";
    $edadA = trim(fgets(STDIN));
    echo "Ingrese el nombre de la segunda persona: ";
    $nombreB = trim(fgets(STDIN));
    echo "Ingrese la edad de la segunda persona: ";
    $edadB = trim(fgets(STDIN));
    echo "Ingrese el nombre de la tercer persona: ";
    $nombreC = trim(fgets(STDIN));
    echo "Ingrese la edad de la tercer persona: ";
    $edadC = trim(fgets(STDIN));
    if ($edadA == $edadB && $edadB == $edadC) {
        echo $nombreA . ", " . $nombreB . " y " . $nombreC . " son contemporáneos";
    } elseif ($edadA == $edadB) {
        echo $nombreA . " y " . $nombreB . " son contemporáneos";
    } elseif ($edadA == $edadC) {
        echo $nombreA . " y " . $nombreC . " son contemporáneos";
    } elseif ($edadB == $edadC) {
        echo $nombreB . " y " . $nombreC . " son contemporáneos";
    } else {
        echo "Ninguno es contemporáneo";
    }
?>