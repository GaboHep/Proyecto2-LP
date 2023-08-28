<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="general_container">
        <div class="encabezado-container">
            <div class="encabezado">
                <h1>Marketplace</h1>
            </div>
        </div>
        <div class="principal_container">
            <div class="carrito-container">
                <?php
                include("inicial.php");

                if (isset($_GET['producto'])) {
                    $nombre_producto = $_GET['producto'];

                    foreach ($productos as $producto) {
                        if ($producto['nombre'] == $nombre_producto) {
                            $selected_product = $producto;
                            break;
                        }
                    }

                    if ($selected_product !== null): ?>
                        <h2>Carrito de Compras</h2>
                        <div class="producto-en-carrito">
                            <img src="<?php echo $selected_product['imagen']; ?>" alt="<?php echo $selected_product['nombre']; ?>">
                            <h3><?php echo $selected_product['nombre']; ?></h3>
                            <p>Precio: $<?php echo $selected_product['precio']; ?></p>
                            
                        </div>
                        
                        <div class="metodo-pago-container">
                            <label for="metodo-pago">Método de Pago:</label>
                            <select id="metodo-pago" name="metodo-pago">
                                <option value="efectivo">Efectivo</option>
                                <option value="tarjeta">Tarjeta</option>
                            </select>
                        </div>
                        
                        <button id="confirmar-compra-btn">Confirmar Su Compra</button>
                    <?php else: ?>
                        <p>No se ha seleccionado ningún producto válido.</p>
                    <?php endif;
                } else {
                    echo "<p>No se ha especificado ningún producto.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
