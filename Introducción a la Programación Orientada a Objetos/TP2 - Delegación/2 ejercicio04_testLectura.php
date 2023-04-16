<?php

    include 'ejercicio04 - lectura.php';
    include 'ejercicio03 - libro.php';
    include 'ejercicio01a - persona.php';

    $persona1 = new Persona("J. K.", "Rowling", "Mujer", 19182833);

    $isbn1 = 9788478884452;
    $titulo1 = "Harry Potter y la piedra filosofal";
    $anioEdicion1 = 1998;
    $editorial1 = "Salamandra";
    $cantPag1 = 256;
    $sinopsis1 = "Harry es húerfano de padre y madre y vive con sus tíos odiosos y su primo insoportable y malcriado. Por suerte Harry puede ir a un colegio especial de magia. Ágil y divertida, esta novela entretiene a grandes y chicos.";

    $libro1 = new Libro($isbn1, $titulo1, $anioEdicion1, $editorial1, $cantPag1, $sinopsis1, $persona1);
 
    $lectura1 = new Lectura ($libro1, 200);

    echo $lectura1;

    $lectura1 -> siguientePagina();

    echo $lectura1;

    $lectura1 -> irPagina(256);

    $lectura1 -> siguientePagina();

    $lectura1 -> recrocederPagina();

    echo $lectura1;

    $lectura1 -> irPagina(1);

    $lectura1 -> recrocederPagina();

?>