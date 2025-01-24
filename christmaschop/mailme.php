<?php

$friendsmail = $_POST['friendsmail'];
$friendsname = $_POST['friendsname'];
$name = $_POST['name'];
$mylink = 'www.aventoncreativo.com/games/christmaschop1';

require("class.phpmailer.php");
$mail = new PHPMailer();

//Server Name
$mail->Host 	= "CompanyName";
//Email From
$mail->From 	= "CompanyName";
//Email From Name
$mail->FromName = "CompanyName";
//Subject
$mail->Subject 	= "CompanyName";
//Email of the Target
$mail->AddAddress($friendsmail);
//Message
$mail->IsHTML(true);
$mail->Body = 

'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body style="background:#7F3C25; text-align:center; font-family:Arial, Helvetica, sans-serif">

<img style="margin:10px auto; width:450px; height:140px" src="http://'.$mylink.'/mail_logo.png"/>

<div style="background:#FFF; width:700px; height:400px; margin:10px auto;">

<div style="color:#7F3C25; font-size:18px; padding:30px 20px 20px 0px; text-align:left; margin:0 40px;">Hello <font color="#FFA400">'.$friendsname.'</font>,<br/><br/> Your friend '.$name.' has just played the Penguin Panic Challenge and wants to invite you to play the game.</div>

<div style="color:#FFAD00; font-size:18px; padding:10px 20px 20px 0px; text-align:left; margin:0 40px;">Why not see if you can make the highscore table!</div>
<div style="color:#7F3C25; font-size:18px; padding:0px 20px 20px 0px; text-align:left; margin:0 40px;">Click on the link below to get started:</div>


<div style="color:#FFAD00; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;"><a href="http://'.$mylink.'">'.$mylink.'</a></div>

<div style="color:#7F3C25; font-size:18px; padding:30px 20px 20px 0px; text-align:left; margin:0 40px;">Best Regards, </div>
<div style="color:#7F3C25; font-size:18px; padding:0px 20px 10px 0px; text-align:left; margin:0 70px;">'.$name.'</div>

</div>


</body>
</html>';







//Send
$mail->Send();



?> 