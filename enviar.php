<?php
$nombre = $_POST['nombre']
$correo = $_POST['correo']
$telefono = $_POST['telefono']
$mensaje = $_POST['mensaje']

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su email es: " . $correo . " \r\n";
$mensaje .= "Su numero telefonico es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'isaac10bp@gmail.com';
$asunto = 'Mensaje De Mi Pagina Web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: index.html" $newURL);
exit();
?> 