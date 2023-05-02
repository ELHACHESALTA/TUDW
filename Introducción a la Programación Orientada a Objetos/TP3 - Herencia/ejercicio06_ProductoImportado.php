<?php

    class ProductoImportado extends Producto {

        public function __construct($codigoBarraC, $descripcionC, $stockC, $porcentajeIvaC, $precioCompraC, $rubroC) {
            parent :: __construct($codigoBarraC, $descripcionC, $stockC, $porcentajeIvaC, $precioCompraC, $rubroC, "Importado");
        }

        public function darPrecioVenta() {
            $precioCompraCalc = $this -> getPrecioCompra();
            $porcentajeIvaCalc = $this -> getPorcentajeIva();
            $porcentajeRubro = $this -> getRubro() -> getPorcentajeGanancia();
            $precioVenta = $precioCompraCalc + ($precioCompraCalc * $porcentajeRubro / 100) + ($precioCompraCalc * $porcentajeIvaCalc / 100);
            $precioVenta = $precioVenta + ($precioVenta * 50 / 100);
            $precioVenta = $precioVenta + ($precioVenta * 10 / 100);
            return $precioVenta;
        }

    }

?>