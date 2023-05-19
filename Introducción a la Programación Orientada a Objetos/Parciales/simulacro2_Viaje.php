<?php

    class Viaje {

        private $destino;
        private $horaPartida;
        private $horaLlegada;
        private $num;
        private $monto;
        private $fecha;
        private $asientosTotales;
        private $asientosDisponibles;
        private $objResponsable;

        public function __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numC, $montoC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC) {
            $this -> destino = $destinoC;
            $this -> horaPartida = $horaPartidaC;
            $this -> horaLlegada = $horaLlegadaC;
            $this -> num = $numC;
            $this -> monto = $montoC;
            $this -> fecha = $fechaC;
            $this -> asientosTotales = $asientosTotalesC;
            $this -> asientosDisponibles = $asientosDisponiblesC;
            $this -> objResponsable = $objResponsableC;
        }

        public function getDestino() {
            return $this -> destino;
        }

        public function getHoraPartida() {
            return $this -> horaPartida;
        }

        public function getHoraLlegada() {
            return $this -> horaLlegada;
        }

        public function getNum() {
            return $this -> num;
        }

        public function getMonto() {
            return $this -> monto;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function getAsientosTotales() {
            return $this -> asientosTotales;
        }

        public function getAsientosDisponibles() {
            return $this -> asientosDisponibles;
        }

        public function getObjResponsable() {
            return $this -> objResponsable;
        }

        public function setDestino($destinoNuevo) {
            $this -> destino = $destinoNuevo;
        }

        public function setHoraPartida($horaPartidaNuevo) {
            $this -> horaPartida = $horaPartidaNuevo;
        }

        public function setHoraLlegada($horaLlegadaNuevo) {
            $this -> horaLlegada = $horaLlegadaNuevo;
        }

        public function setNum($numNuevo) {
            $this -> num = $numNuevo;
        }

        public function setMonto($montoNuevo) {
            $this -> monto = $montoNuevo;
        }

        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        public function setAsientosTotales($asientosTotalesNuevo) {
            $this -> asientosTotales = $asientosTotalesNuevo;
        }

        public function setAsientosDisponibles($asientosDisponiblesNuevo) {
            $this -> asientosDisponibles = $asientosDisponiblesNuevo;
        }

        public function setObjResponsable($objResponsableNuevo) {
            $this -> objResponsable = $objResponsableNuevo;
        }

        public function calcularImporteViaje() {
            $importe = 0;
            $importe = $this -> getMonto() + ($this -> getMonto() * (($this -> getAsientosTotales() - $this -> getAsientosDisponibles()) / $this -> getAsientosTotales()));
            return $importe;
        }

        public function __toString() {
            $cadena = "\n" . "Destino del viaje: " . $this -> getDestino() . 
            "\n" . "Hora de partida del viaje: " . $this -> getHoraPartida() . 
            "\n" . "Hora de llegada del viaje: " . $this -> getHoraLlegada() . 
            "\n" . "Número del viaje: " . $this -> getNum() . 
            "\n" . "Monto del viaje: " . $this -> getMonto() . 
            "\n" . "Fecha del viaje: " . $this -> getFecha() . 
            "\n" . "Asientos totales del viaje: " . $this -> getAsientosTotales() . 
            "\n" . "Asientos disponibles del viaje: " . $this -> getAsientosDisponibles() . 
            "\n" . "Responsable del viaje: " . $this -> getObjResponsable();
            return $cadena;
        }

    }

?>