<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail  . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "este mensaje fue enviado por:" . $nombre . ",\r\n";
$mensaje = "Su email es :" . $email . "\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje = "Enviado el:" . date('dd/mm/yyyy', time());

$para = 'c.zzambra@gmail.com';
$asunto = 'asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location: index.html");

?>