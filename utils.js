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


document.addEventListener('DOMContentLoaded', function() {
    
    var username = "hola";

    var match = document.cookie.match(new RegExp('name=([^;]+)'));
    if (match) username = decodeURIComponent(match[1]);

    var seccionPublicar = document.getElementById('publicar');
    var seccionEditar = document.getElementById('editar');

    console.log(username);
    console.log(seccionPublicar);
    console.log(seccionEditar);

    if (!username || username !== 'admin') {
        seccionPublicar.style.display = "none";
        seccionEditar.style.display = "none";
    } else {
        console.log('El usuario es un administrador.');
    }
})

$(document).ready(function() {
    document.getElementById("categorias-seleccion").addEventListener("change", filtrarProductosPorCategoria);
    filtrarProductosPorCategoria();
})

$(document).ready(function() {
    document.getElementById("value-sortin").addEventListener("change", sortingProductosPorPrecio);
    sortingProductosPorPrecio();
})

