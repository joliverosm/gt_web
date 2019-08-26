<?php $nombre = $_POST['nombre'];
$mail = $_POST['email'];
$cuerpo = $_POST['cuerpo'];
$asunto = 'Correo enviado desde gtgroupcolombia.com';

$header = 'From: ' . $mail . "\r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . "\r\n" ;
$header .= "Mime-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";


$mensaje = '<html><body>';
$mensaje .= '<p>Este mensaje fue enviado por: <strong>'  . $nombre . "</strong>, para el siguiente asunto: <strong>" . $cuerpo . '</strong></p>';
$mensaje .= "<p><strong>e-mail: " . $mail . "</strong></p>";
$mensaje .= "<p><strong>Mensaje: </strong>" . $_POST['mensaje'] . "</p>";
$mensaje .= "<p><strong>Fecha: </strong>" . date('d/m/Y', time()) . "</p>";
$mensaje .= "</body></html>";

$para = 'gtgroupcolombia@gmail.com';


mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location: //gtgroupcolombia.com');
?>