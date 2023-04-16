<?php

    class Cuadrado {

        private $vertices;

        public function __construct() {
            $this -> vertices[0]["x"] = 1;
            $this -> vertices[0]["y"] = 1;
            $this -> vertices[1]["x"] = 5;
            $this -> vertices[1]["y"] = 1;
            $this -> vertices[2]["x"] = 1;
            $this -> vertices[2]["y"] = 5;
            $this -> vertices[3]["x"] = 5;
            $this -> vertices[3]["y"] = 5;
        }

        public function getVertices() {
            return $this -> vertices;
        }

        public function setVertices($verticesNuevos) {
            $this -> vertices = $verticesNuevos;
        }

        public function area() {
            $lado = $this -> getVertices()[1]["x"] - $this -> getVertices()[0]["x"];
            return $lado * $lado;
        }

        public function desplazar($d) {
            $dx = $d["x"] - $this -> getVertices()[0]["x"];
            $dy = $d["y"] - $this -> getVertices()[0]["y"];
            $verticeDesplazado[0]["x"] = $this -> getVertices()[0]["x"] + $dx;
            $verticeDesplazado[0]["y"] = $this -> getVertices()[0]["y"] + $dy;
            $verticeDesplazado[1]["x"] = $this -> getVertices()[1]["x"] + $dx;
            $verticeDesplazado[1]["y"] = $this -> getVertices()[1]["y"] + $dy;
            $verticeDesplazado[2]["x"] = $this -> getVertices()[2]["x"] + $dx;
            $verticeDesplazado[2]["y"] = $this -> getVertices()[2]["y"] + $dy;
            $verticeDesplazado[3]["x"] = $this -> getVertices()[3]["x"] + $dx;
            $verticeDesplazado[3]["y"] = $this -> getVertices()[3]["y"] + $dy;
            $this -> setVertices($verticeDesplazado);
        }

        public function aumentarTamanio($t) {
            $verticeAumentado[0]["x"] = $this -> getVertices()[0]["x"];
            $verticeAumentado[0]["y"] = $this -> getVertices()[0]["y"];
            $verticeAumentado[1]["x"] = $this -> getVertices()[1]["x"] + $t;
            $verticeAumentado[1]["y"] = $this -> getVertices()[1]["y"];
            $verticeAumentado[2]["x"] = $this -> getVertices()[2]["x"];
            $verticeAumentado[2]["y"] = $this -> getVertices()[2]["y"] + $t;
            $verticeAumentado[3]["x"] = $this -> getVertices()[3]["x"] + $t;
            $verticeAumentado[3]["y"] = $this -> getVertices()[3]["y"] + $t;
            $this -> setVertices($verticeAumentado);
        }

        public function __toString() {
            return "Punto 1: (" . $this -> getVertices()[0]["x"] . "," . $this -> getVertices()[0]["y"] . ") \n" . 
            "Punto 2: (" . $this -> getVertices()[1]["x"] . "," . $this -> getVertices()[1]["y"] . ") \n" . 
            "Punto 3: (" . $this -> getVertices()[2]["x"] . "," . $this -> getVertices()[2]["y"] . ") \n" . 
            "Punto 4: (" . $this -> getVertices()[3]["x"] . "," . $this -> getVertices()[3]["y"] . ")";
        }
    
    }

?>