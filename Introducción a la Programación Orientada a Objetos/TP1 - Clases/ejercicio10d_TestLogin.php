<?php
    include 'ejercicio10d_Login.php';

    $usuario1 = new Login("ELHACHE", 1234, "ABCD", 1111, 2222, 3333, 4444);

    if ($usuario1 -> validar(1234) == true) {
        echo "La contraseña ingresada es correcta. \n";
    } else {
        echo "La contraseña ingresada NO es correcta. \n";
    }

    if ($usuario1 -> cambiar(1234) == true) {
        echo "La contraseña coincide con la existente o alguna de las últimas 4 usadas. \n";
    } else {
        echo "Se ha modificado la contraseña correctamente. \n";
    }

    if ($usuario1 -> cambiar(4321) == true) {
        echo "La contraseña coincide con la existente o alguna de las últimas 4 usadas. \n";
    } else {
        echo "Se ha modificado la contraseña correctamente. \n";
    }
    
    if ($usuario1 -> validar(1234) == true) {
        echo "La contraseña ingresada es correcta. \n";
    } else {
        echo "La contraseña ingresada NO es correcta. \n";
    }

    echo "\n";

    echo $usuario1 -> getContrasenia() . "\n";
    echo $usuario1 -> getContrasenia1() . "\n";
    echo $usuario1 -> getContrasenia2() . "\n";
    echo $usuario1 -> getContrasenia3() . "\n";
    echo $usuario1 -> getContrasenia4() . "\n";

    $usuario2 = new Login("ELHACHE", 9999, "ZZZZ", 8888, 7777, 6666, 5555);
    
    echo "\n";

    echo $usuario1 -> recordar() . "\n";
    echo $usuario2 -> recordar() . "\n";

    echo $usuario1 . "\n";
    echo $usuario2 . "\n";

?>