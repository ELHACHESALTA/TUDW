<?php
    include_once ("ejercicio16_Libro.php");

    $isbn1 = 9788478884452; $titulo1 = "Harry Potter y la piedra filosofal"; $anioEdicion1 = 1998; $editorial1 = "Salamandra"; $autor1 = "J. K. Rowling";
    $isbn2 = 9788478884957; $titulo2 = "Harry Potter y la cámara secreta"; $anioEdicion2 = 1999; $editorial2 = "Salamandra"; $autor2 = "J. K. Rowling";
    $isbn3 = 9788478885190; $titulo3 = "Harry Potter y el prisionero de Azkaban"; $anioEdicion3 = 2000; $editorial3 = "Salamandra"; $autor3 = "J. K. Rowling";
    $isbn4 = 9788478886456; $titulo4 = "Harry Potter y el caliz de fuego"; $anioEdicion4 = 2001; $editorial4 = "Salamandra"; $autor4 = "J. K. Rowling";
    $isbn5 = 9788478887446; $titulo5 = "Harry Potter y el orden del fenix"; $anioEdicion5 = 2004; $editorial5 = "Salamandra"; $autor5 = "J. K. Rowling";
    $isbn6 = 9788478889921; $titulo6 = "Harry Potter y el misterio del príncipe"; $anioEdicion6 = 2006; $editorial6 = "Salamandra"; $autor6 = "J. K. Rowling";
    $isbn7 = 9788498381405; $titulo7 = "Harry Potter y las reliquias de la muerte"; $anioEdicion7 = 2006; $editorial7 = "Salamandra"; $autor7 = "J. K. Rowling";
    $isbn8 = 9788437633770; $titulo8 = "Don quijote de la mancha"; $anioEdicion8 = 2015; $editorial8 = "Cátedras"; $autor8 = "Miguel de Cervantes";

    $libro1 = new Libro($isbn1, $titulo1, $anioEdicion1, $editorial1, $autor1);
    $libro2 = new Libro($isbn2, $titulo2, $anioEdicion2, $editorial2, $autor2);
    $libro3 = new Libro($isbn3, $titulo3, $anioEdicion3, $editorial3, $autor3);
    $libro4 = new Libro($isbn4, $titulo4, $anioEdicion4, $editorial4, $autor4);
    $libro5 = new Libro($isbn5, $titulo5, $anioEdicion5, $editorial5, $autor5);
    $libro6 = new Libro($isbn6, $titulo6, $anioEdicion6, $editorial6, $autor6);
    $libro7 = new Libro($isbn7, $titulo7, $anioEdicion7, $editorial7, $autor7);
    $libro8 = new Libro($isbn8, $titulo8, $anioEdicion8, $editorial8, $autor8);

    $arregloLibros1[0] = ["isbn" => $isbn1, "titulo" => $titulo1, "anioEdicion" => $anioEdicion1, "editorial" => $editorial1, "autor" => $autor1];
    $arregloLibros1[1] = ["isbn" => $isbn2, "titulo" => $titulo2, "anioEdicion" => $anioEdicion2, "editorial" => $editorial2, "autor" => $autor2];
    $arregloLibros1[2] = ["isbn" => $isbn3, "titulo" => $titulo3, "anioEdicion" => $anioEdicion3, "editorial" => $editorial3, "autor" => $autor3];
    $arregloLibros1[3] = ["isbn" => $isbn4, "titulo" => $titulo4, "anioEdicion" => $anioEdicion4, "editorial" => $editorial4, "autor" => $autor4];
    $arregloLibros1[4] = ["isbn" => $isbn5, "titulo" => $titulo5, "anioEdicion" => $anioEdicion5, "editorial" => $editorial5, "autor" => $autor5];
    $arregloLibros1[5] = ["isbn" => $isbn6, "titulo" => $titulo6, "anioEdicion" => $anioEdicion6, "editorial" => $editorial6, "autor" => $autor6];
    $arregloLibros1[6] = ["isbn" => $isbn7, "titulo" => $titulo7, "anioEdicion" => $anioEdicion7, "editorial" => $editorial7, "autor" => $autor7];

    function iguales($pLibro, $pArreglo) {
        for ($i = 0; $i < count($pArreglo); $i++) {
            if ($pLibro -> getTitulo() == $pArreglo[$i]["titulo"]) {
                $comprobacion = true;
            } else {
                $comprobacion = false;
            }
        }
        if ($comprobacion == true) {
            echo "El libro en encuenta en la colección. \n";
        } else {
            echo "El libro no se encuentra en la colección. \n";
        }
    }

    iguales($libro8, $arregloLibros1);

    echo "\n";

    $arregloLibros2[0] = ["isbn" => $isbn1, "titulo" => $titulo1, "anioEdicion" => $anioEdicion1, "editorial" => $editorial1, "autor" => $autor1];
    $arregloLibros2[1] = ["isbn" => $isbn2, "titulo" => $titulo2, "anioEdicion" => $anioEdicion2, "editorial" => $editorial2, "autor" => $autor2];
    $arregloLibros2[2] = ["isbn" => $isbn3, "titulo" => $titulo3, "anioEdicion" => $anioEdicion3, "editorial" => $editorial3, "autor" => $autor3];
    $arregloLibros2[3] = ["isbn" => $isbn4, "titulo" => $titulo4, "anioEdicion" => $anioEdicion4, "editorial" => $editorial4, "autor" => $autor4];
    $arregloLibros2[4] = ["isbn" => $isbn5, "titulo" => $titulo5, "anioEdicion" => $anioEdicion5, "editorial" => $editorial5, "autor" => $autor5];
    $arregloLibros2[5] = ["isbn" => $isbn6, "titulo" => $titulo6, "anioEdicion" => $anioEdicion6, "editorial" => $editorial6, "autor" => $autor6];
    $arregloLibros2[6] = ["isbn" => $isbn8, "titulo" => $titulo8, "anioEdicion" => $anioEdicion8, "editorial" => $editorial8, "autor" => $autor8];

    function libroDeEditoriales($arregloLibros, $pEditorial) {
        $n = 0;
        for ($i = 0; $i < count($arregloLibros); $i++) {
            if ($arregloLibros[$i]["editorial"] == $pEditorial) {
                $arregloEditorial[$n]["isbn"] = $arregloLibros[$i]["isbn"];
                $arregloEditorial[$n]["titulo"] = $arregloLibros[$i]["titulo"];
                $arregloEditorial[$n]["anioEdicion"] = $arregloLibros[$i]["anioEdicion"];
                $arregloEditorial[$n]["editorial"] = $arregloLibros[$i]["editorial"];
                $arregloEditorial[$n]["autor"] = $arregloLibros[$i]["autor"];
                $n++;
            }
        }
        return $arregloEditorial;
    }

    print_r (libroDeEditoriales($arregloLibros2, "Cátedras"));

    echo $libro1 . "\n";

?>