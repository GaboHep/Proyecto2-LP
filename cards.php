<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="card">
        <h2><?php echo $_POST["nombre"]; ?></h2>
        <p><strong>Categoría:</strong> <?php echo $_POST["categoria"]; ?></p>
        <p><strong>Cantidad:</strong> <?php echo $_POST["cantidad"]; ?> unidades</p>
        <p><strong>Precio:</strong> $<?php echo $_POST["precio"]; ?></p>
    </div>
</body>
</html>
