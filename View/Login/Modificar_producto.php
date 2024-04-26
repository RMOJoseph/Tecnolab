<?php
include('../../Model/Conexion.php');
$id = $_GET['id'];
include('../../Model/Login/Mostrar_productos_modificar.php');
// se toma la conexion para poder mandar a llamar al controlador

?>
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
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <?php
    include('../../Controller/Login/Modificar.php'); 
    while($datos=$sql->fetch_object()){?>
        <div class="div-format">
            <div class="div-container">
                <label for="">Ingresa el nombre del producto</label><br>
                <input type="text" name="nombre" class="nombreP" value="<?= $datos->nombre_producto?>">
            </div>
            <div class="div-container">
                <label for="">Precio del producto</label><br>
                <input type="text" name="precio" class="nombreP" value="<?= $datos->precio_producto?>">
            </div>
            <div class="div-container">
                <label for="">Cantidad del producto</label><br>
                <input type="text" name="cantidad" class="nombreP" value="<?= $datos->cantidad_producto?>">
            </div>
            <div class="div-container">
                <label for="">Descripcion</label><br>
                <input type="text" name="descripcion" class="nombreP" value="<?= $datos->Descripcion?>">
            </div>
            <div class="div-container">
                <label for="">Imagen</label>
                <input type="file" name="imagen">
            </div>
        </div>
    <?php }
    ?>
            <button type="submit" class="boton" name="botonregistrar" value="ok">Modificar</button>
        
    </form>
</div>
    
    <footer class="footer">
        <section>
            
            <a href="Pagina_root.php">Volver al inicio</a>
        </section>
        <p>Topicos de programación con MVC</p>
    </footer>
</body>
</html>