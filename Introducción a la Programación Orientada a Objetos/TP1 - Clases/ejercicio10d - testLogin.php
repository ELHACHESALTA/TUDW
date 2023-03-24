<?php
    include 'ejercicio10d - login.php';

    $usuario1 = new Login();

    echo $usuario1 -> validar() . "\n";

    $usuario1 -> cambiar();

    echo $usuario1 -> validar() . "\n";

    echo $usuario1 -> getContrasenia() . "\n";
    echo $usuario1 -> getContrasenia1() . "\n";
    echo $usuario1 -> getContrasenia2() . "\n";
    echo $usuario1 -> getContrasenia3() . "\n";
    echo $usuario1 -> getContrasenia4() . "\n";

    $usuario2 = new Login();

    echo $usuario1 -> recordar() . "\n";
    echo $usuario2 -> recordar() . "\n";

    echo $usuario1 -> __toString() . "\n";
    echo $usuario2 -> __toString() . "\n";

?>