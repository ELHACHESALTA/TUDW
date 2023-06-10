<?php

    class FuncionMusical extends Funcion {

        private $director;
        private $cantPers;

        public function __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC, $directorC, $cantPersC) {
            parent :: __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC);
            $this -> director = $directorC;
            $this -> cantPers = $cantPersC;
        }

        public function getDirector() {
            return $this -> director;
        }

        public function getCantPers() {
            return $this -> cantPers;
        }

        public function setDirector($directorNuevo) {
            $this -> director = $directorNuevo;
        }

        public function setCantPers($cantPersNuevo) {
            $this -> cantPers = $cantPersNuevo;
        }

        public function darCostos() {
            $cobroMensual = ($this -> getPrecio() * 30) + ($this -> getPrecio() * 12 / 100);
            return $cobroMensual;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Director de la función musical: " . $this -> getDirector() . 
            "\n" . "Cantidad de personas de la función musical: " . $this -> getCantPers();
            return $cadena;
        }

    }

?>