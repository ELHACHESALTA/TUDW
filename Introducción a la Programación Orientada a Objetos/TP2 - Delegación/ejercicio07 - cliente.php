<?php

    class Cliente {

        private $objTramite;

        public function __construct($objTramiteC) {
            $this -> objTramite = $objTramiteC;
        }

        public function getObjTramite() {
            return $this -> objTramite;
        }

        public function setObjTramite($objTramiteNuevo) {
            $this -> objTramite = $objTramiteNuevo;
        }

        public function __toString() {
            $impresion = "\n" . "Datos del Cliente: \n" . 
            $this -> getObjTramite() -> getClienteSolicitante() . "\n" . 
            "Datos del Trámite: \n" . 
            $this -> getObjTramite();
            return $impresion;
        }

    }

?>