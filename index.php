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
                        <select class="search_category select2-hidden-accessible" data-select2-id="select2-data-1-as9t" tabindex="-1" aria-hidden="true" >
                            <option value="" data-select2-id="select2-data-3-1gum">Buscar categoría</option>
                            <option value="" data-select2-id="select2-data-6-8ssi">Snacks</option>
                            <option value="" data-select2-id="select2-data-7-g3s9">Bebidas</option>
                            <option value="" data-select2-id="select2-data-8-74ju">Congelados</option>
                            <option value="" data-select2-id="select2-data-9-0k9o">Frutas</option>
                            <option value="" data-select2-id="select2-data-10-7ehr">Verduras</option>
                        <select>
                    </div>
                </div>
                <?php include("inicial.php"); ?> 
                <?php include("creacion_productos.php"); ?> 
            </div>
        </div>
    </body>
</html>


