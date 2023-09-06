<?php session_start();  
class Administrador {
    // Función para verificar si el usuario es administrador
    public function is_admin() {
        if(isset($_SESSION['username'])) {
            if($_SESSION['username'] == 'admin') {
                return true;
            }
        }
        return false;
    }

    // Función para editar un producto existente
    public function edit_product($product_id, $name, $price) {
        if($this->is_admin()) {
            // Código para editar un producto en un archivo .csv
            $file = fopen('products.csv', 'r');
            $data = array();
            $product_found = false;
            while(($row = fgetcsv($file)) !== FALSE) {
                if($row[0] == $product_id) {
                    $row[1] = $name;
                    $row[2] = $price;
                    $product_found = true;
                }
                $data[] = $row;
            }
            fclose($file);
            if($product_found) {
                $file = fopen('products.csv', 'w');
                foreach($data as $row) {
                    fputcsv($file, $row);
                }
                fclose($file);
                echo "Producto actualizado con éxito";
            }
            else {
                echo "No se encontró el producto especificado";
            }
        }
        else {
            echo "No tienes permiso para editar productos";
        }
    }
}


$administrador = new Administrador();
$administrador->edit_product(1, 'Peras', 9.99);


?>
