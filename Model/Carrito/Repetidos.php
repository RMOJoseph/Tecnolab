<!-- Query de sql para validar productos y que estos no se repitan -->
<?php
$verificarQuery = "SELECT COUNT(*) AS existe FROM carrito WHERE id_carrito = $id";

?>