<form action="producto.php" method="POST">
    <label for="nombre">Nombre del Producto:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>

    <label for="categoria">Categoría:</label>
    <select id="categoria" name="categoria" required>
        <option value="snacks">Snacks</option>
        <option value="ropa">Bebidas</option>
        <option value="alimentos">Congelados</option>
        <option value="hogar">Frutas </option>
      <option value="hogar">Verduras</option>
    </select><br><br>
    
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" min="0" required><br><br>

    <input type="submit" value="Guardar Producto">
    
</form>