<?php

    include 'ejercicio05 - lectura.php';
    include 'ejercicio03 - libro.php';
    include 'ejercicio01a - persona.php';

    //Creación de objetos de clase Persona (autores)

    $autor1 = new Persona("J. K.", "Rowling", "Mujer", 19182833);
    $autor2 = new Persona("Miguel", "De Cervantes", "Hombre", 35192873);

    //Datos para crear objetos de la clase Libro

    $isbn1 = 9788478884452;
    $titulo1 = "Harry Potter y la piedra filosofal";
    $anioEdicion1 = 1998;
    $editorial1 = "Salamandra";
    $cantPag1 = 256;
    $sinopsis1 = "La piedra filosofal y Harry";

    $isbn2 = 9788478884957;
    $titulo2 = "Harry Potter y la cámara secreta";
    $anioEdicion2 = 1999;
    $editorial2 = "Salamandra";
    $cantPag2 = 288;
    $sinopsis2 = "La camara secreta y Harry";

    $isbn3 = 9788478885190;
    $titulo3 = "Harry Potter y el prisionero de Azkaban";
    $anioEdicion3 = 2000;
    $editorial3 = "Salamandra";
    $cantPag3 = 360;
    $sinopsis3 = "El prisionero de Azkaban y Harry";

    $isbn4 = 9788478886456;
    $titulo4 = "Harry Potter y el caliz de fuego";
    $anioEdicion4 = 2001;
    $editorial4 = "Salamandra";
    $cantPag4 = 240;
    $sinopsis4 = "El caliz de fuego y Harry";

    $isbn5 = 9788478887446;
    $titulo5 = "Harry Potter y el orden del fenix";
    $anioEdicion5 = 2004;
    $editorial5 = "Salamandra";
    $cantPag5 = 894;
    $sinopsis5 = "El orden del fenix y Harry";

    $isbn6 = 9788478889921;
    $titulo6 = "Harry Potter y el misterio del príncipe";
    $anioEdicion6 = 2006;
    $editorial6 = "Salamandra";
    $cantPag6 = 576;
    $sinopsis6 = "El misterio del príncipe y Harry";

    $isbn7 = 9788498381405;
    $titulo7 = "Harry Potter y las reliquias de la muerte";
    $anioEdicion7 = 2006;
    $editorial7 = "Salamandra";
    $cantPag7 = 640;
    $sinopsis7 = "Las reliquias de la muerte y Harry";

    $isbn8 = 9788437633770;
    $titulo8 = "Don quijote de la mancha";
    $anioEdicion8 = 2015;
    $editorial8 = "Cátedras";
    $cantPag8 = 832;
    $sinopsis8 = "La mancha de don Quijote";

    //Creación de objetos de la clase Libro

    $libro1 = new Libro($isbn1, $titulo1, $anioEdicion1, $editorial1, $cantPag1, $sinopsis1, $autor1);
    $libro2 = new Libro($isbn2, $titulo2, $anioEdicion2, $editorial2, $cantPag2, $sinopsis2, $autor1);
    $libro3 = new Libro($isbn3, $titulo3, $anioEdicion3, $editorial3, $cantPag3, $sinopsis3, $autor1);
    $libro4 = new Libro($isbn4, $titulo4, $anioEdicion4, $editorial4, $cantPag4, $sinopsis4, $autor1);
    $libro5 = new Libro($isbn5, $titulo5, $anioEdicion5, $editorial5, $cantPag5, $sinopsis5, $autor1);
    $libro6 = new Libro($isbn6, $titulo6, $anioEdicion6, $editorial6, $cantPag6, $sinopsis6, $autor1);
    $libro7 = new Libro($isbn7, $titulo7, $anioEdicion7, $editorial7, $cantPag7, $sinopsis7, $autor1);
    $libro8 = new Libro($isbn8, $titulo8, $anioEdicion8, $editorial8, $cantPag8, $sinopsis8, $autor2);

    //Creación de objetos de la clase Lectura
 
    $lectura1 = new Lectura ($libro1, 1);

    //Funciones

    function leerLibroNuevo($libroLLN, $lecturaLLN) {
        if ($lecturaLLN -> libroLeido($libroLLN -> getTitulo()) == false) {
            $arregloLibros = $lecturaLLN -> getLibrosLeidos();
            array_push($arregloLibros, $libroLLN);
            $lecturaLLN -> setLibrosLeidos($arregloLibros);
            $lecturaLLN -> setLibro($libroLLN);
        } else {
            echo " - El libro ingresado ya ha sido leido, ingrese otro. \n";
        }
    }

    //Test

    echo "\n" . "Se ingresa un libro repetido: \n";
    leerLibroNuevo($libro1, $lectura1);

    echo "\n" . "Se ingresan 7 libros a lectura. \n";
    leerLibroNuevo($libro2, $lectura1);
    leerLibroNuevo($libro3, $lectura1);
    leerLibroNuevo($libro4, $lectura1);
    leerLibroNuevo($libro5, $lectura1);
    leerLibroNuevo($libro6, $lectura1);
    leerLibroNuevo($libro7, $lectura1);
    leerLibroNuevo($libro8, $lectura1);

    echo "\n" . "Sinopsis del libro: Harry Potter y la piedra filosofal: \n";
    echo " - " . $lectura1 -> darSinopsis("Harry Potter y la piedra filosofal") . "\n";

    echo "\n" . "Los libros leidos con edición en el año 2006 son: \n";
    echo $lectura1 -> leidosAnioEdicion(2006);

    echo "\n" . "Los libros leidos del autor J. K. Rowling son: \n";
    echo $lectura1 -> darLibrosPorAutor("J. K. Rowling");

    echo "\n" . "Los libros leidos del autor Miguel De Cervantes son: \n";
    echo $lectura1 -> darLibrosPorAutor("Miguel De Cervantes");

?>