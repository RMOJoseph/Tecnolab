<?php
$sql=$conn->query("update productos set nombre_producto='$nombre', precio_producto='$precio', cantidad_producto= $cantidad, Descripcion= '$descripcion' , imagen = '$imagen' where id_producto = $id ");
?>