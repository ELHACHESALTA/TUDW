<?php

    class Persona {

        private $nombre;
        private $apellido;
        private $tipo;
        private $dni;

        public function __construct($nombreC, $apellidoC, $tipoC, $dniC) {
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
            $this -> tipo = $tipoC;
            $this -> dni = $dniC;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function getTipo() {
            return $this -> tipo;
        }

        public function getDNI() {
            return $this -> dni;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function setTipo($tipoNuevo) {
            $this -> tipo = $tipoNuevo;
        }

        public function setDni($dniNuevo) {
            $this -> $this = $dniNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "  - Nombre: " . $this -> getNombre() . 
            "\n" . "  - Apellido: " . $this -> getApellido() . 
            "\n" . "  - Tipo: " . $this -> getTipo() . 
            "\n" . "  - DNI: " . $this -> getDni();
            return $cadena;
        }

    }

?>