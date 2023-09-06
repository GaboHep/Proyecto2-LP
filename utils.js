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

function sortingProductosPorPrecio() {
    var valueSorting = document.getElementById("value-sortin").value;
    var productos = document.querySelectorAll(".producto");
    console.log(productos);
    Array.from(productos).sort(function(a, b) {
        var precioA = a.getAttribute("data-precio");
        var precioB = b.getAttribute("data-precio");
        if (valueSorting === "ascendente") {
            return precioA - precioB;
        } else if (valueSorting === "descendente") {
            return precioB - precioA;
        }
    }).forEach(function(producto) {
        document.querySelector(".productos-panel").appendChild(producto);
    });


}


$(document).ready(function() {
    document.getElementById("categorias-seleccion").addEventListener("change", filtrarProductosPorCategoria);
    filtrarProductosPorCategoria();
})

$(document).ready(function() {
    document.getElementById("value-sortin").addEventListener("change", sortingProductosPorPrecio);
    sortingProductosPorPrecio();
})

