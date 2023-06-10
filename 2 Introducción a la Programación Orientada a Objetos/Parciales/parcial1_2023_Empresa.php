<?php

    class Empresa {

        private $denominacion;
        private $direccion;
        private $colObjClientes;
        private $colObjBicicletas;
        private $colObjVentas;

        public function __construct($denominacionC, $direccionC, $colObjClientesC, $colObjBicicletasC, $colObjVentasC) {
            $this -> denominacion = $denominacionC;
            $this -> direccion = $direccionC;
            $this -> colObjClientes = $colObjClientesC;
            $this -> colObjBicicletas = $colObjBicicletasC;
            $this -> colObjVentas = $colObjVentasC;
        }

        public function getDenominacion() {
            return $this -> denominacion;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getColObjClientes() {
            return $this -> colObjClientes;
        }

        public function getColObjBicicletas() {
            return $this -> colObjBicicletas;
        }

        public function getColObjVentas() {
            return $this -> colObjVentas;
        }

        public function setDenominacion($denominacionNuevo) {
            $this -> denominacion = $denominacionNuevo;
        }

        public function setDireccion($direccionNuevo) {
            $this -> direccion = $direccionNuevo;
        }

        public function setColObjClientes($colObjClientesNuevo) {
            $this -> colObjClientes = $colObjClientesNuevo;
        }

        public function setColObjBicicletas($colObjBicicletasNuevo) {
            $this -> colObjBicicletas = $colObjBicicletasNuevo;
        }

        public function setColObjVentas($colObjVentasNuevo) {
            $this -> colObjVentas = $colObjVentasNuevo;
        }

        public function retornarBici($codigoBici) {
            $bicicletaElegida = null;
            $comprobacion = false;
            $i = 0;
            $colBicicletas = $this -> getColObjBicicletas();
            while ($i < count($colBicicletas) && $comprobacion == false){
                if ($codigoBici == $colBicicletas[$i] -> getCodigo()) {
                    $bicicletaElegida = $colBicicletas[$i];
                    $comprobacion = true;
                } else {
                    $i++;
                }
            }
            return $bicicletaElegida;
        }

        public function registrarVenta($colCodigosBici, $objCliente) {
            $importeFinalVenta = 0;
            $colBicisEmpresa = $this -> getColObjBicicletas();
            $colVentasEmpresa = $this -> getColObjVentas();
            $totalVentasEmpresa = count($colVentasEmpresa);
            // Comprueba que el cliente no este dado de baja.
            if ($objCliente -> getDadoDeBaja() == false) {
                // Recorre exhaustivamente el arreglo de códigos de bicicletas que se solicitan para la venta.
                $ventaNueva = new Venta ($totalVentasEmpresa + 1, date("d/m/Y"), $objCliente, [], 0);
                for ($i = 0; $i < count($colCodigosBici); $i++) { 
                    $j = 0;
                    $comprobacion = true;
                    // Recorre parcialmente el arreglo de bicicletas de la empresa en busca de alguna coincidencia
                    while ($j < count($colBicisEmpresa) && $comprobacion) {
                        // Busca si la bici solicitada pertenece al arreglo de bicicletas de la empresa y si se encuentra activa para la venta
                        if ($colCodigosBici[$i] == $colBicisEmpresa[$j] -> getCodigo() && $colBicisEmpresa[$j] -> getActiva()) {
                            $ventaNueva -> incorporarBicicleta($colBicisEmpresa[$j]);
                            $importeFinalVenta = $ventaNueva -> getPrecioFinal();
                            //$colBicisEmpresa[$j] -> setActiva(false);
                            $comprobacion = false;
                        }
                        $j++;
                    }
                }
                if ($importeFinalVenta != 0) {
                    array_push ($colVentasEmpresa, $ventaNueva);
                    $this -> setColObjVentas($colVentasEmpresa);
                }
            }
            return $importeFinalVenta;
        }

        public function retornarVentasXCliente($tipo, $numDoc) {
            $colVentasPorCliente = [];
            $colVentas = $this -> getColObjVentas();
            for ($i = 0; $i < count($colVentas); $i++) {
                if ($tipo == $colVentas[$i] -> getObjCliente() -> getTipo() && $numDoc == $colVentas[$i] -> getObjCliente() -> getDni()) {
                    array_push($colVentasPorCliente, $colVentas[$i]);
                }
            }
            return $colVentasPorCliente;
        }

        public function stringColObjClientes() {
            $stringClientes = "\n";
            $colClientes = $this -> getColObjClientes();
            for ($i = 0; $i < count ($colClientes); $i++) {
                if ($i < (count ($colClientes) - 1)) {
                    $stringClientes = $stringClientes . $colClientes[$i] . "\n";
                } else {
                    $stringClientes = $stringClientes . $colClientes[$i];
                }
            }
            if ($stringClientes == "\n") {
                $stringClientes = $stringClientes . "No hay clientes en la empresa.";
            }
            return $stringClientes;
        }

        public function stringColObjBicicletas() {
            $stringBicis = "\n";
            $colBicicletas = $this -> getColObjBicicletas();
            for ($i = 0; $i < count ($colBicicletas); $i++) {
                if ($i < (count ($colBicicletas) - 1)) {
                    $stringBicis = $stringBicis . $colBicicletas[$i] . "\n";
                } else {
                    $stringBicis = $stringBicis . $colBicicletas[$i];
                }
            }
            if ($stringBicis == "\n") {
                $stringBicis = $stringBicis . "No hay bicis en la empresa.";
            }
            return $stringBicis;
        }

        public function stringColObjVentas() {
            $stringVentas = "\n";
            $colVentas = $this -> getColObjVentas();
            for ($i = 0; $i < count ($colVentas); $i++) {
                if ($i < (count ($colVentas) - 1)) {
                    $stringVentas = $stringVentas . $colVentas[$i] . "\n";
                } else {
                    $stringVentas = $stringVentas . $colVentas[$i];
                }
            }
            if ($stringVentas == "\n") {
                $stringVentas = $stringVentas . "No hay ventas en la empresa.";
            }
            return $stringVentas;
        }

        public function __toString() {
            $cadena = "\n" . "Denominación de la empresa: " . $this -> getDenominacion() . 
            "\n" . "Dirección de la empresa: " . $this -> getDireccion() . "\n" . 
            "\n" . "= Datos de los clientes de la empresa =" . $this -> stringColObjClientes() . "\n" . 
            "\n" . "= Datos de las bicicletas de la empresa =" . $this -> stringColObjBicicletas() . "\n" . 
            "\n" . "= Datos de las ventas de la empresa =" . $this -> stringColObjVentas();
            return $cadena;
        }

    }

?>