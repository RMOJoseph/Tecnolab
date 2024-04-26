<!-- Query de sql para validar usuarios -->
<?php
$sql = "SELECT nombre, apellido, identificador FROM registrados";
$result = $conn->query($sql);
?>