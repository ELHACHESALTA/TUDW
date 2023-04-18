<?php

    class Teatro {

        private $nombre;
        private $direccion;
        private $funciones;

        public function __construct() {
            $this -> nombre = "Teatro Español";
            $this -> direccion = "Buenos Aires 332";
            $this -> funciones[0]["nombre"] = "Los locos adams";
            $this -> funciones[0]["precio"] = 150;
            $this -> funciones[1]["nombre"] = "Dragon ball";
            $this -> funciones[1]["precio"] = 200;
            $this -> funciones[2]["nombre"] = "El circo de André";
            $this -> funciones[2]["precio"] = 50;
            $this -> funciones[3]["nombre"] = "Messi y la escaloneta";
            $this -> funciones[3]["precio"] = 1500;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getFunciones() {
            return $this -> funciones;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setDireccion($direccionNueva) {
            $this -> direccion = $direccionNueva;
        }

        public function setFunciones() {
            do {
                echo "Que función desea editar: ";
                $i = trim(fgets(STDIN));
                echo "Ingrese el nombre de la nueva función: ";
                $this -> funciones[$i-1]["nombre"] = trim(fgets(STDIN));
                echo "Ingrese el precio de la nueva función: ";
                $this -> funciones[$i-1]["precio"] = trim(fgets(STDIN));
                echo "¿Desea modificar otra función?: ";
                $respuesta = trim(fgets(STDIN));
            } while ($respuesta == "Si");
        }

        public function __toString() {
            return "Nombre del Teatro: " . $this -> getNombre() . "\n" . 
            "Direccion del Teatro: " . $this -> getDireccion() . "\n" . 
            "Primera Función: " . $this -> getFunciones()[0]["nombre"] . " - Precio: " .  $this -> getFunciones()[0]["precio"] . "\n" . 
            "Segunda Función: " . $this -> getFunciones()[1]["nombre"] . " - Precio: " .  $this -> getFunciones()[1]["precio"] . "\n" . 
            "Tercer Función: " . $this -> getFunciones()[2]["nombre"] . " - Precio: " .  $this -> getFunciones()[2]["precio"] . "\n" . 
            "Cuarta Función: " . $this -> getFunciones()[3]["nombre"] . " - Precio: " .  $this -> getFunciones()[3]["precio"] . "\n";
        }

    }

?>