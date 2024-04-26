<?php
// Validacion para eliminar un producto
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    require('../../Model/Login/Eliminar_producto.php');

}else{
   
}

?>