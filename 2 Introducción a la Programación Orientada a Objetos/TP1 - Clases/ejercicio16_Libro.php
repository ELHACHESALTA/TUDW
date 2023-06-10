<?php

    class Libro {

        private $isbn;
        private $titulo;
        private $anioEdicion;
        private $editorial;
        private $autor;
        
        public function __construct($isbnC, $tituloC, $anioEdicionC, $editorialC, $autorC) {
            $this -> isbn = $isbnC;
            $this -> titulo = $tituloC;
            $this -> anioEdicion = $anioEdicionC;
            $this -> editorial = $editorialC;
            $this -> autor = $autorC;
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
            $cadena = "\n" . "ISNB del libro: " . $this -> getIsbn() . 
            "\n" . "Titulo del libro: " . $this -> getTitulo() . 
            "\n" . "Año de edición del libro: " . $this -> getAnioEdicion() . 
            "\n" . "Editorial del libro: " . $this -> getEditorial() . 
            "\n" . "Autor del libro: " . $this -> getAutor();
            return $cadena;
        }

    }

?>