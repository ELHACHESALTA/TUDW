<?php

    class Cliente {

        private $tipoTramiteCliente;
        private $nombreCliente;
        private $apellido;
        private $dni;

        public function __construct($tipoTramiteClienteC, $nombreClienteC, $apellidoC, $dniC) {
            $this -> tipoTramiteCliente = $tipoTramiteClienteC;
            $this -> nombreCliente = $nombreClienteC;
            $this -> apellido = $apellidoC;
            $this -> dni = $dniC;
        }

        public function getTipoTramiteCliente() {
            return $this -> tipoTramiteCliente;
        }

        public function getNombreCliente() {
            return $this -> nombreCliente;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function getDni() {
            return $this -> dni;
        }

        public function setTipoTramiteCliente($tipoTramiteClienteNuevo) {
            $this -> tipoTramiteCliente = $tipoTramiteClienteNuevo;
        }

        public function setNombreCliente($nombreClienteNuevo) {
            $this -> nombreCliente = $nombreClienteNuevo;
        }

        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function setDni($dniNuevo) {
            $this -> dni = $dniNuevo;
        }

        public function __toString() {
            $impresion = "\n" . "Tipo de trámite del cliente: " . $this -> getTipoTramiteCliente() . "\n" . 
            "Nombre del cliente: " . $this -> getNombreCliente() . "\n" . 
            "Apellido del cliente: " . $this -> getApellido() . "\n" . 
            "DNI del cliente: " . $this -> getDni() . "\n";
            return $impresion;
        }

    }

?>