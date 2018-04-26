<?php
    require("../php/PHPMailer/PHPMailerAutoload.php");

    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.zoho.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contact@openmindsclub.net';                 // SMTP username
    $mail->Password = 'WeHazProMail+';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('party@openmindsclub.net', 'Open Minds Club');
    $mail->addAddress($emailIP, ucfirst($fnameIP));     // Add a recipient
    
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Bravo '.ucfirst($fnameIP).', votre pré-inscription a été bien effectuée !';
    $mail->Body= str_replace("{{name}}",ucfirst($fnameIP), file_get_contents("ip_email_reg.html"));

    $mail->send();

     if(!$mail->send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
         echo 'Message has been sent!';
     }

?>