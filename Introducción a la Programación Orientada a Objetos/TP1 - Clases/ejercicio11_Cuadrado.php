<?php

    class Cuadrado {

        private $vertices;

        public function __construct($verticesC) {
            $this -> vertices = $verticesC;
        }

        public function getVertices() {
            return $this -> vertices;
        }

        public function setVertices($verticesNuevos) {
            $this -> vertices = $verticesNuevos;
        }

        public function area() {
            $arregloVertices = $this -> getVertices();
            $lado = $arregloVertices[1]["x"] - $arregloVertices[0]["x"];
            $calculo = $lado * $lado;
            return $calculo;
        }

        public function desplazar($d) {
            $arregloVertices = $this -> getVertices();
            $dx = $d["x"] - $arregloVertices[0]["x"];
            $dy = $d["y"] - $arregloVertices[0]["y"];
            $verticeDesplazado[0]["x"] = $arregloVertices[0]["x"] + $dx;
            $verticeDesplazado[0]["y"] = $arregloVertices[0]["y"] + $dy;
            $verticeDesplazado[1]["x"] = $arregloVertices[1]["x"] + $dx;
            $verticeDesplazado[1]["y"] = $arregloVertices[1]["y"] + $dy;
            $verticeDesplazado[2]["x"] = $arregloVertices[2]["x"] + $dx;
            $verticeDesplazado[2]["y"] = $arregloVertices[2]["y"] + $dy;
            $verticeDesplazado[3]["x"] = $arregloVertices[3]["x"] + $dx;
            $verticeDesplazado[3]["y"] = $arregloVertices[3]["y"] + $dy;
            $this -> setVertices($verticeDesplazado);
        }

        public function aumentarTamanio($t) {
            $arregloVertices = $this -> getVertices();
            $verticeAumentado[0]["x"] = $arregloVertices[0]["x"];
            $verticeAumentado[0]["y"] = $arregloVertices[0]["y"];
            $verticeAumentado[1]["x"] = $arregloVertices[1]["x"] + $t;
            $verticeAumentado[1]["y"] = $arregloVertices[1]["y"];
            $verticeAumentado[2]["x"] = $arregloVertices[2]["x"];
            $verticeAumentado[2]["y"] = $arregloVertices[2]["y"] + $t;
            $verticeAumentado[3]["x"] = $arregloVertices[3]["x"] + $t;
            $verticeAumentado[3]["y"] = $arregloVertices[3]["y"] + $t;
            $this -> setVertices($verticeAumentado);
        }

        public function __toString() {
            $cadena = "\n" . "Punto 1: (" . $this -> getVertices()[0]["x"] . "," . $this -> getVertices()[0]["y"] . ") \n" . 
            "Punto 2: (" . $this -> getVertices()[1]["x"] . "," . $this -> getVertices()[1]["y"] . ") \n" . 
            "Punto 3: (" . $this -> getVertices()[2]["x"] . "," . $this -> getVertices()[2]["y"] . ") \n" . 
            "Punto 4: (" . $this -> getVertices()[3]["x"] . "," . $this -> getVertices()[3]["y"] . ")";
            return $cadena;
        }
    
    }

?>