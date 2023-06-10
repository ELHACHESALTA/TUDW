<?php

    class Agencia {

        private $colObjPaquetesTuristicos;
        private $colObjVentasAgencia;
        private $colObjVentasWeb;

        public function __construct($colObjPaquetesTuristicosC, $colObjVentasAgenciaC, $colObjVentasWebC) {
            $this -> colObjPaquetesTuristicos = $colObjPaquetesTuristicosC;
            $this -> colObjVentasAgencia = $colObjVentasAgenciaC;
            $this -> colObjVentasWeb = $colObjVentasWebC;
        }

        public function getColObjPaquetesTuristicos() {
            return $this -> colObjPaquetesTuristicos;
        }

        public function getColObjVentasAgencia() {
            return $this -> colObjVentasAgencia;
        }

        public function getColObjVentasWeb() {
            return $this -> colObjVentasWeb;
        }

        public function setColObjPaquetesTuristicos($colObjPaquetesTuristicosNuevo) {
            $this -> colObjPaquetesTuristicos = $colObjPaquetesTuristicosNuevo;
        }

        public function setColObjVentasAgencia($colObjVentasAgenciaNuevo) {
            $this -> colObjVentasAgencia = $colObjVentasAgenciaNuevo;
        }

        public function setColObjVentasWeb($colObjVentasWebNuevo) {
            $this -> colObjVentasWeb = $colObjVentasWebNuevo;
        }

        public function incorporarPaquete($objPaqueteTuristico) {
            $i = 0;
            $comprobacion = true;
            $comprobacionIncorpora = false;
            $paquetesTuristicos = $this -> getColObjPaquetesTuristicos();
            while ($i < count($paquetesTuristicos) && $comprobacion) {
                if ($objPaqueteTuristico -> getFecha() == $paquetesTuristicos[$i] -> getFecha() && $objPaqueteTuristico -> getDestino() == $paquetesTuristicos[$i] -> getDestino()) {
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            if ($comprobacion == true) {
                array_push($paquetesTuristicos, $objPaqueteTuristico);
                $this -> setColObjPaquetesTuristicos($paquetesTuristicos);
                $comprobacionIncorpora = true;
            }
            return $comprobacionIncorpora;
        }

        public function incorporarVenta($objPaquete, $tipoDoc, $numDoc, $cantPer, $esOnline) {
            $importeFinal = -1;
            if ($esOnline == true) {
                $i = 0;
                $comprobacion = true;
                $paquetesTuristicos = $this -> getColObjPaquetesTuristicos();
                while ($i < count($paquetesTuristicos) && $comprobacion) {
                    if ($paquetesTuristicos[$i] == $objPaquete) {
                        if ($paquetesTuristicos[$i] -> getAsientosDisponibles() >= $cantPer) {
                            $paquetesTuristicos[$i] -> setAsientosDisponibles($paquetesTuristicos[$i] -> getAsientosDisponibles() - $cantPer);
                            $comprobacion = false;
                            $venta = new VentaWeb (date("d/m/Y"), $objPaquete, $cantPer, $tipoDoc, $numDoc);
                            $importeFinal = $venta -> darImporteVenta();
                            $ventasCarga = $this -> getColObjVentasWeb();
                            array_push($ventasCarga, $venta);
                            $this -> setColObjVentasWeb($ventasCarga);
                        } else {
                            $i++;
                        }
                    } else {
                        $i++;
                    }
                }
            } else {
                $i = 0;
                $comprobacion = true;
                $paquetesTuristicos = $this -> getColObjPaquetesTuristicos();
                while ($i < count($paquetesTuristicos) && $comprobacion) {
                    if ($paquetesTuristicos[$i] == $objPaquete) {
                        if ($paquetesTuristicos[$i] -> getAsientosDisponibles() >= $cantPer) {
                            $paquetesTuristicos[$i] -> setAsientosDisponibles($paquetesTuristicos[$i] -> getAsientosDisponibles() - $cantPer);
                            $comprobacion = false;
                            $venta = new VentaAgencia (date("d/m/Y"), $objPaquete, $cantPer, $tipoDoc, $numDoc);
                            $importeFinal = $venta -> darImporteVenta();
                            $ventasCarga = $this -> getColObjVentasAgencia();
                            array_push($ventasCarga, $venta);
                            $this -> setColObjVentasWeb($ventasCarga);
                        }
                    } else {
                        $i++;
                    }
                }
            }            
            return $importeFinal;
        }

        public function informarPaquetesTuristicos($fecha, $destino) {
            $paquetesElegidos = [];
            $paquetesTuristicos = $this -> getColObjPaquetesTuristicos();
            for ($i = 0; $i < count($paquetesTuristicos); $i++) {
                if ($fecha == $paquetesTuristicos[$i] -> getFecha() && $destino == $paquetesTuristicos[$i] -> getDestino()) {
                    array_push($paquetesElegidos, $paquetesTuristicos[$i]);
                }
            }
            return $paquetesElegidos;
        }

        public function paqueteMasEconomico($fecha, $destino) {
            $paqueteEconomico = [];
            $menorValorDestino = PHP_INT_MAX;
            $paquetesElegidos = $this -> informarPaquetesTuristicos($fecha, $destino);
            for ($i = 0; $i < count($paquetesElegidos); $i++) {
                if ($paquetesElegidos[$i] -> getDestino() -> getValor() < $menorValorDestino) {
                    $menorValorDestino = $paquetesElegidos[$i] -> getDestino() -> getValor();
                    $paqueteEconomico = $paquetesElegidos[$i];
                }
            }
            return $paqueteEconomico;
        }

        public function informarConsumoCliente($tipoDoc, $numDoc) {
            $ventasAgencia = $this -> getColObjVentasAgencia();
            $ventasWeb = $this -> getColObjVentasWeb();
            $consumoCliente = [];
            for ($i = 0; $i < count($ventasAgencia); $i++) {
                if ($tipoDoc == $ventasAgencia[$i] -> getTipoDocCliente() && $numDoc == $ventasAgencia[$i] -> getNumDocCliente()) {
                    array_push($consumoCliente, $ventasAgencia[$i] -> getObjPaqueteTuristico());
                }
            }
            for ($i = 0; $i < count($ventasWeb); $i++) {
                if ($tipoDoc == $ventasWeb[$i] -> getTipoDocCliente() && $numDoc == $ventasWeb[$i] -> getNumDocCliente()) {
                    array_push($consumoCliente, $ventasWeb[$i] -> getObjPaqueteTuristico());
                }
            }
            return $consumoCliente;
        }

        public function colPaquetesAnio($anio) {
            $colPaquetesAnio = [];
            $colPaquetesTuristicos = $this -> getColObjPaquetesTuristicos();
            for ($i = 0; $i < count ($colPaquetesTuristicos); $i++) {
                $fecha = $colPaquetesTuristicos[$i] -> getFecha();
                if (date("Y", strtotime($fecha)) == $anio) {
                    array_push($colPaquetesAnio, $colPaquetesTuristicos[$i]);
                }
            }
            return $colPaquetesAnio;
        }

        public function contarPaquetesVendidos($anio) {
            $contarPaquetes = [];
            $indiceContarPaquetes = 0;
            $paquetesTuristicos = $this -> colPaquetesAnio($anio);
            for ($i = 0; $i < count($paquetesTuristicos); $i++) {
                $contadorPaquetes = 0;
                foreach ($paquetesTuristicos as $value) {
                    if ($paquetesTuristicos[$i] == $value) {
                        $contadorPaquetes++;
                    }
                }
                $contarPaquetes[$indiceContarPaquetes]["cantidad"] = $contadorPaquetes;
                $contarPaquetes[$indiceContarPaquetes]["paquete"] = $paquetesTuristicos[$i];
                $indiceContarPaquetes++;
            }
            return $contarPaquetes;
        }

        public function informarPaquetesMasVendido($anio, $n) {
            $paquetesVendidos = $this -> contarPaquetesVendidos($anio);
            $paquetesVendidosOrdenados = [];
            if ($n > count($paquetesVendidos)) {
                $n = count($paquetesVendidos);
            }
            for ($i = 0; $i < $n; $i++) {
                $maxCantVendidos = PHP_INT_MIN;
                $paqueteMasVendido = "";
                for ($j = 0; $j < count($paquetesVendidos); $j++) {
                    for ($k = 0; $k < count($paquetesVendidosOrdenados); $k++) {
                        if ($paquetesVendidosOrdenados[$k] == $paqueteMasVendido) {
                            if ($paquetesVendidos[$j]["cantidad"] > $maxCantVendidos) {
                                $maxCantVendidos = $paquetesVendidos[$j]["cantidad"];
                                $paqueteMasVendido = $paquetesVendidos[$j];
                                $indiceMayor = $j;
                            }
                        }
                    }
                }
                array_push($paquetesVendidosOrdenados, $paqueteMasVendido);
            }
            return $paquetesVendidosOrdenados;
        }

        public function promedioVentasOnline() {
            $totalVentas = count($this -> getColObjVentasAgencia()) + count($this -> getColObjVentasWeb());
            $ventasOnline = count($this -> getColObjVentasWeb());
            $promedioVentasOnline = $ventasOnline * 100 / $totalVentas;
            return $promedioVentasOnline;
        }

        public function promedioVentasAgencia() {
            $totalVentas = count($this -> getColObjVentasAgencia()) + count($this -> getColObjVentasWeb());
            $ventasAgencia = count($this -> getColObjVentasAgencia());
            $promedioVentasAgencia = $ventasAgencia * 100 / $totalVentas;
            return $promedioVentasAgencia;
        }

        public function stringPaquetes() {
            $cadenaPaquetes = "\n";
            $colPaquetes = $this -> getColObjPaquetesTuristicos();
            for ($i = 0; $i < count ($colPaquetes); $i++) {
                if ($i < (count ($colPaquetes) - 1)) {
                    $cadenaPaquetes = $cadenaPaquetes . $colPaquetes[$i] . "\n";
                } else {
                    $cadenaPaquetes = $cadenaPaquetes . $colPaquetes[$i];
                }
            }
            if ($cadenaPaquetes == "\n") {
                $cadenaPaquetes = $cadenaPaquetes . "No hay paquetes turisticos registrados en la agencia.";
            }
            return $cadenaPaquetes;
        }

        public function stringVentasAgencia() {
            $cadenaVentasAgencia = "\n";
            $colVentasAgencia = $this -> getColObjVentasAgencia();
            for ($i = 0; $i < count ($colVentasAgencia); $i++) {
                if ($i < (count ($colVentasAgencia) - 1)) {
                    $cadenaVentasAgencia = $cadenaVentasAgencia . $colVentasAgencia[$i] . "\n";
                } else {
                    $cadenaVentasAgencia = $cadenaVentasAgencia . $colVentasAgencia[$i];
                }
            }
            if ($cadenaVentasAgencia == "\n") {
                $cadenaVentasAgencia = $cadenaVentasAgencia . "No hay ventas normales registradas en la agencia.";
            }
            return $cadenaVentasAgencia;
        }

        public function stringVentasWeb() {
            $cadenaVentasWeb = "\n";
            $colVentasWeb = $this -> getColObjVentasWeb();
            for ($i = 0; $i < count ($colVentasWeb); $i++) {
                if ($i < (count ($colVentasWeb) - 1)) {
                    $cadenaVentasWeb = $cadenaVentasWeb . $colVentasWeb[$i] . "\n";
                } else {
                    $cadenaVentasWeb = $cadenaVentasWeb . $colVentasWeb[$i];
                }
            }
            if ($cadenaVentasWeb == "\n") {
                $cadenaVentasWeb = $cadenaVentasWeb . "No hay ventas web registradas en la agencia.";
            }
            return $cadenaVentasWeb;
        }

        public function __toString() {
            $cadena = "\n" . "Datos de los paquetes turisticos de la agencia: " . $this -> stringPaquetes() . 
            "\n" . "Datos de las ventas normales de la agencia: " . $this -> stringVentasAgencia() . 
            "\n" . "Datos de las ventas web de la agencia: " . $this -> stringVentasWeb();
            return $cadena;
        }

    }

?>