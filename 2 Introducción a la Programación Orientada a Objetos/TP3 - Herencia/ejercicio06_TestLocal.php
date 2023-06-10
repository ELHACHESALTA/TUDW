<?php

    include_once("ejercicio06_Persona.php");
    include_once("ejercicio06_Cliente.php");
    include_once("ejercicio06_Rubro.php");
    include_once("ejercicio06_Producto.php");
    include_once("ejercicio06_ProductoImportado.php");
    include_once("ejercicio06_ProductoRegional.php");
    include_once("ejercicio06_Venta.php");
    include_once("ejercicio06_Local.php");

    // Se crean 2 objetos de la clase Rubro
    
    $rubro1 = new Rubro("Conservas", 35);
    $rubro2 = new Rubro("regalos", 55);

    // Se crean 4 objetos de la clase Producto

    $producto1 = new ProductoImportado(111111, "Vino", 10, 10, 10, $rubro1);
    $producto2 = new ProductoImportado(222222, "Wiski", 10, 10, 20, $rubro2);
    $producto3 = new ProductoRegional(333333, "Miel", 10, 10, 30, $rubro1);
    $producto4 = new ProductoRegional(444444, "Manzana", 10, 10, 40, $rubro2);

    // Se crea 1 objeto de la clase Local y se incorporan las instancias de la clase Producto creadas

    $colProductosImportados = [$producto1, $producto2];
    $colProductosRegionales = [$producto3, $producto4];

    $local = new Local ($colProductosImportados, $colProductosRegionales, []);

    // Se incorpora nuevamente la última instancia creada de la clase Producto y se visualiza el $local

    if ($local -> incorporarProductoLocal($producto4) == true) {
        echo "Se agrego correctamente el producto al local." . "\n";
    } else {
        echo "No se pudo agregar el producto al local." . "\n";
    }

    echo "\n" . "Se visualiza los datos del local: " . 
    "\n" . $local . 
    "\n";

    // Se retorna el precio de venta de cada uno de los productos creados

    echo "\n" . "Lista de precios de venta de productos: " . 
    "\n" . "Precio del producto 111111: " . $local -> retornarImporteProducto(111111) . 
    "\n" . "Precio del producto 222222: " . $local -> retornarImporteProducto(222222) . 
    "\n" . "Precio del producto 333333: " . $local -> retornarImporteProducto(333333) . 
    "\n" . "Precio del producto 444444: " . $local -> retornarImporteProducto(444444) . 
    "\n";
    
    // Se retorna el costo en productos que tiene hasta el momento la tienda

    echo "\n" . "Todos los productos de la tienda suman un costo total de: " . $local -> retornarCostoProductoLocal();

    /*
    $cliente1 = new Cliente ("dni", 36666666, "Fede", "Herrera");
    $local -> registrarVenta([111111, 222222, 444444, 444444], $cliente1);
    */

?>