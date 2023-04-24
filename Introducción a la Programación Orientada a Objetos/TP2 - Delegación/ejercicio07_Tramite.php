<?php

    class Tramite {

        private $tipoTramite;
        private $horaCreacion;
        private $horaResolucion;
        private $fechaCreacion;
        private $fechaResolucion;
        private $estadoTramite;
        private $clienteSolicitante;

        public function __construct($tipoTramiteC, $horaCreacionC, $horaResolucionC, $fechaCreacionC, $fechaResolucionC, $estadoTramiteC, $clienteSolicitanteC) {
            $this -> tipoTramite = $tipoTramiteC;
            $this -> horaCreacion = $horaCreacionC;
            $this -> horaResolucion = $horaResolucionC;
            $this -> fechaCreacion = $fechaCreacionC;
            $this -> fechaResolucion = $fechaResolucionC;
            $this -> estadoTramite = $estadoTramiteC;
            $this -> clienteSolicitante = $clienteSolicitanteC;
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

        public function getFechaCreacion() {
            return $this -> fechaCreacion;
        }

        public function getFechaResolucion() {
            return $this -> fechaResolucion;
        }

        public function getEstadoTramite() {
            return $this -> estadoTramite;
        }

        public function getClienteSolicitante() {
            return $this -> clienteSolicitante;
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

        public function setFechaCreacion($fechaCreacionNuevo) {
            $this -> fechaCreacion = $fechaCreacionNuevo;
        }

        public function setFechaResolucion($fechaResolucionNuevo) {
            $this -> fechaResolucion = $fechaResolucionNuevo;
        }

        public function setEstadoTramite($estadoTramiteNuevo) {
            $this -> estadoTramite = $estadoTramiteNuevo;
        }

        public function setClienteSolicitante($clienteSolicitanteNuevo) {
            $this -> clienteSolicitante = $clienteSolicitanteNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "  - Tipo de trámite: " . $this -> getTipoTramite() . 
            "\n" . "  - Hora de creación del trámite: " . $this -> getHoraCreacion() . 
            "\n" . "  - Hora de resolución del trámite: " . $this -> getHoraResolucion() . 
            "\n" . "  - Fecha de creación del trámite: " . $this -> getFechaCreacion() . 
            "\n" . "  - Fecha de resolución del trámite: " . $this -> getFechaResolucion() . 
            "\n" . "  - Estado del trámite: " . $this -> getestadoTramite() . 
            "\n" . "  - Cliente Solicitante del trámite: " . $this -> getClienteSolicitante() -> getNombre() . " " . 
            $this -> getClienteSolicitante() -> getApellido();
            return $cadena;
        }

    }

?>