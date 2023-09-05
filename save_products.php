<?php  
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
              array_push($_SESSION['productos'],$nuevoProducto);
              header('Location: index.php');
              die();
          }
        } 
      }
?>