<?php

    class Lectura {

        private $libro;
        private $numPagLeyendo;

        public function __construct($libroC, $numPagLeyendoC) {
            $this -> libro = $libroC;
            $this -> numPagLeyendo = $numPagLeyendoC;
        }

        public function getLibro() {
            return $this -> libro;
        }

        public function getNumPagLeyendo() {
            return $this -> numPagLeyendo;
        }

        public function setLibro($libroNuevo) {
            $this -> libro = $libroNuevo;
        }
        
        public function setNumPagLeyendo($numPagLeyendoNuevo) {
            $this -> numPagLeyendo = $numPagLeyendoNuevo;
        }

        public function siguientePagina() {
            $paginaActual = $this -> getnumPagLeyendo();
            $libroLeido = $this -> getLibro();
            $comprobacion = true;
            if ($paginaActual == $libroLeido -> getCantPag()) {
                $comprobacion = false;
            } else {
                $paginaActual++;
                $this -> setNumPagLeyendo($paginaActual);
            }
            return $comprobacion;
        }

        public function recrocederPagina() {
            $paginaActual = $this -> getnumPagLeyendo();
            $comprobacion = true;
            if ($paginaActual == 1) {
                $comprobacion = false;
            } else {
                $paginaActual--;
                $this -> setNumPagLeyendo($paginaActual);
            }
            return $comprobacion;
        }

        public function irPagina($numPag) {
            $libroLeido = $this -> getLibro();
            $comprobacion = true;
            if (0 < $numPag && $numPag <= $libroLeido -> getCantPag()) {
                $this -> setNumPagLeyendo($numPag);
            } else {
                $comprobacion = false;
            }
            return $comprobacion;
        }

        public function __toString() {
            $cadena = "\n" . "Información del Libro: " . $this -> getLibro() . 
            "\n" . "Página actual: " . $this -> getNumPagLeyendo();
            return $cadena;
        }

    }

?>