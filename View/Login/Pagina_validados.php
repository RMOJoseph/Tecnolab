<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Resources/CSS/Login/Pagina_validados.css">
</head>
<?php
    session_start();
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $bienvenida = "Bienvenido a Tecnolab $nombre_usuario";
?>
<body class="body"> 
    <header class="header">
        <h1 id="inicio"><?php echo $bienvenida; ?></h1>
    </header>
    <nav class="navegador">
            <div class="div-nav">
                <ul>
                    <li><a href="../../Index.php">Cerrar sesion</a></li>
                </ul> 
            </div>
            
            <div class="div-section">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Agregar al carrito</th> 
                    
                </tr>
                    <?php
                    include ('../../Model/Conexion.php');
                    include('../../Controller/Login/Eliminar.php');
                    include('../../Model/Login/Vista_productos.php');
                    while($datos = $sql->fetch_object()){?>
                <tr>
                <form action="../../Controller/Carrito/Agregar.php" method="get">
                    <td> <?= $datos->id_producto?> </td>
                    <td> <?= $datos->nombre_producto?> </td>
                    <td> <?= $datos->precio_producto."$"?> </td>
                    
                    <td><input type="number" name="cantidad" value="1" min="1" max="<?= $datos->cantidad_producto ?>"></td>
                    <td> <?= $datos->Descripcion?> </td>
                    <td><img height="100px" src="data:image/jpeg;base64,<?= base64_encode($datos->imagen);?>"></td>
                    <td> 
                    
                    <button type="submit" class="boton" name="agregar" value="<?= $datos->id_producto ?>">Agregar</button>
                    </form>     
                    </td>

                </tr>
                    <?php }
                    ?>

            </table>
    </nav> 
    <footer class="footer">
        <section>
            <a href="../Carrito/Carrito_compras.php">Ver carrito</a>
            <a href="#inicio">Volver al principio</a>
        </section>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>