<?php
    include 'ejercicio15_Teatro.php';

    $funciones[0] = ["nombre" => "Los locos adams", "precio" => 150];
    $funciones[1] = ["nombre" => "Dragon ball", "precio" => 200];
    $funciones[2] = ["nombre" => "El circo de André", "precio" => 50];
    $funciones[3] = ["nombre" => "Messi y la escaloneta", "precio" => 1500];

    $teatro1 = new Teatro("Teatro Español", "Buenos Aires 332", $funciones);

    echo $teatro1 . "\n";

    $funcionesNuevo[0] = ["nombre" => "Los padrinos magicos", "precio" => 10];
    $funcionesNuevo[1] = ["nombre" => "Power rangers", "precio" => 20];
    $funcionesNuevo[2] = ["nombre" => "Dave el bárbaro", "precio" => 30];
    $funcionesNuevo[3] = ["nombre" => "Magic kids", "precio" => 40];

    $teatro1 -> setFunciones($funcionesNuevo);

    echo $teatro1 . "\n";

?>