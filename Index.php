<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags necesarios para la codificación y la vista responsiva -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Vinculación de hojas de estilo CSS -->
    <link rel="stylesheet" href="../Proyecto_Tecnolab/Resources/CSS/index.css">
    <!-- Vinculación de archivos JavaScript -->
    <script src="../Proyecto_Tecnolab/Resources/JS/Login/Registro.js"></script>
</head>
<body class="body">
    <!-- Cabecera de la página -->
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>

    <!-- Navegación principal de la página -->
    <nav class="navegador">
            <div class="div-nav">
                <!-- Lista de enlaces para registrarse e iniciar sesión -->
                <ul>
                    <a href="../Proyecto_Tecnolab/View/Login/Registrar_usuario.php">Registrate</a>
                    <br><br>
                    <a href="../Proyecto_Tecnolab/View/Login/Iniciar_sesion.php">Inicia sesión</a>
                    <br>
                </ul> 
            </div>
            
            <!-- Sección principal de contenido: tabla de productos -->
            <div class="div-section">
                <table class="table">
                    <!-- Encabezados de las columnas de productos -->
                    <tr>
                        <td>Tarjeta graficas</td>
                        <td>Tarjetas Madre</td>
                        <td>Procesadores</td>
                        <td>Memoria RAM</td>
                        <td>Gabinetes</td>
                        <td>Fuentes de poder</td>
                    </tr>
                    <!-- Filas con imágenes y nombres de productos específicos -->
                    <!-- Tarjetas gráficas Nvidia -->
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3050.jpg"> <br>Tarjeta grafica Nvidia RTX 3050</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                    </tr>
                    <!-- Repetir el formato anterior para cada producto listado -->
                    <!-- Puede ser útil incluir más descripciones o diferenciar otros productos como se ha hecho con las tarjetas gráficas -->
                </table>
    </nav>
    <!-- Script de PHP para manejar alertas (ej., después de un registro) -->
    <?php
        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            echo '<script>registro();</script>';
        }
    ?>
    <!-- Pie de página con enlace para volver al principio y nota sobre el curso relacionado -->
    <footer class="footer">
        <section>
            <a href="#inicio">Volver al principio</a>
        </section>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>

