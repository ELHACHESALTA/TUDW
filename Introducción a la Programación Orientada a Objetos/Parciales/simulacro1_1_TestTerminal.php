<?php

    include ('simulacro1_1_Responsable.php');
    include ('simulacro1_1_Viaje.php');
    include ('simulacro1_1_Empresa.php');
    include ('simulacro1_1_Terminal.php');

    // A cada viaje le incorporo un responsable distinto.
    // 2 - A cada empresa le incorporo 2 instancias de la clase viaje.
    $responsable1 = new Responsable("Fede", "Hache", 12543654, "25 Mayo 293", "fhache@gmail.com", 2993456783);
    $viaje1 = new Viaje("Salta", "11:00", "21:00", 1, 1100, "01/01/2023", 11, 3, $responsable1);
    $responsable2 = new Responsable("Giany", "Cen", 23134566, "Tucuman 955", "gcen@gmail.com", 2993456789);
    $viaje2 = new Viaje("Tucuman", "12:00", "22:00", 2, 1200, "02/01/2023", 12, 3, $responsable2);

    $colViajesFlechaBus  = [$viaje1, $viaje2];
    $flechaBus = new Empresa("001", "Flecha Bus", $colViajesFlechaBus);

    $responsable3 = new Responsable("Andre", "Aguero", 12834344, "Richieri 34", "aaguero@gmail.com", 2991234567);
    $viaje3 = new Viaje("Neuquen", "13:00", "23:00", 3, 1300, "03/01/2023", 13, 3, $responsable3);
    $responsable4 = new Responsable("Jazmin", "Luore", 34934333, "Cipolletti 2412", "jloure@gmail.com", 2999876543);
    $viaje4 = new Viaje("Cipolletti", "14:00", "24:00", 4, 1400, "04/01/2023", 14, 3, $responsable4);

    $colViajesViaBariloche  = [$viaje3, $viaje4];
    $viaBariloche = new Empresa("002", "Via Bariloche", $colViajesViaBariloche);

    // 1 - Creo una colección con un mínimo de 2 empresas.
    $colEmpresasTest = ["0" => $flechaBus, "1" => $viaBariloche];

    // 3 - Creo un objeto Terminal con la colección de empresas creadas en 1.
    $terminal = new Terminal ("Terminal Retiro", "Antartida Argentina y Calle 10", $colEmpresasTest);

    // 4 - Invoco y visualizo el resultado del método ventaAutomatica con cantidad de asientos 3 y como destino alguno de los destinos de viaje creados en 2.
    echo "\n" . "==== VENDO 3 PASAJES DEL VIAJE 4 ====" . "\n";
    $terminal -> ventaAutomatica(3, "04/01/2023", "Cipolletti", $viaBariloche);
    echo $terminal . "\n";

    // 5 - Invoco y visualizo el resultado del método empresaMayorRecaudacion.
    echo "\n" . "===== EMPRESA MAYOR RECAUDACION =====" . "\n";
    echo $terminal -> empresaMayorRecaudacion() . "\n";

    // 6 - Invoco y visualizo el resultado del método responsableViaje correspondiente a uno de los números de viajes creados en 2.
    echo "\n" . "======== RESPONSABLE VIAJE 1 ========" . "\n";
    echo $terminal -> getColEmpresas()[0] -> getColViajes()[0] -> getObjResponsable();

?>