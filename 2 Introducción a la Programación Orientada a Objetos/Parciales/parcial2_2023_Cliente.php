<?php

    class Cliente {

        private $nombre;
        private $apellido;
        private $dadoDeBaja;
        private $tipo;
        private $dni;

        public function __construct($nombreC, $apellidoC, $dadoDeBajaC, $tipoC, $dniC) {
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
            $this -> dadoDeBaja = $dadoDeBajaC;
            $this -> tipo = $tipoC;
            $this -> dni = $dniC;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function getDadoDeBaja() {
            return $this -> dadoDeBaja;
        }

        public function getTipo() {
            return $this -> tipo;
        }

        public function getDni() {
            return $this -> dni;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setApeliido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function setDadoDeBaja($dadoDeBajaNuevo) {
            $this -> dadoDeBaja = $dadoDeBajaNuevo;
        }

        public function setTipo($tipoNuevo) {
            $this -> tipo = $tipoNuevo;
        }

        public function setDni($dniNuevo) {
            $this -> dni = $dniNuevo;
        }

        public function stringDadoDeBaja() {
            if ($this -> getDadoDeBaja() == true) {
                $string = "Si";
            } else {
                $string = "No";
            }
            return $string;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del Cliente: " . $this -> getNombre() . 
            "\n" . "Apellido del cliente: " . $this -> getApellido() . 
            "\n" . "¿Está dado de baja?: " . $this -> stringDadoDeBaja() . 
            "\n" . "Tipo de cliente: " . $this -> getTipo() . 
            "\n" . "Número de documento del cliente: " . $this -> getDni();
            return $cadena;
        }

    }

?>