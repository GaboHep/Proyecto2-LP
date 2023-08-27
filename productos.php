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

      public static function compararPorPrecio($a, $b) {
        if ($a->precio == $b->precio) {
            return 0;
        }
        return ($a->precio < $b->precio) ? -1 : 1;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $categoria = $_POST["categoria"];
    $precio = $_POST["precio"];

    $producto = new Producto($nombre, $cantidad, $categoria, $precio);
    $producto->publicarProducto();
}

function crearProducto() {
    $nombre = readline("Ingrese el nombre del producto: ");
    $cantidad = intval(readline("Ingrese la cantidad en stock: "));
    $categoria = readline("Ingrese la categoría: ");
    $precio = floatval(readline("Ingrese el precio: "));

    $producto = new Producto($nombre, $cantidad, $categoria, $precio);
    $producto->publicarProducto();
}

$productos = array();

for ($i = 0; $i < 3; $i++) {
    $nombre = readline("Ingrese el nombre del producto: ");
    $cantidad = intval(readline("Ingrese la cantidad en stock: "));
    $categoria = readline("Ingrese la categoría: ");
    $precio = floatval(readline("Ingrese el precio: "));

    $producto = new Producto($nombre, $cantidad, $categoria, $precio);
    $productos[] = $producto;
}

// Ordenar los productos por precio utilizando la función compararPorPrecio
usort($productos, array("Producto", "compararPorPrecio"));

// Imprimir la lista ordenada de productos
foreach ($productos as $producto) {
    $producto->publicarProducto();
}
?>
