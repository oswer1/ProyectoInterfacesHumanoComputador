<?php 
$nombres=$_POST['nombres'];
$numeropersonas=$_POST['numeropersonas'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$nacionalidad=$_POST['nacionalidad'];
$nombrereserva=$_POST['nombrereserva'];
$email=$_POST['email'];
$hotel=$_POST['hotel'];
$mensajeextra=$_POST['mensajeextra'];
$email2="reservas@tulipansrestaurant.com";

$header='From: '.$email2."\r\n";
$header.="X-Mailer: PHP/". phpversion()."\r\n";
$header.="Mime-Version: 1.0 \r\n";
$header.="Content-Type: text/plain";
$mensajeHtml = nl2br($mensaje);
$mensaje="

Nueva Resrva para:
Apellidos y Nombres: {$nombres}
Numero de Personas: {$numeropersonas}
Fecha: {$fecha}
Hora: {$hora}
Nacionalidad: {$nacionalidad}
Nombre de la Reserva: {$nombrereserva}
e-mail: {$email}
Hotel: {$hotel}
Mensaje Extra: {$mensajeextra}
Recibido el $mensaje.="Enviado el ".date('d/m/Y', time());
"."\r\n";
$mensaje.="Enviado el ".date('d/m/Y', time());

$para='mantenimiento@tulipansrestaurant.com';
$asunto='Reserva Web';
mail($para, $asunto, utf8_decode($mensaje),$header);

header("Location:http://tulipansrestaurant.com/index.html#exampleModal");

 ?>
