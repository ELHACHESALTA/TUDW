<?php
    include 'ejercicio13 - cafetera.php';

    $cafetera1 = new Cafetera();

    $cafetera1 -> llenarCafetera();

    echo $cafetera1 -> __toString() . "\n";

    $cafetera1 -> servirTaza(25);
    $cafetera1 -> servirTaza(25);
    $cafetera1 -> servirTaza(25);
    $cafetera1 -> servirTaza(25);
    $cafetera1 -> servirTaza(25);

    echo $cafetera1 -> __toString() . "\n";

    $cafetera1 -> agregarCafe(25);
    
    echo $cafetera1 -> __toString() . "\n";

    $cafetera1 -> vaciarCafetera();

    echo $cafetera1 -> __toString() . "\n";

?>