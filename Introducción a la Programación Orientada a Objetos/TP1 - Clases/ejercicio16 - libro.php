<?php

    class Libro {

        private $isbn;
        private $titulo;
        private $anioEdicion;
        private $editorial;
        private $autor;
        
        public function __construct($isbnC, $tituloC, $anioEdicionC, $editorialC, $autorC) {
            // echo "Ingrese el ISBN del libro: ";
            $this -> isbn = $isbnC;
            // echo "Ingrese el título del libro";
            $this -> titulo = $tituloC;
            // echo "Ingrese el año de edición del libro: ";
            $this -> anioEdicion = $anioEdicionC;
            // echo "Ingrese la editorias del libro: ";
            $this -> editorial = $editorialC;
            // echo "Ingrese los datos del autor del libro: ";
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
            return "ISNB: " . $this -> getIsbn() . "\n" . 
            "Titulo: " . $this -> getTitulo() . "\n" . 
            "Año de Edición: " . $this -> getAnioEdicion() . "\n" . 
            "Editorial: " . $this -> getEditorial() . "\n" . 
            "Autor: " . $this -> getAutor() . "\n";
        }

    }

?>