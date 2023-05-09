<?php

    class FuncionTeatro extends Funcion {

        public function darCostos() {
            $cobroMensual = ($this -> getPrecio() * 30) + ($this -> getPrecio() * 45 / 100);
            return $cobroMensual;
        }

    }

?>