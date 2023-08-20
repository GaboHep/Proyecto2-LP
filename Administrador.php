<?php
class Administrador {
    // Función para verificar si el usuario es administrador
    public function is_admin() {
        // Reemplaza esta línea con tu propia lógica para verificar si el usuario es administrador
        return true;
    }

    // Función para editar un producto existente
    public function edit_product($product_id, $name, $price) {
        if($this->is_admin()) {
            // Código para editar un producto en un archivo .csv
            $file = fopen('products.csv', 'r');
            $data = array();
            while(($row = fgetcsv($file)) !== FALSE) {
                if($row[0] == $product_id) {
                    $row[1] = $name;
                    $row[2] = $price;
                }
                $data[] = $row;
            }
            fclose($file);
            $file = fopen('products.csv', 'w');
            foreach($data as $row) {
                fputcsv($file, $row);
            }
            fclose($file);
            echo "Producto actualizado con éxito";
        }
        else {
            echo "No tienes permiso para editar productos";
        }
    }
}
?>
