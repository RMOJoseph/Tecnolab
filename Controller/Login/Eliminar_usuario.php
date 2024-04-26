<?php
// Valida el formulario recibido y elimina a un usuario
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    require('../../Model/Login/Eliminar_usuario.php');

}else{

}

?>