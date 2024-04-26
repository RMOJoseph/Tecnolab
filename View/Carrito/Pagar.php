<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!-- Vinculación de la hoja de estilos para la página de pago -->
    <link rel="stylesheet" href="../../Resources/CSS/Carrito/Pagar.css">
    <!-- Vinculación del script JavaScript para manejar el proceso de pago -->
    <script src="../../Resources/JS/Carrito/Pagar.js"></script>
</head>
<body class="body">
    <!-- Cabecera de la página -->
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>
    
    <!-- Contenedor principal para la información de pago -->
    <div class="div-container">
        <div class="div-section">   
            <!-- Formulario para ingresar detalles de la tarjeta de crédito -->
            <label for="nombre">Ingresa el nombre de la tarjeta</label><br>
            <input type="text" class="nombre" name="nombre" required>
            <br><br>
            
            <label for="nombre">Ingresa los dígitos de la tarjeta</label><br>
            <input type="text" class="apellido" name="apellido" required>
            <br><br>
            
            <label for="nombre">Ingresa la fecha de expiración</label><br>
            <input type="text" class="correo" name="correo" required>
            <br><br>
            
            <label for="nombre">Ingresa el CVC</label><br>
            <input type="password" class="contra" name="contra" required>
            <br><br>

            <!-- Enlace que actúa como botón de aceptación, ejecutando la función de pago al hacer clic -->
            <a href="../../Index.php" onclick="pagar();">Aceptar</a>
        </div>
    </div>
    <br>
    
    <!-- Pie de página con enlace para regresar al inicio y una nota sobre el curso de programación -->
    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>
