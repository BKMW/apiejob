               
<?php

require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "127.0.0.1";
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->Username = 'root';
$mail->Password = '';


$ml=$_POST['destinataire'];

$mail->From = $ml;
$mail->FromName = $ml;

$mail->AddAddress("contact@tunisiens_prof.com");

$subject=$_POST['objet'];

$mail->Subject = $subject;


$MSG = $_POST['reponse'];	

$mail->Body = $MSG;



function redirection_alert($pagego,$ms)
{
	echo "<script type=\"text/javascript\">";
	echo "alert(\"".$ms."\"); document.location.href=\"".$pagego."\"";
	echo "</script>";
	exit;
}



if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;
}
else
{
$ms="La réponse est envoyé avec succès";
	redirection_alert("menu_admin.php",$ms);
  
}
?>
               
                   