<!-- Query de sql generar un pdf que sera pedido por el controlador -->
<?php
$sql = "SELECT nombre_producto, precio_producto, cantidad_producto, Descripcion, imagen FROM carrito";
$result = $conn->query($sql);
?>