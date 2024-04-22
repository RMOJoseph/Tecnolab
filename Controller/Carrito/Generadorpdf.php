<?php
include('../../Model/Conexion.php');
require_once("../../Resources/Library2/fpdf.php");
require '../../Resources/Library3/src/PHPMailer.php';
require '../../Resources/Library3/src/SMTP.php';
require '../../Resources/Library3/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PDF extends FPDF {
    function Header() {
        $this->Image('../../Resources/Imagenes/Fondos/fondo15.jpg', 0, 0, $this->w, $this->h);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Tecnolab Ticket de compra ', 0, 1, 'C');
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Gracias por su preferencia! =) ', 0, 0, 'C');
    }
}
$anchoPagina = 210;
$pdf = new PDF();
$pdf->AddPage('L', array($anchoPagina, 250));
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Nombre', 1);
$pdf->Cell(40, 10, 'Precio', 1);
$pdf->Cell(40, 10, 'Cantidad', 1);
$pdf->Cell(60, 10, 'Descripcion', 1);
$pdf->Cell(80,10,'Imagen', 1);


$pdf->Ln();

include('../../Model/Carrito/Generarpdf.php');
$totalPrecio = 0;
$totalCantidad = 0;

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 20, $row['nombre_producto'], 1);
    $pdf->Cell(40, 20, $row['precio_producto'], 1);
    $pdf->Cell(40, 20, $row['cantidad_producto'], 1);
    $pdf->Cell(60, 20, $row['Descripcion'], 1);

    $imagenData = $row['imagen'];
    $imagenPath = 'temp.jpg';
    file_put_contents($imagenPath, $imagenData);
    $pdf->Image($imagenPath, $pdf->GetX() + 20, $pdf->GetY(), 20); // Ajusta la posición y el tamaño según tus necesidades
    unlink($imagenPath);

    // Calcula el subtotal para este producto (precio x cantidad)
    $subtotal = floatval($row['precio_producto']) * intval($row['cantidad_producto']);
    
    // Suma el subtotal al total de precios
    $totalPrecio += $subtotal;

    // Suma la cantidad al total de cantidad
    $totalCantidad += intval($row['cantidad_producto']);
    
    // ...

    $pdf->Ln();
}

$pdf->Cell(120, 10, 'Total de Cantidad', 1);
$pdf->Cell(40, 10, $totalCantidad, 1);
$pdf->Ln();
$pdf->Cell(120, 10, 'Total de Compra', 1);
$pdf->Cell(40, 10, '$' . number_format($totalPrecio, 2), 1);
$pdf->Ln();

$pdfFileName = 'orden_de_compra.pdf';

// Guarda el PDF en el servidor
$pdf->Output($pdfFileName, 'F');

// Forzar la descarga del PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $pdfFileName . '"');
readfile($pdfFileName);

// Crea una instancia de PHPMailer
$mail = new PHPMailer();

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'josephbot56427@gmail.com';
    $mail->Password = 'vima ryuw rfau wbao';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configuración del correo
    $mail->setFrom('josephbot56427@gmail.com', ' Smith');
    $mail->addAddress('mecharove@gmail.com', 'Joe');

    // Adjunta el PDF generado
    $mail->addAttachment($pdfFileName);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Orden de Compra Tecnolab';
    $mail->Body = 'Adjunto encontrarás la orden de compra generada, Muchas gracias!!';

    // Enviar el correo
    if ($mail->send()) {
        echo 'El correo ha sido enviado con éxito.';
    } else {
        echo 'No se pudo enviar el correo. Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

// Borra el archivo PDF después de enviarlo
unlink($pdfFileName);




// $pdf->Output('orden_de_compra.pdf', 'D');

include('../../Model/Carrito/Eliminar_todo.php');

echo '<script>
    alert("Orden generada de manera satisfactoria, Gracias!!");
    window.location.href = "../../View/Login/Pagina_validados.php";
</script>';

?>
