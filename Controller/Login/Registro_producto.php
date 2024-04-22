<?php

include ('../../Model/Conexion.php');


if(!empty($_POST["botonregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"]) and !empty($_POST["descripcion"]) and !empty($_FILES['imagen'])){
        
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $descripcion=$_POST['descripcion'];
        $imagen= addslashes(file_get_contents( $_FILES['imagen']['tmp_name']));
        require('../../Model/Login/Registrar_producto.php');
       
        if($sql==1){
            echo '<div class= "alert alert-success">Producto registrado correctamente </div>';
            header("Location: ../../View/Login/Pagina_root.php");
        }else{
            echo '<div class= "alert alert-danger">Error al registrar </div>';
        }



    }else{
        echo '<div class= "alert alert-warning">Algun campo se encuentra vacio</div>';
    }
}

?>
