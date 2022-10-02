<?php
	/* PROGRAMA Principal */
	/* Calcula y muestra el sueldo promedio de los sueldos ingresados */
	/* int $contador */
	/* float $sueldo, $suma, $promedio */
	/* string $respuesta */
	$contador = 0;
    $sueldo = 0;
	$suma = 0;
    echo "¿Desea ingresar un sueldo?(s/n): ";
	$respuesta = trim(fgets(STDIN));
	if ($respuesta == "s") {
        do {
		    echo "Sueldo: ";
		    $sueldo = trim(fgets(STDIN));
            $contador = $contador + 1;
		    $suma = $suma + $sueldo;
		    echo "¿Desea ingresar un sueldo?(s/n): ";
		    $respuesta = trim(fgets(STDIN));
		} while ($respuesta == "s");
		$promedio = $suma / $contador;
        echo "El promedio es: " . $promedio;
    } else {
	echo "No ha ingresado ningún sueldo.";
    }
?>