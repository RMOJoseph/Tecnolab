<?php
include('../../Model/Conexion.php');
if(!empty($_POST["botonregistrar"])){
    if(!empty($_GET["id"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["contra"]) and !empty($_FILES['imagen'])){
        $id=$_GET["id"];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $fechaActual = date("Y-m-d");
        $horaActual = date("H:i:s");
        $imagen = addslashes(file_get_contents( $_FILES['imagen']['tmp_name']));
    
    
    // Utiliza una consulta preparada para insertar los datos
    require('../../Model/Login/Modificar_usuario.php');
    
    // Vincula los parámetros y sus tipos
    // $stmt->bind_param("sssssssi", $nombre, $apellido, $identificador, $cont, $fecha, $hora, $imagen, $id);

    // if ($stmt->execute()) {
    //     header("location: ../../View/Login/Pagina_root.php");
    // } else {
    //     echo "Existe un error: " . $stmt->error;
    // }
    
    if($sql==1){
        header("location: ../../View/Login/Pagina_root.php");
    }else{
        echo "existe un error";
    }

    // Cierra la consulta preparada
    // $stmt->close();
    
    // Cierra la conexión a la base de datos
    // $conn->close();
    
    }
}
?>