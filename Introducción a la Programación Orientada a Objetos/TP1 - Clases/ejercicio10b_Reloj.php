<?php
    
    class Reloj {

        private $hh;
        private $mm;
        private $ss;

        public function __construct() {
            $this -> hh = 00;
            $this -> mm = 00;
            $this -> ss = 00;
        }

        public function getHh() {
            return $this -> hh;
        }

        public function getMm() {
            return $this -> mm;
        }

        public function getSs() {
            return $this -> ss;
        }

        public function setHh($hhNuevo) {
            $this -> hh = $hhNuevo;
        }

        public function setMm($mmNuevo) {
            $this -> mm = $mmNuevo;
        }

        public function setSs($ssNuevo) {
            $this -> ss = $ssNuevo;
        }

        public function puesta_a_cero() {
            $this -> setHh(00);
            $this -> setMm(00);
            $this -> setSs(00);
        }

        public function incremento() {
            if ($this -> getSs() == 59) {
                $this -> setSs(00);
                $mmNuevo = $this -> getMm();
                if ($mmNuevo == 59) {
                    $this -> setMm(00);
                    $hhNuevo = $this -> getHh();
                    if ($hhNuevo == 23) {
                        $this -> setHh(00);
                    } else {
                        $hhNuevo++;
                        $this -> setHh($hhNuevo);
                    }
                } else {
                    $mmNuevo++;
                    $this -> setMm($mmNuevo);
                }
            } else {
                $ssNuevo = $this -> getSs();
                $ssNuevo++;
                $this -> setSS($ssNuevo);
            }
        }

        public function __toString() {
            return "(" . $this -> getHh() . "," . $this -> getMm() . "," . $this -> getSs() . ")";
        }

    }

?>