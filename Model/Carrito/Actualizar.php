<?php
$sql = $conn->query("UPDATE carrito SET cantidad_producto = $cantidad WHERE id_carrito= $id");
?>
