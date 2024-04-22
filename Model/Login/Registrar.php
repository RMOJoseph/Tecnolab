<?php


$sql=$conn->query("insert into registrados (nombre,apellido,identificador,cont,fecha,hora,imagen) values ('$nombre','$apellido','$correo','$contra', '$fechaActual','$horaActual','$imagen')");

?>