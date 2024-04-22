<?php

include('Conexion.php');


$sql = "select nombre from registrados where identificador = '$correo' and cont = '$contra' ";
$resultado = $conn->query($sql);


?>