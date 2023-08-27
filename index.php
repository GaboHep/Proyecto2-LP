<!DOCTYPE html>
<html>

<head>
    <title>Marketplace</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="general_container">
        <div class="encabezado-container">
            <div class="encabezado">
                <h1>Marketplace</h1>
            </div>
            <div class="botones">
                <a href="#home">Home</a>
                <a href="#tiendas">Publicar</a>
            </div>
            <div class="barra-botones">
                <input type="text" placeholder="Buscar...">
                <button class="boton-carrito" onclick="window.location.href='carrito_de_compra.php'">
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
                        <select>
                            <option value="">Seleccionar categoría</option>
                            <option value="snacks">Snacks</option>
                            <option value="bebidas">Bebidas</option>
                            <option value="congelados">Congelados</option>
                            <option value="frutas">Frutas</option>
                            <option value="verduras">Verduras</option>
                        </select>
                        <div class="select-dropdown">
                            <option value="">Seleccionar categoría</option>
                            <option value="snacks">Snacks</option>
                            <option value="bebidas">Bebidas</option>
                            <option value="congelados">Congelados</option>
                            <option value="frutas">Frutas</option>
                            <option value="verduras">Verduras</option>
                        </div>
                    </div>
                </div>
                <div class="sorting-panel">
                    <div class="styled-select">
                        <select>
                            <option value="descendente">Ordenar por precio: alto a bajo</option>
                            <option value="ascendente">Ordenar por precio: bajo a alto</option>
                            <option value="ultimos">Ultimos Agregados</option>
                        </select>
                        <div class="select-dropdown">
                            <option value="descendente">Ordenar por precio: alto a bajo</option>
                            <option value="ascendente">Ordenar por precio: bajo a alto</option>
                            <option value="ultimos">Ultimos Agregados</option>
                        </div>
                    </div>

                </div>
            </div>
            <?php include("inicial.php"); ?>
        </div>
    </div>
</body>

</html>