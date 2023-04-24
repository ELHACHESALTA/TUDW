<?php

    include_once ("ejercicio04_Lectura.php");
    include_once ("ejercicio03_Libro.php");
    include_once ("ejercicio01a_Persona.php");

    $persona1 = new Persona("J. K.", "Rowling", "Mujer", 19182833);

    $isbn1 = 9788478884452;
    $titulo1 = "Harry Potter y la piedra filosofal";
    $anioEdicion1 = 1998;
    $editorial1 = "Salamandra";
    $cantPag1 = 256;
    $sinopsis1 = "La piedra filosofal y Harry";

    $libro1 = new Libro($isbn1, $titulo1, $anioEdicion1, $editorial1, $cantPag1, $sinopsis1, $persona1);
 
    $lectura1 = new Lectura ($libro1, 200);

    echo $lectura1 . "\n";

    $comprobacion = $lectura1 -> siguientePagina();
    if ($comprobacion == true) {
        echo "\n" . "Se avanzó a la siguiente página correctamente. \n";
    } else {
        echo "\n" . "Ha llegado a la última página del libro, no se puede avanzar más. \n";
    }

    echo $lectura1 . "\n";

    $comprobacion = $lectura1 -> irPagina(256);
    if ($comprobacion == true) {
        echo "\n" . "Se avanzo a la pagina seleccionada correctamente. \n";
    } else {
        echo "\n" . "Ha ingresado un número de página no válido para el libro. \n";
    }

    $comprobacion = $lectura1 -> siguientePagina();
    if ($comprobacion == true) {
        echo "\n" . "Se avanzó a la siguiente página correctamente. \n";
    } else {
        echo "\n" . "Ha llegado a la última página del libro, no se puede avanzar más. \n";
    }

    $comprobacion = $lectura1 -> recrocederPagina();
    if ($comprobacion == true) {
        echo "\n" . "Se retrocedió a la anterior página correctamente. \n";
    } else {
        echo "\n" . "Está leyendo la primera página del libro, no puede retroceder más. \n";
    }

    echo $lectura1 . "\n";

    $comprobacion = $lectura1 -> irPagina(1);
    if ($comprobacion == true) {
        echo "\n" . "Se avanzo a la pagina seleccionada correctamente. \n";
    } else {
        echo "\n" . "Ha ingresado un número de página no válido para el libro. \n";
    }

    $comprobacion = $lectura1 -> recrocederPagina();
    if ($comprobacion == true) {
        echo "\n" . "Se retrocedió a la anterior página correctamente. \n";
    } else {
        echo "\n" . "Está leyendo la primera página del libro, no puede retroceder más. \n";
    }

?>