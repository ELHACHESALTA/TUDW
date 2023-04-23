<?php

    class Calculadora {

        private $num1;
        private $num2;
        private $operacion;

        public function __construct ($num1C, $num2C, $operacionC) {
            $this -> num1 = $num1C;
            $this -> num2 = $num2C;
            $this -> operacion = $operacionC;
        }

        public function getNum1 () {
            return $this -> num1;
        }

        public function getNum2 () {
            return $this -> num2;
        }

        public function getOperacion () {
            return $this -> operacion;
        }

        public function setNum1 ($num1Nuevo) {
            $this -> num1 = $num1Nuevo;
        }

        public function setNum2 ($num2Nuevo) {
            $this -> num2 = $num2Nuevo;
        }

        public function setOperacion ($operacionNuevo) {
            $this -> operacion = $operacionNuevo;
        }

        public function operacionCalculadora () {
            if ($this -> getOperacion() == "+") {
                $resultado = $this -> getNum1() + $this -> getNum2();
            } elseif ($this -> getOperacion() == "-") {
                $resultado = $this -> getNum1() - $this -> getNum2();
            } elseif ($this -> getOperacion() == "*") {
                $resultado = $this -> getNum1() * $this -> getNum2();
            } elseif ($this -> getOperacion() == "/") {
                $resultado = $this -> getNum1() / $this -> getNum2();
            }
            return $resultado;
        }

        public function __toString() {
            $cadena = "\n" . "(".$this -> getNum1().", ".$this -> getNum2().", ".$this -> getOperacion().")";
            return $cadena;
        }

    }

?>