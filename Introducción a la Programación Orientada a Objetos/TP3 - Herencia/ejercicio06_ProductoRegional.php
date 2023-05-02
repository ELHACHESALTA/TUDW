<?php

    class ProductoRegional extends Producto {

        private static $descuentoRegional;

        public function __construct($codigoBarraC, $descripcionC, $stockC, $porcentajeIvaC, $precioCompraC, $rubroC) {
            parent :: __construct($codigoBarraC, $descripcionC, $stockC, $porcentajeIvaC, $precioCompraC, $rubroC, "Regional");
            ProductoRegional :: $descuentoRegional = 10;
        }

        public function getDescuentoRegional() {
            return ProductoRegional :: $descuentoRegional;
        }

        public function setDescuentoRegional($descuentoRegionalNuevo) {
            ProductoRegional :: $descuentoRegional = $descuentoRegionalNuevo;
        }

        public function darPrecioVenta() {
            $precioCompraCalc = $this -> getPrecioCompra();
            $porcentajeIvaCalc = $this -> getPorcentajeIva();
            $porcentajeRubro = $this -> getRubro() -> getPorcentajeGanancia();
            $precioVenta = $precioCompraCalc + ($precioCompraCalc * $porcentajeRubro / 100) + ($precioCompraCalc * $porcentajeIvaCalc / 100);
            $descuentoRegional = ProductoRegional :: $descuentoRegional;
            $precioVenta = $precioVenta - ($precioVenta * $descuentoRegional / 100);
            return $precioVenta;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Descuento regional del producto: " . ProductoRegional :: getDescuentoRegional();
            return $cadena;
        }

    }

?>