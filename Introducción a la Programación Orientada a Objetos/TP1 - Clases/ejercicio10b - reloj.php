<?php
    
    class Reloj {

        private $hh;
        private $mm;
        private $ss;

        public function __construct() {
            $hh = 00;
            $mm = 00;
            $ss = 00;
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

        public function setHh($hh) {
            return $this -> hh = $hh;
        }

        public function setMm($mm) {
            return $this -> mm = $mm;
        }

        public function setSs($ss) {
            return $this -> ss = $ss;
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