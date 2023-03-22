<?php

    class Calculadora {

        private $num1;
        private $num2;
        private $operacion;

        public function __construct () {
            $this -> num1 = 0;
            $this -> num2 = 0;
            $this -> operacion = "";
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

        public function setNum1 ($nuevoNum1) {
            return $this -> num1 = $nuevoNum1;
        }

        public function setNum2 ($nuevoNum2) {
            return $this -> num2 = $nuevoNum2;
        }

        public function setOperacion ($nuevoOperacion) {
            return $this -> operacion = $nuevoOperacion;
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
            return "(".$this -> getNum1().", ".$this -> getNum2().", ".$this -> getOperacion().")";
        }

    }