<!-- Query de sql para eliminar producto del carrito -->
<?php
$sql=$conn->query("delete from carrito where id_carrito = $id ");
?>