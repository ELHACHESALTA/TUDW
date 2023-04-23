<?php
    include 'ejercicio11_Cuadrado.php';

    $vertices[0] = ["x" => 1,"y" => 1];
    $vertices[1] = ["x" => 5,"y" => 1];
    $vertices[2] = ["x" => 1,"y" => 5];
    $vertices[3] = ["x" => 5,"y" => 5];

    $C = new Cuadrado($vertices);

    echo $C . "\n";

    echo "\n" . "El área del cuadrado es: ";
    echo $C -> area() . "\n";

    $punto = ["x" => 2, "y" => 2];

    $C -> desplazar($punto);

    echo $C . "\n";

    $C -> aumentarTamanio(2);

    echo $C . "\n";

?>