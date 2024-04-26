<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML, incluyendo metadatos y título -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Enlace a la hoja de estilos CSS específica para la página de inicio de sesión -->
    <link rel="stylesheet" href="../../Resources/CSS/Login/Iniciar_sesion.css">
    <!-- Script de JavaScript para manejar eventos de ingreso fallido -->
    <script src="../../Resources/JS/Login/Ingreso_fallido.js"></script>
</head>
<body class="body">
    <!-- Cabecera de la página, incluyendo un título -->
    <header class="header">
        <h1 id="inicio">Tecnolab</h1>
    </header>

    <!-- Contenedor principal para el formulario de inicio de sesión -->
    <div class="div-container">
        <div class="div-section">
            <!-- Formulario para el inicio de sesión, que envía datos al controlador de validación -->
            <form action="../../Controller/Login/Validar_usuario.php" method="post">
                <!-- Campo para ingresar el correo electrónico -->
                <label for="correo">Ingresa tu correo</label><br>
                <input type="text" class="correo" name="correo" required>

                <br><br>
                <!-- Campo para ingresar la contraseña -->
                <label for="contra">Ingresa tu contraseña</label><br>
                <input type="password" class="contra" name="contra" required>

                <br><br>
                <!-- Botón para enviar el formulario -->
                <input type="submit" value="Enviar">
            </form>
        </div>
        <!-- PHP para manejar alertas, como un ingreso fallido -->
        <?php
        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            echo '<script>registro();</script>'; // Llama a una función de JavaScript si hay una alerta
        }
        ?>
    </div>
    
    <!-- Pie de página con enlace para regresar al inicio y una nota sobre el curso de programación -->
    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>
