<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
 function sendEmail($email,$name)
{
	global $hsmtp, $usmtp, $psmtp, $posmtp, $fsmtp;
  $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = $hsmtp;
    $mail->SMTPAuth = true;
    $mail->Username = $usmtp;
    $mail->Password = $psmtp;
    $mail->SMTPSecure = 'tls';
    $mail->Port = $posmtp;
    //Recipients
   $mail->setFrom($fsmtp, 'Open Minds Club');
   $mail->addAddress($email);
  // Add attachments
 $mail->AddEmbeddedImage('mail/logo1.png', 'omc.png');
 $mail->AddEmbeddedImage('mail/ip9.svg', 'ip9.svg');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Install Party 9';
    $mail->Body    = '<!DOCTYPE html>
                      <html lang="fr">
                        <head>
                        <meta charset="utf-8"/></head><body>
                        <div style="text-align:center;font-family:Verdana;font-size:22px;color:black;">Félicitations, ' .$name.' !<br/>
                          Votre <strong style="color:#da002d;">inscription</strong> a été enregistrée avec succès !
                          Merci de vous être inscrit pour cette édition de l\'« <strong style="color:#112b3b;">Install Party </strong>».
                          <br/><br/><br/>
                          Amicalement, Open Minds Club.<br/><br/><br/><br/>
                          <img src="cid:omc.png" style="width:144px;height:120px;" />&nbsp;&nbsp;&nbsp;<img src="cid:ip9.svg" style="width:210px;height:140px;" /></div>
                          </body></html>';
    $mail->send();
} catch (Exception $e) {}
}