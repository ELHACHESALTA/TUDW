<?php

    class Libro {

        private $isbn;
        private $titulo;
        private $anioEdicion;
        private $editorial;
        private $autor;
        private $cantPag;
        private $sinopsis;
        
        public function __construct($isbnC, $tituloC, $anioEdicionC, $editorialC, $cantPagC, $sinopsisC, $autorC) {
            $this -> isbn = $isbnC;
            $this -> titulo = $tituloC;
            $this -> anioEdicion = $anioEdicionC;
            $this -> editorial = $editorialC;
            $this -> autor = $autorC;
            $this -> cantPag = $cantPagC;
            $this -> sinopsis = $sinopsisC;
        }

        public function getIsbn() {
            return $this -> isbn;
        }

        public function getTitulo() {
            return $this -> titulo;
        }

        public function getAnioEdicion() {
            return $this -> anioEdicion;
        }

        public function getEditorial() {
            return $this -> editorial;
        }

        public function getAutor() {
            return $this -> autor;
        }

        public function getCantPag() {
            return $this -> cantPag;
        }

        public function getSinopsis() {
            return $this -> sinopsis;
        }

        public function setIsbn($isbnNuevo) {
            $this -> isbn = $isbnNuevo;
        }

        public function setTitulo($tituloNuevo) {
            $this -> titulo = $tituloNuevo;
        }

        public function setAnioEdicion($anioEdicionNuevo) {
            $this -> anioEdicion = $anioEdicionNuevo;
        }

        public function setEditorial($editorialNuevo) {
            $this -> editorial = $editorialNuevo;
        }

        public function setAutor($autorNuevo) {
            $this -> autor = $autorNuevo;
        }

        public function setCantPag($cantPagNuevo) {
            $this -> cantPag = $cantPagNuevo;
        }

        public function setSinopsis($sinopsisNuevo) {
            $this -> sinopsis = $sinopsisNuevo;
        }

        public function perteneceEditorial($pEditorial) {
            if($this -> getEditorial() == $pEditorial) {
                $comprobacion = true;
            } else {
                $comprobacion = false;
            }
            return $comprobacion;
        }

        public function aniosDesdeEdicion() {
            $antiguedad = 2023 - $this -> getAnioEdicion();
            return $antiguedad;
        }

        public function __toString() {
            $cadena = "\n" . "ISNB: " . $this -> getIsbn() . 
            "\n" . "Titulo: " . $this -> getTitulo() . 
            "\n" . "Año de Edición: " . $this -> getAnioEdicion() . 
            "\n" . "Editorial: " . $this -> getEditorial() . 
            "\n" . "Cantidad de Páginas: " . $this -> getCantPag() . 
            "\n" . "Sinopsis: " . $this -> getSinopsis() . 
            "\n" . "Información del Autor: " . $this -> getAutor();
            return $cadena;
        }

    }

?>