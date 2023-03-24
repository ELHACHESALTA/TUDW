<?php

    class Linea {

        private $pA;
        private $pB;
        private $pC;
        private $pD;

        public function __construct() {
            $this -> pA = 0;
            $this -> pB = 0;
            $this -> pC = 5;
            $this -> pD = 5;
        }

        public function getPA(){
            return $this -> pA;
        }

        public function getPB(){
            return $this -> pB;
        }

        public function getPC(){
            return $this -> pC;
        }

        public function getPD(){
            return $this -> pD;
        }

        public function setPA($pANuevo) {
            return $this -> pA = $pANuevo;
        }

        public function setPB($pBNuevo) {
            return $this -> pB = $pBNuevo;
        }

        public function setPC($pCNuevo) {
            return $this -> pC = $pCNuevo;
        }

        public function setPD($pDNuevo) {
            return $this -> pD = $pDNuevo;
        }

        public function mueveDerecha($d) {
            $this -> setPA($this -> getPA() + $d);
            $this -> setPC($this -> getPC() + $d);
        }

        public function mueveIzquierda($d) {
            $this -> setPA($this -> getPA() - $d);
            $this -> setPC($this -> getPC() - $d);
        }

        public function mueveArriba($d) {
            $this -> setPB($this -> getPB() + $d);
            $this -> setPD($this -> getPD() + $d);
        }

        public function mueveAbajo($d) {
            $this -> setPB($this -> getPB() - $d);
            $this -> setPD($this -> getPD() - $d);
        }

        public function __toString() {
            return "Punto 1: (" . $this -> getPA() . "," . $this -> getPB() . ") - Punto 2: (" . $this -> getPC() . "," . $this -> getPD() . ")";
        }

    }

?>