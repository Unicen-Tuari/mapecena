<?php

require("class.phpmailer.php"; //Importamos la función PHP class.phpmailer

$mail = new PHPMailer(); 


$mail->IsSMTP(); 
$mail->SMTPAuth = true; // True para que verifique autentificación de la cuenta o de lo contrario False
$mail->Username = "remitente@dominio.com"; // Tu cuenta de e-mail
$mail->Password = "************"; // El Password de tu casilla de correos


$mail->Host = "localhost"; 
$mail->From = "remitente@dominio.com"; 
$mail->FromName = "Nombre a mostrar del Remitente"; 
$mail->Subject = "Asunto"; 
$mail->AddAddress("destinatario@dominio.com","Nombre a mostrar del Destinatario"; 

$mail->WordWrap = 50; 

$body = "Hola, este es un…"; 
$body .= "mensaje de prueba"; 

$mail->Body = $body; 

$mail->Send(); 


// Notificamos al usuario del estado del mensaje

if(!$mail->Send()){ 
echo "No se pudo enviar el Mensaje."; 
}else{ 
echo "Mensaje enviado"; 
} 

?>