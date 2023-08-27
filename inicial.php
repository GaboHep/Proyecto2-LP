<!-- Panel de Título de Categorías Principales -->
<div class="titulo-panel">
    <h2>Categorías principales</h2>
</div>

    <!-- Panel de Productos -->
    <div class="productos-panel">
        <?php
        // Simulación de datos de productos desde la base de datos
        $productos = array(
            array(
                "nombre" => "Camiseta",
                "imagen" => "ruta_a_camiseta.jpg",
                "subtitulo" => "¡Nueva colección de verano!"
            ),
            array(
                "nombre" => "Zapatos",
                "imagen" => "ruta_a_zapatos.jpg",
                "subtitulo" => "Descubre nuestros últimos modelos"
            )
            // Agregar más productos aquí si es necesario
        );
        ?>
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?php echo $producto['nombre']; ?></h2>
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <p><?php echo $producto['subtitulo']; ?></p>
                <!-- Agregar más detalles si es necesario -->
            </div>
        <?php endforeach; ?>
    </div>