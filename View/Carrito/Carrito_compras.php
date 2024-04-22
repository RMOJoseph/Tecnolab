<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../../Resources/CSS/Carrito/Carrito_style.css">
    <script src="https://kit.fontawesome.com/ee3c991c6e.js" crossorigin="anonymous"></script>
    <script src="../../Resources/JS/Carrito/Eliminar.js"></script>
</head>
<?php
    session_start();
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $bienvenida = "Estas en tu carrito $nombre_usuario";
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
                    <th>Eliminar del carrito</th>
                    <th>Actualizar Producto</th>
                </tr>
                   
                    <?php
                    include ('../../Model/Conexion.php');
                    include('../../Controller/Carrito/Eliminar.php');
                    include('../../Model/Carrito/Vista.php');
                    include('../../Model/Carrito/vista_t_productos.php');
                    
                    
                    while($datos3 = $sql->fetch_object()){?>
                    
                <tr>
                <form action="../../Controller/Carrito/Actualizar.php" method="POST">
                    <td> <?= $datos3->id_carrito?> </td>
                    <td> <?= $datos3->nombre_producto?> </td>
                    <td> <?= $datos3->precio_producto. "$"?> </td>
                    <td><input type="number"  name="cantidad" min='0' max="<?= $datos3->cantidad_producto ?>" value="<?= $datos3->cantidad_producto ?>"></td>
                    <td> <?= $datos3->Descripcion?> </td>
                    <td><img height="100px" src="data:image/jpeg;base64,<?= base64_encode($datos3->imagen);?>"></td>
                    <td> <a href="#" onclick="eliminar(<?= $datos3->id_carrito ?>);"><i class="fa-solid fa-trash"></i></a></td>
                    <td><button type="submit" class="boton" name="actualizar" value="<?= $datos3->id_carrito ?>">Actualizar</button></td>
                </form> 
                </tr>
                    <?php }
                    ?>    
                </table>
                <br>
                
                <table class="table">
                    <tr>
                        <th>Total</th>
                        <th>Pagar</th>
                    </tr>
                    <tr>
                        <td><?php  include('../../Controller/Carrito/Suma.php'); ?></td>
                        <td><a class="pagar" href="../../Controller/Carrito/Generadorpdf.php">Generar Orden de compra</a></td>
                    </tr>
                    
                </table>
            </div>        
    </nav> 
    <footer class="footer">
        <section>
            
            <a href="../../View/Login/Pagina_validados.php">Volver a la tienda</a>
        </section>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>