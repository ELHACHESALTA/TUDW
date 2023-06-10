<?php
    /* PROGRAMA Saludar */
    /* Muestra un saludo para el alumno indicado */
    /* STRING $nombre */
    echo "Ingrese el nombre del alumno: ";
    $nombre = trim(fgets(STDIN));
    echo "Bienvenido/a a la programación: " . $nombre;
?>