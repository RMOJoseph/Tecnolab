<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Resources/CSS/Login/Iniciar_sesion.css">
    <script src="../../Resources/JS/Login/Ingreso_fallido.js"></script>
</head>
<body class="body">
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>
    <div class="div-container">
        <div class="div-section">
            <form action="../../Controller/Login/Validar_usuario.php" method="post">
                <label for="nombre">Ingresa tu correo</label><br> 
                <input type="text" class="correo" name="correo" required>

                <br><br>
                <label for="nombre">Ingresa tu contraseña</label><br>
                <input type="password" class="contra" name="contra" required>

                <br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            
            echo '<script>registro();</script>';
        }
        ?>
    </div>
    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>