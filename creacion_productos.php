<!DOCTYPE html>
<html>

<head>
  <title>Marketplace</title>
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
    <div class="principal_container">
      <div class="panel">
        <form action="index.php" method="POST">
          <label for="nombre">Nombre del Producto:</label>
          <input type="text" id="nombre" name="nombre" required><br><br>

          <label for="cantidad">Cantidad:</label>
          <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>

          <label for="categoria">Categoría:</label>
          <select id="categoria" name="categoria" required>
            <option value="">Seleccionar categoría</option>
            <option value="Snacks">Snacks</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Congelados">Congelados</option>
            <option value="Frutas">Frutas</option>
            <option value="Verduras">Verduras</option>
          </select><br><br>

          <label for="precio">Precio:</label>
          <input id="precio" name="precio" step="0.01" min="0" required><br><br>

          <label for="imagen">Subir una imagen:</label>
          <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>
          
          <input type="submit" value="Guardar Producto">

        </form>

        <?php
        
          if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
              $nombreArchivo = $_FILES['imagen']['name'];
              $tipoArchivo = $_FILES['imagen']['type'];
              $tamañoArchivo = $_FILES['imagen']['size'];
              $tempArchivo = $_FILES['imagen']['tmp_name'];
      
              if (strpos($tipoArchivo, 'image') === 0) {
                  $rutaDestino = 'fotos/' . $nombreArchivo;
                  move_uploaded_file($tempArchivo, $rutaDestino);
                  echo $rutaDestino;
                  $nuevoProducto = [
                      'nombre' => $_POST['nombre'],
                      'cantidad' => $_POST['cantidad'],
                      'categoria' => $_POST['categoria'],
                      'precio' => $_POST['precio'],
                      'imagen' => $rutaDestino, 
                  ];

                  $productos[] = $nuevoProducto;
                  exit; 
              }
            } 
          }
        ?>
      </div>
    </div>
  </div>
</body>

</html>