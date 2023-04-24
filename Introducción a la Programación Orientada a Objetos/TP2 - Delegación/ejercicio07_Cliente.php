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
            $cadena = "\n" . "Datos del Cliente: " . $this -> getObjTramite() -> getClienteSolicitante() . 
            "\n" . "Datos del Trámite: " . $this -> getObjTramite();
            return $cadena;
        }

    }

?>