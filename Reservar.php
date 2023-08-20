<?php
class Reservar {
    // Función para realizar una reserva de un producto
    public function reserve_product($product_id, $quantity) {
        // Código para agregar una reserva a un archivo .csv
        $file = fopen('reservations.csv', 'a');
        fputcsv($file, array($product_id, $quantity));
        fclose($file);
        echo "Reserva realizada con éxito";
    }
}
?>
