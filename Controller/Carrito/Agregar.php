<?php
session_start();
include('../../Model/Conexion.php');
// Recibe la peticion por metodo POST y valida el formulario y agregar cosas a el carrito
if (!empty($_GET["agregar"]) && isset($_GET["cantidad"])) {
    $id = $_GET['agregar'];
    $cantidad = $_GET['cantidad'];

    require('../../Model/Carrito/Repetidos.php');
    $result = $conn->query($verificarQuery);

    if ($result) {
        $row = $result->fetch_assoc();
        $productosEnCarrito = $row['existe'];

        if ($productosEnCarrito > 0) {
            echo '<script>alert("Producto ya agregado al carrito");</script>';
            echo '<script>window.location.href="../../View/Login/Pagina_validados.php";</script>';
        } else {
            require('../../Model/Carrito/Agregar.php');
            if ($sql == 1) {
                echo '<script>alert("Producto agregado");</script>';
                echo '<script>window.location.href="../../View/Login/Pagina_validados.php";</script>';
            } else {
                echo "Existe un error al agregar el producto al carrito";
            }
        }
    } else {
        echo "Error en la consulta de repetidos";
    }
} else {
    echo "Producto no agregado";
}
?>
