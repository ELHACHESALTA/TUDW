<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el resultado de diversas operaciones a partir de los datos ingresados */
    /* string $nombre, $JefeConMayoria */
    /* int $cantHab, $cantNinios, $cantEncuestas, $casasConMenor, $totalHabitantes, $mayoriaMenores, $i */
    /* float $promedio */
    echo "Cuántas encuestas desea ingresar: ";
    $cantEncuestas = trim(fgets(STDIN));
    $casasConMenor = 0;
    $totalHabitantes = 0;
    $mayoriaMenores = -1;
    for ($i = 1; $i <= $cantEncuestas; $i++) {
        echo "Ingrese el nombre del jefe del hogar " . $i . ": ";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese la cantidad de habitantes de la vivienda " . $i . ": ";
        $cantHab = trim(fgets(STDIN));
        echo "Ingrese la cantidad de niños que habitan la vivienda " . $i . ": ";
        $cantNinios = trim(fgets(STDIN));
        if ($cantNinios > 0) {
            $casasConMenor = $casasConMenor + 1;
        }
        $totalHabitantes = $totalHabitantes + $cantHab;
        if ($cantNinios > $mayoriaMenores) {
            $mayoriaMenores = $cantNinios;
            $JefeConMayoria = $nombre;
        }
    }
    if ($cantEncuestas > 0) {
        $promedio = $totalHabitantes / $cantEncuestas;
        echo "Se formularon encuestas en " . $cantEncuestas . " viviendas" . "\n";
        echo "De las cuales en " . $casasConMenor . " habitan menores de edad" . "\n";
        echo "Y donde " . $JefeConMayoria . " es el jefe del hogar con mayor cantidad de menores" . "\n";
        echo "Hay un promedio de " . $promedio . " habitantes por vivienda" . "\n";
    } else {
        echo "Si no se ingresa ninguna encuesta, no se pueden realizar los cálculos" . "\n";
    }
?>