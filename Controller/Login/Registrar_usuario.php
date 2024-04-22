<?php
include('../../Model/Conexion.php');

if(!empty($_POST["botonregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["contra"]) and !empty($_FILES['imagen'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $fechaActual = date("Y-m-d");
        $horaActual = date("H:i:s");
        $imagen = addslashes(file_get_contents( $_FILES['imagen']['tmp_name']));
        
        
        // Utiliza una consulta preparada para insertar los datos
        require('../../Model/Login/Registrar.php');
        
        // Vincula los parámetros y sus tipos
        if($sql==1){
            header("location: ../../index.php?alert=1");
        }else{
            echo "existe un error";
        }
        
    }
}
?>




<?php
// include('../../Model/Conexion.php');



// if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['contra'])){
//     $nombre = $_POST['nombre'];
//     $apellido = $_POST['apellido'];
//     $correo = $_POST['correo'];
//     $contra = $_POST['contra'];
//     $sql = "insert into registrados (nombre,apellido,identificador, cont) values ('$nombre','$apellido','$correo','$contra')";
//     if($conn->query($sql) === TRUE){
//         header("Location: ../../index.html");
        
//     }else{
//         echo "Existe un error". $conn -> error;
//     }
    
    
// }
?>