function EliminarProducto(id_producto) {
    // Puedes mostrar una alerta de confirmación antes de enviar el ID por método GET
    if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
        // Redirige a la misma vista con el ID por método GET
        window.location.href = 'Pagina_root.php?id=' + id_producto;
    }
}
