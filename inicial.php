<div class="productos-panel panel">
    <?php
        
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
          
    );
    ?>
    <?php foreach ($productos as $producto): ?>
        <div class="producto">
            <h2><?php echo $producto['nombre']; ?></h2>
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <p><?php echo $producto['subtitulo']; ?></p>    
        </div>
    <?php endforeach; ?>
</div>