<!DOCTYPE html>
<html>
    <head>
        <title>Marketplace</title>
        <link href="style.css" rel="stylesheet" type="text/css" />    
    </head>
    <body>
        <div class= "general_container">   
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
            <div class="principal_container">
                <?php include("inicial.php"); ?> 
            </div>
        </div>
    </body>
</html>
