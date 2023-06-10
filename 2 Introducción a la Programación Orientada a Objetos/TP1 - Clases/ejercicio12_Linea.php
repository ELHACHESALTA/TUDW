<?php

    class Linea {

        private $pA;
        private $pB;
        private $pC;
        private $pD;

        public function __construct($pAC, $pBC, $pCC, $pDC) {
            $this -> pA = $pAC;
            $this -> pB = $pBC;
            $this -> pC = $pCC;
            $this -> pD = $pDC;
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
            $this -> pA = $pANuevo;
        }

        public function setPB($pBNuevo) {
            $this -> pB = $pBNuevo;
        }

        public function setPC($pCNuevo) {
            $this -> pC = $pCNuevo;
        }

        public function setPD($pDNuevo) {
            $this -> pD = $pDNuevo;
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
            $cadena = "\n" . "Punto 1 de la linea: (" . $this -> getPA() . "," . $this -> getPB() . ")" . 
            "\n" . "Punto 2 de la linea: (" . $this -> getPC() . "," . $this -> getPD() . ")";
            return $cadena;
        }

    }

?>