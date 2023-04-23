<?php
    include 'ejercicio13_Cafetera.php';

    $cafetera1 = new Cafetera(100, 0);

    $cafetera1 -> llenarCafetera();

    echo $cafetera1 . "\n";

    $comprobacion = $cafetera1 -> servirTaza(25);
    if ($comprobacion == 1) {
        echo "\n" . "Se sirvió la taza de café correctamente.";
    } elseif ($comprobacion == -1) {
        echo "\n" . "No se llego a llenar la ultima taza con suficiente café. Recargue la cafetera.";
    } elseif ($comprobacion == 0) {
        echo "\n" . "No queda más café para llenar otra taza. Recargue la cafetera.";
    }
    $comprobacion = $cafetera1 -> servirTaza(25);
    if ($comprobacion == 1) {
        echo "\n" . "Se sirvió la taza de café correctamente.";
    } elseif ($comprobacion == -1) {
        echo "\n" . "No se llego a llenar la ultima taza con suficiente café. Recargue la cafetera.";
    } elseif ($comprobacion == 0) {
        echo "\n" . "No queda más café para llenar otra taza. Recargue la cafetera.";
    }
    $comprobacion = $cafetera1 -> servirTaza(25);
    if ($comprobacion == 1) {
        echo "\n" . "Se sirvió la taza de café correctamente.";
    } elseif ($comprobacion == -1) {
        echo "\n" . "No se llego a llenar la ultima taza con suficiente café. Recargue la cafetera.";
    } elseif ($comprobacion == 0) {
        echo "\n" . "No queda más café para llenar otra taza. Recargue la cafetera.";
    }
    $comprobacion = $cafetera1 -> servirTaza(25);
    if ($comprobacion == 1) {
        echo "\n" . "Se sirvió la taza de café correctamente.";
    } elseif ($comprobacion == -1) {
        echo "\n" . "No se llego a llenar la ultima taza con suficiente café. Recargue la cafetera.";
    } elseif ($comprobacion == 0) {
        echo "\n" . "No queda más café para llenar otra taza. Recargue la cafetera.";
    }
    $comprobacion = $cafetera1 -> servirTaza(25);
    if ($comprobacion == 1) {
        echo "\n" . "Se sirvió la taza de café correctamente.";
    } elseif ($comprobacion == -1) {
        echo "\n" . "No se llego a llenar la ultima taza con suficiente café. Recargue la cafetera.";
    } elseif ($comprobacion == 0) {
        echo "\n" . "No queda más café para llenar otra taza. Recargue la cafetera.";
    }

    echo  "\n";

    echo $cafetera1 . "\n";

    $cafetera1 -> agregarCafe(25);
    
    echo $cafetera1 . "\n";

    $cafetera1 -> vaciarCafetera();

    echo $cafetera1 . "\n";

?>