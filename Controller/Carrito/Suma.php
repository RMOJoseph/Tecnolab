<?php
$preciofinal = 0;
// Realiza la suma del carrito por cada producto que exista
include('../../Model/Conexion.php');
include('../../Model/Carrito/Vista.php');
while ($datos3 = $sql->fetch_object()) {
    $precioProducto = $datos3->precio_producto;
    $cantidadProducto = $datos3->cantidad_producto;
    $converitr = floatval($precioProducto);
    $suma = $converitr * $cantidadProducto;
    $preciofinal += $suma;
    
}
echo "La cantidad a pagar es: " . $preciofinal. "$";
?>


