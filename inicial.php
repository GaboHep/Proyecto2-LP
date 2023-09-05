<div class="productos-panel panel">
    <?php

    $productos = array(
        array(
            "nombre" => "Doritos",
            "cantidad" => "16",
            "categoria" => "Snacks",
            "precio" => "1.50",
            "imagen" => "fotos/doritos.jpg",
        ),
        array(
            "nombre" => "Manzana",
            "cantidad" => "25",
            "categoria" => "Frutas",
            "precio" => "0.25",
            "imagen" => "fotos/manzana.jpg",
        ),
        array(
            "nombre" => "Coca Cola",
            "cantidad" => "36",
            "categoria" => "Bebidas",
            "precio" => "1.20",
            "imagen" => "fotos/coca.jpeg",
        ),
        array(
            "nombre" => "Pera",
            "cantidad" => "68",
            "categoria" => "Frutas",
            "precio" => "0.35",
            "imagen" => "fotos/pera.jpg",
        ),
        array(
            "nombre" => "Manzana",
            "cantidad" => "25",
            "categoria" => "Frutas",
            "precio" => "0.25",
            "imagen" => "fotos/manzana.jpg",
        ),
        array(
            "nombre" => "Manzana",
            "cantidad" => "25",
            "categoria" => "Frutas",
            "precio" => "0.25",
            "imagen" => "fotos/manzana.jpg",
        )

    );
    ?>
    
    <?php foreach ($productos as $producto): ?>
        <div class="producto" data-categoria="<?php echo $producto['categoria']; ?>">
            <img class="card-imagen" src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <div class= "detalle_producto">
                <h5><?php print "PRECIO NORMAL: " ?></h5>
                <h3><?php print "$". $producto['precio']; ?></h3>
                <p class="descripcion"><?php echo $producto['nombre']; ?></p>
                <p class="descripcion"><?php print "Stock: " . $producto['cantidad']; ?></p> 
                <p class="descripcion"><?php print "Categoría: " . $producto['categoria']; ?></p>    
            </div>
            <div class="reservacion">
                <a href="carrito_de_compras.php?producto=<?php echo urlencode($producto['nombre']); ?>">
                    <button class="reservar">Reservar</button>
                </a>
            </div>
        </div>
    <?php endforeach; ?>


</div>