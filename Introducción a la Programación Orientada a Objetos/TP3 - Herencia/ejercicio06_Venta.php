<?php

    class Venta {

        private $fecha;
        private $colObjProductos;
        private $objCliente;
        private $importeFinal;

        public function __construct($fechaC, $colObjProductosC, $objClienteC, $importeFinalC) {
            $this -> fecha = $fechaC;
            $this -> colObjProductos = $colObjProductosC;
            $this -> objCliente = $objClienteC;
            $this -> importeFinal = $importeFinalC;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function getColObjProductos() {
            return $this -> colObjProductos;
        }

        public function getObjCliente() {
            return $this -> objCliente;
        }

        public function getImporteFinal() {
            return $this -> importeFinal;
        }

        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        public function setColObjProductos($colObjProductosNuevo) {
            $this -> colObjProductos = $colObjProductosNuevo;
        }

        public function setObjCliente($objClienteNuevo) {
            $this -> objCliente = $objClienteNuevo;
        }

        public function setImporteFinal($importeFinalNuevo) {
            $this -> importeFinal = $importeFinalNuevo;
        }

        public function stringProductos() {
            $cadenaProductos = "\n";
            $colProductos = $this -> getColObjProductos();
            for ($i = 0; $i < count ($colProductos); $i++) {
                if ($i < (count ($colProductos) - 1)) {
                    $cadenaProductos = $cadenaProductos . $colProductos[$i] . "\n";
                } else {
                    $cadenaProductos = $cadenaProductos . $colProductos[$i];
                }
            }
            if ($cadenaProductos == "\n") {
                $cadenaProductos = $cadenaProductos . "No hay clientes en el banco.";
            }
            return $cadenaProductos;
        }

        public function __toString() {
            $cadena = "\n" . "Fecha de la venta: " . $this -> getFecha() . 
            "\n" . "Datos de los productos de la venta: " . $this -> stringProductos() . 
            "\n" . "Cliente al que se le realizo la venta: " . $this -> getObjCliente() . 
            "\n" . "Importe final de la venta: " . $this -> getImporteFinal();
            return $cadena;
        }

    }

?>