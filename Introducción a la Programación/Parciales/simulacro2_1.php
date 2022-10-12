<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra diferentes datos a partir de la información de los candidatos ingresada */
    /* string $nombre, $nombreMayorPuntaje, $respuesta
    /* int $edad, $puntaje, $sumaEdades, $mayorPuntaje, $contadorA, $contadorB, $contadorC, $edadMayorPuntaje, $cantCandidatos */
    /* contadorA = candidatos con puntaje 91 a 100 */
    /* contadorB = candidatos con puntaje 81 a 90 */
    /* contadorA = candidatos con puntaje 74 a 80 */
    /* float $promedio */
    $sumaEdades = 0;
    $mayorPuntaje = 0;
    $contadorA = 0;
    $contadorB = 0;
    $contadorC = 0;
    $cantCandidatos = 0;
    do {
        echo "Ingrese el nombre: ";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese la edad: ";
        $edad = trim(fgets(STDIN));
        echo "Ingrese el puntaje: ";
        $puntaje = trim(fgets(STDIN));
        $sumaEdades = $sumaEdades + $edad;
        $cantCandidatos = $cantCandidatos + 1;
        if ($puntaje > $mayorPuntaje) {
            $mayorPuntaje = $puntaje;
            $nombreMayorPuntaje = $nombre;
            $edadMayorPuntaje = $edad;
        }
        if ($puntaje >= 91 && $puntaje <= 100) {
            $contadorA = $contadorA + 1;
        } elseif ($puntaje >= 81 && $puntaje <= 90) {
            $contadorB = $contadorB + 1;
        } elseif ($puntaje >= 74 && $puntaje <= 80) {
            $contadorC = $contadorC + 1;
        }
        echo "Desea ingresar otro candidato? (s/n): ";
        $respuesta = trim(fgets(STDIN));
    } while ($respuesta == "s");
    $promedio = $sumaEdades / $cantCandidatos;
    echo "1) El promedio de edad es: " . $promedio . "." . "\n";
    echo "2) El mayor puntaje es de: " . $nombreMayorPuntaje . " de " . $edadMayorPuntaje . " años." . "\n";
    echo "3) " . $contadorA . " candidatos aprobaron con un puntaje entre 91 y 100 puntos." . "\n";
    echo "4) " . $contadorB . " candidatos aprobaron con un puntaje entre 81 y 90 puntos." . "\n";
    echo "5) " . $contadorC . " candidatos aprobaron con un puntaje entre 74 y 80 puntos." . "\n";
?>