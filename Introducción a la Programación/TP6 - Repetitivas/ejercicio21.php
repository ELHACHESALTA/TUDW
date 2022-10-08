<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el resultado de diversas operaciones a partir de los datos de los alumnos ingresados */
    /* int $anioNac, $cantAlumnos, $mayorEdad, $menorEdad, $edad */
    /* float $altura, $peso, $sumaPesos, $mayorAltura, $menorPeso, $promedio */
    /* string $respuesta */
    $cantAlumnos = 0;
    $sumaPesos = 0;
    $mayorEdad = -1; /* inicialización variable selectora Mayor */
    $menorEdad = 1000; /* inicialización variable selectora Menor */
    echo "¿Desea ingresar un alumno? (s/n): ";
    $respuesta = trim(fgets(STDIN));
    while ($respuesta == "s") {
        echo "Ingrese el año de nacimiento del alumno: ";
        $anioNac = trim(fgets(STDIN));
        echo "Ingrese la altura del alumno: ";
        $altura = trim(fgets(STDIN));
        echo "Ingrese el peso del alumno: ";
        $peso = trim(fgets(STDIN));
        $cantAlumnos = $cantAlumnos + 1;
        $sumaPesos = $sumaPesos + $peso;
        $edad = 2022 - $anioNac;
        if ($edad > $mayorEdad) {
            $mayorEdad = $edad;
            $mayorAltura = $altura;
        }
        if ($edad < $menorEdad) {
            $menorEdad = $edad;
            $menorPeso = $peso;
        }
        echo "¿Desea ingresar otro alumno? (s/n): ";
        $respuesta = trim(fgets(STDIN));
    }
    if ($cantAlumnos > 0) {
        $promedio = $sumaPesos / $cantAlumnos;
        echo "El promedio de pesos es: " . $promedio . "\n";
        echo "El alumno de más edad tiene " . $mayorEdad . " años y mide " . $mayorAltura . "\n";
        echo "El alumno de menos edad tiene " . $menorEdad . " años y pesa " . $menorPeso . "\n";
    } else {
        echo "No se ingresaron alumnos, no se pueden realizar los cálculos" . "\n";
    }
?>