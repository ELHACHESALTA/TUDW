<?php
    $arregloVinos [0] = [ "variedad" => "malbec"  , "cantBotellas" => "30", "anio" => "2019", "precioUnidad" => "3500"];
    $arregloVinos [1] = [ "variedad" => "cabernet", "cantBotellas" => "20", "anio" => "2020", "precioUnidad" => "1500"];
    $arregloVinos [2] = [ "variedad" => "merlot"  , "cantBotellas" => "30", "anio" => "2019", "precioUnidad" => "2000"];
    $arregloVinos [3] = [ "variedad" => "savignon", "cantBotellas" => "15", "anio" => "2021", "precioUnidad" => "1300"];
    $arregloVinos [4] = [ "variedad" => "merlot"  , "cantBotellas" => "22", "anio" => "2019", "precioUnidad" => "2700"];
    $arregloVinos [5] = [ "variedad" => "savignon", "cantBotellas" => "36", "anio" => "2022", "precioUnidad" => "1500"];
    $arregloVinos [6] = [ "variedad" => "merlot"  , "cantBotellas" => "9" , "anio" => "2020", "precioUnidad" => "1800"];
    $arregloVinos [7] = [ "variedad" => "cabernet", "cantBotellas" => "23", "anio" => "2021", "precioUnidad" => "1900"];
    $arregloVinos [8] = [ "variedad" => "malbec"  , "cantBotellas" => "12", "anio" => "2021", "precioUnidad" => "2000"];
    $arregloVinos [9] = [ "variedad" => "cabernet", "cantBotellas" => "11", "anio" => "2022", "precioUnidad" => "1600"];

    $tiposDeVinos = [];
    for ($i = 0; $i < count($arregloVinos); $i++) {
        if (!(in_array ($arregloVinos[$i]["variedad"], $tiposDeVinos))) {
            $tiposDeVinos[$i] = $arregloVinos[$i]["variedad"];
        }
    }
    //print_r($tiposDeVinos);
    sort($tiposDeVinos);
    //print_r($tiposDeVinos);

    $totalBotellas = 0;
    $sumaPrecios = 0;
    $contadorVariedad = 0;
    $precioProm = 0;
    $arregloVinosNuevo = [];
    for ($i = 0; $i < count($tiposDeVinos); $i++) {
        for ($j = 0; $j < count($arregloVinos); $j++) {
            if($tipoVinos[$i] = $arregloVinos[$j]["variedad"]) {
                $totalBotellas = $totalBotellas + $arregloVinos[$j]["cantBotellas"];
                $sumaPrecios = $sumaPrecios + $arregloVinos[$j]["precioUnidad"];
                $contadorVariedad++;
            }
        }
        $precioProm = $sumaPrecios / $contadorVariedad;
        $arregloVinosNuevos[$i]["variedad"] = $tiposDeVinos[$i];
        $arregloVinosNuevos[$i]["cantBotellasTotal"] = $totalBotellas;
        $arregloVinosNuevos[$i]["precioPromedio"] = $precioProm;
        $totalBotellas = 0;
        $sumaPrecios = 0;
        $contadorVariedad = 0;
        $precioProm = 0;
    }

    print_r ($arregloVinosNuevos);

?>