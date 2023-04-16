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
            if ($paginaActual == $libroLeido -> getCantPag()) {
                echo "\n" . "Ha llegado a la última página del libro, no se puede avanzar más. \n";
            } else {
                $paginaActual++;
                $this -> setNumPagLeyendo($paginaActual);
            }
        }

        public function recrocederPagina() {
            $paginaActual = $this -> getnumPagLeyendo();
            if ($paginaActual == 1) {
                echo "\n" . "Está leyendo la primera página del libro, no puede retroceder más. \n";
            } else {
                $paginaActual--;
                $this -> setNumPagLeyendo($paginaActual);
            }
        }

        public function irPagina($numPag) {
            $libroLeido = $this -> getLibro();
            if (0 < $numPag && $numPag <= $libroLeido -> getCantPag()) {
                $this -> setNumPagLeyendo($numPag);
            } else {
                echo "\n" . "Ha ingresado un número de página no válido para el libro. \n";
            }
        }

        public function __toString() {
            $impresion = "\n" . "Información del Libro: \n" . 
            $this -> getLibro() . 
            "Página actual: " . $this -> getNumPagLeyendo() . "\n";
            return $impresion;
        }

    }

?>