<!DOCTYPE html>
<html>
<head>
    <title>Marketplace</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        /* Estilos para el contenedor del encabezado */
        .encabezado-container {
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        /* Estilos para el encabezado */
        .encabezado {
            display: flex;
            align-items: center;
            flex-grow: 1;
        }
        .encabezado h1 {
            margin: 0;
            padding: 0;
        }
        /* Estilos para los botones */
        .botones {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
            margin-left: 10px; /* Espacio hacia la izquierda */
        }
        /* Estilos para la barra de búsqueda y botón de carrito */
        .barra-botones {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .boton-carrito {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .boton-carrito img {
            max-height: 30px;
        }
        /* Estilos para el panel de título de categorías principales */
        .titulo-panel {
            background-color: #f0f0f0; /* Fondo gris más claro */
            padding: 10px;
        }
        /* Estilos para el panel de productos */
        .productos-panel {
            background-color: #e0e0e0; /* Fondo gris aún más claro */
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        /* Estilos para los productos */
        .producto {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .producto img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="encabezado-container">
        <div class="encabezado">
            <h1>Marketplace</h1>
        </div>
        <div class="botones">
            <a href="#home">Home</a>
            <a href="#tiendas">Tiendas</a>
        </div>
        <div class="barra-botones">
            <input type="text" placeholder="Buscar...">
            <button class="boton-carrito" onclick="window.location.href='carrito_de_compra.php'">
                <img src="fotos/carrito_de_compras.png" alt="C">
            </button>
        </div>
    </div>
    
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

    <!-- Más contenido aquí si es necesario -->
</body>
</html>
