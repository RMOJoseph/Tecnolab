<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../Resources/CSS/Carrito/Pagar.css">
    <script src="../../Resources/JS/Carrito/Pagar.js"></script>
</head>
<body class="body">
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>
    <div class="div-container">
        <div class="div-section">   
                <label for="nombre">Ingresa el nombre de la tarjeta</label><br>
                <input type="text" class="nombre" name="nombre" required>
                <br><br>
                <label for="nombre">Ingresa los digitos de la tarjetz</label><br>
                <input type="text" class="apellido" name="apellido" required>
                <br><br>
                <label for="nombre">Ingresa la fecha de expiración</label><br>
                <input type="text" class="correo" name="correo" required>
                <br><br>
                <label for="nombre">Ingresa el CVC</label><br>
                <input type="password" class="contra" name="contra" required>
                <br><br>

                <br><br>
                <a href="../../Index.php" onclick="pagar();">Aceptar</a>
            
        </div>

    </div>
    <br>

    <footer class="footer">
        <a href="../../Index.php">Volver al inicio</a>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>