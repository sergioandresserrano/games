<?php

$friendsmail = $_POST['friendsmail'];
$friendsname = $_POST['friendsname'];
$name = $_POST['name'];
$mylink = 'http://yourdomain.com/festiveflipout1';

require("class.phpmailer.php");
$mail = new PHPMailer();

//Server Name
$mail->Host 	= "Logo";
//Email From
$mail->From 	= "Logo";
//Email From Name
$mail->FromName = "Logo";
//Subject
$mail->Subject 	= "Logo";
//Email of the Target
$mail->AddAddress($friendsmail);
//Message
$mail->IsHTML(true);
$mail->Body = 

'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif">

<img style="margin:10px auto; width:450px; height:140px" src="http://yourdomain.com/festiveflipout1/mail_logo.png"/>

<div style="background:#ffd1a1; width:700px; height:400px; margin:10px auto;">

<div style="color:#51234d; font-size:18px; padding:30px 20px 20px 0px; text-align:left; margin:0 40px;">Hello <font color="#f23f02">'.$friendsname.'</font>,<br/><br/> Your friend '.$name.' has just played the Super Slalom challenge and wants to invite you to play the game.</div>

<div style="color:#f23f02; font-size:18px; padding:10px 20px 20px 0px; text-align:left; margin:0 40px;">Why not see if you can make the highscore table!</div>
<div style="color:#51234d; font-size:18px; padding:0px 20px 20px 0px; text-align:left; margin:0 40px;">Click on the link below to get started:</div>


<div style="color:#f23f02; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;"><a href="http://'.$mylink.'">'.$mylink.'</a></div>

<div style="color:#51234d; font-size:18px; padding:30px 20px 20px 0px; text-align:left; margin:0 40px;">Best Regards, </div>
<div style="color:#51234d; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;">'.$name.'</div>

</div>


</body>
</html>';







//Send
$mail->Send();



?> 