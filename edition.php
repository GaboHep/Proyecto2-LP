<?php
session_start();
if (isset($_GET['producto'])) {
    $productoNombre = urldecode($_GET['producto']);
    
    // Buscar el producto en la sesión por su nombre
    foreach ($_SESSION['productos'] as $indice => $producto) {
        if ($producto['nombre'] === $productoNombre) {
            $idProducto = $indice;
            break;
        }
    }

    if (isset($idProducto)) {
        $producto = $_SESSION['productos'][$idProducto];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar la edición del producto y actualizar los datos en la sesión
            $producto['nombre'] = $_POST['nombre'];
            $producto['cantidad'] = $_POST['cantidad'];
            $producto['categoria'] = $_POST['categoria'];
            $producto['precio'] = $_POST['precio'];

            $_SESSION['productos'][$idProducto] = $producto;

            // Redirigir a la página de inicio (index.php)
            header('Location: index.php');
            exit;
        }
    } else {
        // Manejar el caso en el que el producto no se encuentre
        header('Location: creacion_productos.php');
        exit;
    }
} else {
    // Manejar el caso en el que no se proporciona un nombre de producto válido
    header('Location: creacion_productos.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edición de Producto</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="utils.js"></script>
</head>

<body>
    <div class="general_container">
        <div class="encabezado-container">
            <div class="encabezado">
                <h1>Marketplace</h1>
            </div>
            <div class="botones">
                <a href="index.php">Home</a>
                <a href="creacion_productos.php">Publicar</a>
            </div>
            <div class="barra-botones">
                <input type="text" placeholder="Buscar...">
                <button class="boton-carrito" onclick="window.location.href='carrito_de_compra.php'">
                    <img src="fotos/carrito_de_compras.png" alt="C">
                </button>
            </div>
        </div>
        <div class="creacion_producto">
            <div class="formulario_creacion">
                <form enctype="multipart/form-data" action="" method="POST">
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required><br><br>

                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" min="1" value="<?php echo $producto['cantidad']; ?>" required><br><br>

                    <label for="categoria">Categoría:</label>
                    <select id="categoria" name="categoria" required>
                        <option value="Snacks" <?php echo ($producto['categoria'] === 'Snacks') ? 'selected' : ''; ?>>Snacks</option>
                        <option value="Bebidas" <?php echo ($producto['categoria'] === 'Bebidas') ? 'selected' : ''; ?>>Bebidas</option>
                        <option value="Congelados" <?php echo ($producto['categoria'] === 'Congelados') ? 'selected' : ''; ?>>Congelados</option>
                        <option value="Frutas" <?php echo ($producto['categoria'] === 'Frutas') ? 'selected' : ''; ?>>Frutas</option>
                        <option value="Verduras" <?php echo ($producto['categoria'] === 'Verduras') ? 'selected' : ''; ?>>Verduras</option>
                    </select><br><br>

                    <label for="precio">Precio:</label>
                    <input id="precio" name="precio" step="0.01" min="0" value="<?php echo $producto['precio']; ?>" required><br><br>

                    <input class="submit" type="submit" value="Guardar Cambios">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
