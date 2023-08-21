<?php
class Reservar {
    // Función para realizar una reserva de un producto
    public function reserve_product($product_id, $quantity) {
        // Verificar si el producto existe en el archivo products.csv
        $product_found = false;
        $product_price = 0;
        $file = fopen('products.csv', 'r');
        while(($row = fgetcsv($file)) !== FALSE) {
            if($row[0] == $product_id) {
                $product_found = true;
                $product_price = $row[2];
                break;
            }
        }
        fclose($file);
        
        if($product_found) {
            // Si el producto existe, calcular el precio total y agregar la reserva al archivo reservations.csv
            $total_price = $quantity * $product_price;
            $file = fopen('reservations.csv', 'a');
            fputcsv($file, array($product_id, $quantity, $total_price));
            fclose($file);
            echo "Reserva realizada con éxito";
        }
        else {
            echo "No se encontró el producto especificado";
        }
    }
}

$reservar = new Reservar();
$reservar->reserve_product(1, 2);

?>
