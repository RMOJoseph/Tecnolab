<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../Resources/CSS/Login/Productos.css">
</head>
<body class="body">
    <header class="header">
        <h1 >Tecnolab<h1>
    </header>
    <br><br>
    <div class="div-main">
    <form class="formulario" method="POST" action="../../Controller/Login/Registro_producto.php" enctype="multipart/form-data">
        <div class="div-format">
            <div class="div-container">
                <label for="">Ingresa el nombre del producto</label><br> 
                <input type="text" name="nombre" class="nombreP">
            </div>
            <div class="div-container">
                <label for="">Precio del producto</label><br>
                <input type="text" name="precio" class="nombreP">
            </div>
            <div class="div-container">
                <label for="">Cantidad del producto</label><br>
                <input type="text" name="cantidad" class="nombreP">
            </div>
            <div class="div-container">
                <label for="">Descripcion</label><br>
                <input type="text" name="descripcion" class="nombreP">
            </div>
            <div class="div-container">
                <label for="">Imagen</label>
                <input type="file" name="imagen">
            </div>
            <button type="submit" class="boton" name="botonregistrar" value="ok">Registrar</button>
        </div>
    </form>
</div>

    <?php
        
        include ('../../Model/Conexion.php');
        include ('../../Controller/Login/Registro_producto.php');
        
    ?>
    
    <footer class="footer">
        <section>
            
            <a href="Pagina_root.php">Volver al inicio</a>
        </section>
        <p>Topicos de programación con MVC</p>
    </footer>
</body>
</html>