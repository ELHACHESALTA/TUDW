<?php

    class FuncionCine extends Funcion {

        private $genero;
        private $paisOrigen;

        public function __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC, $generoC, $paisOrigenC) {
            parent :: __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC);
            $this -> genero = $generoC;
            $this -> paisOrigen = $paisOrigenC;
        }

        public function getGenero() {
            return $this -> genero;
        }

        public function getPaisOrigen() {
            return $this -> paisOrigen;
        }

        public function setGenero($generoNuevo) {
            $this -> genero = $generoNuevo;
        }

        public function setPaisOrigen($paisOrigenNuevo) {
            $this -> paisOrigen = $paisOrigenNuevo;
        }

        public function darCostos() {
            $cobroMensual = ($this -> getPrecio() * 30) + ($this -> getPrecio() * 65 / 100);
            return $cobroMensual;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Género de la función de cine: " . $this -> getGenero() . 
            "\n" . "País de origen de la función de cine: " . $this -> getPaisOrigen();
            return $cadena;
        }

    }

?>