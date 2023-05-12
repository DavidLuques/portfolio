<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Numero:".$_POST['phone']. " Mensaje: " . $_POST['comments'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'braian.luques2@gmail.com';
$asunto = 'Mensaje de mi Portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:contact.php");
?>