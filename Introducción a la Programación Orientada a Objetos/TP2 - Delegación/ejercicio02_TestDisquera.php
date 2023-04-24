<?php
    include_once("ejercicio02_Disquera.php");
    include_once("ejercicio01a_Persona.php");

    $persona1 = new Persona("Fede", "Hache", "Hombre", 19182833);
    $persona2 = new Persona("Giany", "Ce", "Mujer", 35192873);

    $disquera1 = new Disquera("8:30", "18:30", "abierto", "Santa Fe 132", $persona1);

    echo $disquera1 -> getHoraDesde() . "\n";
    echo $disquera1 -> getHoraHasta() . "\n";
    echo $disquera1 -> getEstado() . "\n";
    echo $disquera1 -> getDireccion() . "\n";
    echo $disquera1 -> getDuenio() . "\n";

    $disquera1 -> setHoraDesde("7:30");
    $disquera1 -> setHoraHasta("19:30");
    $disquera1 -> setEstado("cerrado");
    $disquera1 -> setDireccion("San Juan 312");
    $disquera1 -> setDuenio($persona2);

    echo $disquera1 . "\n";

    $disquera1 -> abrirDisquera(8, 0);
    $disquera1 -> cerrarDisquera(8, 0);

    echo $disquera1 . "\n";

?>