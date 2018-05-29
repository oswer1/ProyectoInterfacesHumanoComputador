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
 ?>