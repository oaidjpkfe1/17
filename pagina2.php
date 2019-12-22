<?php 
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];



	$header = 'From: ' . $correo . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";



	$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
	$mensaje .= "Su e-mail es: " . $correo . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());



 	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('lusigonzales06.com', $correo, $mensaje)){
	


	
header("Location:gracias.html");
 ?>