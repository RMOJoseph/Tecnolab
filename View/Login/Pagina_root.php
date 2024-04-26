<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista principal</title>
    <link rel="stylesheet" href="../../Resources/CSS/Login/Pagina_validados.css">
    <script src="https://kit.fontawesome.com/ee3c991c6e.js" crossorigin="anonymous"></script>
    <script src="../../Resources/JS/Login/Eliminar.js"></script>
    <script src="../../Resources/JS/Login/EliminarUsuario.js"></script>
</head>
<?php
    session_start();
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $bienvenida = "Bienvenido a Tecnolab Administrador ";
?>
<!-- se toman los datos y se van actualizando en tiempo real mediante peticiones al modelo y el inicio de una sesion -->
<body class="body">
    <header class="header">
        <h1 id="inicio"><?php echo $bienvenida; ?></h1>     
    </header>
    <br><br><br>
    <body class="div-main">
        
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Imagen</th> 
                    <th>Editar</th>
                </tr>
                    <?php
                    include ('../../Model/Conexion.php');
                    include('../../Controller/Login/Eliminar.php');
                    include('../../Model/Login/Vista_productos.php');
                    
                    while($datos = $sql->fetch_object()){?>
                <tr>
                    <td> <?= $datos->id_producto?> </td>
                    <td> <?= $datos->nombre_producto?> </td>
                    <td> <?= $datos->precio_producto?> </td>
                    <td> <?= $datos->cantidad_producto?> </td>
                    <td> <?= $datos->Descripcion?> </td>
                    <td><img height="100px" src="data:image/jpeg;base64,<?= base64_encode($datos->imagen);?>"></td>
                    
                    <td>
                    <a href="Modificar_producto.php?id=<?= $datos->id_producto ?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;
                    <a href="#" onclick="EliminarProducto(<?= $datos->id_producto ?>);"><i class="fa-solid fa-trash"></i></a>

                    

                    </td>
                </tr>
                    <?php }
                    ?>

            </table>
            <br><br><br><br>

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Fecha de registro</th>
                    <th>Hora de registro</th>
                    <th>Imagen</th> 
                    <th>Editar</th>
                    
                </tr>
                    <?php
                    include ('../../Model/Conexion.php');
                    include('../../Controller/Login/Eliminar_usuario.php');
                    include('../../Model/Login/Vista_usuarios.php');
                    
                    while($datos2 = $sql->fetch_object()){?>
                <tr>
                    <td> <?= $datos2->id_usuario?> </td>
                    <td> <?= $datos2->nombre?> </td>
                    <td> <?= $datos2->apellido?> </td>
                    <td> <?= $datos2->identificador?></td>
                    <td> <?= $datos2->cont?> </td>
                    <td> <?= $datos2->fecha?> </td>
                    <td> <?= $datos2->hora?> </td>
                    <td><img height="100px" src="data:image/jpeg;base64,<?= base64_encode($datos2->imagen);?>"></td>
                    
                    <td>
                    <a href="Modificar_usuario.php?id=<?= $datos2->id_usuario ?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;
                    <a href="#" onclick="EliminarUsuario(<?= $datos2->id_usuario ?>);"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                    <?php }
                    ?>

            </table>

                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                    <br><br><br>
    <footer class="footer">
        <section>
            <a href="../../View/Objeto3D/3060/3D.php">Ver modelo 3D</a>
            <a href="../../View/Grafica/Grafica.php">Ver grafica</a>
            <a href="Registrar_usuario.php">Registrar un usuario</a>
            <a href="Registrar_producto.php">Registrar un producto</a>
            <a href="../../Index.php">Volver al inicio</a>
        </section>
        <p>Topicos de programación con MVC</p>
    
</body>
</html>
