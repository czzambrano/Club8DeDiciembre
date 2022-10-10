<?php
$nombre = $_GET["nombre"];
$mail = $_GET["mail"];
$comentario = $_GET["comentario"];
echo "<h2> informacion recibida desde php </h2>";
echo  "el nombre recibido es:" . $nombre . "<br/>";
echo  "el correo recibido es:" . $mail . "<br/>";
echo  "el mensaje recibido es:" . $comentario . "<br/>";
?>