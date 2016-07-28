<?php

$nombre = '';
$correo = '';
$movil = '';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$Body = "Contacto EFM";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $telefono;
$Body .= "\n";

//echo 'este es el cuerpo = ' . $Body;
//$to		= "j.arreolamtz@gmail.com, jorge.arreola@v09.com";
$to = 'j.arreolamtz@gmail.com, jorge.arreola@v09.com';
$subject = "Contacto Luxury";

$headers = "From: ".$nombre." <".$correo.">\r\n";
$headers .= 'Reply-To: no-reply@v09.com \r\n' ;
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

if (mail($to, $subject, $Body, $headers)) :
    //echo('<br>' . "Email Sent ;D " . '</br>');
    echo 'success';
else :
    //echo("<p>Email Message delivery failed...</p>");
endif;
