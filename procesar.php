<?php
$nombre = $_GET["nombre"];
$mail = $_GET["mail"];
$comentario = $_GET["comentario"];

echo "<h2>INFORMACION DESDE PHP</h2>";
echo "el nombre recibido es:" . $nombre . "<br/>";
echo "el Mail recibido es:" . $mail . "<br/>";
echo "el comentario recibido es:" . $comentario . "<br/>";

?>