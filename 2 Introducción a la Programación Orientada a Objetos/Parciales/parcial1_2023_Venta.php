<?php

    class Venta {

        private $numero;
        private $fecha;
        private $objCliente;
        private $colObjBicicletas;
        private $precioFinal;

        public function __construct($numeroC, $fechaC, $objClienteC, $colObjBicicletasC, $precioFinalC) {
            $this -> numero = $numeroC;
            $this -> fecha = $fechaC;
            $this -> objCliente = $objClienteC;
            $this -> colObjBicicletas = $colObjBicicletasC;
            $this -> precioFinal = $precioFinalC;
        }

        public function getNumero() {
            return $this -> numero;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function getObjCliente() {
            return $this -> objCliente;
        }

        public function getColObjBicicletas() {
            return $this -> colObjBicicletas;
        }

        public function getPrecioFinal() {
            return $this -> precioFinal;
        }

        public function setNumero($numeroNuevo) {
            $this -> numero = $numeroNuevo;
        }

        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        public function setObjCliente($objClienteNuevo) {
            $this -> objCliente = $objClienteNuevo;
        }

        public function setColObjBicicletas($colObjBicicletasNuevo) {
            $this -> colObjBicicletas = $colObjBicicletasNuevo;
        }

        public function setPrecioFinal($precioFinalNuevo) {
            $this -> precioFinal = $precioFinalNuevo;
        }

        public function incorporarBicicleta($objBici) {
            $colObjBicicletasCarga = $this -> getColObjBicicletas();
            array_push ($colObjBicicletasCarga, $objBici);
            $this -> setColObjBicicletas($colObjBicicletasCarga);
            $precioFinalCarga = $this -> getPrecioFinal();
            $precioFinalCarga = $precioFinalCarga + $objBici -> darPrecioVenta();
            $this -> setPrecioFinal($precioFinalCarga);
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
                $stringBicis = $stringBicis . "No hay bicicletas en la venta.";
            }
            return $stringBicis;
        }

        public function __toString() {
            $cadena = "\n" . "Número de la venta: " . $this -> getNumero() . 
            "\n" . "Fecha de la venta: " . $this -> getFecha() . 
            "\n" . "Datos del cliente de la venta: " . $this -> getObjCliente() . 
            "\n" . "Datos de las bicicletas de la venta: " . $this -> stringColObjBicicletas() . "\n" .
            "\n" . "Precio final de la venta: " . $this -> getPrecioFinal();
            return $cadena;
        }

    }

?>