<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$comentario = $_POST['comentario'];
echo "<h2> informacion recibida desde php </h2>";
echo  "el nombre recibido es:" . $nombre . "<br/>";
echo  "el correo recibido es:" . $mail . "<br/>";
echo  "el mensaje recibido es:" . $comentario . "<br/>";
?>