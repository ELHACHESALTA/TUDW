<?php

    class Local {

        private $colObjProductosImportados;
        private $colObjProductosRegionales;
        private $colObjVentas;

        public function __construct($colObjProductosImportadosC, $colObjProductosRegionalesC, $colObjVentasC) {
            $this -> colObjProductosImportados = $colObjProductosImportadosC;
            $this -> colObjProductosRegionales = $colObjProductosRegionalesC;
            $this -> colObjVentas = $colObjVentasC;
        }

        public function getColObjProductosImportados() {
            return $this -> colObjProductosImportados;
        }

        public function getColObjProductosRegionales() {
            return $this -> colObjProductosRegionales;
        }

        public function getColObjVentas() {
            return $this -> colObjVentas;
        }

        public function setColObjProductosImportados($colObjProductosImportadosNuevo) {
            $this -> colObjProductosImportados = $colObjProductosImportadosNuevo;
        }

        public function setColObjProductosRegionales($colObjProductosRegionalesNuevo) {
            $this -> colObjProductosRegionales = $colObjProductosRegionalesNuevo;
        }

        public function setColObjVentas($colObjVentasNuevo) {
            $this -> colObjVentas = $colObjVentasNuevo;
        }

        public function incorporarProductoLocal($objProducto) {
            $i = 0;
            $comprobacion = true;
            $comprobacionIncorpora = false;
            if ($objProducto -> getTipo() == "Importado") {
                $colProductosImportados = $this -> getColObjProductosImportados();
                while ($i < count ($colProductosImportados) && $comprobacion) {
                    if ($objProducto -> getCodigoBarra() == $colProductosImportados[$i] -> getCodigoBarra()) {
                        $comprobacion = false;
                    } else {
                        $i++;
                    }
                }
                if ($comprobacion == true) {
                    array_push($colProductosImportados, $objProducto);
                    $this -> setColObjProductosImportados($colProductosImportados);
                    $comprobacionIncorpora = true;
                }
            } elseif ($objProducto -> getTipo() == "Regional") {
                $colProductosRegionales = $this -> getColObjProductosRegionales();
                while ($i < count ($colProductosRegionales) && $comprobacion) {
                    if ($objProducto -> getCodigoBarra() == $colProductosRegionales[$i] -> getCodigoBarra()) {
                        $comprobacion = false;
                    } else {
                        $i++;
                    }
                }
                if ($comprobacion == true) {
                    array_push($colProductosRegionales, $objProducto);
                    $this -> setColObjProductosRegionales($colProductosRegionales);
                    $comprobacionIncorpora = true;
                }
            }
            return $comprobacionIncorpora;
        }

        public function retornarImporteProducto($codProducto) {
            $i = 0;
            $comprobacion = true;
            $colProductosImportados = $this -> getColObjProductosImportados();
            $precioVenta = 0;
            while ($i < count($colProductosImportados) && $comprobacion) {
                if ($codProducto == $colProductosImportados[$i] -> getCodigoBarra()) {
                    $precioVenta = $colProductosImportados[$i] -> darPrecioVenta();
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            $i = 0;
            $colProductosRegionales = $this -> getColObjProductosRegionales();
            if ($comprobacion == true) {
                while ($i < count($colProductosRegionales) && $comprobacion) {
                    if ($codProducto == $colProductosRegionales[$i] -> getCodigoBarra()) {
                        $precioVenta = $colProductosRegionales[$i] -> darPrecioVenta();
                        $comprobacion = false;
                    } else {
                        $i++;
                    }
                }
            }
            return $precioVenta;
        }

        public function retornarCostoProductoLocal() {
            $colProductosImportados = $this -> getColObjProductosImportados();
            $colProductosRegionales = $this -> getColObjProductosRegionales();
            $costoProducto = 0;
            $costoTotal = 0;
            for ($i = 0; $i < count ($colProductosImportados); $i++) {
                $costoProducto = $colProductosImportados[$i] -> getPrecioCompra();
                $costoProducto = $costoProducto * $colProductosImportados[$i] -> getStock();
                $costoTotal = $costoTotal + $costoProducto;
            }
            for ($i = 0; $i < count ($colProductosRegionales); $i++) {
                $costoProducto = $colProductosRegionales[$i] -> getPrecioCompra();
                $costoProducto = $costoProducto * $colProductosRegionales[$i] -> getStock();
                $costoTotal = $costoTotal + $costoProducto;
            }
            return $costoTotal;
        }

        public function darImporteVenta($colCodigosProductos) {
            $colProductosImportados = $this -> getColObjProductosImportados();
            $importeFinalVenta = 0;
            for($i = 0; $i < count($colCodigosProductos); $i++) {
                $j = 0;
                $comprobacion = true;
                while ($j < count($colProductosImportados) && $comprobacion) {
                    if($colCodigosProductos[$i] == $colProductosImportados[$j] -> getCodigoBarra()) {
                        $importeFinalVenta = $importeFinalVenta + $colProductosImportados[$j] -> darPrecioVenta();
                        $comprobacion = false;
                    } else {
                        $j++;
                    }
                }
            }
            if ($comprobacion = true) {
                $colProductosRegionales = $this -> getColObjProductosRegionales();
                for($i = 0; $i < count($colCodigosProductos); $i++) {
                    $j = 0;
                    $comprobacion = true;
                    while ($j < count($colProductosRegionales) && $comprobacion) {
                        if($colCodigosProductos[$i] == $colProductosRegionales[$j] -> getCodigoBarra()) {
                            $importeFinalVenta = $importeFinalVenta + $colProductosRegionales[$j] -> darPrecioVenta();
                            $comprobacion = false;
                        } else {
                            $j++;
                        }
                    }
                }
            }
            return $importeFinalVenta;
        }

        public function registrarVenta($colCodigosProductos, $objCliente) {
            $colProductosImportados = $this -> getColObjProductosImportados();
            $colProductosRegionales = $this -> getColObjProductosRegionales();
            $colVentasLocal = $this -> getColObjVentas();
            $productosVendidos = [];
            for ($i = 0; $i < count($colCodigosProductos); $i++) {
                $j = 0;
                $comprobacion = true;
                while ($j < count($colProductosImportados) && $comprobacion) {
                    if($colCodigosProductos[$i] == $colProductosImportados[$j] -> getCodigoBarra()) {
                        $stockCarga = $colProductosImportados[$j] -> getStock();
                        $stockCarga--;
                        $colProductosImportados[$j] -> setStock($stockCarga);
                        $this -> setColObjProductosImportados($colProductosImportados);
                        $colProductosImportados[$j] -> setStock(1);
                        array_push($productosVendidos, $colProductosImportados[$j]);
                        $comprobacion = false;
                    } else {
                        $j++;
                    }
                }
            }
            if ($comprobacion = true) {
                $colProductosRegionales = $this -> getColObjProductosRegionales();
                for($i = 0; $i < count($colCodigosProductos); $i++) {
                    $j = 0;
                    $comprobacion = true;
                    while ($j < count($colProductosRegionales) && $comprobacion) {
                        if($colCodigosProductos[$i] == $colProductosRegionales[$j] -> getCodigoBarra()) {
                            $stockCarga = $colProductosRegionales[$j] -> getStock();
                            $stockCarga--;
                            $colProductosRegionales[$j] -> setStock($stockCarga);
                            $this -> setColObjProductosImportados($colProductosRegionales);
                            $colProductosRegionales[$j] -> setStock(1);                     
                            array_push($productosVendidos, $colProductosRegionales[$j]);
                            $comprobacion = false;
                        } else {
                            $j++;
                        }
                    }
                }
            }
            if ($productosVendidos != []) {
                $ventaNueva = new Venta (date("d/m/Y"), $productosVendidos, $objCliente, $this -> darImporteVenta($colCodigosProductos));
                array_push ($colVentasLocal, $ventaNueva);
                $this -> setColObjVentas($colVentasLocal);
            }
        }

        public function colTotalProductosVendidos($anio) {
            $colTotalProductosVendidos = [];
            $colVentasLocal = $this -> getColObjVentas();
            for ($i = 0; $i < count ($colVentasLocal); $i++) {
                $fecha = $colVentasLocal[$i] -> getFecha();
                if (date("Y", strtotime($fecha)) == $anio) {
                    for ($j = 0; $j < count($colVentasLocal[$i] -> getColObjProductos()); $j++) {
                        array_push($colTotalProductosVendidos, $colVentasLocal[$i] -> getColObjProductos()[$j]);
                    }
                }
            }
            return $colTotalProductosVendidos;
        }

        /*
        public function colTotalCodigosVentas($anio) {
            $colTotalCodigosVentas = [];
            $colTotalProductosVendidos = $this -> colTotalProductosVendidos($anio);
            for ($i = 0; $i < count($colTotalProductosVendidos); $i++) {
                if ($colTotalCodigosVentas == []) {
                    array_push($colTotalCodigosVentas, $colTotalProductosVendidos[$i] -> getCodigoBarra());
                } else {
                    for ($j = 0; $j < count($colTotalCodigosVentas); $j++) {
                        $comprobacion = true;
                        if ($colTotalCodigosVentas[$j] == $colTotalProductosVendidos[$i] -> getCodigoBarra()) {
                            $comprobacion = false;
                        }
                    }
                    if ($comprobacion == true) {
                        array_push($colTotalCodigosVentas, $colTotalProductosVendidos[$i] -> getCodigoBarra());
                    }
                }
            }
            return $colTotalCodigosVentas;
        }
        */

        public function contarProductosVendidos($anio) {
            $productosVendidos = $this -> colTotalProductosVendidos($anio);
            $contadorProductosVendidos = [];
            for ($i = 0; $i < count($productosVendidos); $i++) {
                if ($contadorProductosVendidos == []) {
                    array_push($contadorProductosVendidos, $productosVendidos[$i]);
                } else {
                    for ($j = 0; $j < count($contadorProductosVendidos); $j++) {
                        $comprobacion = true;
                        if ($contadorProductosVendidos[$j] -> getCodigoBarra() == $productosVendidos[$i] -> getCodigoBarra()) {
                            $stockCarga = $contadorProductosVendidos[$j] -> getStock();
                            $stockCarga++;
                            $contadorProductosVendidos[$j] -> setStock($stockCarga);
                            $comprobacion = false;
                        }
                    }
                    if ($comprobacion == true) {
                        array_push($contadorProductosVendidos, $productosVendidos[$i]);
                    }
                }
            }
            return $contadorProductosVendidos;
        }

        public function informarProductosMasVendidos($anio, $n) {
            $productosVendidos = $this -> contarProductosVendidos($anio);
            $productosVendidosOrdenados = [];
            if ($n > count($productosVendidos)) {
                $n = count($productosVendidos);
            }
            for ($i = 0; $i < $n; $i++) {
                $stockMaximo = PHP_INT_MIN;
                $productoVendidoMayor = "";
                $indiceMayor = PHP_INT_MIN;
                for ($j = 0; $j < count($productosVendidos); $j++) {
                    if ($productosVendidos[$j] -> getStock() > $stockMaximo) {
                        $stockMaximo = $productosVendidos[$j] -> getStock();
                        $productoVendidoMayor = $productosVendidos[$j];
                        $indiceMayor = $j;
                    }
                }
                unset($productosVendidos[$indiceMayor]);
                $productosVendidos = array_values($productosVendidos);
                array_push($productosVendidosOrdenados, $productoVendidoMayor);
            }
            return $productosVendidosOrdenados;
        }

        public function promedioVentasImportados() {
            $totalVentasImportados = 0;
            $colVentasLocal = $this -> getColObjVentas();
            for ($i = 0; $i < count($colVentasLocal); $i++) {
                for ($j = 0; $j < count($colVentasLocal[$i] -> getColObjProductos()); $j++) {
                    if ($colVentasLocal[$i] -> getColObjProductos()[$j] -> getTipo() == "Importado") {
                        $totalVentasImportados = $totalVentasImportados++;
                    }
                }
            }
            $promedio = $totalVentasImportados / 30;
            return $promedio;
        }

        public function ventasXCliente($tipoDoc, $numDoc) {
            $colVentasXCliente = [];
            $colVentasLocal = $this -> getColObjVentas();
            for ($i = 0; $i < count($colVentasLocal); $i++) {
                if ($tipoDoc == $colVentasLocal[$i] -> getObjCliente() -> getTipoDoc() && $numDoc == $colVentasLocal[$i] -> getObjCliente() -> getNumDoc()) {
                    array_push($colVentasXCliente, $colVentasLocal[$i]);
                }
            }
            return $colVentasXCliente;
        }

        public function informarConsumoCliente($tipoDoc, $numDoc) {
            $colVentasXCliente = $this -> ventasXCliente($tipoDoc, $numDoc);
            $colConsumoCliente = [];
            for ($i = 0; $i < count($colVentasXCliente); $i++) {
                for ($j = 0; $j < count($colVentasXCliente[$i] -> getColObjProductos()); $j++) {
                    array_push($colConsumoCliente, $colVentasXCliente[$i] -> getColProductos[$j]);
                }

            }
            return $colConsumoCliente;
        }

        public function productoMasEconomico($rubro) {
            $precioMenor = PHP_INT_MAX;
            $productoMenor = "";
            if ($rubro == "Importados") {
                $colProductosImportados = $this -> getColObjProductosImportados();
                for ($i = 0; $i < count ($colProductosImportados); $i++) {
                    if ($precioMenor > $colProductosImportados[$i] -> darPrecioVenta()) {
                        $precioMenor = $colProductosImportados[$i] -> darPrecioVenta();
                        $productoMenor = $colProductosImportados[$i];
                    }
                }
            } elseif ($rubro == "Regional") {
                $colProductosRegionales = $this -> getColObjProductosRegionales();
                for ($i = 0; $i < count ($colProductosRegionales); $i++) {
                    if ($precioMenor > $colProductosRegionales[$i] -> darPrecioVenta()) {
                        $precioMenor = $colProductosRegionales[$i] -> darPrecioVenta();
                        $productoMenor = $colProductosRegionales[$i];
                    }
                }
            }
            return $productoMenor;
        }

        public function stringProductosImportados() {
            $cadenaProductosImportados = "\n";
            $colProductosImportados = $this -> getColObjProductosImportados();
            for ($i = 0; $i < count ($colProductosImportados); $i++) {
                if ($i < (count ($colProductosImportados) - 1)) {
                    $cadenaProductosImportados = $cadenaProductosImportados . $colProductosImportados[$i] . "\n";
                } else {
                    $cadenaProductosImportados = $cadenaProductosImportados . $colProductosImportados[$i];
                }
            }
            if ($cadenaProductosImportados == "\n") {
                $cadenaProductosImportados = $cadenaProductosImportados . "No hay productos importados en el local.";
            }
            return $cadenaProductosImportados;
        }

        public function stringProductosRegionales() {
            $cadenaProductosRegionales = "\n";
            $colProductosRegionales = $this -> getColObjProductosRegionales();
            for ($i = 0; $i < count ($colProductosRegionales); $i++) {
                if ($i < (count ($colProductosRegionales) - 1)) {
                    $cadenaProductosRegionales = $cadenaProductosRegionales . $colProductosRegionales[$i] . "\n";
                } else {
                    $cadenaProductosRegionales = $cadenaProductosRegionales . $colProductosRegionales[$i];
                }
            }
            if ($cadenaProductosRegionales == "\n") {
                $cadenaProductosRegionales = $cadenaProductosRegionales . "No hay productos regionales en el local.";
            }
            return $cadenaProductosRegionales;
        }

        public function stringVentas() {
            $cadenaVentas = "\n";
            $colVentas = $this -> getColObjVentas();
            for ($i = 0; $i < count ($colVentas); $i++) {
                if ($i < (count ($colVentas) - 1)) {
                    $cadenaVentas = $cadenaVentas . $colVentas[$i] . "\n";
                } else {
                    $cadenaVentas = $cadenaVentas . $colVentas[$i];
                }
            }
            if ($cadenaVentas == "\n") {
                $cadenaVentas = $cadenaVentas . "No hay ventas registradas en el local.";
            }
            return $cadenaVentas;
        }

        public function __toString() {
            $cadena = "\n" . "Listado de productos importados del local: " . $this -> stringProductosImportados() . 
            "\n" . "\n" . "Listado de productos regionales del local: " . $this -> stringProductosRegionales() . 
            "\n" . "\n" . "Listado de ventas del local: " . $this -> stringVentas();
            return $cadena;
        }

    }

?>