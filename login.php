<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="login.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Login</title>
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
      <a href="login.php">Ingresar</a>
    </div>
    <div class="barra-botones">
      <button class="boton-carrito" onclick="window.location.href='carrito_de_compra.php'">
        <img src="fotos/carrito_de_compras.png" alt="C">
      </button>
    </div>
  </div>
  <div class="login-container">
    <h2>Login</h2>
    <?php

    // Replace with your actual username and password
    $validUsername = "admin";
    $validPassword = "password";

    if ($_POST) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit();
        } else {
            $errorMessage = "Invalid username or password.";
        }
    }
    ?>

    <?php if (isset($errorMessage)) : ?>
    <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>

  </div>
</div>
</body>

</html>