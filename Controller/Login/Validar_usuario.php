<?php
include('../../Model/Conexion.php');
include('../../Resources/JS/Login/Ingreso_fallido.js');
session_start();
// Realiza una validacion por metodo POST para validar a un usuario existente en la BD
if(isset($_POST['correo']) && isset($_POST['contra'])){
    
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    
    if ($correo === 'root' && $contra === 'rooter') {
        header("Location: ../../View/Login/Pagina_root.php");
        exit; 
    }

    require('../../Model/Login/Validar.php');
    
    if ($resultado->num_rows > 0) {
        // El usuario ha sido validado correctamente
        $row = $resultado->fetch_assoc();
        $_SESSION['nombre_usuario'] = $row['nombre'];
        header("Location: ../../View/Login/Pagina_validados.php");
    } else {
        
        header("Location: ../../View/Login/Iniciar_sesion.php?alert=1");

    }
    
}
?>