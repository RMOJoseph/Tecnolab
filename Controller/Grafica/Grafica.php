
<?php
// Conexión a la base de datos
include('../../Model/Conexion.php');

// Consulta SQL para obtener datos de la tabla de productos
include('../../Model/Grafica/Grafica.php');
$result = $conn->query($sql);

$labels = array();  // Etiquetas para el gráfico (nombre de productos)
$data = array();    // Datos para el gráfico (cantidad de productos)

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row["nombre_producto"];
        $data[] = $row["cantidad_producto"];
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
