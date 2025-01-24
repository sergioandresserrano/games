<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

require("class.phpmailer.php");
$mail = new PHPMailer();

//Server Name
$mail->Host 	= "Aventon Creativo";
//Email From
$mail->From 	= $email;
//Email From Name
$mail->FromName = "Aventon Creativo";
//Subject
$mail->Subject 	= "Aventon";
//Email of the Target
$mail->AddAddress("eniuvo@gmail.com");
//Message
$mail->IsHTML(true);
$mail->Body = 

'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body style="background:url(http://isintol.com/websites0256/aventon/img/back_1.jpg) no-repeat #FFF; text-align:center; font-family:Arial, Helvetica, sans-serif">

<img style="margin:10px auto; width:449px; height:139px" src="http://isintol.com/websites0256/aventon/img/portada.png"/>

<div style="background:url(http://isintol.com/websites0256/aventon/img/back.png) repeat-x #FFF; -webkit-border-radius: 20px;-moz-border-radius: 5px;
border-radius: 5px; width:700px; height:600px; margin:20px auto;">

<div style="color:#FFF; font-size:18px; padding:15px 20px 20px 0px; text-align:left; margin:0 20px;">PAGINA DE CONTACTO</div>
<div style="color:#00122B; font-size:18px; padding:15px 20px 20px 0px; text-align:left; margin:0 20px;">Este correo fue enviado desde Aventon Creativo</div>

<div style="color:#00122B; font-size:18px; padding:10px 20px 10px 0px; text-align:left; margin:0 70px;">Nombre:</div>
<div style="color:#00122B; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;">'.$nombre.'</div>

<div style="color:#00122B; font-size:18px; padding:10px 20px 10px 0px; text-align:left; margin:0 70px;">Email:</div>
<div style="color:#00122B; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;">'.$email.'</div>

<div style="color:#00122B; font-size:18px; padding:10px 20px 10px 0px; text-align:left; margin:0 70px;">Asunto:</div>
<div style="color:#00122B; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;">'.$asunto.'</div>

<div style="color:#00122B; font-size:18px; padding:10px 20px 10px 0px; text-align:left; margin:0 70px;">Mensaje:</div>
<div style="color:#00122B; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px; width:500px; text-align:justify">'.$mensaje.'</div>


</div>


</body>
</html>';


//Send
if(!$mail->Send()) {
	echo 0;
} else {
	echo 1;
}



?> 