<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la ganancia de un empleado */
    /* STRING $nombre, FLOAT $horasTrab, $valorHora, $ganancia */
    echo "Ingrese empleado: ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese las horas trabajadas: ";
    $horasTrab = trim(fgets(STDIN));
    echo "Ingrese el valor de la hora: ";
    $valorHora = trim(fgets(STDIN));
    $ganancia = $horasTrab * $valorHora;
    echo $nombre . " obtuvo $" . $ganancia;
?>