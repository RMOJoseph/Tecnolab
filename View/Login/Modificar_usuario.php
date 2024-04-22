<?php
include('../../Model/Conexion.php');
$id = $_GET['id'];
include('../../Model/Login/Mostrar_usuarios_modificar.php');
// $sql = $conn->query("select * from productos where id_producto=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../Resources/CSS/Login/Registro.css">
    
</head>
<body class="body">
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>
    <div class="div-container">
        <div class="div-section">
            
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
                include('../../Controller/Login/Modificar_usuario.php'); 
                while($datos=$sql->fetch_object()){?>
                
                <label for="nombre">Ingresa tu nombre</label><br>
                <input type="text" class="nombre" name="nombre" value = "<?= $datos->nombre?>">
                <br><br>
                <label for="nombre">Ingresa tu apellido</label><br>
                <input type="text" class="apellido" name="apellido" value = "<?= $datos->apellido?>">
                <br><br>
                <label for="nombre">Ingresa tu correo</label><br>
                <input type="text" class="correo" name="correo" value = "<?= $datos->identificador?>">
                <br><br>
                <label for="nombre">Ingresa tu contraseña</label><br>
                <input type="text" class="contra" name="contra" value = "<?= $datos->cont?>">
                <br><br>
                <label for="">Imagen</label>
                <input type="file" name="imagen">
                <br><br>
            <?php }
            ?>
                <button type="submit" class="boton" name="botonregistrar" value="ok">Modificar</button>
            </form>
        </div>
        
    </div>
    <br>

    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>