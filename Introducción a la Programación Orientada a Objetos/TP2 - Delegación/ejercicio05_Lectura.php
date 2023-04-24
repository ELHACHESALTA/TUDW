<?php

    class Lectura {

        private $libro;
        private $librosLeidos;

        public function __construct($libroC) {
            $this -> libro = $libroC;
            $this -> librosLeidos[0] = $libroC;
        }

        public function getLibro() {
            return $this -> libro;
        }

        public function getLibrosLeidos() {
            return $this -> librosLeidos;
        }

        public function setLibro($libroNuevo) {
            $this -> libro = $libroNuevo;
        }

        public function setLibrosLeidos($librosLeidosNuevo) {
            $this -> librosLeidos = $librosLeidosNuevo;
        }

        public function libroLeido($titulo) {
            $comprobacion = false;
            $arregloLibros = $this -> getLibrosLeidos();
            $i = 0;
            while ($i != count($arregloLibros) && $comprobacion == false || $i == count($arregloLibros) && $comprobacion != false ) {
                if ($titulo == $arregloLibros[$i] -> getTitulo()) {
                    $comprobacion = true;
                } else {
                    $i++;
                }
            }
            return $comprobacion;
        }

        public function darSinopsis($titulo) {
            $comprobacion = false;
            $arregloLibros = $this -> getLibrosLeidos();
            $i = 0;
            while ($i != count($arregloLibros) && $comprobacion == false) {
                if  ($arregloLibros[$i] -> getTitulo() == $titulo) {
                    $sinopsis = $arregloLibros[$i] -> getSinopsis();
                    $comprobacion = true;
                } else {
                    $sinopsis = "El libro ingresado no ha sido leido aún, por lo cual no se puede dar una sinopsis. \n";
                    $i++;
                }
            }
            return $sinopsis;
        }

        public function leidosAnioEdicion($x) {
            $arregloLibros = $this -> getLibrosLeidos();
            $listaLibros = "";
            for ($i = 0; $i < count($arregloLibros); $i++) {
                if ($arregloLibros[$i] -> getAnioEdicion() == $x) {
                    $listaLibros = $listaLibros . "  - " . $this -> getLibrosLeidos()[$i] -> getTitulo() . "\n";
                }
            }
            if ($listaLibros == "") {
                $listaLibros = "No existen libros leidos correspondientes al año " . $x . ".\n";
            }
            return $listaLibros;
        }

        public function darLibrosPorAutor($nombreAutor) {
            $arregloLibros = $this -> getLibrosLeidos();
            $listaLibros = "";
            for ($i = 0; $i < count($arregloLibros); $i++) {
                $nombreDelAutor = $arregloLibros[$i] -> getAutor() -> getNombre() . " " . $arregloLibros[$i] -> getAutor() -> getApellido();
                if ($nombreDelAutor == $nombreAutor) {
                    $listaLibros = $listaLibros . "  - " . $this -> getLibrosLeidos()[$i] -> getTitulo() . "\n";
                }
            }
            if ($listaLibros == "") {
                $listaLibros = "No existen libros leidos correspondientes al autor " . $nombreAutor . ".\n";
            }
            return $listaLibros;
        }

        public function stringLibros() {
            $listaLibrosLeidos = "\n";
            for ($i = 0; $i < count($this -> getLibrosLeidos()); $i++) {
                if ($i < (count($this -> getLibrosLeidos()) - 1)) {
                    $listaLibrosLeidos = $listaLibrosLeidos . "  - " . $this -> getLibrosLeidos()[$i] -> getTitulo() . "\n";
                } else {
                    $listaLibrosLeidos = $listaLibrosLeidos . "  - " . $this -> getLibrosLeidos()[$i] -> getTitulo();
                }
            }
            if ($listaLibrosLeidos == "\n") {
                $listaLibrosLeidos = $listaLibrosLeidos . " - No hay libros leídos aún.";
            }
            return $listaLibrosLeidos;
        }

        public function __toString() {
            $cadena = "\n" . "Información del Libro: " . $this -> getLibro() . 
            "\n" . "Libros leidos: " . $this -> stringLibros();
            return $cadena;
        }

    }

?>