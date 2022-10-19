<?php
    /* PROGRAMA Principal */
    /* Muestra diferentes resultados a partir de los empleados ingresados */
    /* string $respuesta, $nombre, $puesto, $nombreMenorEdad */
    /* int $edad, $menorEdad, $cantEmpleados, $cantProfesionales, $porcentajeP, $cantTecnicos, $sumaEdadesT, $promedioEdadT */
    echo "Desea ingresar un empleado? (s/n): ";
    $respuesta = trim(fgets(STDIN));
    $menorEdad = 1000;
    $cantEmpleados = 0;
    $cantProfesionales = 0;
    $cantTecnicos = 0;
    $sumaEdadesT = 0;
    if ($respuesta == "s") {
        while ($respuesta == "s") {
            echo "Ingrese el nombre: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese la edad: ";
            $edad = trim(fgets(STDIN));
            echo "Ingrese el puesto (a, t, p): ";
            $puesto = trim(fgets(STDIN));
            if ($edad < $menorEdad) {
                $menorEdad = $edad;
                $nombreMenorEdad = $nombre;
            }
            $cantEmpleados = $cantEmpleados + 1;
            if ($puesto == "p") {
                $cantProfesionales = $cantProfesionales + 1;
            }
            if ($puesto == "t") {
                $cantTecnicos = $cantTecnicos + 1;
                $sumaEdadesT = $sumaEdadesT + $edad;
            }
            echo "Desea ingresar otro empleado? (s/n): ";
            $respuesta = trim(fgets(STDIN));
        }
        echo $nombreMenorEdad . " es el empleado de menor edad." . "\n";
        $porcentajeP = (int)(($cantProfesionales / $cantEmpleados) * 100);
        echo "El porcentaje de profesionales es: " . $porcentajeP . "%." . "\n";
        $promedioEdadT = (int)($sumaEdadesT / $cantTecnicos);
        echo "El promedio de edad de los tecnicos es de: " . $promedioEdadT . ".\n";
    } else {
        echo "Error, no se ingresaron datos.";
    }
?>