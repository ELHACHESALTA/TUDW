<?php
	/* PROGRAMA Principal */
    /* Calcula y muestra la suma de todos los números ingresados hasta que se ingrese un cero */
	/* int $numero, $suma */
	$suma = 0;
	do {
		echo "Ingrese un número a sumar, sino ingrese 0: ";
        $numero = trim(fgets(STDIN));
		$suma = $suma + $numero;
	} while ($numero <> 0);
	echo "La suma de los números ingresados es: " . $suma;
?>