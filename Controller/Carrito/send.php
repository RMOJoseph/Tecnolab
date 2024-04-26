<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// toma las librerias necesarias
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
// Validacion del formulario y almacena los datos para poder enviar a un correo la informacion necesaria
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tichereslava@gmail.com';
    $mail->Password = 'Xajonayaxmofcimki';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('tichereslava@gmail.com');
    
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
alert('Enviado correctamente');
document.location.href = 'index.php';
    </script>
    ";
}

?>