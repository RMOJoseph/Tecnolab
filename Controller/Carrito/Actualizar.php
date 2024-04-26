<?php
session_start();
include('../../Model/Conexion.php');
// Recibe la peticion por metodo POST y valida el formulario y actualiza el carrito
if (!empty($_POST["actualizar"]) && isset($_POST["cantidad"])) {
    $id = $_POST['actualizar'];
    $cantidad = $_POST['cantidad'];

    require('../../Model/Carrito/Actualizar.php');
    if ($sql == 1) {
        echo '<script>alert("Producto modificado");</script>';
        echo '<script>window.location.href="../../View/Carrito/Carrito_compras.php";</script>';
    } else {
        echo "Existe un error al agregar el producto al carrito";
    }
} else {
    echo "Producto no agregado";
}
?>

