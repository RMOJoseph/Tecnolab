<?php

include('../../Controller/Grafica/Grafica.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gráfico de Productos</title>
    <!-- Incluye la librería Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: 0 auto;">
        <canvas id="productosChart"></canvas>
    </div>
    <script>
        // Define los datos de la gráfica
        var ctx = document.getElementById('productosChart').getContext('2d');
        var chartData = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Cantidad de Productos Disponibles',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de las barras
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Crea y muestra la gráfica
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>