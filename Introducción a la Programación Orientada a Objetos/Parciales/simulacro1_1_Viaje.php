<?php

    class Viaje {

        // Atributos

        private $destino;
        private $horaPartida;
        private $horaLlegada;
        private $numViaje;
        private $importe;
        private $fecha;
        private $asientosTotales;
        private $asientosDisponibles;
        private $objResponsable;

        // Métodos

        /**
         * Crea un objeto de la clase Viaje.
         * @param string $destinoC
         * @param string $horaPartidaC
         * @param string $horaLlegadaC
         * @param int $numViajeC
         * @param int $importeC
         * @param string $fechaC
         * @param int $asientosTotalesC
         * @param int $asientosDisponiblesC
         * @param object $objResponsableC
         */
        public function __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numViajeC, $importeC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC) {
            $this -> destino = $destinoC;
            $this -> horaPartida = $horaPartidaC;
            $this -> horaLlegada = $horaLlegadaC;
            $this -> numViaje = $numViajeC;
            $this -> importe = $importeC;
            $this -> fecha = $fechaC;
            $this -> asientosTotales = $asientosTotalesC;
            $this -> asientosDisponibles = $asientosDisponiblesC;
            $this -> objResponsable = $objResponsableC;
        }

        /**
         * Retorna el destino del viaje.
         * @return string
         */
        public function getDestino() {
            return $this -> destino;
        }

        /**
         * Retorna la hora de partida del viaje.
         * @return string
         */
        public function getHoraPartida() {
            return $this -> horaPartida;
        }

        /**
         * Retorna la hora de llegada del viaje.
         * @return string
         */
        public function getHoraLlegada() {
            return $this -> horaLlegada;
        }

        /**
         * Retorna el número del viaje.
         * @return int
         */
        public function getNumViaje() {
            return $this -> numViaje;
        }

        /**
         * Retorna el importe del viaje.
         * @return int
         */
        public function getImporte() {
            return $this -> importe;
        }

        /**
         * Retorna la fecha del viaje.
         * @return string
         */
        public function getFecha() {
            return $this -> fecha;
        }

        /**
         * Retorna los asientos totales del viaje.
         * @return int
         */
        public function getAsientosTotales() {
            return $this -> asientosTotales;
        }

        /**
         * Retorna los asientos disponibles del viaje.
         * @return int
         */
        public function getAsientosDisponibles() {
            return $this -> asientosDisponibles;
        }

        /**
         * Retorna el responsable del viaje.
         * @return object
         */
        public function getObjResponsable() {
            return $this -> objResponsable;
        }

        /**
         * Modifica el destino del viaje.
         * @param string $destinoNuevo
         */
        public function setDestino($destinoNuevo) {
            $this -> destino = $destinoNuevo;
        }

        /**
         * Modifica la hora de partida del viaje.
         * @param string $horaPartidaNuevo
         */
        public function setHoraPartida($horaPartidaNuevo) {
            $this -> horaPartida = $horaPartidaNuevo;
        }

        /**
         * Modifica la hora de llegada del viaje.
         * @param string $horaLlegadaNuevo
         */
        public function setHoraLlegada($horaLlegadaNuevo) {
            $this -> horaLlegada = $horaLlegadaNuevo;
        }

        /**
         * Modifica el numero del viaje.
         * @param int $numViaje
         */
        public function setNumViaje($numViajeNuevo) {
            $this -> numViaje = $numViajeNuevo;
        }

        /**
         * Modifica el improte del viaje.
         * @param int $importeNuevo
         */
        public function setImporte($importeNuevo) {
            $this -> importe = $importeNuevo;
        }

        /**
         * Modifica la fecha del viaje.
         * @param string $fechaNuevo
         */
        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        /**
         * Modifica los asientos totales del viaje.
         * @param int $asientosTotalesNuevo
         */
        public function setAsientosTotales($asientosTotalesNuevo) {
            $this -> asientosTotales = $asientosTotalesNuevo;
        }

        /**
         * Modifica los asientos disponibles del viaje.
         * @param int $asientosDisponiblesNuevo
         */
        public function setAsientosDisponibles($asientosDisponiblesNuevo) {
            $this -> asientosDisponibles = $asientosDisponiblesNuevo;
        }

        /**
         * Modifica el responsable del viaje.
         * @param object $objResponsableNuevo
         */
        public function setObjResponsable($objResponsableNuevo) {
            $this -> objResponsable = $objResponsableNuevo;
        }

        /**
         * Recibe por parámetros la cantidad de asientos que desean asignarse y retorna verdadero en caso que la asignación pueda concretarse y falso en caso contrario.
         * @param int $cantAsientos
         * @return bool
         */
        public function asignarAsientosDisponibles($cantAsientos) {
            $resultado = false;
            if ($cantAsientos <= $this -> getAsientosDisponibles()) {
                $resultado = true;
            }
            return $resultado;
        }

        /**
         * Retorna una cadena con toda la información del viaje.
         * @return string
         */
        public function __toString() {
            $cadena = "\n" . "Destino del viaje: " . $this -> getDestino() . 
            "\n" . "Hora de partida del viaje: " . $this -> getHoraPartida() . 
            "\n" . "Hora de llegada del viaje: " . $this -> getHoraLlegada() . 
            "\n" . "Número de identificación del viaje: " . $this -> getNumViaje() . 
            "\n" . "Importe del viaje: " . $this -> getImporte() . 
            "\n" . "Fecha del viaje: " . $this -> getFecha() . 
            "\n" . "Asientos totales del viaje: " . $this -> getAsientosTotales() . 
            "\n" . "Asientos disponibles del viaje: " . $this -> getAsientosDisponibles() . 
            "\n" . "Datos del responsable del viaje: " . "\n" . $this -> getObjResponsable();
            return $cadena;
        }

    }

?>