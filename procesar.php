<?php
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$comentario = $_POST["comentario"];

echo "<h2>INFORMACION DESDE PHP</h2>";
echo "el nombre recibido es:" . $nombre . "<br/>";
echo "el Mail recibido es:" . $mail . "<br/>";
echo "el comentario recibido es:" . $comentario . "<br/>";

?>