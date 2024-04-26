<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <!-- Enlace a la hoja de estilos específica para la página del carrito -->
    <link rel="stylesheet" href="../../Resources/CSS/Carrito/Carrito_style.css">
    <!-- Carga de Font Awesome para usar iconos -->
    <script src="https://kit.fontawesome.com/ee3c991c6e.js" crossorigin="anonymous"></script>
    <!-- Script para manejar la eliminación de productos del carrito -->
    <script src="../../Resources/JS/Carrito/Eliminar.js"></script>
</head>
<?php
    // Inicia sesión para acceder a las variables de sesión
    session_start();
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $bienvenida = "Estas en tu carrito $nombre_usuario";
?>
<body class="body"> 
    
    <!-- Cabecera con mensaje de bienvenida personalizado -->
    <header class="header">
        <h1 id="inicio"><?php echo $bienvenida; ?></h1>
    </header>
    
    <!-- Navegación y estructura principal del carrito -->
    <nav class="navegador">
        <div class="div-nav">
            <!-- Enlace para cerrar sesión -->
            <ul>
                <li><a href="../../Index.php">Cerrar sesion</a></li>
            </ul> 
        </div>
        
        <!-- Sección de la tabla del carrito -->
        <div class="div-section">
            <table class="table">
                <!-- Encabezados de la tabla del carrito -->
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
                <!-- PHP para mostrar cada producto en el carrito -->
                <?php
                include ('../../Model/Conexion.php'); // Conexión a la base de datos
                include('../../Controller/Carrito/Eliminar.php'); // Controlador para eliminar productos
                include('../../Model/Carrito/Vista.php'); // Modelo para obtener la vista del carrito
                include('../../Model/Carrito/vista_t_productos.php'); // Modelo adicional, si necesario
                
                while($datos3 = $sql->fetch_object()){ // Loop a través de productos en el carrito
                ?>
                <tr>
                    <form action="../../Controller/Carrito/Actualizar.php" method="POST">
                        <td><?= $datos3->id_carrito ?></td>
                        <td><?= $datos3->nombre_producto ?></td>
                        <td><?= $datos3->precio_producto. "$" ?></td>
                        <td><input type="number" name="cantidad" min='0' max="<?= $datos3->cantidad_producto ?>" value="<?= $datos3->cantidad_producto ?>"></td>
                        <td><?= $datos3->Descripcion ?></td>
                        <td><img height="100px" src="data:image/jpeg;base64,<?= base64_encode($datos3->imagen);?>"></td>
                        <td> <a href="#" onclick="eliminar(<?= $datos3->id_carrito ?>);"><i class="fa-solid fa-trash"></i></a></td>
                        <td><button type="submit" class="boton" name="actualizar" value="<?= $datos3->id_carrito ?>">Actualizar</button></td>
                    </form> 
                </tr>
                <?php }
                ?>    
            </table>
            <!-- Tabla para mostrar el total y opción de pago -->
            <table class="table">
                <tr>
                    <th>Total</th>
                    <th>Pagar</th>
                </tr>
                <tr>
                    <td><?php  include('../../Controller/Carrito/Suma.php'); // Incluye el cálculo del total ?></td>
                    <td><a class="pagar" href="../../Controller/Carrito/Generadorpdf.php">Generar Orden de compra</a></td>
                </tr>
            </table>
        </div>        
    </nav> 
    <!-- Pie de página con enlaces adicionales y notas -->
    <footer class="footer">
        <section>
            <a href="../../View/Login/Pagina_validados.php">Volver a la tienda</a>
