<?php

    class Funcion {

        private $nombreFuncion;
        private $horarioInicio;
        private $duracionObra;
        private $precio;

        public function __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC) {
            $this -> nombreFuncion = $nombreFuncionC;
            $this -> horarioInicio = $horarioInicioC;
            $this -> duracionObra = $duracionObraC;
            $this -> precio = $precioC;
        }

        public function getNombreFuncion() {
            return $this -> nombreFuncion;
        }

        public function getHorarioInicio() {
            return $this -> horarioInicio;
        }

        public function getDuracionObra() {
            return $this -> duracionObra;
        }

        public function getPrecio() {
            return $this -> precio;
        }

        public function setNombreFuncion($nombreFuncionNuevo) {
            $this -> nombreFuncion = $nombreFuncionNuevo;
        }

        public function setHorarioInicio($horarioInicioNuevo) {
            $this -> horarioInicio = $horarioInicioNuevo;
        }

        public function setDuracionObra($duracionObraNuevo) {
            $this -> duracionObra = $duracionObraNuevo;
        }

        public function setPrecio($precioNuevo) {
            $this -> precio = $precioNuevo;
        }

        public function horarioFin() {
            $horarioFin = date('H:i:s', ((strtotime($this -> getHorarioInicio()) + strtotime($this -> getDuracionObra())) - strtotime("today")));
            return $horarioFin;
        }

        public function __toString() {
            $impresion = " - Nombre de la función: " . $this -> getNombreFuncion() . 
            "\n" . " - Horario de inicio: " . $this -> getHorarioInicio() . 
            "\n" . " - Duración de la obra: " . $this -> getDuracionObra() . 
            "\n" . " - Precio: " . $this -> getPrecio() . "\n";
            return $impresion;
        }

    }

?>