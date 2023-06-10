<?php

    class Venta {

        private $fecha;
        private $objPaqueteTuristico;
        private $cantPersonas;
        private $tipoDocCliente;
        private $numDocCliente;
        private $tipo;
    
        public function __construct($fechaC, $objPaqueteTuristicoC, $cantPersonasC, $tipoDocClienteC, $numDocClienteC, $tipoC) {
            $this -> fecha = $fechaC;
            $this -> objPaqueteTuristico = $objPaqueteTuristicoC;
            $this -> cantPersonas = $cantPersonasC;
            $this -> tipoDocCliente = $tipoDocClienteC;
            $this -> numDocCliente = $numDocClienteC;
            $this -> tipo = $tipoC;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function getObjPaqueteTuristico() {
            return $this -> objPaqueteTuristico;
        }

        public function getCantPersonas() {
            return $this -> cantPersonas;
        }

        public function getTipoDocCliente() {
            return $this -> tipoDocCliente;
        }

        public function getNumDocCliente() {
            return $this -> numDocCliente;
        }

        public function getTipo() {
            return $this -> tipo;
        }

        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        public function setObjPaqueteTuristico($objPaqueteTuristicoNuevo) {
            $this -> objPaqueteTuristico = $objPaqueteTuristicoNuevo;
        }

        public function setCantPersonas($cantPersonasNuevo) {
            $this -> cantPersonas = $cantPersonasNuevo;
        }

        public function setTipoDocCliente($tipoDocClienteNuevo) {
            $this -> tipoDocCliente = $tipoDocClienteNuevo;
        }

        public function setNumDocCliente($numDocClienteNuevo) {
            $this -> numDocCliente = $numDocClienteNuevo;
        }

        public function setTipo($tipoNuevo) {
            $this -> tipo = $tipoNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Fecha de la venta: " . $this -> getFecha() . 
            "\n" . "Paquete Turistico de la venta: " . $this -> getObjPaqueteTuristico() . 
            "\n" . "Cantidad de personas de la venta: " . $this -> getCantPersonas() . 
            "\n" . "Tipo de documneto del cliente al que se le realizó la venta: " . $this -> getTipoDocCliente() . 
            "\n" . "Número de documento del cliente al que se le realizó la venta: " . $this -> getNumDocCliente() . 
            "\n" . "Tipo de venta: " . $this -> getTipo();
            return $cadena;
        }

    }

?>