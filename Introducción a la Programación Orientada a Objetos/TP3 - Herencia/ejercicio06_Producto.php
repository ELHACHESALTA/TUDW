<?php

    class Producto {

        private $codigoBarra;
        private $descripcion;
        private $stock;
        private $porcentajeIva;
        private $precioCompra;
        private $rubro;
        private $tipo;

        public function __construct($codigoBarraC, $descripcionC, $stockC, $porcentajeIvaC, $precioCompraC, $rubroC, $tipoC) {
            $this -> codigoBarra = $codigoBarraC;
            $this -> descripcion = $descripcionC;
            $this -> stock = $stockC;
            $this -> porcentajeIva = $porcentajeIvaC;
            $this -> precioCompra = $precioCompraC;
            $this -> rubro = $rubroC;
            $this -> tipo = $tipoC;
        }

        public function getCodigoBarra() {
            return $this -> codigoBarra;
        }

        public function getDescripcion() {
            return $this -> descripcion;
        }

        public function getStock() {
            return $this -> stock;
        }

        public function getPorcentajeIva() {
            return $this -> porcentajeIva;
        }

        public function getPrecioCompra() {
            return $this -> precioCompra;
        }

        public function getRubro() {
            return $this -> rubro;
        }

        public function getTipo() {
            return $this -> tipo;
        }

        public function setCodigoBarra($codigoBarraNuevo) {
            $this -> codigoBarra = $codigoBarraNuevo;
        }

        public function setDescripcion($descripcionNuevo) {
            $this -> descripcion = $descripcionNuevo;
        }

        public function setStock($stockNuevo) {
            $this -> stock = $stockNuevo;
        }

        public function setPorcentajeIva($porcentajeIvaNuevo) {
            $this -> porcentajeIva = $porcentajeIvaNuevo;
        }

        public function setPrecioCompra($precioCompraNuevo) {
            $this -> precioCompra = $precioCompraNuevo;
        }

        public function setRubro($rubroNuevo) {
            $this -> rubro = $rubroNuevo;
        }

        public function setTipo($tipoNuevo) {
            $this -> tipo = $tipoNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Código de barra del producto: " . $this -> getCodigoBarra() . 
            "\n" . "Descripción del producto: " . $this -> getDescripcion() . 
            "\n" . "Stock del producto: " . $this -> getStock() . 
            "\n" . "Porcentaje Iva del producto: " . $this -> getPorcentajeIva() . 
            "\n" . "Precio de compra del producto: " . $this -> getPrecioCompra() . 
            "\n" . "Rubro del producto: " . $this -> getRubro() . 
            "\n" . "Tipo del producto: " . $this -> getTipo();
            return $cadena;
        }

    }

?>