<?php

    class Cliente {

        private $objPersona;
        private $objTramite;

        public function __construct($objPersonaC, $objTramiteC) {
            $this -> objPersona = $objPersonaC;
            $this -> objTramite = $objTramiteC;
        }

        public function getObjPersona() {
            return $this -> objPersona;
        }

        public function getObjTramite() {
            return $this -> objTramite;
        }

        public function setObjPersona($objPersonaNuevo) {
            $this -> objPersona = $objPersonaNuevo;
        }

        public function setObjTramite($objTramiteNuevo) {
            $this -> objTramite = $objTramiteNuevo;
        }

        public function __toString() {
            $impresion = "\n" . "Datos del Cliente: \n" . 
            $this -> getObjPersona() . "\n" . 
            "Datos del Trámite: \n" . 
            $this -> getObjTramite();
            return $impresion;
        }

    }

?>