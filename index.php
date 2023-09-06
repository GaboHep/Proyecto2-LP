<?php
session_start();
error_reporting(0);
setcookie("username", $_SESSION["username"]);



?>
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
                <a href="login.php">Ingresar</a>
                <a href="creacion_productos.php" id="publicar">Publicar</a>
                <a href="editar_productos.php" id="editar">Editar</a>
            
            </div>
            <div class="barra-botones">
                <button class="boton-carrito" onclick="window.location.href='carrito_de_compras.php'">
                    <img src="fotos/carrito_de_compras.png" alt="C">
                </button>
            </div>
        </div>
        <div class="principal_container">
            <div class="top-panel">
                <div class="titulo-panel">
                    <h2>Categorías principales</h2>
                </div>
                <div class="categoria-panel">
                    <div class="styled-select">
                        <select id="categorias-seleccion">
                            <option value="">Seleccionar categoría</option>
                            <option value="Snacks">Snacks</option>
                            <option value="Bebidas">Bebidas</option>
                            <option value="Congelados">Congelados</option>
                            <option value="Frutas">Frutas</option>
                            <option value="Verduras">Verduras</option>
                        </select>
                    </div>
                </div>
                <div class="sorting-panel">
                    <div class="styled-select">
                        <select id="value-sortin">
                            <option value="">Seleccionar un orden de precio</option>
                            <option value="descendente">Ordenar por precio: alto a bajo</option>
                            <option value="ascendente">Ordenar por precio: bajo a alto</option>
                        </select>
                    </div>

                </div>
            </div>
            <?php include("inicial.php"); ?>
        </div>
    </div>
</body>

</html>