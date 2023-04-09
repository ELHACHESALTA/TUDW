<?php

    class Tramite {

        private $tipoTramite;
        private $horaCreacion;
        private $horaResolucion;

        public function __construct($tipoTramiteC, $horaCreacionC, $horaResolucionC) {
            $this -> tipoTramite = $tipoTramiteC;
            $this -> horaCreacion = $horaCreacionC;
            $this -> horaResolucion = $horaResolucionC;
        }

        public function getTipoTramite() {
            return $this -> tipoTramite;
        }

        public function getHoraCreacion() {
            return $this -> horaCreacion;
        }

        public function getHoraResolucion() {
            return $this -> horaResolucion;
        }

        public function setTipoTramite($tipoTramiteNuevo) {
            $this -> tipoTramite = $tipoTramiteNuevo;
        }

        public function setHoraCreacion($horaCreacionNuevo) {
            $this -> horaCreacion = $horaCreacionNuevo;
        }

        public function setHoraResolucion($horaResolucionNuevo) {
            $this -> horaResolucion = $horaResolucionNuevo;
        }

        public function __toString() {
            $impresion = "\n" . " - Tipo de trámite: " . $this -> getTipoTramite() . "\n" . 
            " - Hora de creación del trámite: " . $this -> getHoraCreacion() . "\n" . 
            " - Hora de resolución del trámite: " . $this -> getHoraResolucion();
            return $impresion;
        }

    }

?>