<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Proyecto_Tecnolab/Resources/CSS/index.css">
    <script src="../Proyecto_Tecnolab/Resources/JS/Login/Registro.js"></script>
</head>
<body class="body">
    <header class="header">
        <h1 id="inicio">Tecnolab<h1>
    </header>

    <nav class="navegador">
            <div class="div-nav">
                <ul>
                    <a href="../Proyecto_Tecnolab/View/Login/Registrar_usuario.php">Registrate</a>
                    <br><br>
                    <a href="../Proyecto_Tecnolab/View/Login/Iniciar_sesion.php">Inicia sesión</a>
                    <br>
                </ul> 
            </div>
            
            <div class="div-section">
                <table class="table">
                    <tr>
                        <td>Tarjeta graficas</td>
                        <td>Tarjetas Madre</td>
                        <td>Procesadores</td>
                        <td>Memoria RAM</td>
                        <td>Gabinetes</td>
                        <td>Fuentes de poder</td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3050.jpg"> <br>Tarjeta grafica Nvidia RTX 3050</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                        <td>pc</td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3060.jpg"><br>Tarjeta grafica Nvidia RTX 3060</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3070.jpg"><br>Tarjeta grafica Nvidia RTX 3070</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3080.jpg"><br>Tarjeta grafica Nvidia RTX 3080</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 3090.jpg"><br>Tarjeta grafica Nvidia RTX 3090</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="../Proyecto_Tecnolab/Resources/Imagenes/Productos/rtx 4090.jpg"><br>Tarjeta grafica Nvidia RTX 4090</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </table>
    </nav>
    <?php
        
        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            
            echo '<script>registro();</script>';

        }
    ?>
    <footer class="footer">
        <section>
            
            <a href="#inicio">Volver al principio</a>
        </section>
        <p>Topicos de programacion con MVC</p>
    </footer>
</body>
</html>
