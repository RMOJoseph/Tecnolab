<?php
$sql = $conn->query("INSERT INTO carrito (id_carrito, nombre_producto, precio_producto, cantidad_producto, Descripcion, imagen)
SELECT id_producto, nombre_producto, precio_producto, $cantidad AS cantidad_producto, Descripcion, imagen
FROM productos
WHERE id_producto = $id");
?>

