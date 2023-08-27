<div class="productos-panel panel">
    <?php

    $productos = array(
        array(
            "nombre" => "Doritos",
            "cantidad" => "16",
            "categoria" => "Snack",
            "precio" => "1.50",
            "imagen" => "fotos/doritos.jpg",
        ),
        array(
            "nombre" => "Manzana",
            "cantidad" => "25",
            "categoria" => "Fruta",
            "precio" => "0.25",
            "imagen" => "fotos/manzana.jpg",
        )
          
    );
    ?>
    
    <?php foreach ($productos as $producto): ?>
        <div class="producto">
            <img class="card-imagen" src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <h2><?php echo $producto['nombre']; ?></h2>
            <p><?php print "Stock: " . $producto['cantidad']; ?></p> 
            <p><?php echo $producto['categoria']; ?></p> 
            <p><?php print "Precio: " . "$". $producto['precio']; ?></p>       
        </div>
    <?php endforeach; ?>


</div>