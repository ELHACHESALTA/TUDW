<?php

    class FuncionTeatro extends Funcion {

        public function __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC) {
            parent :: __construct($nombreFuncionC, $horarioInicioC, $duracionObraC, $precioC);
        }

        public function darCostos() {
            $cobroMensual = ($this -> getPrecio() * 30) + ($this -> getPrecio() * 45 / 100);
            return $cobroMensual;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            return $cadena;
        }

    }

?>