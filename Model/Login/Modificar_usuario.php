

<?php

// $stmt = $conn->prepare("UPDATE registrados 
//                        SET nombre = ?, apellido = ?, identificador = ?, cont = ?, fecha = ?, hora = ?, imagen = ? 
//                        WHERE id_usuario = ?");

// $sql=$conn->query("insert into registrados (nombre,apellido,identificador,cont,fecha,hora,imagen) values ('$nombre','$apellido',$correo,'$contra', '$fechaActual','$horaActual','$imagen')");
$sql=$conn->query("update registrados set nombre ='$nombre', apellido='$apellido', identificador= '$correo', cont= '$contra' , fecha = '$fechaActual', hora = '$horaActual', imagen = '$imagen' where id_usuario = $id ");
?>