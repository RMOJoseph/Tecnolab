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
            <form action="../../Controller/Login/Registrar_usuario.php" method="POST" enctype="multipart/form-data">
                
                <label for="nombre">Ingresa tu nombre</label><br>
                <input type="text" class="nombre" name="nombre" required>
                <br><br>
                <label for="nombre">Ingresa tu apellido</label><br>
                <input type="text" class="apellido" name="apellido" required>
                <br><br>
                <label for="nombre">Ingresa tu correo</label><br>
                <input type="text" class="correo" name="correo" required>
                <br><br>
                <label for="nombre">Ingresa tu contraseña</label><br>
                <input type="password" class="contra" name="contra" required>
                <br><br>
                <label for="">Imagen</label>
                <input type="file" name="imagen">
                <br><br>
                <button type="submit" class="boton" name="botonregistrar" value="ok">Registrar</button>
            </form>
        </div>

    </div>
    <br>
    <?php
        
        include ('../../Model/Conexion.php');
        include ('../../Controller/Login/Registrar_usuario.php');
        
    ?>
    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>