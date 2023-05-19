<?php

    include_once ("simulacro2_Responsable.php");
    include_once ("simulacro2_Viaje.php");
    include_once ("simulacro2_ViajeNacional.php");
    include_once ("simulacro2_ViajeInternacional.php");
    include_once ("simulacro2_Empresa.php");
    include_once ("simulacro2_Terminal.php");

    $responsable = new Responsable ("Fede", "Hache", "36111111", "Av Siempre Viva 123", "elhache@gmail.com", "+5493873123123");

    // Se crea una colección con dos empresas.

    $empresa1 = new Empresa (1, "Flecha Bus", []);
    $empresa2 = new Empresa (2, "Via Bariloche", []);

    // A cada empresa se le incorporan dos instancias de la clase ViajeNacionales y tres instancias de la clase ViajeInternacionales.

    $colObjViajesCarga = [];
    $nacional1 = new ViajeNacional ("Salta", "11:00", "12:00", 1, 100, "01/01/2023", 10, 10, $responsable);
    array_push($colObjViajesCarga, $nacional1);
    $nacional2 = new ViajeNacional ("Jujuy", "12:00", "01:00", 2, 200, "02/01/2023", 10, 10, $responsable);
    array_push($colObjViajesCarga, $nacional2);
    $internacional1 = new ViajeInternacional ("Brasil", "01:00", "02:00", 3, 300, "03/01/2023", 10, 10, $responsable, true);
    array_push($colObjViajesCarga, $internacional1);
    $internacional2 = new ViajeInternacional ("Miami", "02:00", "03:00", 4, 400, "04/01/2023", 10, 10, $responsable, true);
    array_push($colObjViajesCarga, $internacional2);
    $internacional3 = new ViajeInternacional ("Paris", "03:00", "04:00", 5, 500, "05/01/2023", 10, 10, $responsable, true);
    array_push($colObjViajesCarga, $internacional3);

    $empresa1 -> setColObjViajes($colObjViajesCarga);

    $colObjViajesCarga = [];
    $nacional1 = new ViajeNacional ("Salta", "11:00", "12:00", 6, 100000, "01/01/2023", 10, 10, $responsable);
    array_push($colObjViajesCarga, $nacional1);
    $nacional2 = new ViajeNacional ("Jujuy", "12:00", "01:00", 7, 10000, "02/01/2023", 10, 10, $responsable);
    array_push($colObjViajesCarga, $nacional2);
    $internacional1 = new ViajeInternacional ("Brasil", "01:00", "02:00", 8, 1000, "03/01/2023", 10, 10, $responsable, false);
    array_push($colObjViajesCarga, $internacional1);
    $internacional2 = new ViajeInternacional ("Miami", "02:00", "03:00", 9, 100, "04/01/2023", 10, 10, $responsable, false);
    array_push($colObjViajesCarga, $internacional2);
    $internacional3 = new ViajeInternacional ("Paris", "03:00", "04:00", 10, 10, "05/01/2023", 10, 10, $responsable, false);
    array_push($colObjViajesCarga, $internacional3);

    $empresa2 -> setColObjViajes($colObjViajesCarga);

    // Se crea un objeto Terminal con la colección de Empresas.

    $colObjEmpresasCarga = [];
    array_push($colObjEmpresasCarga, $empresa1);
    array_push($colObjEmpresasCarga, $empresa2);
    $terminal = new Terminal ("Terminal de Neuquén", "Solalique y Ruta 22", $colObjEmpresasCarga);

    // Se invoca y visualiza el resultado del método darViajeMenorValor() a partir de la instancia Terminal.

    print_r ($terminal -> darViajeMenorValor());

?>