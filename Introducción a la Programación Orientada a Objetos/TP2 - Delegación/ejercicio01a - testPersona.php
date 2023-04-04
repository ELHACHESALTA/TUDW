<?php

    include 'ejercicio01a - persona.php';   

    $persona1 = new Persona("Fede", "Hache", "Hombre", 19182833);

    echo $persona1 -> getNombre() . "\n";
    echo $persona1 -> getApellido() . "\n";
    echo $persona1 -> getTipo() . "\n";
    echo $persona1 -> getDni() . "\n";

    $persona1 -> setNombre("Giany");
    $persona1 -> setApellido("Ce");
    $persona1 -> setTipo("Mujer");
    $persona1 -> setDni("35948732");

    echo $persona1;

?>