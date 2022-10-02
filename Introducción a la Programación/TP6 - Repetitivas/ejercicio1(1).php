<?php
	/* PROGRAMA Principal */
	/* Muestra en pantalla los números pares menores o iguales al número ingresado */
    /* int $numero */
    echo "Ingrese un número: ";
	$numero = trim(fgets(STDIN));
	if ($numero % 2 <> 0) {
		$numero = $numero - 1;
	}
	while (0 < $numero) {
		echo $numero . "\n";
		$numero = $numero - 2;
	}
	echo "FIN";
?>