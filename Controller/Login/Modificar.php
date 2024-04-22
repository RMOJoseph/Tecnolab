<?php
include ('../../Model/Conexion.php');
if(!empty($_POST["botonregistrar"])){
    if(!empty($_POST["nombre"]) and ($_POST["precio"]) and ($_POST["cantidad"]) and ($_POST["descripcion"]) and ($_FILES['imagen'])){
        $id=$_GET["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $cantidad=$_POST["cantidad"];
        $descripcion=$_POST["descripcion"];
        $imagen=addslashes(file_get_contents( $_FILES['imagen']['tmp_name']));
        require('../../Model/Login/Modifcar_producto.php');
        
        if($sql==1){
            header("location: ../../View/Login/Pagina_root.php");
        }else{
            echo "existe un error";
        }
    }else{
        echo "<div class='alert alert-warning'> campos vacios</div>";
    }
}

?>
