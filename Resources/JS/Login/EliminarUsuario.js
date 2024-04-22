function EliminarUsuario(id_usuario) {
    // Puedes mostrar una alerta de confirmación antes de enviar el ID por método GET
    if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
        // Redirige a la misma vista con el ID por método GET
        window.location.href = 'Pagina_root.php?id=' + id_usuario;
    }
}
