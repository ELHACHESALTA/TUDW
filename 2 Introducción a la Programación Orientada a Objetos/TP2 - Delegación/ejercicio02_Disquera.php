<?php

    class Disquera {

        private $horaDesde;
        private $horaHasta;
        private $estado;
        private $direccion;
        private $duenio;

        public function __construct($horaDesdeC, $horaHastaC, $estadoC, $direccionC, $duenioC) {
            $this -> horaDesde = $horaDesdeC;
            $this -> horaHasta = $horaHastaC;
            $this -> estado = $estadoC;
            $this -> direccion = $direccionC;
            $this -> duenio = $duenioC;
        }

        public function getHoraDesde() {
            return $this -> horaDesde;
        }

        public function getHoraHasta() {
            return $this -> horaHasta;
        }

        public function getEstado() {
            return $this -> estado;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getDuenio() {
            return $this -> duenio;
        }

        public function setHoraDesde($horaDesdeNuevo) {
            $this -> horaDesde = $horaDesdeNuevo;
        }

        public function setHoraHasta($horaHastaNuevo) {
            $this -> horaHasta = $horaHastaNuevo;
        }

        public function setEstado($estadoNuevo) {
            $this -> estado = $estadoNuevo;
        }

        public function setDireccion($direccionNuevo) {
            $this -> direccion = $direccionNuevo;
        }

        public function setDuenio($duenioNuevo) {
            $this -> duenio = $duenioNuevo;
        }

        public function dentroHorarioAtencion($hora, $minutos) {
            $comprobacion = false;
            $horaDesde = explode(":", $this -> getHoraDesde());
            $horaHasta = explode(":", $this -> getHoraHasta());
            if(($horaDesde[0] > $hora || $horaDesde[1] > $minutos) && ($horaHasta[0] < $hora || $horaHasta[1] < $minutos)) {
                $comprobacion = true;
            }
            return $comprobacion;
        }

        public function abrirDisquera($hora, $minuto) {
            $comprobacion = $this -> dentroHorarioAtencion($hora, $minuto);
            if ($comprobacion == true) {
                $this -> setEstado("abierto");
            }
        }

        public function cerrarDisquera($hora, $minuto) {
            $comprobacion = $this -> dentroHorarioAtencion($hora, $minuto);
            if ($comprobacion == false) {
                $this -> setEstado("cerrado");
            }
        }

        public function __toString() {
            $cadena = "\n" . "Horario de atención: desde " . $this -> getHoraDesde() . " hasta " . $this -> getHoraHasta() . 
            "\n" . "Estado: " . $this -> getEstado() . 
            "\n" . "Direccion: " . $this -> getDireccion() . 
            "\n" . "Información del dueño: " . $this -> getDuenio();
            return $cadena;
        }

    }

?>