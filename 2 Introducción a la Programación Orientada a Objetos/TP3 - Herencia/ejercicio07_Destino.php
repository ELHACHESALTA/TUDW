<?php

    class Destino {

        private $id;
        private $nombre;
        private $valor;

        public function __construct($idC, $nombreC, $valorC) {
            $this -> id = $idC;
            $this -> nombre = $nombreC;
            $this -> valor = $valorC;
        }

        public function getId() {
            return $this -> id;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getValor() {
            return $this -> valor;
        }

        public function setId($idNuevo) {
            $this -> id = $idNuevo;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setValor($valorNuevo) {
            $this -> valor = $valorNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Identificación del destino: " . $this -> getId() . 
            "\n" . "Nombre del destino: " . $this -> getNombre() . 
            "\n" . "Valor del destino: " . $this -> getValor();
            return $cadena;
        }

    }

?>