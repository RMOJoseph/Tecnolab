<?php
// Recibe la peticion por metodo POST y valida el formulario y eliminar cosas del carrito
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    require('../../Model/Carrito/Eliminar_producto.php');

}else{
   
}

?>