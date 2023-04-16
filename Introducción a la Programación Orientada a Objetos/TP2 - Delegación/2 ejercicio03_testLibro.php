<?php
    include 'ejercicio03 - libro.php';
    include 'ejercicio01a - persona.php';

    $persona1 = new Persona("J. K.", "Rowling", "Mujer", 19182833);
    $persona2 = new Persona("Miguel", "De Cervantes", "Hombre", 35192873);

    $isbn1 = 9788478884452;
    $titulo1 = "Harry Potter y la piedra filosofal";
    $anioEdicion1 = 1998;
    $editorial1 = "Salamandra";
    $cantPag1 = 256;
    $sinopsis1 = "Harry es húerfano de padre y madre y vive con sus tíos odiosos y su primo insoportable y malcriado. Por suerte Harry puede ir a un colegio especial de magia. Ágil y divertida, esta novela entretiene a grandes y chicos.";

    $isbn2 = 9788437633770;
    $titulo2 = "Don quijote de la mancha";
    $anioEdicion2 = 2015;
    $editorial2 = "Cátedras";
    $cantPag2 = 832;
    $sinopsis2 = "El ingenioso hidalgo don Quijote de la Mancha narra las aventuras de Alonso Quijano, un hidalgo pobre que de tanto leer novelas de caballería acaba enloqueciendo y creyendo ser un caballero andante, nombrándose a sí mismo como don Quijote de la Mancha";

    $libro1 = new Libro($isbn1, $titulo1, $anioEdicion1, $editorial1, $cantPag1, $sinopsis1, $persona1);
    $libro2 = new Libro($isbn2, $titulo2, $anioEdicion2, $editorial2, $cantPag2, $sinopsis2, $persona2);

    echo $libro1 . "\n";
    echo $libro2 . "\n";

    if ($libro1 -> perteneceEditorial("Cátedras") == true) {
        echo "El libro 1 pertenece a la editorial Cátedras. \n";
    } else {
        echo "El libro 1 no pertenece a la editorial Cátedras. \n";
    }

    if ($libro2 -> perteneceEditorial("Cátedras") == true) {
        echo "El libro 2 pertenece a la editorial Cátedras. \n";
    } else {
        echo "El libro 2 no pertenece a la editorial Cátedras. \n";
    }

    echo "La antigüedad del Libro 1 es de " . $libro1 -> aniosDesdeEdicion() . " años. \n";
    echo "La antigüedad del Libro 2 es de " . $libro2 -> aniosDesdeEdicion() . " años. \n";

?>