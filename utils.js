function filtrarProductosPorCategoria() {
    var categoriaSeleccionada = document.getElementById("categorias-seleccion").value;
    var productos = document.querySelectorAll(".producto");

    productos.forEach(function(producto) {
        var categoriaProducto = producto.getAttribute("data-categoria");
        if (categoriaSeleccionada === ""){
            producto.style.display = "block";
        } else if (categoriaSeleccionada != categoriaProducto) {
            console.log("Se eliminaron los productos que no tienen la categoría");
            producto.style.display = "none"; 
        }else{
            console.log("Filtro con exito");
            producto.style.display = "block";
        }
    });
}

$(document).ready(function() {
    document.getElementById("categorias-seleccion").addEventListener("change", filtrarProductosPorCategoria);
    filtrarProductosPorCategoria();
})
