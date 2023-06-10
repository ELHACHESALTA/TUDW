<?php

    class Responsable {

        private $nombre;
        private $apellido;
        private $nroDoc;
        private $direccion;
        private $mail;
        private $telefono;

        public function __construct($nombreC, $apellidoC, $nroDocC, $direccionC, $mailC, $telefonoC) {
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
            $this -> nroDoc = $nroDocC;
            $this -> direccion = $direccionC;
            $this -> mail = $mailC;
            $this -> telefono = $telefonoC;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function getNroDoc() {
            return $this -> nroDoc;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getMail() {
            return $this -> mail;
        }

        public function getTelefono() {
            return $this -> telefono;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function setNroDoc($nroDocNuevo) {
            $this -> nroDoc = $nroDocNuevo;
        }

        public function setDireccion($direccionNuevo) {
            $this -> direccion = $direccionNuevo;
        }

        public function setMail($mailNuevo) {
            $this -> mail = $mailNuevo;
        }

        public function setTelefono($telefonoNuevo) {
            $this -> telefono = $telefonoNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del responsable: " . $this -> getNombre() . 
            "\n" . "Apellido del responsable: " . $this -> getApellido() . 
            "\n" . "Número de documento del responsable: " . $this -> getNroDoc() . 
            "\n" . "Dirección del responsable: " . $this -> getDireccion() . 
            "\n" . "Mail del responsable: " . $this -> getMail() . 
            "\n" . "Teléfono del responsable: " . $this -> getTelefonO();
            return $cadena;
        }

    }

?>