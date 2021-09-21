<?php 
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$proyecto = $_POST['proyecto'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0  \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Proyecto de interes: " . $proyecto . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'dem_OR1@outlook.com';
$asunto = 'Asunto';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

?>