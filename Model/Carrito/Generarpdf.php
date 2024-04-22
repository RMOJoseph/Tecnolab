<?php
$sql = "SELECT nombre_producto, precio_producto, cantidad_producto, Descripcion, imagen FROM carrito";
$result = $conn->query($sql);
?>