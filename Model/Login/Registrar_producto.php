<?php
$sql=$conn->query("insert into productos(nombre_producto,precio_producto,cantidad_producto,Descripcion,imagen) values ('$nombre','$precio',$cantidad,'$descripcion','$imagen')");
?>