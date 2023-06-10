<?php

    class Persona {

        private $tipoDoc;
        private $numDoc;
        private $nombre;
        private $apellido;

        public function __construct ($tipoDocC, $numDocC, $nombreC, $apellidoC) {
            $this -> tipoDoc = $tipoDocC;
            $this -> numDoc = $numDocC;
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
        }

        public function getTipoDoc() {
            return $this -> tipoDoc;
        }

        public function getNumDoc() {
            return $this -> numDoc;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function setTipoDoc($tipoDocNuevo) {
            $this -> tipoDoc = $tipoDocNuevo;
        }

        public function setNumDoc($numDocNuevo) {
            $this -> numDoc = $numDocNuevo;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Tipo de documento de la persona: " . $this -> getTipoDoc() . 
            "\n" . "DNI de la persona: " . $this -> getNumDoc() . 
            "\n" . "Nombre de la persona: " . $this -> getNombre() . 
            "\n" . "Apellido de la persona: " . $this -> getApellido();
            return $cadena;
        }

    }

?>