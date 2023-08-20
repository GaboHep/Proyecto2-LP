<?php
class Producto {
    public $nombre;
    public $cantidad;
    public $categoria;
    public $precio;

    public function __construct($nombre, $cantidad, $categoria, $precio) {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->categoria = $categoria;
        $this->precio = $precio;
    }

    public function publicarProducto() {
        echo "Producto publicado: " . $this->nombre . " - Cantidad: " . $this->cantidad . " - Categoría: " . $this->categoria . " - Precio: $" . $this->precio;
    }
}

function crearProducto() {
    $nombre = readline("Ingrese el nombre del producto: ");
    $cantidad = intval(readline("Ingrese la cantidad en stock: "));
    $categoria = readline("Ingrese la categoría: ");
    $precio = floatval(readline("Ingrese el precio: "));

    $producto = new Producto($nombre, $cantidad, $categoria, $precio);
    $producto->publicarProducto();
}

crearProducto();
?>